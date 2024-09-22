<?php
namespace App\Http\Controllers;
use App\Models\employee; 
use App\Models\position;
use App\Models\status; 
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function show(){
        $employees = employee::all();

        $positions = position::all();

        $status = status::all();
       

        return view('index', compact('employees', 'positions', 'status'));


    }

    public function emplist(){
        $employees = employee::all();

        $positions = position::all();

        $status = status::all();
       

        return view('sections.employees', compact('employees', 'positions', 'status'));
    }
}
