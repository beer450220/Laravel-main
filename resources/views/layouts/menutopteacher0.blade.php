


<body class="vertical  light  ">
    <div class="wrapper">
      <nav class="topnav navbar navbar-light">
        <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
          <i class="fe fe-menu navbar-toggler-icon"></i>
        </button>
        <form class="">
          {{-- <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search"> --}}
          <h3> ระบบสารสนเทศสหกิจศึกษา คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏอุตรดิตถ์</h3>
      </form>
        <ul class="nav">
          {{-- <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
              <i class="fe fe-sun fe-16"></i>
            </a>
          </li> --}}

       <li class="nav-item nav-notif">
               <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
                <span class="text-dark"> {{ Auth::user()->fname }}</span>
                {{-- <div class="text-dark"> {{ Auth::user()->fname }}</div> --}}

                @if (Auth::user()->role === 'teacher')
          <span class="badge badge-pill badge-dark">อาจารย์</span>

      @endif
              {{-- <span class="dot dot-md bg-success"></span> --}}
            </a>

          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <span class="avatar avatar-sm mt-2">
                  <img src="/Profile/{{ Auth::user()->images }}" alt="..." class="avatar-img rounded-circle">
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">{{ Auth::user()->fname }} {{ Auth::user()->surname}}</a>

              <a class="dropdown-item" href="/teacher/personal/{{ Auth::user()->id }}">ข้อมูลผู้ใช้งาน</a>
                              @if (session('status'))
                              <div class="alert alert-success" role="alert">
                                  {{ session('status') }}
                              </div>
                          @endif
                          <a class="dropdown-item text-center" href="/">{{ Auth::user()->name }}</a>
              {{-- <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="#">Settings</a>
              <a class="dropdown-item" href="#">Activities</a> --}}
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                          document.getElementById('logout-form').submit(); confirm('ยืนยันการออกจากระบบ !!');">

               <i class="dropdown-item-icon mdi mdi-power text-primary me-2" ></i> {{ __('ออกจากระบบ') }}</a>

           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"onclick="return confirm('ยืนยันอัพเดทข้อมูล !!');">
               @csrf
           </form>
            </div>
          </li>
        </ul>
      </nav>



