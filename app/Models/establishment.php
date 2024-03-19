<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class establishment extends Model
{
    use HasFactory;
    public $table="establishment";
    public$primarykey="id";
    protected $fillable=[
        'user_id',
        'images',
        "em_name",
        "em_address",
        'em_telephone',
        "em_email",
        'em_contact_name',
        "em_Contact_email",
        'em_contactposition',
        "em_job",
        'status',
       ' major_id',

    ];
    public function Users(){
        return $this->hasOne(Users::class,'id','name');
    }
}
