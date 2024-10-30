<?php

namespace App\Http\Controllers;

use App\Models\attendanceRecord;
use App\Models\employee;

use Illuminate\Http\Request;

class attendanceController extends Controller
{
    public function index(){
        $records = attendanceRecord::all();
        $employees = employee::all();
        return view('sections.attendance', compact('records' , 'employees'));
    }    
}
