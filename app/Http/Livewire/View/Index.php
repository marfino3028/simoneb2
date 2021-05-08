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
use Livewire\WithFileUploads;
use Validator;

class Index extends Component
{
	use WithFileUploads;
    public $user,$users,$userz,$messages,$semester,$users_id,$beasiswa,$laporan,$forum,$karya,$mentoring,$nilai,$org_mhs,$prestasi,$sosial,$tahsins,$forums;
    public $isModal = 0;
    public $id_val;
    public function mount($id) {
        $this->id_val = $id;
    }
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
        $this->messages = Message::where('users_id',$this->id_val)->get();
        $this->nilai = Nilai::where('users_id',$this->id_val)->get();
        $this->org_mhs = Org_mhs::where('users_id',$this->id_val)->get();
        $this->prestasi = Prestasi::where('users_id',$this->id_val)->get();
        $this->sosial = Sosial::where('users_id',$this->id_val)->get();
        $this->tahsins = Tahsin::where('users_id',$this->id_val)->get();

        return view('livewire.view.index');
    }
}
