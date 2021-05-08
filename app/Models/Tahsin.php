<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Semester;
use \App\Models\User;
class Tahsin extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primarykey = 'id';
    protected $table = 'tahsin';
    protected $fillable = [
        'level', 'no_sk', 'nilai','semester_id','users_id','foto','semester_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'level' => 'string',
        'no_sk' => 'string',
        'foto' => 'string',
        'semester_id' => 'integer',
        'users_id' => 'integer'
    ];

    public function users(){
        return $this->hasMany(\App\User::class, 'users_id');
    }
    public function semester(){
        return $this->hasMany(\App\Semester::class, 'semester_id');
    }
}

