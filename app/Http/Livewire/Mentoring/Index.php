<?php

namespace App\Http\Livewire\Mentoring;

use Livewire\Component;
use App\Models\User;
use Auth;
use Livewire\WithFileUploads;
use Validator;
use App\Models\Mentoring;
class Index extends Component
{
    use WithFileUploads;
    public $mentorings,$nama ,$jml_pertemuan, $jml_kehadiran, $persen, $foto,$semester, $users_id, $mentoring_id;
    public $isModal = 0;
    protected $rules = [
        'nama' => 'required',
        'jml_pertemuan' => 'required',
        'jml_kehadiran' => 'required',
        'persen' => 'required',
        'foto' => 'required|mimes:jpeg,png,jpg,gif,svg,pdf,docx|max:10048',
        'semester' => 'required'
    ];
  	//FUNGSI INI UNTUK ME-LOAD VIEW YANG AKAN MENJADI TAMPILAN HALAMAN MEMBER
    public function render()
    {
        $this->user = Auth::user();
        $this->mentorings = Mentoring::join('semester', 'mentoring.semester_id', '=', 'semester.id')
        ->join('users', 'mentoring.users_id', '=', 'users.id')
        ->select('mentoring.*', 'semester.nama AS semester', 'users.id AS users_id')->where('users_id', $this->user->id)->get(); //MEMBUAT QUERY UNTUK MENGAMBIL DATA

        return view('livewire.mentoring.index');
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
        $this->mentoring_id = '';
        $this->nama = '';
        $this->jml_pertemuan = '';
        $this->jml_kehadiran = '';
        $this->persen = '';
        $this->foto = '';
        $this->semester = '';
        $this->users_id = '';
    }

    //METHOD STORE AKAN MENG-HANDLE FUNGSI UNTUK MENYIMPAN / UPDATE DATA
    public function store()
    {
        //MEMBUAT VALIDASI
        $this->validate();
        $foto = md5($this->foto . microtime()).'.'.$this->foto->extension();
        $this->foto->storeAs('public/mentoring', $foto);
        //QUERY UNTUK MENYIMPAN / MEMPERBAHARUI DATA MENGGUNAKAN UPDATEORCREATE
        //DIMANA ID MENJADI UNIQUE ID, JIKA IDNYA TERSEDIA, MAKA UPDATE DATANYA
        //JIKA TIDAK, MAKA TAMBAHKAN DATA BARU
        Mentoring::updateOrCreate(['id' => $this->mentoring_id], [
            'nama' => $this->nama,
            'jml_pertemuan' => $this->jml_pertemuan,
            'jml_kehadiran' => $this->jml_kehadiran,
            'persen' => $this->persen,
            'foto' => $foto,
            'semester_id' => $this->semester,
            'users_id' => Auth::user()->id
            
        ]);

        //BUAT FLASH SESSION UNTUK MENAMPILKAN ALERT NOTIFIKASI
        session()->flash('message', $this->mentoring_id ? $this->nama . ' Diperbaharui': $this->nama . ' Ditambahkan');
        $this->closeModal(); //TUTUP MODAL
        $this->resetFields(); //DAN BERSIHKAN FIELD
    }

    //FUNGSI INI UNTUK MENGAMBIL DATA DARI DATABASE BERDASARKAN ID MEMBER
    public function edit($id)
    {
        $mentoring = Mentoring::find($id); //BUAT QUERY UTK PENGAMBILAN DATA
        //LALU ASSIGN KE DALAM MASING-MASING PROPERTI DATANYA
        $this->mentoring_id = $id;
        $this->nama = $mentoring->nama;
        $this->jml_pertemuan = $mentoring->jml_pertemuan;
        $this->jml_kehadiran = $mentoring->jml_kehadiran;
        $this->persen = $mentoring->persen;
        $this->foto = $mentoring->foto;
        $this->semester = $mentoring->semester_id;

        $this->openModal(); //LALU BUKA MODAL
    }

    //FUNGSI INI UNTUK MENGHAPUS DATA
    public function delete($id)
    {
        $mentoring = Mentoring::find($id); //BUAT QUERY UNTUK MENGAMBIL DATA BERDASARKAN ID
        $mentoring->delete(); //LALU HAPUS DATA
        session()->flash('message', $mentoring->nama . ' Dihapus'); //DAN BUAT FLASH MESSAGE UNTUK NOTIFIKASI
    }
}