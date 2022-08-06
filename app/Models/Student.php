<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = 
    [
        'name',
        'email',
        'gender',
        'age',
        'region',
        'mobile',
        'job',
        'id_card',
        'video',
        'picture',
        'poster',
        'article',
    ];
}
