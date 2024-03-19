<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class acceptance extends Model
{
    use HasFactory;
    protected $primaryKey = 'acceptance_id';
    protected $table="acceptance";
    // protected $primarykey = "";
    protected $fillable=[
        'term',
        'Status_acceptance',
        // 'establishment_id',
        // 'Status',
        'year',
        // 'score',
        'filess',
        'annotation',
        'user_id',
        'namefile'
    ];
}
