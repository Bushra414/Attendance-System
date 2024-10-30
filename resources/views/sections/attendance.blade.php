@extends('layout.table')

@section('title')
    Attendance Log
@endsection

@section('header')
    Attendance Log
@endsection

@section('content')
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>clock-in Time</th>
                <th>clock-out Time</th>

                <th>Date</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
                <tr>
                    <td>{{ $employees->where('id', $record->employee_id)->pluck('first_name')->first() . ' ' . $employees->where('id', $record->employee_id)->pluck('last_name')->first() }}</td>
                    <td>{{ $record->clock_in }}</td>
                    <td>{{ $record->clock_out }}</td>
                    <td class="date">{{ $record->date }}</td>
                </tr>
            @endforeach
        </tbody>
    @endsection
    <script>
        
    </script>
