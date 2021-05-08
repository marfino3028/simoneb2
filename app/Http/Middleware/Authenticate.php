<?php

namespace App\Http\Middleware;
use App\Models\User;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public $users;
    protected function redirectTo($request)
    {
        // $this->user = Auth::user();
        $this->users = User::where('role','mahasiswa')->orWhere('role',null)->get(); //MEMBUAT QUERY UNTUK MENGAMBIL DATA
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
    public function render()
    {
        $this->user = Auth::user();
        $this->users = User::where('role','mahasiswa')->orWhere('role',null)->get(); //MEMBUAT QUERY UNTUK MENGAMBIL DATA

        return view('dashboard');
    }
}
