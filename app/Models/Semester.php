<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use \App\Beasiswa;
use \App\Forum;
use \App\Karya;
use \App\Mentoring;
use \App\Mhs;
use \App\Org_mhs;
use \App\Prestasi;
use \App\Sosial;
use \App\Tahsin;
class Semester extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primarykey = 'semester_id';
    protected $table = 'semester';
    protected $fillable = [
        'nama'
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
        'semester_id' => 'integer',
        'semester' => 'string'
    ];

    public function karya(){
        return $this->belongsTo(\App\Models\Karya::class);
    }
    public function mentoring(){
        return $this->belongsTo(\App\Models\Mentoring::class);
    }
    public function forum(){
        return $this->belongsTo(\App\Models\Forum::class);
    }
    public function menu(){
        return $this->belongsTo(\App\Models\Menu::class);
    }
    public function tahsin(){
        return $this->belongsTo(\App\Models\Tahsin::class);
    }
    public function mhs(){
        return $this->belongsTo(\App\Models\Mhs::class);
    }
    public function sosial(){
        return $this->belongsTo(\App\Models\Sosial::class);
    }
    public function org_mhs(){
        return $this->belongsTo(\App\Models\Org_mhs::class);
    }
    public function beasiswa(){
        return $this->belongsTo(\App\Models\Beasiswa::class);
    }
    public function nilai(){
        return $this->belongsTo(\App\Models\Nilai::class);
    }
}
