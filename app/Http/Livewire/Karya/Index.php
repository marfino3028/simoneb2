<?php

namespace App\Http\Livewire\Karya;

use Livewire\Component;
use App\Models\User;
use Auth;
use App\Models\Karya;
use Livewire\WithFileUploads;
use Validator;
class Index extends Component
{
    public $karyas,$tgl, $judul, $media, $link,$semester, $users_id, $karya_id;
    public $isModal = 0;
    protected $rules = [
        'tgl' => 'required',
        'judul' => 'required',
        'media' => 'required',
        'link' => 'required',
        'semester' => 'required'
    ];
  	//FUNGSI INI UNTUK ME-LOAD VIEW YANG AKAN MENJADI TAMPILAN HALAMAN MEMBER
    public function render()
    {
        $this->user = Auth::user();
        $this->karyas = Karya::join('semester', 'karya.semester_id', '=', 'semester.id')
        ->join('users', 'karya.users_id', '=', 'users.id')
        ->select('karya.*', 'semester.nama AS semester', 'users.id AS users_id')->where('users_id', $this->user->id)->get(); //MEMBUAT QUERY UNTUK MENGAMBIL DATA

        return view('livewire.karya.index');
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
        
        $this->karya_id = '';
        $this->tgl = '';
        $this->judul = '';
        $this->media = '';
        $this->link = '';
        $this->semester = '';
        $this->users_id = '';
    }

    //METHOD STORE AKAN MENG-HANDLE FUNGSI UNTUK MENYIMPAN / UPDATE DATA
    public function store()
    {
        //MEMBUAT VALIDASI
        $this->validate();
        //QUERY UNTUK MENYIMPAN / MEMPERBAHARUI DATA MENGGUNAKAN UPDATEORCREATE
        //DIMANA ID MENJADI UNIQUE ID, JIKA IDNYA TERSEDIA, MAKA UPDATE DATANYA
        //JIKA TIDAK, MAKA TAMBAHKAN DATA BARU
        Karya::updateOrCreate(['id' => $this->karya_id], [
            
            'tgl' => $this->tgl,
            'media' => $this->media,
            'link' => $this->link,
            'judul' => $this->judul,
            'semester_id' => $this->semester,
            'users_id' => Auth::user()->id
            
        ]);

        //BUAT FLASH SESSION UNTUK MENAMPILKAN ALERT NOTIFIKASI
        session()->flash('message', $this->karya_id ? $this->judul . ' Diperbaharui': $this->judul . ' Ditambahkan');
        $this->closeModal(); //TUTUP MODAL
        $this->resetFields(); //DAN BERSIHKAN FIELD
    }

    //FUNGSI INI UNTUK MENGAMBIL DATA DARI DATABASE BERDASARKAN ID MEMBER
    public function edit($id)
    {
        $karya = Karya::find($id); //BUAT QUERY UTK PENGAMBILAN DATA
        //LALU ASSIGN KE DALAM MASING-MASING PROPERTI DATANYA
        $this->karya_id = $id;
        $this->tgl = $karya->tgl;
        $this->media = $karya->media;
        $this->link = $karya->link;
        $this->judul = $karya->judul;
        $this->semester = $karya->semester_id;

        $this->openModal(); //LALU BUKA MODAL
    }

    //FUNGSI INI UNTUK MENGHAPUS DATA
    public function delete($id)
    {
        $karya = Karya::find($id); //BUAT QUERY UNTUK MENGAMBIL DATA BERDASARKAN ID
        $karya->delete(); //LALU HAPUS DATA
        session()->flash('message', $karya->judul . ' Dihapus'); //DAN BUAT FLASH MESSAGE UNTUK NOTIFIKASI
    }
}