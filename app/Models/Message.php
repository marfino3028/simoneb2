<?php

namespace App\Models;
use \App\Models\User;
use \App\Models\Semester;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $table = 'messages';
    protected $fillable = [
        'messages', 'semester_id','users_id'
    ];
}
