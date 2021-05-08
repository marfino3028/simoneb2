<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;
use \App\Models\Nilai;
use \App\Models\Semester;
use \App\Models\User;
class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'image', 'max:1024'],
            'nim' => ['required', 'string', 'max:255'],
            'angkatan' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'hp' => ['required', 'string', 'max:13'],
            'beasiswa' => ['required', 'string', 'max:255'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
                  
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
                'nim' => $input['nim'],
                'angkatan' => $input['angkatan'],
                'alamat' => $input['alamat'],
                'hp' => $input['hp'],
                'beasiswa' => $input['beasiswa'],
            ])->save();
      
            
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
