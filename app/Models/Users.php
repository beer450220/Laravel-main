<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class users extends Authenticatable
{
    use HasFactory;

    public $table="users";
    public $primarykey="user_id";
    protected $fillable=[
        // 'username',
        // 'code_id',
        'user_id',
        'GPA',
        'images',
        'Status',
        'username',

        'major_id',
        'fname',
        'surname',
        'telephonenumber',
        'address',
        'em_name',

        'year',
        'term',
        'email',
        'password',
        'role',
        'annotation',










    ];
    public function Users(){
        return $this->hasOne(Users::class,'user_id','name');
    }
}
