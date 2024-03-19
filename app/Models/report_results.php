<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class report_results extends Model
{
    use HasFactory;
    protected $table ='report_results';
    protected $primaryKey = 'id';
    protected $fillable=[
        'user_id',
        // 'projects',
        'namefile',
        'filess',
        // 'presentation',
       'Status_results',
    //    'poster' ,
    //    'projectsummary',
       'annotation'
    ];
}
