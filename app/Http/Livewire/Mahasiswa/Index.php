<?php

namespace App\Http\Livewire\Mahasiswa;

use Livewire\Component;
use App\Models\User;

class Index extends Component
{
	public function render()
    {
		$user = User::where('id','<>', auth()->user()->id)->get();
		
		return view('livewire.mahasiswa.index', ['user' => $user]);
    }
	
	public function clearAll()
	{
		User::where('id', '<>', auth()->user()->id)->delete();
		
		return redirect('/mahasiswa');
	}
}
