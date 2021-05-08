<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use \App\Models\Nilai;
use \App\Models\Semester;
class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;
  
    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'nim' => ['required', 'string', 'max:255'],
            'angkatan' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'hp' => ['required', 'string', 'max:13'],
            'beasiswa' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'nim' => $input['nim'],
            'angkatan' => $input['angkatan'],
            'alamat' => $input['alamat'],
            'hp' => $input['hp'],
            'beasiswa' => $input['beasiswa'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
