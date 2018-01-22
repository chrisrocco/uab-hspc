<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrations extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'grade_level',
        'skill_level',
        'programming_language',
        'other_programming_language',
        'ide',
        'other_ide'
    ];
}
