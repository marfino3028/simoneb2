<?php

namespace App\Http\Livewire\prestasi;

use Livewire\Component;
use App\Models\User;
use Auth;
use App\Models\Prestasi;
use Livewire\WithFileUploads;
use Validator;
class Index extends Component
{
    use WithFileUploads;
    public $prestasis,$peringkat ,$nama, $level, $penyelenggara_prestasi, $foto,$semester, $users_id, $prestasi_id;
    public $isModal = 0;
    protected $rules = [
        'nama' => 'required',
        'peringkat' => 'required',
        'level' => 'required',
        'penyelenggara_prestasi' => 'required',
        'foto' => 'required|mimes:jpeg,png,jpg,gif,svg,pdf,docx|max:10048',
        'semester' => 'required'
    ];
  	//FUNGSI INI UNTUK ME-LOAD VIEW YANG AKAN MENJADI TAMPILAN HALAMAN MEMBER
    public function render()
    {
        $this->user = Auth::user();
        $this->prestasis = Prestasi::join('semester', 'prestasi.semester_id', '=', 'semester.id')
        ->join('users', 'prestasi.users_id', '=', 'users.id')
        ->select('prestasi.*', 'semester.nama AS semester', 'users.id AS users_id')->where('users_id', $this->user->id)->get(); //MEMBUAT QUERY UNTUK MENGAMBIL DATA

        return view('livewire.prestasi.index');
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
        $this->prestasi_id = '';
        $this->nama = '';
        $this->peringkat = '';
        $this->level = '';
        $this->penyelenggara_prestasi = '';
        $this->foto = '';
        $this->semester = '';
        $this->users_id = '';
    }

    //METHOD STORE AKAN MENG-HANDLE FUNGSI UNTUK MENYIMPAN / UPDATE DATA
    public function store()
    {
        $this->validate();
        $foto = md5($this->foto . microtime()).'.'.$this->foto->extension();
        $this->foto->storeAs('public/prestasi', $foto);
        //QUERY UNTUK MENYIMPAN / MEMPERBAHARUI DATA MENGGUNAKAN UPDATEORCREATE
        //DIMANA ID MENJADI UNIQUE ID, JIKA IDNYA TERSEDIA, MAKA UPDATE DATANYA
        //JIKA TIDAK, MAKA TAMBAHKAN DATA BARU
        Prestasi::updateOrCreate(['id' => $this->$prestasi_id], [
            'nama' => $this->nama,
            'peringkat' => $this->peringkat,
            'level' => $this->level,
            'penyelenggara_prestasi' => $this->penyelenggara_prestasi,
            'foto' => $foto,
            'semester_id' => $this->semester,
            'users_id' => Auth::user()->id
            
        ]);

        //BUAT FLASH SESSION UNTUK MENAMPILKAN ALERT NOTIFIKASI
        session()->flash('message', $this->$prestasi_id ? $this->nama . ' Diperbaharui': $this->nama . ' Ditambahkan');
        $this->closeModal(); //TUTUP MODAL
        $this->resetFields(); //DAN BERSIHKAN FIELD
    }

    //FUNGSI INI UNTUK MENGAMBIL DATA DARI DATABASE BERDASARKAN ID MEMBER
    public function edit($id)
    {
        $prestasi = Prestasi::find($id); //BUAT QUERY UTK PENGAMBILAN DATA
        //LALU ASSIGN KE DALAM MASING-MASING PROPERTI DATANYA
        $this->$prestasi_id = $id;
        $this->nama = $prestasi->nama;
        $this->peringkat = $prestasi->peringkat;
        $this->level = $prestasi->level;
        $this->penyelenggara_prestasi = $prestasi->penyelenggara_prestasi;
        $this->foto = $prestasi->foto;
        $this->semester = $prestasi->semester_id;

        $this->openModal(); //LALU BUKA MODAL
    }

    //FUNGSI INI UNTUK MENGHAPUS DATA
    public function delete($id)
    {
        $prestasi = Prestasi::find($id); //BUAT QUERY UNTUK MENGAMBIL DATA BERDASARKAN ID
        $prestasi->delete(); //LALU HAPUS DATA
        session()->flash('message', $prestasi->nama . ' Dihapus'); //DAN BUAT FLASH MESSAGE UNTUK NOTIFIKASI
    }
}