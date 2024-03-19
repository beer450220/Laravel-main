<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluationdocument extends Model
{
    use HasFactory;
    protected $table ='evaluationdocument';
    protected $primaryKey = 'Evaluationdocument_id';
    protected $fillable=[
        // 'user_id',
        'files1',
        'files2',
    //    'Status_report',
    //    'poster' ,
    //    'projectsummary',
    //    'annotation'
    ];
}
