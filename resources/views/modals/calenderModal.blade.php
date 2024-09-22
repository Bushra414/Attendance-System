<div class="modal fade" id="calendarModal{{$day}}" tabindex="-1" aria-labelledby="calendarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="calendarModalLabel">Shift Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if(isset($shiftsByDate[$dayName]))
                    <h6>{{ $dayName }}'s shift</h6>
                    <div class="shift-container">
                        @foreach ($shiftsByDate[$dayName] as $shift)
                            <div class="shift-card">
                                <h6 class="shift-title">{{ $shift->name }}</h6>
                                <ul class="shift-employees">
                                    @foreach ($shift->employees as $employee)
                                        <li>{{ $employee->first_name }} {{ $employee->last_name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>No Shift</p>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
