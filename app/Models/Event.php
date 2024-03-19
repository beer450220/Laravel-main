<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\FromCollection;
class Event extends Model
{
    use HasFactory;
    protected $table ='events';
    protected $fillable = ['title','start','end','term','year','executive_name','contact_person'
    , 'student_name','establishment_name','appointment_time' ,'Status_events','teacher_name'];
}
