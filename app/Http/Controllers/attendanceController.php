<?php

namespace App\Http\Controllers;
use app\Modals\employee;
use app\Modals\Position;
use app\Modals\shift;


use Illuminate\Http\Request;

class attendanceController extends Controller
{
    public function index(){
        employee::all();
        
    }    
}
