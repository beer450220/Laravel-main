<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    use HasFactory;
    public $table="test";
    public$primarykey="id";
    protected $fillable=[
        'test',
        'color',
        'role',
        
    ];
}
