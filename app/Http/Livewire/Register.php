<?php

namespace App\Http\Livewire;

use Livewire\Component;
class Register extends Component
{
    public $form = [
        'name'                  => '',
        'nim'                 => '',
        'angkatan'                  => '',
        'prodi'                 => '',
        'alamat'                 => '',
        'hp'                  => '',
        'beasiswa'                 => '',
        'role'                 => 'mahasiswa',
        'password'              => '',
        'password_confirmation' => '',
    ];

    public function submit()

    {
        $this->validate([
            'form.email'    => 'required|email',
            'form.name'     => 'required',
            'form.nim'                 => 'required',
            'form.angkatan'                  => 'required',
            'form.prodi'                  => 'required',
            'form.alamat'                 => 'required',
            'form.hp'                  => 'required|max:13',
            'form.beasiswa'                 => 'required',
            'form.password' => 'required|confirmed',
        ]);
        $this->nilai->create($this->form);
        return redirect(route('login'));
    }

    public function render()
    {
        return view('auth.register');

    }
}
