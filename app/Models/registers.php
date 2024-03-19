<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registers extends Model
{
    use HasFactory;
    protected $table ='registers';
    protected $primaryKey = 'id';
    // public $table="registers";
    // public$primarykey="id";
    protected $fillable=[
        // 'establishment',
        'namefile',
        'filess',
    //    ' Status',
       'user_id' ,

       "annotation",
       'term',
       'year',
        "Status_registers",

    //     // 'images',
    ];
}
