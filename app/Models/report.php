<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    use HasFactory;
    protected $table ='report';
    protected $primaryKey = 'report_id';
    protected $fillable=[
        'user_id',
        // 'projects',
        'namefile',
        'filess',
        // 'presentation',
       'Status_report',
    //    'poster' ,
    //    'projectsummary',
       'annotation',
       'year',
       'term',

    ];
}
