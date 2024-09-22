@extends('layout.table')

@section('title')
Shifts    
@endsection

@section('header')
Shifts  
@endsection


{{-- <!-- Modal -->
<div class="modal fade" id="addShiftModal" tabindex="-1" aria-labelledby="addShiftModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addShiftModalLabel">Add New Shift</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form for adding a new shift -->
                <form>
                    <div class="mb-3">
                        <label for="shiftName" class="form-label">Shift Name</label>
                        <input type="text" class="form-control" id="shiftName" required>
                    </div>
                    <div class="mb-3">
                        <label for="startTime" class="form-label">Start Time</label>
                        <input type="time" class="form-control" id="startTime" required>
                    </div>
                    <div class="mb-3">
                        <label for="endTime" class="form-label">End Time</label>
                        <input type="time" class="form-control" id="endTime" required>
                    </div>
                    <div class="mb-3">
                        <label for="daysOfWeek" class="form-label">Days of Week</label>
                        <input type="text" class="form-control" id="daysOfWeek" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Shift</button>
            </div>
        </div>
    </div>
</div> --}}


@section('content')
    
<div class="mb-3">
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addShiftModal">
        Add Shift
    </button>
</div>
<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Shift</th>
            <th>Start time</th>
            <th>End time</th>
            <th>Day of Shift</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($shifts as $shift)
            <tr>
                <td>{{ $shift->name }}</td>
                <td>{{ $shift->start_time }}</td>
                <td>{{ $shift->end_time }}</td>
                <td>{{ $shift->days_of_week }}</td>
                
                <td class="d-flex justify-content-around">
                    <button class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                        <i class="fa fa-edit"></i>
                    </button>
                    <button class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Delete">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
