<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
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
        //
    ];
}
