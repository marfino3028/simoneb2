<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * The names of the attributes that should not be trimmed.
     *
     * @var array
     */
    public $users;
    public function render()
    {
        $this->user = Auth::user();
        $this->users = User::where('role','mahasiswa')->orWhere('role',null)->get(); //MEMBUAT QUERY UNTUK MENGAMBIL DATA

        return view('dashboard');
    }
    protected $except = [
        'password',
        'password_confirmation',
    ];
}
