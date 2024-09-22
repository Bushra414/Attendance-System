

<div class="fixed">
    <nav id="sidebar">
        <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary toggle-btn">
                <i class="fa fa-bars"></i>
                <span class="sr-only" style="background: #e3cfcf;">Toggle Menu</span>
            </button>
        </div>
        <div class="p-4">
            <h1><a href="/" class="logo">HR <span>Monitor System</span></a></h1>
            <ul class="list-unstyled components mb-5">
                <li class="{{ Request::is('/') ? 'active' : '' }}">
                    <a href="/"><span class="bx bxs-dashboard mr-3"></span> Dashboard</a>
                </li>
                <li class="{{ Request::is('employees') ? 'active' : '' }}">
                    <a href="/employees"><span class="bx bxs-user-circle mr-3"></span> Employees</a>
                </li>
                <li class="{{ Request::is('shift') ? 'active' : '' }}">
                    <a href="/shift"><span class="bx bxs-time-five mr-3"></span> Shift</a>
                </li>
                <li class="{{ Request::is('schedule') ? 'active' : '' }}">
                    <a href="/schedule"><span class="bx bxs-calendar mr-3"></span> Schedule</a>
                </li>
                <li class="{{ Request::is('attendance') ? 'active' : '' }}">
                    <a href="/attendance"><span class="bx bxs-book-bookmark mr-3"></span> Attendance</a>
                </li>
                <li class="{{ Request::is('overtime') ? 'active' : '' }}">
                    <a href="/overtime"><span class="bx bxs-timer mr-3"></span> Overtime</a>
                </li>
                <li class="{{ Request::is('vacations') ? 'active' : '' }}">
                    <a href="/vacation"><span class="bx bxs-tree mr-3"></span> Vacation</a>
                </li>
                <li class="{{ Request::is('reports') ? 'active' : '' }}">
                    <a href="/reports"><span class="bx bxs-report mr-3"></span> Reports</a>
                </li>
                <li class="{{ Request::is('settings') ? 'active' : '' }}">
                    <a href="/settings"><span class="bx bxs-cog mr-3"></span> Settings</a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="bx bx-log-out mr-3"></span> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</div>