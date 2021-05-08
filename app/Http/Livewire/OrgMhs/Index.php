<?php

namespace App\Http\Livewire\OrgMhs;

use Livewire\Component;
use App\Models\User;
use Auth;
use Livewire\WithFileUploads;
use Validator;
use App\Models\Org_mhs;
class Index extends Component
{
    use WithFileUploads;
    public $org_mhss,$nama ,$jabatan, $masa_jabatan, $foto,$semester, $users_id, $org_mhs_id;
    public $isModal = 0;
    protected $rules = [
        'nama' => 'required',
        'jabatan' => 'required',
        'masa_jabatan' => 'required',
        'foto' => 'required|mimes:jpeg,png,jpg,gif,svg,pdf,docx|max:10048',
        'semester' => 'required'
    ];
  	//FUNGSI INI UNTUK ME-LOAD VIEW YANG AKAN MENJADI TAMPILAN HALAMAN MEMBER
    public function render()
    {
        $this->user = Auth::user();
        $this->org_mhss = Org_mhs::join('semester', 'org_mhs.semester_id', '=', 'semester.id')
        ->join('users', 'org_mhs.users_id', '=', 'users.id')
        ->select('org_mhs.*', 'semester.nama AS semester', 'users.id AS users_id')->where('users_id', $this->user->id)->get(); //MEMBUAT QUERY UNTUK MENGAMBIL DATA

        return view('livewire.org-mhs.index');
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
        $this->org_mhs_id = '';
        $this->nama = '';
        $this->jabatan = '';
        $this->masa_jabatan = '';
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
        $this->foto->storeAs('public/org_mhs', $foto);
        //QUERY UNTUK MENYIMPAN / MEMPERBAHARUI DATA MENGGUNAKAN UPDATEORCREATE
        //DIMANA ID MENJADI UNIQUE ID, JIKA IDNYA TERSEDIA, MAKA UPDATE DATANYA
        //JIKA TIDAK, MAKA TAMBAHKAN DATA BARU
        Org_mhs::updateOrCreate(['id' => $this->org_mhs_id], [
            'nama' => $this->nama,
            'jabatan' => $this->jabatan,
            'masa_jabatan' => $this->masa_jabatan,
            'foto' => $foto,
            'semester_id' => $this->semester,
            'users_id' => Auth::user()->id
            
        ]);

        //BUAT FLASH SESSION UNTUK MENAMPILKAN ALERT NOTIFIKASI
        session()->flash('message', $this->org_mhs_id ? $this->nama . ' Diperbaharui': $this->nama . ' Ditambahkan');
        $this->closeModal(); //TUTUP MODAL
        $this->resetFields(); //DAN BERSIHKAN FIELD
    }

    //FUNGSI INI UNTUK MENGAMBIL DATA DARI DATABASE BERDASARKAN ID MEMBER
    public function edit($id)
    {
        $org_mhs = Org_mhs::find($id); //BUAT QUERY UTK PENGAMBILAN DATA
        //LALU ASSIGN KE DALAM MASING-MASING PROPERTI DATANYA
        $this->org_mhs_id = $id;
        $this->nama = $org_mhs->nama;
        $this->jabatan = $org_mhs->jabatan;
        $this->masa_jabatan = $org_mhs->masa_jabatan;
        $this->persen = $org_mhs->persen;
        $this->foto = $org_mhs->foto;
        $this->semester = $org_mhs->semester_id;

        $this->openModal(); //LALU BUKA MODAL
    }

    //FUNGSI INI UNTUK MENGHAPUS DATA
    public function delete($id)
    {
        $org_mhs = Org_mhs::find($id); //BUAT QUERY UNTUK MENGAMBIL DATA BERDASARKAN ID
        $org_mhs->delete(); //LALU HAPUS DATA
        session()->flash('message', $org_mhs->nama . ' Dihapus'); //DAN BUAT FLASH MESSAGE UNTUK NOTIFIKASI
    }
}