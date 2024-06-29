<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $primaryKey = 'notify_id';
    protected $table="notify";
    // protected $primarykey = "";
    protected $fillable=[
        // 'images',

        // 'name', 'name1'
        'year', 'start_date', 'end_date', 'start_notify', 'end_notify',


    ];
}
