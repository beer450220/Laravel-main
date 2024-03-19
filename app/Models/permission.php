<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table="permission";
    // protected $primarykey = "";
    protected $fillable=[
        'term',

        'namefile',
        'status',
        'year',

        'filess',
        'annotation',

    ];
}
