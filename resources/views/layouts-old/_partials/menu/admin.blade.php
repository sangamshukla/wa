<li class="side-nav-item">
    <a href="javascript: void(0);" class="side-nav-link">
        <i class="mdi mdi-teach"></i>
        <span> Teacher </span>
        <span class="menu-arrow"></span>
    </a>
    <ul class="side-nav-second-level" aria-expanded="false">
        <li>
            <a href="{{ url('/add-teacher') }}">Add Teacher</a>
        </li>
        <li>
            <a href="{{ url('/manage-teacher') }}">Manage Teacher</a>
        </li>
    </ul>
</li>

<li class="side-nav-item">
    <a href="javascript: void(0);" class="side-nav-link">
        <i class="uil uil-home"></i> 
        <span> Classes </span>
        <span class="menu-arrow"></span>
    </a>
    <ul class="side-nav-second-level" aria-expanded="false">
        <li>
            <a href="{{ url('/create-classes') }}">Add Class</a>
        </li>
        <li>
            <a href="{{ url('/manage-classes') }}">Manage Classes</a>
        </li>
        
    </ul>
</li>

<li class="side-nav-item">
    <a href="javascript: void(0);" class="side-nav-link">
        <i class="mdi mdi-human-capacity-increase"></i>
        <span> Student </span>
        <span class="menu-arrow"></span>
    </a>
    <ul class="side-nav-second-level" aria-expanded="false">
        <li>
            <a href="pages-profile.html">Add Student</a>
        </li>
        <li>
            <a href="pages-profile-2.html">Manage Student</a>
        </li>
        
    </ul>
</li>
