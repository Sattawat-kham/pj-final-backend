<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'subname', 
        'id_card', 
        'grade', 
        'faculty', 
        'major', 
        'sex', 
        'domicile',
        'school_name', 
        'school_type', 
        'email', 
        'address', 
        'father_name', 
        'father_work', 
        'morther_name', 
        'morther_work', 
        'income', 
        'birth_date',
        'label'
    ];
}
