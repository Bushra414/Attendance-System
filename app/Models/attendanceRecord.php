<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class attendanceRecord extends Model
{
    protected $table = 'attendance_records';
    public $timestamps = false;

    protected $fillable = [
        'employee_id','clock_in','clock_out','date','work_hours'
    ];
}
