<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{

      use HasFactory;

      protected $guard = 'student';

    protected $fillable = [
        'name',
        'student_id',
        'email',
        'password',
        'dob',
        'class',
        'gender'
    ];
}
