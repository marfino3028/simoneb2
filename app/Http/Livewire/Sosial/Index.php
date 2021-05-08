<?php

namespace App\Http\Livewire\Sosial;

use Livewire\Component;
use App\Models\User;
use Auth;
use App\Models\Sosial;
use Livewire\WithFileUploads;
use Validator;
class Index extends Component
{
    use WithFileUploads;
    public $sosials,$nama ,$penyelenggara_sosial, $tgl, $foto,$semester, $users_id, $sosial_id;
    public $isModal = 0;
    protected $rules = [
        'nama' => 'required',
        'tgl' => 'required',
        'penyelenggara_sosial' => 'required',
        'foto' => 'required|mimes:jpeg,png,jpg,gif,svg,pdf,docx|max:10048',
        'semester' => 'required'
    ];
  	//FUNGSI INI UNTUK ME-LOAD VIEW YANG AKAN MENJADI TAMPILAN HALAMAN MEMBER
    public function render()
    {
        $this->user = Auth::user();
        $this->sosials = Sosial::join('semester', 'sosial.semester_id', '=', 'semester.id')
        ->join('users', 'sosial.users_id', '=', 'users.id')
        ->select('sosial.*', 'semester.nama AS semester', 'users.id AS users_id')->where('users_id', $this->user->id)->get(); //MEMBUAT QUERY UNTUK MENGAMBIL DATA

        return view('livewire.sosial.index');
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
        $this->sosial_id = '';
        $this->nama = '';
        $this->tgl = '';
        $this->penyelenggara_sosial = '';
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
        $this->foto->storeAs('public/sosial', $foto);
        Sosial::updateOrCreate(['id' => $this->sosial_id], [
            'nama' => $this->nama,
            'tgl' => $this->tgl,
            'penyelenggara_sosial' => $this->penyelenggara_sosial,
            'foto' => $foto,
            'semester_id' => $this->semester,
            'users_id' => Auth::user()->id
            
        ]);

        //BUAT FLASH SESSION UNTUK MENAMPILKAN ALERT NOTIFIKASI
        session()->flash('message', $this->sosial_id ? $this->nama . ' Diperbaharui': $this->nama . ' Ditambahkan');
        $this->closeModal(); //TUTUP MODAL
        $this->resetFields(); //DAN BERSIHKAN FIELD
    }

    //FUNGSI INI UNTUK MENGAMBIL DATA DARI DATABASE BERDASARKAN ID MEMBER
    public function edit($id)
    {
        $sosial = Sosial::find($id); //BUAT QUERY UTK PENGAMBILAN DATA
        //LALU ASSIGN KE DALAM MASING-MASING PROPERTI DATANYA
        $this->sosial_id = $id;
        $this->nama = $sosial->nama;
        $this->tgl = $sosial->tgl;
        $this->penyelenggara_sosial = $sosial->penyelenggara_sosial;
        $this->persen = $sosial->persen;
        $this->foto = $sosial->foto;
        $this->semester = $sosial->semester_id;

        $this->openModal(); //LALU BUKA MODAL
    }

    //FUNGSI INI UNTUK MENGHAPUS DATA
    public function delete($id)
    {
        $sosial = Sosial::find($id); //BUAT QUERY UNTUK MENGAMBIL DATA BERDASARKAN ID
        $sosial->delete(); //LALU HAPUS DATA
        session()->flash('message', $sosial->nama . ' Dihapus'); //DAN BUAT FLASH MESSAGE UNTUK NOTIFIKASI
    }
}