<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informdetails extends Model
{
    use HasFactory;
    // public $incrementing = false;
    protected $primaryKey = 'informdetails_id';
    protected $table="informdetails";
    // protected $primarykey = "";
    protected $fillable=[
        'informdetails_id',
        'user_id',
        'files',
        // 'establishment',
        //'Status',
        "annotation" ,
        "namefile",
         "Status_informdetails",
         'term','year'
    ];
    public function Users(){
        return $this->hasOne(Users::class,'id','name');
    }
}
