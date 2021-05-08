<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;
use App\Models\User;
class EncryptCookies extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array
     */
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
