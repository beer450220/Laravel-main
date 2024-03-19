<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;
    protected $table ='schedule';
    protected $primaryKey = 'schedule_id';
    protected $fillable = ['title','filess','term','year'];
}
