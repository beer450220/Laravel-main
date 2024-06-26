{{-- @include('layouts.admintop') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
    {{-- <title>@yield('titlebar')</title> --}}
</head>
<body>

    {{-- <div class="be-wrapper"> --}}
@include('layouts.admincss')
@include('layouts.adminsidebsr')
 @include('layouts.admintop')

 <title>ระบบสารสนเทศสหกิจศึกษา คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏอุตรดิตถ์</title>
 <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/1.png') }}">
 <style>
    body {
        font-size: 16px; /* ขนาดตัวอักษรที่ต้องการ */
    }
    .fa-clipboard {
font-size: 16px; /* ปรับขนาดไอคอน */
}
tr {
color: black; /* เปลี่ยนสีข้อความของ th เป็นสีดำ */
}
label{
color: black; /* เปลี่ยนสีข้อความของ th เป็นสีดำ */
}
/* table.table-hover tbody tr:hover th:hover {
    background-color: #ffffff7e;
} */
</style>

    @yield('content')
{{-- <div class="be-content">
    <div class="main-content container-fluid">

    </div>
  </div> --}}

  {{-- <script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
  <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
  <script src="/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <script src="/assets/js/app.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        //-initialize the javascript
        App.init();
    });

  </script> --}}

  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><h4><a  class="nav-link px-2 text-dark">หลักสูตรวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏอุตรดิตถ์</a></h4></li>

    </ul>
    <h4><p class="text-center text-dark">© 2024 Company, Inc</p></h4>
  </footer>
</body>
</html>
