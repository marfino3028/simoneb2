<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use \App\Models\Beasiswa;
use \App\Models\Forum;
use \App\Models\Karya;
use \App\Models\Mentoring;
use \App\Models\Org_mhs;
use \App\Models\Prestasi;
use \App\Models\Sosial;
use \App\Models\Tahsin;
class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $primarykey = 'id';
    protected $fillable = [
        'name',
        'email',
        'nim',
        'angkatan',
        'alamat',
        'prodi',
        'hp',
        'beasiswa',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    public function karya(){
        return $this->belongsTo(\App\Models\Karya::class, 'users_id');
    }
    public function mentoring(){
        return $this->belongsTo(\App\Models\Mentoring::class, 'users_id');
    }
    public function forum(){
        return $this->belongsTo(\App\Models\Forum::class, 'users_id');
    }
    public function menu(){
        return $this->belongsTo(\App\Models\Menu::class, 'users_id');
    }
    public function tahsin(){
        return $this->belongsTo(\App\Models\Tahsin::class, 'users_id');
    }
    public function mhs(){
        return $this->belongsTo(\App\Models\Mhs::class, 'users_id');
    }
    public function sosial(){
        return $this->belongsTo(\App\Models\Sosial::class, 'users_id');
    }
    public function org_mhs(){
        return $this->belongsTo(\App\Models\Org_mhs::class, 'users_id');
    }
    public function beasiswa(){
        return $this->belongsTo(\App\Models\Beasiswa::class, 'users_id');
    }
    public function nilai(){
        return $this->belongsTo(\App\Models\Nilai::class, 'users_id');
    }
}
