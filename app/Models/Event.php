<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\FromCollection;
class Event extends Model
{
    use HasFactory;
    protected $table ='events';
    protected $fillable = ['start'
    // 'term','year'
    // ,'executive_name','contact_person'
    ,'namefiles1' ,'filess1'
    ,'namefiles' ,'filess'
    , 'student_name','em_id','appointment_time' ,'Status_events','teacher_name'];
}
