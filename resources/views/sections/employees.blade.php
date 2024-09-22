@extends('layout.table')

@section('title')
Employees  
@endsection

@section('header')
Employees  
@endsection

@section('content')
    
<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Full Name</th>
            <th>Position</th>
            <th>Department</th>
            <th>Email</th>
            <th>Salary</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->first_name . ' ' . $employee->last_name }}</td>
                <td>{{ $positions->where('id', $employee->positions_id)->pluck('title')->first() }}</td>
                <td>{{ $employee->department }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $positions->where('id', $employee->positions_id)->pluck('salary')->first() }}
                </td>
                <td>{{ $status->where('id', $employee->status_id)->pluck('name')->first() }}</td>
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
