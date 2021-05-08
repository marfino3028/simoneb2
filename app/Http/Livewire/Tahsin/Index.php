<?php

namespace App\Http\Livewire\Tahsin;

use Livewire\Component;
use App\Models\User;
use Auth;
use App\Models\Tahsin;
use Livewire\WithFileUploads;
use Validator;
class Index extends Component
{
    use WithFileUploads;
    public $tahsins,$level ,$no_sk, $nilai, $foto,$semester, $users_id, $tahsin_id;
    public $isModal = 0;
    protected $rules = [
        'level' => 'required',
        'no_sk' => 'required',
        'nilai' => 'required',
        'foto' => 'required|mimes:jpeg,png,jpg,gif,svg,pdf,docx|max:10048',
        'semester' => 'required'
    ];
  	//FUNGSI INI UNTUK ME-LOAD VIEW YANG AKAN MENJADI TAMPILAN HALAMAN MEMBER
    public function render()
    {
        $this->user = Auth::user();
        $this->tahsins = Tahsin::join('semester', 'tahsin.semester_id', '=', 'semester.id')
        ->join('users', 'tahsin.users_id', '=', 'users.id')
        ->select('tahsin.*', 'semester.nama AS semester', 'users.id AS users_id')->where('users_id', $this->user->id)->get(); //MEMBUAT QUERY UNTUK MENGAMBIL DATA

        return view('livewire.tahsin.index');
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
        $this->tahsin_id = '';
        $this->level = '';
        $this->no_sk = '';
        $this->nilai = '';    
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
        $this->foto->storeAs('public/tahsin', $foto);
        //QUERY UNTUK MENYIMPAN / MEMPERBAHARUI DATA MENGGUNAKAN UPDATEORCREATE
        //DIMANA ID MENJADI UNIQUE ID, JIKA IDNYA TERSEDIA, MAKA UPDATE DATANYA
        //JIKA TIDAK, MAKA TAMBAHKAN DATA BARU
        Tahsin::updateOrCreate(['id' => $this->tahsin_id], [
            'level' => $this->level,
            'no_sk' => $this->no_sk,
            'nilai' => $this->nilai,
            'foto' => $foto,
            'semester_id' => $this->semester,
            'users_id' => Auth::user()->id
            
        ]);

        //BUAT FLASH SESSION UNTUK MENAMPILKAN ALERT NOTIFIKASI
        session()->flash('message', $this->tahsin_id ? $this->level . ' Diperbaharui': $this->level . ' Ditambahkan');
        $this->closeModal(); //TUTUP MODAL
        $this->resetFields(); //DAN BERSIHKAN FIELD
    }

    //FUNGSI INI UNTUK MENGAMBIL DATA DARI DATABASE BERDASARKAN ID MEMBER
    public function edit($id)
    {
        $tahsin = Tahsin::find($id); //BUAT QUERY UTK PENGAMBILAN DATA
        //LALU ASSIGN KE DALAM MASING-MASING PROPERTI DATANYA
        $this->tahsin_id = $id;
        $this->level = $tahsin->level;
        $this->no_sk = $tahsin->no_sk;
        $this->nilai = $tahsin->nilai;
        $this->foto = $tahsin->foto;
        $this->semester = $tahsin->semester_id;

        $this->openModal(); //LALU BUKA MODAL
    }

    //FUNGSI INI UNTUK MENGHAPUS DATA
    public function delete($id)
    {
        $tahsin = Tahsin::find($id); //BUAT QUERY UNTUK MENGAMBIL DATA BERDASARKAN ID
        $tahsin->delete(); //LALU HAPUS DATA
        session()->flash('message', $tahsin->level . ' Dihapus'); //DAN BUAT FLASH MESSAGE UNTUK NOTIFIKASI
    }
}