<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <div class="nav-link">
          <div class="profile-image">
            <img src="{{asset('images/faces/face5.jpg')}}" alt="image"/>
          </div>
          <div class="profile-name">
            <p class="name text-small">
              Howdy! {{ auth()->user()->name }}
            </p>
            <p class="designation">
              Super Admin
            </p>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
          <i class="fa fa-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>



      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
            <i class="fas fa-graduation-cap menu-icon"></i>

          <span class="menu-title">Student</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="page-layouts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{route('student.create')}}">Add Student</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('student.index')}}">View Students</a></li>
            </ul>
        </div>
      </li>

      {{-- //teacher --}}
      <li class="nav-item d-none d-lg-block">
        <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
          <i class="fas fa-columns menu-icon"></i>
          <span class="menu-title">Teacher</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="sidebar-layouts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('teacher.create')}}">Add Teacher</a></li>
            <li class="nav-item"> <a class="nav-link" href="">View Teachers</a></li>
       </ul>
        </div>
      </li>


  </nav>
