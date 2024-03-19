<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class major extends Model
{
    use HasFactory;
    protected $table ='major';
    protected $primaryKey = 'major_id';
    // public $table="registers";
    // public$primarykey="id";
    protected $fillable=[
        // 'establishment',
        'faculty',
        'name_major',


    //     // 'images',
    ];
}
