<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    public $table="student";
    public $primarykey="id";
    protected $fillable=[
        // 'username',
        // 'code_id',
        'student_id',
        'user_id',
        // 'GPA',
        // 'images',
        // 'Status',
        'username',

        'major_id',
        'fname',
        // 'surname',
        'telephonenumber',
        'address',
        // 'em_name',

        'year',
        'term',
        'email', 'GPA',
        // 'password',
        // 'role',
        // 'annotation',










    ];
}
