<?php

namespace App\Http\Livewire\LaporanBeasiswa;

use Livewire\Component;
use App\Models\Laporan;
use Auth;
use Livewire\WithFileUploads;
use Validator;
class Index extends Component
{
    use WithFileUploads;
    public $laporans,$laporan, $semester,$users_id, $id;
    public $isModal = 0;
    protected $rules = [
        'laporan' => 'required|mimes:ppt, pptx, xlx, xlsx,,docx|max:10048',
        'semester' => 'required'
    ];
    public function render()
    {
        $this->user = Auth::user();
        $this->laporans = Laporan::join('semester', 'laporan.semester_id', '=', 'semester.id')
        ->join('users', 'laporan.users_id', '=', 'users.id')
        ->select('laporan.*', 'semester.nama AS semester', 'users.id AS users_id')->where('users_id', $this->user->id)->get(); //MEMBUAT QUERY UNTUK MENGAMBIL DATA
        return view('livewire.laporan.index');
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
        $this->id = '';
        $this->laporan = '';
        $this->semester = '';
        $this->users_id = '';
    }
    //METHOD STORE AKAN MENG-HANDLE FUNGSI UNTUK MENYIMPAN / UPDATE DATA
    public function store()
    {
        //MEMBUAT VALIDASI
        $this->validate();
        $laporan = md5($this->laporan . microtime()).'.'.$this->laporan->extension();
        $this->laporan->storeAs('public/laporan', $laporan);

        //QUERY UNTUK MENYIMPAN / MEMPERBAHARUI DATA MENGGUNAKAN UPDATEORCREATE
        //DIMANA ID MENJADI UNIQUE ID, JIKA IDNYA TERSEDIA, MAKA UPDATE DATANYA
        //JIKA TIDAK, MAKA TAMBAHKAN DATA BARU
        Forum::updateOrCreate(['id' => $this->id], [
            'laporan' => $laporan,
            'semester_id' => $this->semester,
            'users_id' => Auth::user()->id,
        ]);

        //BUAT FLASH SESSION UNTUK MENAMPILKAN ALERT NOTIFIKASI
        session()->flash('message', $this->id ? $this->laporan . ' Diperbaharui': $this->laporan . ' Ditambahkan');
        $this->closeModal(); //TUTUP MODAL
        $this->resetFields(); //DAN BERSIHKAN FIELD
    }

    //FUNGSI INI UNTUK MENGAMBIL DATA DARI DATABASE BERDASARKAN ID MEMBER
    public function edit($id)
    {
        $forum = Forum::find($id); //BUAT QUERY UTK PENGAMBILAN DATA
        //LALU ASSIGN KE DALAM MASING-MASING PROPERTI DATANYA
        $this->id = $id;
        $this->laporan = $forum->laporan;
        $this->semester = $forum->semester_id;

        $this->openModal(); //LALU BUKA MODAL
    }

    //FUNGSI INI UNTUK MENGHAPUS DATA
    public function delete($id)
    {
        $forum = Laporan::find($id); //BUAT QUERY UNTUK MENGAMBIL DATA BERDASARKAN ID
        $forum->delete(); //LALU HAPUS DATA
        session()->flash('message', $forum->laporan . ' Dihapus'); //DAN BUAT FLASH MESSAGE UNTUK NOTIFIKASI
    }
}
