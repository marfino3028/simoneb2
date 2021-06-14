<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Semester;
use \App\Models\User;
class Mentoring extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primarykey = 'id';
    protected $table = 'mentoring';
    protected $fillable = [
        'jml_pertemuan', 'foto', 'nama','jml_kehadiran','persen','users_id','semester_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'persen' => 'string',
        'jml_kehadiran' => 'string',
        'jml_pertemuan' => 'string',
        'foto' => 'string',
        'nama' => 'string',
        'semester_id' => 'integer',
        'users_id' => 'integer'
    ];

    public function users(){
        return $this->hasMany(\App\Models\User::class, 'users_id');
    }

    public function semester(){
        return $this->hasMany(\App\Models\Semester::class, 'semester_id');
    }
}