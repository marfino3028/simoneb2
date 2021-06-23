<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Semester;
use \App\Models\User;
class Laporan extends Model
{

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $primarykey = 'id';
        protected $table = 'laporan';
        protected $fillable = [
            'laporan','semester_id','users_id'
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
            'laporan' => 'string',
            'semester_id' => 'integer',
            'users_id' => 'integer'
        ];
    
        public function users(){
            return $this->hasMany(User::class, 'users_id');
        }
        public function semester(){
            return $this->hasMany(Semester::class, 'semester_id');
        }
    
}
