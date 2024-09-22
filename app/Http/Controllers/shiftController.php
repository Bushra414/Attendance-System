<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\shift; 
use App\Models\employee; 


class shiftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $shifts = shift::all()->keyBy('id'); 
        return view('sections.shift', compact('shifts'));
    }

    public function ScheduleIndex()
    {
        $shifts = shift::all(); 
        $emps = employee::all();

        // Prepare shifts data for the calendar
        // Initialize an empty array to hold shifts grouped by day
        $shiftsByDate = [];
        
        // Loop through each shift
        foreach ($shifts as $shift) {
            // Split the days_of_week string into an array of days
            $days = explode(',', $shift->days_of_week);
            
            // Loop through each day in the array
            foreach ($days as $day) {
                // Remove any extra whitespace from the day
                $day = trim($day);
                
                // Add the shift to the array under the corresponding day
                $shiftsByDate[$day][] = $shift; // Group shifts by day
            }
        }
        
       

        return view('sections.Schedule', compact('emps', 'shiftsByDate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
