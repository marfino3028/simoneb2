<?php

namespace App\Http\Livewire\View;

use Livewire\Component;
use App\Models\User;
use Auth;
use App\Models\Beasiswa;
use App\Models\Forum;
use App\Models\Karya;
use App\Models\Mentoring;
use App\Models\Message;
use App\Models\Nilai;
use App\Models\Org_mhs;
use App\Models\Prestasi;
use App\Models\Semester;
// use App\Models\Laporan;
use App\Models\Sosial;
use App\Models\Tahsin;
use App\Models\Laporan;
use Livewire\WithFileUploads;
use Validator;

class Index extends Component
{
	use WithFileUploads;
    public $laporans,$user,$users,$userz,$messages,$messagesz,$semester,$users_id,$beasiswa,$laporan,$forum,$karya,$mentoring,$nilai,$org_mhs,$prestasi,$sosial,$tahsins,$forums,$messages_id;
    public $isModal = 0;
    public $id_val;
    public function mount($id) {
        $this->id_val = $id;
    }
    protected $rules = [
        'messages' => 'required|string',
        'semester' => 'required'
    ];
    public function render()
    {
    	$this->user = Auth::user();

        $this->users = User::where('role','mahasiswa')->orWhere('role',null)->get();  //ni cara asli makenya
        $this->userz = User::where('role','mahasiswa')->orWhere('role',null)->first(); //ini contoh nya ya
        $this->beasiswa = Beasiswa::where('users_id',$this->id_val)->get();
        $this->forums = Forum::where('users_id',$this->id_val)->get();
        $this->karya = Karya::where('users_id',$this->id_val)->get();
        // $this->laporan = Laporan::where('users_id',$this->id_val)->get();
        $this->mentoring = Mentoring::where('users_id',$this->id_val)->get();
        $this->messagesz = Message::where('users_id',$this->id_val)->get();
        $this->nilai = Nilai::where('users_id',$this->id_val)->get();
        $this->org_mhs = Org_mhs::where('users_id',$this->id_val)->get();
        $this->prestasi = Prestasi::where('users_id',$this->id_val)->get();
        $this->sosial = Sosial::where('users_id',$this->id_val)->get();
        $this->tahsins = Tahsin::where('users_id',$this->id_val)->get();
        $this->laporans = Laporan::where('users_id',$this->id_val)->get();
        return view('livewire.view.index');
    }
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
        $this->messages_id = '';
        $this->messages = '';
        $this->semester = '';
        $this->users_id = '';
    }

    //METHOD STORE AKAN MENG-HANDLE FUNGSI UNTUK MENYIMPAN / UPDATE DATA
    public function store()
    {
        // $this->validate();
        Message::updateOrCreate(['id' => $this->messages_id], [
            'messages' => $this->messages,
            'users_id' => $this->id_val,
            'semester_id' => $this->semester,            
        ]);

        //BUAT FLASH SESSION UNTUK MENAMPILKAN ALERT NOTIFIKASI
        session()->flash('message', $this->messages_id ? $this->messages . ' Diperbaharui': $this->messages . ' Ditambahkan');
        $this->closeModal(); //TUTUP MODAL
        $this->resetFields(); //DAN BERSIHKAN FIELD
    }

    //FUNGSI INI UNTUK MENGAMBIL DATA DARI DATABASE BERDASARKAN ID MEMBER
    public function edit($id)
    {
        $tahsin = Message::find($id); //BUAT QUERY UTK PENGAMBILAN DATA
        //LALU ASSIGN KE DALAM MASING-MASING PROPERTI DATANYA
        $this->messages_id = $id;
        $this->messages = $tahsin->messages;
        $this->users_id = $tahsin->users_id;
        $this->semester = $tahsin->semester_id;

        $this->openModal(); //LALU BUKA MODAL
    }

    //FUNGSI INI UNTUK MENGHAPUS DATA
    public function delete($id)
    {
        $tahsin = Message::find($id); //BUAT QUERY UNTUK MENGAMBIL DATA BERDASARKAN ID
        $tahsin->delete(); //LALU HAPUS DATA
        session()->flash('message', $tahsin->messages . ' Dihapus'); //DAN BUAT FLASH MESSAGE UNTUK NOTIFIKASI
    }
}
