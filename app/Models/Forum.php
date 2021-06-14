<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Semester;
use \App\Models\User;
class Forum extends Model
{
    protected $primarykey = 'id';
    protected $table = 'forum';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tgl', 'foto', 'nama','users_id','semester_id','penyelenggara'
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
        'tgl' => 'date',
        'foto' => 'string',
        'nama' => 'string',
        'penyelenggara' => 'string',
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
