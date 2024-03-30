<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Contracts\Auth\MustVerifyEmail;



use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;





use Illuminate\Auth\Authenticatable as AuthenticableTrait;
class test extends Model implements Authenticatable
{
    use HasFactory;
    public $table="test";
    public$primarykey="id";
    protected $fillable=[
        'password',
        'username',
        'role',

    ];
}
