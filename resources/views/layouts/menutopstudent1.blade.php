
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
        <li class="nav-item">
          {{-- <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
            <i class="fe fe-sun fe-16"></i>
          </a> --}}
        </li>

        <li class="nav-item nav-notif">
          {{-- <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
            <span class="fe fe-bell fe-16"></span>
            <span class="dot dot-md bg-success"></span>
          </a> --}}
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="text-dark"> {{ Auth::user()->fname }}</div>

            @if (Auth::user()->role === 'student')
      <span class="badge badge-pill badge-dark">นักศึกษา</span>

  @endif

           <span class="avatar avatar-sm mt-2">
              <img src="../../Profile/{{ Auth::user()->images }}" alt="..." class="avatar-img rounded-circle">
              {{-- <img src="" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset=""> --}}

            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdownMenuLink">

                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a class="dropdown-item " href="/personal/{{Auth::user()->id}}">ข้อมูลส่วนตัว</a>
                        <a class="dropdown-item " href=""></a>
            {{-- <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activities</a> --}}
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">

             <i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i> {{ __('Logout') }}</a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>
          </div>
        </li>
      </ul>
    </nav>

  <!-- .wrapper -->  <!-- main -->
  {{-- </div>  </main> --}}
