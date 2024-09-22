@extends('layout.table')

@section('title')
    Schedule
@endsection

@section('header')
    Schedule
@endsection

@section('content')
    <div class="container">
        <div class="calendar border">
            <div class="calendar-header">
                <button class="btn btn-primary" id="prev-month">Previous</button>
                <h3 id="month-year"></h3>
                <button class="btn btn-primary" id="next-month">Next</button>
            </div>
            <div class="calendar-days">
                <div class="day-header">Sun</div>
                <div class="day-header">Mon</div>
                <div class="day-header">Tue</div>
                <div class="day-header">Wed</div>
                <div class="day-header">Thu</div>
                <div class="day-header">Fri</div>
                <div class="day-header">Sat</div>
            </div>
            <div class="calendar-days" id="calendar-body"></div>
        </div>
    </div>
    <!-- Include the modal and pass the $day and $dayName variables -->
    @foreach (range(1, 31) as $day)
        @php
            $date = new DateTime(date('Y-m') . '-' . $day);
            $dayName = $date->format('l');
        @endphp
        @include('modals.calenderModal', ['day' => $day, 'dayName' => $dayName])
    @endforeach
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Get references to the calendar body, month-year display, and navigation buttons
        const calendarBody = document.getElementById('calendar-body');
        const monthYear = document.getElementById('month-year');
        const prevMonthBtn = document.getElementById('prev-month');
        const nextMonthBtn = document.getElementById('next-month');

        // Array of month names for display purposes
        const months = [
            'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December'
        ];

        // Initialize the current date to today's date
        let currentDate = new Date();
        // Retrieve the shifts data passed from the controller
        let shifts = @json($shiftsByDate);

        // Function to render the calendar
        function renderCalendar() {
            // Clear the calendar body
            calendarBody.innerHTML = '';
            // Get the current year and month
            let year = currentDate.getFullYear();
            let month = currentDate.getMonth();

            // Update the month-year display
            monthYear.textContent = `${months[month]} ${year}`;

            // Get the first day of the month and the number of days in the month
            let firstDayOfMonth = new Date(year, month, 1).getDay();
            let daysInMonth = new Date(year, month + 1, 0).getDate();

            // Add empty divs for days before the first day of the month
            for (let i = 0; i < firstDayOfMonth; i++) {
                calendarBody.innerHTML += `<div class="day"></div>`;
            }

            // Add divs for each day of the month with shift information
            for (let day = 1; day <= daysInMonth; day++) {
                let date = new Date(year, month, day);
                // Get the name of the day (e.g., 'Monday')
                let dayName = date.toLocaleString('en-US', {
                    weekday: 'long'
                });
                // Get the shift information for the day, or 'No Shift' if none
                let shiftInfo = shifts[dayName] ? shifts[dayName].map(shift => shift.name).join(', ') : 'No Shift';
                // Add the day and shift information to the calendar body
                calendarBody.innerHTML += `<div class="day">
                                      <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#calendarModal${day}" onclick="openShiftModal(shifts['${dayName}'] || [])">
                                        ${day}
                                      </button>
                                   </div>`;
            }
        }

        // Event listener for the previous month button
        prevMonthBtn.addEventListener('click', () => {
            // Decrease the month by 1
            currentDate.setMonth(currentDate.getMonth() - 1);
            // Re-render the calendar
            renderCalendar();
        });

        // Event listener for the next month button
        nextMonthBtn.addEventListener('click', () => {
            // Increase the month by 1
            currentDate.setMonth(currentDate.getMonth() + 1);
            // Re-render the calendar
            renderCalendar();
        });

        // Initial rendering of the calendar
        renderCalendar();

        function openShiftModal(shifts) {
            const modalBody = document.querySelector('#calendarModal .modal-body');
            modalBody.innerHTML = ''; // Clear previous content

            if (shifts.length === 0) {
                modalBody.innerHTML = '<p>No Shift</p>';
            } else {
                shifts.forEach(shift => {
                    modalBody.innerHTML += `
                        <label>${shift.name}</label>
                        <ul>
                            ${shift.employees.map(employee => `<li>${employee.first_name}</li>`).join('')}
                        </ul>
                    `;
                });
            }
        }
    </script>
@endsection
