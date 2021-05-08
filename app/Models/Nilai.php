<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Semester;
use \App\Models\User;
class Nilai extends Model
{
    protected $table = 'nilai';
    protected $primaryKey = 'id';
    protected $fillable = ['ipk','ips','tahun', 'semester_id','users_id'];

    protected $cast =
    [
        'ipk'=>'integrer',
        'ips'=>'string',
        'tahun'=> 'string',
        'semester_id' => 'integer',
        'users_id' => 'integer'
    ];

    public function users(){
        return $this->hasMany(\App\User::class, 'users_id');
    }
    public function semester()
    {
        return $this->hasMany(\App\Models\Semester::class, 'semester_id');
    }
}
