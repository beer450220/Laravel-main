
<body class="vertical  light  ">
  <div class="wrapper">
    <nav class="topnav navbar navbar-light">
      <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
      </button>
      <form class="">
        {{-- <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search"> --}}
       <h4> ระบบสารสนเทศสหกิจศึกษา คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏอุตรดิตถ์</h4>
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
          <a class="nav-link dropdown-toggle text-dark pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="text-dark"> {{ Auth::user()->fname }}</span>

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
                        <a class="dropdown-item " href="">{{Auth::user()->fname}}</a>
                        <a class="dropdown-item " href="/personal/{{Auth::user()->id}}">ข้อมูลส่วนตัว</a>
                        <a class="dropdown-item " href=""></a>
            {{-- <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activities</a> --}}
            {{-- <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit(); confirm('ยืนยันการออกจากระบบ !!');">

             <i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i> {{ __('ออกจากระบบ') }}</a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form> --}}
         <form id="myForm1"  action="{{ route('logout') }}" method="POST" class="">
            @csrf

        <button type="button" class=" dropdown-item  btn mb-2 btn-primary"id="confirmButton1">ออกจากระบบ</button>
</form>
          </div>
        </li>
      </ul>
    </nav>

  <!-- .wrapper -->  <!-- main -->
  {{-- </div>  </main> --}}
  <script>
    document.getElementById('confirmButton1').addEventListener('click', function(event) {
        // ตรวจสอบว่าฟอร์มถูกต้องหรือไม่
        let form = document.getElementById('myForm1');
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        Swal.fire({
            // title: 'คุณแน่ใจหรือไม่?',',
            text: "คุณต้องการออกจากระบบนี้หรือไม่?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ใช่, ออกจากระบบ!',
            cancelButtonText: 'ยกเลิก'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
