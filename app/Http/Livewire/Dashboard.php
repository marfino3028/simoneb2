<?php

namespace App\Http\Livewire\Dashboard;
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
use App\Models\Sosial;
use App\Models\Tahsin;
use Livewire\WithFileUploads;
use Validator;
class Index extends Component
{
    use WithFileUploads;
    public $users,$messages,$semester,$users_id,$id,$beasiswa,$forum,$karya,$mentoring,$nilai,$org_mhs,$prestasi,$sosial,$tahsin;
    public $isModal = 0;
    protected $rules = [
        'messages' => 'required|string',
        'semester' => 'required'
    ];
  	//FUNGSI INI UNTUK ME-LOAD VIEW YANG AKAN MENJADI TAMPILAN HALAMAN MEMBER
    public function render()
    {
        $this->user = Auth::user();
        $this->users = User::where('role','mahasiswa')->orWhere('role',null)->get(); //MEMBUAT QUERY UNTUK MENGAMBIL DATA        
        $this->beasiswa = Beasiswa::where('users_id',$id)->get();
        $this->forum = Forum::where('users_id',$id)->get();
        $this->karya = Karya::where('users_id',$id)->get();
        // $laporan = Laporan::where('users_id',$id)->get();
        $this->mentoring = Mentoring::where('users_id',$id)->get();
        $this->messages = Message::where('users_id',$id)->get();
        $this->nilai = Nilai::where('users_id',$id)->get();
        $this->org_mhs = Org_mhs::where('users_id',$id)->get();
        $this->prestasi = Prestasi::where('users_id',$id)->get();
        $this->sosial = Sosial::where('users_id',$id)->get();
        $this->tahsin = Tahsin::where('users_id',$id)->get();
        return view('dashboard');
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
        $this->semester = '';
        $this->users_id = '';
        $this->messages = '';
    }

    //METHOD STORE AKAN MENG-HANDLE FUNGSI UNTUK MENYIMPAN / UPDATE DATA
    public function store()
    {
        $this->validate();
        Message::updateOrCreate(['id' => $this->id], [
            'messages' => $this->messages,
            'semester_id' => $this->semester,
            'users_id' => Auth::user()->id,
        ]);
        session()->flash('messages', $this->id ? $this->messages . ' Diperbaharui': $this->messages . ' Ditambahkan');
        $this->closeModal(); //TUTUP MODAL
        $this->resetFields(); //DAN BERSIHKAN FIELD
    }

    //FUNGSI INI UNTUK MENGAMBIL DATA DARI DATABASE BERDASARKAN ID MEMBER
    public function view($id)
    {
        $this->beasiswa = Beasiswa::where('users_id',$id)->get();
        $this->forum = Forum::where('users_id',$id)->get();
        $this->karya = Karya::where('users_id',$id)->get();
        // $laporan = Laporan::where('users_id',$id)->get();
        $this->mentoring = Mentoring::where('users_id',$id)->get();
        $this->messages = Message::where('users_id',$id)->get();
        $this->nilai = Nilai::where('users_id',$id)->get();
        $this->org_mhs = Org_mhs::where('users_id',$id)->get();
        $this->prestasi = Prestasi::where('users_id',$id)->get();
        $this->sosial = Sosial::where('users_id',$id)->get();
        $this->tahsin = Tahsin::where('users_id',$id)->get();
        return view('view');
    }

    //FUNGSI INI UNTUK MENGHAPUS DATA
    public function delete($id)    
        {
            $user = User::find($id); 
            $user->delete(); 
            session()->flash('user', $user->name . ' Dihapus'); 
        }
    public function deleteMessages($id)    
        {
            $messages = Message::find($id); 
            $messages->delete(); 
            session()->flash('messages', $messages->messages . ' Dihapus'); 
        }
        public function edit($id)
        {
            $messages = Message::find($id); //BUAT QUERY UTK PENGAMBILAN DATA
            //LALU ASSIGN KE DALAM MASING-MASING PROPERTI DATANYA
            $this->id = $id;
            $this->messages = $messages->messages;
            $this->semester = $forum->semester_id;
    
            $this->openModal(); //LALU BUKA MODAL
        }

}
