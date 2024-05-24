{{-- @include('layouts.admintop') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>@yield('titlebar')</title> --}}
    <title>ระบบสารสนเทศสหกิจศึกษา คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏอุตรดิตถ์</title>
     <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/1.png') }}">
</head>
<body>


@include('layouts.admincss')
@include('layouts.officersidebsr')
 @include('layouts.officertop')






        @yield('content')
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
              <li class="nav-item"><a  class="nav-link px-2 text-muted">หลักสูตรวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏอุตรดิตถ์</a></li>

            </ul>
            <p class="text-center text-muted">© 2024 Company, Inc</p>
          </footer>

</body>
</html>
