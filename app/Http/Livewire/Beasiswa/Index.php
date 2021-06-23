<?php

namespace App\Http\Livewire\Beasiswa;

use Livewire\Component;
use App\Models\User;
use Auth;
use App\Models\Beasiswa;
use Livewire\WithFileUploads;
use Validator;
class Index extends Component
{
    use WithFileUploads;

    public $beasiswas,$nama,$deskripsi, $foto, $semester, $users_id, $beasiswa_id, $user;
    public $isModal = 0;

    protected $rules = [
        'nama' => 'required|string',
        'deskripsi' => 'required|string',
        'foto' => 'required|mimes:jpeg,png,jpg,gif,svg,pdf,docx|max:10048',
        'semester' => 'required'
    ];

    public function render()
    {
        $this->user = Auth::user();
        $this->beasiswas = Beasiswa::join('semester', 'beasiswa.semester_id', '=', 'semester.id')
        ->join('users', 'beasiswa.users_id', '=', 'users.id')
        ->select('beasiswa.*', 'semester.nama AS semester', 'users.id AS users_id')->where('users_id', $this->user->id)->get(); //MEMBUAT QUERY UNTUK MENGAMBIL DATA
        
        return view('livewire.beasiswa.index');
        
    }
    public function create()
    {
        $this->user = Auth::user();
        $this->resetFields();
        $this->openModal();
    }
    public function closeModal()
    {
        $this->isModal = false;
    }
    public function openModal()
    {
        $this->isModal = true;
        
    }
    public function resetFields()
    {
        $this->beasiswa_id = '';
        $this->nama = '';
        $this->deskripsi = '';
        $this->foto = '';
        $this->semester = '';
        $this->users_id = '';
    }
    public function store()
    {
        $this->validate();
        $foto = md5($this->foto . microtime()).'.'.$this->foto->extension();
        $this->foto->storeAs('public/beasiswa', $foto);

        Beasiswa::updateOrCreate(['id' => $this->beasiswa_id], [    
            
            'nama' => $this->nama,
            'deskripsi' => $this->deskripsi,
            'foto' => $foto,
            'semester_id' => $this->semester,
            'users_id' => Auth::user()->id
        ]);
        
        session()->flash('message', $this->beasiswa_id ? $this->nama . ' Diperbaharui': $this->nama . ' Ditambahkan');
    }
    public function edit($id)
    {
        
        $beasiswa = Beasiswa::find($id);

        $this->beasiswa_id = $id;
        $this->nama = $beasiswa->nama;
        $this->deskripsi = $beasiswa->deskripsi;
        $this->foto = $beasiswa->foto;
        $this->semester = $beasiswa->semester_id;
        
        $this->openModal();
    }

    
    public function delete($id)
    {
        $beasiswa = Beasiswa::find($id); 
        $beasiswa->delete(); 
        session()->flash('message', $beasiswa->nama . ' Dihapus'); 
    }
}
