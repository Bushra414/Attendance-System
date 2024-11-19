<?php

namespace App\Http\Controllers;

use App\Models\attendanceRecord;
use App\Models\employee;


use Illuminate\Http\Request;

class attendanceController extends Controller
{

    public function index(){
        $emp_attendance = attendanceRecord::all();
        $employees = employee::all();

        $records = $employees->where('id', $emp_attendance->employee_id)->all();
        return view('sections.attendance', compact('records'));
    }    

    public function login(Request $request){
        $validated = $request->validate([
            'employee_id' => 'required',
        ]);

        $logcheck = attendanceRecord::where('employee_id', $validated['employee_id'])->where('date', $date = date('Y-m-d'));

        if(!$logcheck){
            attendanceRecord::create([
                'employee_id' => $validated['employee_id'],
                'clock_in' => $time = date('H:i:s'),
                'date' => $date = date('Y-m-d'),
            ]);
        }

        

    }
    public function logOut(Request $request){
        $validated = $request->validate([
            'employee_id' => 'required',
        ]);
        
        $logcheck = attendanceRecord::where('employee_id', $validated['employee_id'])->where('date', $date = date('Y-m-d'));
        $clockIn = $logcheck->clock_in;
        $clockOut = $logcheck->clock_out;

        $hoursWorked = $clockOut - $clockIn;


        if($logcheck){
            $logcheck->update([
                'clock_out' => date('H:i:s'),
                'work_hours' => $hoursWorked,
            ]);
        }
       
    }
}
