<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;
    public $table="teacher";
    public $primarykey="teacher_id";
    protected $fillable=[
        // 'name',
        'fname',
        // 'surname',
        'email', 'major_id', 'telephonenumber', 'address',


    ];

}
