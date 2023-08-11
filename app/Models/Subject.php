<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table = "subjects";

    protected $fillable = [
        'student_id',
        'subject_name',
        'marks',
        'grade',

    ];
}
