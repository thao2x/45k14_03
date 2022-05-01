<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddCourse extends Model
{
    use HasFactory;

    protected $table = 'add_courses';

    protected $fillable = [
        'fullname',
        'sex',
        'datetime',
        'phone',
        'email',
        'password',
    ];
}
