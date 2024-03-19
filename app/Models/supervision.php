<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supervision extends Model
{
    use HasFactory;
    protected $primaryKey = 'supervision_id';
    protected $table="supervision";
    // protected $primarykey = "";
    protected $fillable=[
        'term',
        'user_id',
        'namefile',
        'Status_supervision',
        'year',
        'score',
        'filess',
        'annotation',

    ];
}
