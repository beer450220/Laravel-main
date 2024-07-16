<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ระบบสารสนเทศสหกิจศึกษา คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏอุตรดิตถ์</title>
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/1.png') }}">
        {{-- <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/1.png') }}"> --}}
        <!-- Fonts -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/1.png') }}">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <!-- Styles -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

      <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                font-size: 16px; กำหนดขนาดตัวอักษรสำหรับทั้งหน้าเว็บ
            }



            #background-video {
   width: 100vw;
   height: 100vh;
   object-fit: cover;
   position: fixed;
   left: 0;
   right: 0;
   top: 0;
   bottom: 0;
   z-index: -1;
}
@media (max-width: 750px) {
   #background-video {
      display: none;
   }
   body {
      background: url("https://assets.codepen.io/6093409/river.jpg") no-repeat;
      background-size: cover;
   }
}
.nav-link.active {
            color: #f00 !important; /* สีของลิงก์ที่ถูกเลือก */
            font-weight: bold; /* เพิ่มความหนาของฟอนต์ */
        }

        .nav-link {
            transition: color 0.3s, background-color 0.3s;
        }
        .nav-link:hover {
            color: #000; /* เปลี่ยนสีข้อความเมื่อเมาส์ไปวาง */
            background-color: #000000; /* เปลี่ยนสีพื้นหลังเมื่อเมาส์ไปวาง */
        }
        </style>
        <script>
            // ฟังก์ชั่นสำหรับตั้งคลาส active ให้กับลิงก์ที่ถูกคลิก
            document.addEventListener('DOMContentLoaded', function() {
                var links = document.querySelectorAll('.nav-link');

                links.forEach(function(link) {
                    link.addEventListener('click', function() {
                        // ลบคลาส active จากลิงก์ทั้งหมด
                        links.forEach(function(link) {
                            link.classList.remove('active');
                        });
                        // เพิ่มคลาส active ให้กับลิงก์ที่ถูกคลิก
                        this.classList.add('active');
                    });
                });
            });
        </script>
    </head>


    <body class="antialiased">
        <header class="bg-dark text-white d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">

            <a  class="d-flex align-items-center col-md-3 mb-2 mb-md-0  text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
              {{-- ระบบสารสนเทศสหกิจศึกษา คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏอุตรดิตถ์ --}}
            </a>
  {{-- ระบบสารสนเทศสหกิจศึกษา คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏอุตรดิตถ์ --}}
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0"> <h4> ระบบสารสนเทศสหกิจศึกษา คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏอุตรดิตถ์</h4>
              {{-- <li><a href="/cooperative" class="nav-link px-2 text-white">แบบฟอร์มสหกิจ</a></li>
              <li><a href="คู่มือการใช้งาน.pdf" target="_blank" class="nav-link px-2 text-white">คู่มือการใช้งาน</a></li> --}}
              {{-- <li><div class="dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    สมัครสหกิจ
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="/cooperative1">เพิ่มข้อมูลสมัครสหกิจ</a></li>
                  <li><a class="dropdown-item" href="/cooperative2">รายการสถานะสมัครสหกิจ</a></li>
                </ul>
              </div></li> --}}
              <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
              <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
            </ul>

            <div class="col-2 text-end">
              {{-- <a type="button"href="/cooperative1" class="btn btn-outline-primary me-2">สมัครสหกิจ</a> --}}
              <h4>  <a type="button" href="/login" class="btn btn-outline-warning me-2">ลงชื่อเข้าใช้งาน</a></h4>
            </div>
          </header>

          <header class=" text-dark d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">

            <a  class="d-flex align-items-center col-md-3 mb-2 mb-md-0  text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>

            </a>
  {{-- ระบบสารสนเทศสหกิจศึกษา คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏอุตรดิตถ์ --}}
            <ul class="nav col-9 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><h4><a href="/" class="nav-link  text-light">หน้าแรก</a></h4></li>
              <li><h4><a href="/cooperative" class="nav-link px-2 text-light">แบบฟอร์มสหกิจ</a></h4></li>
              <li><h4><a href="manual/manual.pdf" target="_blank" class="nav-link px-2 text-light">คู่มือการใช้งาน</a></h4></li>
              <li><h4><a type="button"href="/cooperative1" class="nav-link px-2 text-light">สมัครสหกิจ</a></h4></li>
              {{-- <li><div class="dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    สมัครสหกิจ
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="/cooperative1">เพิ่มข้อมูลสมัครสหกิจ</a></li>
                  <li><a class="dropdown-item" href="/cooperative2">รายการสถานะสมัครสหกิจ</a></li>
                </ul>
              </div></li> --}}
              {{-- <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
              <li><a href="#" class="nav-link px-2 link-dark">About</a></li> --}}
            </ul>

            <div class="col-2 text-end">
              {{-- <a type="button"href="/cooperative1" class="btn btn-outline-primary me-2">สมัครสหกิจ</a>
              <a type="button" href="/login" class="btn btn-outline-warning me-2">ล็อกอิน</a> --}}
            </div>
          </header>
        {{-- <header class=" bg-dark text-white d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="container">
              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                  <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"> --}}
                    {{-- <li><a href="/" class="nav-link px-2 text-secondary">หน้าแรก</a></li> --}}
                    {{-- <li><a href="/establishment" class="nav-link px-2 text-white">สถานประกอบการ</a></li> --}}
                     {{-- <li><a href="/establishment" class=" col-6 text-white"></a></li>
                    <li><a href="/cooperative" class="nav-link px-2 text-white">แบบฟอร์มสหกิจ</a></li>
                    <li><a href="คู่มือการใช้งาน.pdf" target="_blank" class="nav-link px-2 text-white">คู่มือการใช้งาน</a></li> --}}
                    {{-- <li><a href="/cooperative1" class="nav-link px-2 text-white">ยื่นประสงค์ฝึกประสบการณ์</a></li> --}}
                    {{-- <li> <div class="dropdown">
                      <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          สมัครสหกิจ
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="/cooperative1">เพิ่มข้อมูลสมัครสหกิจ</a></li>
                        <li><a class="dropdown-item" href="/cooperative2">รายการสถานะสมัครสหกิจ</a></li>
                      </ul>
                    </div></li> --}}

                  {{-- <li><a href="/test4" class="nav-link px-2 text-white">ทดสอบ</a></li>
                  <li><a href="/test6" class="nav-link px-2 text-white">ทดสอบ2</a></li> --}}
                  {{-- <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                  <li><a href="#" class="nav-link px-2 text-white">About</a></li> --}}
                {{-- </ul> --}}

                {{-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                  <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                </form> --}}
{{--
                <div class="text-end"> --}}
                  {{-- <a type="button" href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a> --}}
                  {{-- <a type="button" href="" class="btn btn-outline-light me-2"data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a> --}}
                  {{-- <a type="button" href="{{ route('register1') }}" class="btn btn-warning">Sign-up</a> --}}

                  {{-- <a type="button" href="{{ route('register1') }}" class="btn btn-outline-warning me-2">สมัครสมาชิก</a> --}}
                  {{-- <a type="button" href="/login" class="btn btn-outline-warning me-2">ล็อกอิน</a> --}}
                  {{-- <a type="button" href="/login" class="btn btn-outline-warning me-2">ล็อกอิน</a> --}}
                {{-- </div>
              </div>
            </div>
          </header> --}}


        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}





            {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="card-body p-5 menu-bar2">

                      <h1 class="fs-4 card-title fw-bold mb-4 text-center">ระบบสหกิจ</h1>
                      <br> <form method="POST" action="{{ route('login') }}"> @csrf
                        <div class=" input-group mb-3">


                          <label class="mb-2 input-group" for="email">ผู้ใช้งาน</label> <br>
                                            <span class="input-group-text bg-warning"><i class="bi bi-person"></i></span>
                                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">

                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                        </div>



                                        <div class=" input-group mb-3">
                          <label class="mb-2 input-group" for="email">รหัสผ่าน</label> <br>
                                            <span class="input-group-text bg-warning"><i class=" bi bi-lock"></i></span>

                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                            <div class="invalid-feedback">
                              Password is required
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                          </div>


                          <button type="submit" name="submit" class="btn btn-primary ms-auto text-white bg-dark">
                                            เข้าสู่ระบบ
                          </button>
                        </div>
                                        <div class="d-flex align-items-center">

                                          @if (Route::has('password.request'))
                                          <a class="btn btn-link" href="{{ route('password.request') }}">
                                              {{ __('Forgot Your Password?') }}
                                          </a>
                                      @endif
                          </div>



                      </form>
                    </div>
                  </div>
                  <div class="modal-footer">

                  </div>
                </div>
              </div>
            </div> --}}


            <style>
                .carousel-caption-center {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    /* width: 50; */
                    transform: translate(-50%, -50%);
                    text-align: center;
                    width: 100%; /* กำหนดความกว้างสูงสุดของข้อความ */
            max-width: 900px; /* กำหนดความกว้างสูงสุดของข้อความ */
                }
                .carousel-indicators {
            position: absolute;
            bottom: -200px; /* ปรับตำแหน่งตามความต้องการ */
            left: 35%;
            /* right:50%; */
            transform: translateX(-50%);
            z-index: 2;
        }
        .carousel-item {
            height: 60vh; /* ปรับความสูงของคารูเซล */
            /* min-height: 300px; กำหนดความสูงขั้นต่ำ */
            /* background: #000; สีพื้นหลังสามารถปรับเปลี่ยนได้ตามความต้องการ */
            /* color: white; สีของข้อความ */
            /* display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center; */
            /* width: 100%; */
        }
            </style>


            {{-- <section class="h-100"> --}}


                {{-- <video autoplay muted loop id="myVideo">
                    <source src="{{ asset('video/1.mp4') }}" type="video/mp4">
                  </video> --}}
                  <video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
                    <source src="{{ asset('video/1.mp4') }}" type="video/mp4">
                  </video>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
                    {{-- <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/1.png') }}"> --}}
                    <div class="carousel-inner">
                      <div class="carousel-item active">sss
                        <img src="{{ asset('icons/1.png') }}" class="d-block w-10" alt="...">
                        <div class="carousel-caption carousel-caption-center  ">
                            @php
                            use Carbon\Carbon;

                            function formatThaiDate($date) {
                                $thaiMonths = [
                                    1 => 'มกราคม', 2 => 'กุมภาพันธ์', 3 => 'มีนาคม', 4 => 'เมษายน',
                                    5 => 'พฤษภาคม', 6 => 'มิถุนายน', 7 => 'กรกฎาคม', 8 => 'สิงหาคม',
                                    9 => 'กันยายน', 10 => 'ตุลาคม', 11 => 'พฤศจิกายน', 12 => 'ธันวาคม'
                                ];

                                $carbonDate = Carbon::parse($date)->setTimezone('Asia/Bangkok');
                                $year = $carbonDate->year + 543;
                                $month = $thaiMonths[$carbonDate->month];
                                $day = $carbonDate->day;
                                // $time = $carbonDate->format('เวลา H:i:s ');

                                return "$day $month $year ";
                            }
                        @endphp

<h3>ให้นักนักศึกษาลงทะเบียนเข้าสู่ระบบสารสนเทศสหกิจศึกษา</h3>
@foreach ($major as $row)

        <h4>ประจำปีการศึกษา {{$row->year}}</h4>
        <h3> <p> ประกาศนักศึกษาออกปฏิบัติงานสหกิจศึกษา

        </p> </h3>
        <h4><p>วันเริ่มปฏิบัติสหกิจ : วันที่ {{ formatThaiDate($row->start_date) }}</p>
        <p>วันสิ้นสุดปฏิบัติสหกิจ : วันที่ {{ formatThaiDate($row->end_date) }} </p></h4>
        <h3> <p> ประกาศกำหนดแจ้งข้อมูลสถานประกอบการ</p> </h3>
        <h4> <p> วันเริ่มแจ้ง : วันที่ {{ formatThaiDate($row->start_notify) }}</p>
        <p> วันสุดท้ายการแจ้ง : วันที่ {{ formatThaiDate($row->end_notify) }}</p> </h4>
@endforeach


                        </div>
                      </div>
                      <div class="carousel-item">222
                        <img src="{{ asset('icons/1.png') }}" class="d-block w-10" alt="...">
                        <div class="carousel-caption carousel-caption-center">
                            <h3>ให้นักนักศึกษาลงทะเบียนเข้าสู่ระบบสารสนเทศสหกิจศึกษา</h3>
                            @foreach ($major as $row)

                                    <h4>ประจำปีการศึกษา {{$row->year}}</h4>
                                    <h3> <p> ประกาศนักศึกษาออกปฏิบัติงานสหกิจศึกษา</p> </h3>
                                    <h4><p>วันเริ่มปฏิบัติสหกิจ : วันที่ {{ formatThaiDate($row->start_date) }}</p>
                                    <p>วันสิ้นสุดปฏิบัติสหกิจ : วันที่ {{ formatThaiDate($row->end_date) }} </p></h4>
                                    <h3> <p>  ประกาศกำหนดแจ้งข้อมูลสถานประกอบการ</p> </h3>
                                    <h4> <p> วันเริ่มแจ้ง : วันที่ {{ formatThaiDate($row->start_notify) }}</p>
                                    <p> วันสุดท้ายการแจ้ง : วันที่ {{ formatThaiDate($row->end_notify) }}</p> </h4>
                            @endforeach
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('icons/1.png') }}" class="d-block w-10" alt="...">
                        <div class="carousel-caption carousel-caption-center">
                            <h3>ให้นักนักศึกษาลงทะเบียนเข้าสู่ระบบสารสนเทศสหกิจศึกษา</h3>
                            @foreach ($major as $row)

                                    <h4>ประจำปีการศึกษา {{$row->year}}</h4>
                                    <h3> <p> ประกาศนักศึกษาออกปฏิบัติงานสหกิจศึกษา</p> </h3>
                                    <h4><p>วันเริ่มปฏิบัติสหกิจ : วันที่ {{ formatThaiDate($row->start_date) }}</p>
                                    <p>วันสิ้นสุดปฏิบัติสหกิจ : วันที่ {{ formatThaiDate($row->end_date) }} </p></h4>
                                    <h3> <p>  ประกาศกำหนดแจ้งข้อมูลสถานประกอบการ</p> </h3>
                                    <h4> <p> วันเริ่มแจ้ง : วันที่ {{ formatThaiDate($row->start_notify) }}</p>
                                    <p> วันสุดท้ายการแจ้ง : วันที่ {{ formatThaiDate($row->end_notify) }}</p> </h4>
                            @endforeach
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                  </div>  </div>  </div>  </div>  </div>  </div></div>  </div></div>  </div></div>  </div></div>  </div> </div> </div> </div>
              {{-- <div class=" row ">
              <div class=" col-sm-8 "> </div>
        <div class="text-end col-4 ">
                                      @if ($message = Session::get('error'))

                                      <div class=" alert alert-danger alert-dismissible fade show "  role="alert">

                                        <p>{{ $message }}</p>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>
                  </div>
               </div>
                                      @endif
              </div> --}}
              <br><br><br><br><br><br><br><br><br><br>
<br>
              <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                  <li class="nav-item"><h4><a  class="nav-link px-2 text-light">หลักสูตรวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏอุตรดิตถ์</a></h4></li>
                  {{-- <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                  <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                  <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                  <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li> --}}
                </ul>
            <h4><p class="text-center text-light">© 2024 Company, Inc</p></h4>
              </footer>
    </body>
</html>
