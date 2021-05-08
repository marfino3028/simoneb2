<?php

namespace App\Http\Livewire\Semester;

use Livewire\Component;
use App\Models\Nilai;
use Auth;
use Livewire\WithFileUploads;
use Validator;
class Index extends Component
{
    public $nilais,$ipk,$ips, $tahun, $semester, $users_id, $semester_id;
    public $isModal = 0;
    protected $rules = [
        'ipk' => 'required',
        'ips' => 'required',
        'tahun' => 'required',
        'semester' => 'required'
    ];
  	//FUNGSI INI UNTUK ME-LOAD VIEW YANG AKAN MENJADI TAMPILAN HALAMAN MEMBER
    public function render()
    {
        $this->user = Auth::user();
        $this->nilais = Nilai::join('semester', 'nilai.semester_id', '=', 'semester.id')
        ->join('users', 'nilai.users_id', '=', 'users.id')
        ->select('nilai.*', 'semester.nama AS semester', 'users.id AS users_id')->where('users_id', $this->user->id)->get(); //MEMBUAT QUERY UNTUK MENGAMBIL DATA
        return view('livewire.semester.index');
    }

    //FUNGSI INI AKAN DIPANGGIL KETIKA TOMBOL TAMBAH ANGGOTA DITEKAN
    public function create()
    {
        //KEMUDIAN DI DALAMNYA KITA MENJALANKAN FUNGSI UNTUK MENGOSONGKAN FIELD
        $this->resetFields();
        //DAN MEMBUKA MODAL
        $this->openModal();
    }

    //FUNGSI INI UNTUK MENUTUP MODAL DIMANA VARIABLE isModal KITA SET JADI FALSE
    public function closeModal()
    {
        $this->isModal = false;
    }

    //FUNGSI INI DIGUNAKAN UNTUK MEMBUKA MODAL
    public function openModal()
    {
        $this->isModal = true;
    }

    //FUNGSI INI UNTUK ME-RESET FIELD/KOLOM, SESUAIKAN FIELD APA SAJA YANG KAMU MILIKI
    public function resetFields()
    {
        $this->semester_id = '';
        $this->ipk = '';
        $this->ips = '';
        $this->tahun = '';
        $this->semester = '';
        $this->users_id = '';
    }

    //METHOD STORE AKAN MENG-HANDLE FUNGSI UNTUK MENYIMPAN / UPDATE DATA
    public function store()
    {
        //MEMBUAT VALIDASI
        $this->validate();
        $foto = md5($this->foto . microtime()).'.'.$this->foto->extension();
        $this->foto->storeAs('public/semester', $foto);
        //QUERY UNTUK MENYIMPAN / MEMPERBAHARUI DATA MENGGUNAKAN UPDATEORCREATE
        //DIMANA ID MENJADI UNIQUE ID, JIKA IDNYA TERSEDIA, MAKA UPDATE DATANYA
        //JIKA TIDAK, MAKA TAMBAHKAN DATA BARU
        Nilai::updateOrCreate(['id' => $this->semester_id], [
            'ipk' => $this->ipk,
            'ips' => $this->ips,
            'tahun' => $this->tahun,
            'semester_id' => $this->semester,
            'users_id' => Auth::user()->id
        ]);

        //BUAT FLASH SESSION UNTUK MENAMPILKAN ALERT NOTIFIKASI
        session()->flash('message', $this->semester_id ? $this->ipk . ' Diperbaharui': $this->ipk . ' Ditambahkan');
        $this->closeModal(); //TUTUP MODAL
        $this->resetFields(); //DAN BERSIHKAN FIELD
    }

    //FUNGSI INI UNTUK MENGAMBIL DATA DARI DATABASE BERDASARKAN ID MEMBER
    public function edit($id)
    {
        $nilai = Nilai::find($id); //BUAT QUERY UTK PENGAMBILAN DATA
        //LALU ASSIGN KE DALAM MASING-MASING PROPERTI DATANYA
        $this->semester_id = $id;
        $this->ipk = $nilai->ipk;
        $this->ips = $nilai->ips;
        $this->tahun = $nilai->tahun;
        $this->semester = $nilai->semester_id;

        $this->openModal(); //LALU BUKA MODAL
    }

    //FUNGSI INI UNTUK MENGHAPUS DATA
    public function delete($id)
    {
        $nilai = Nilai::find($id); //BUAT QUERY UNTUK MENGAMBIL DATA BERDASARKAN ID
        $nilai->delete(); //LALU HAPUS DATA
        session()->flash('message', $nilai->ipk . ' Dihapus'); //DAN BUAT FLASH MESSAGE UNTUK NOTIFIKASI
    }
}
