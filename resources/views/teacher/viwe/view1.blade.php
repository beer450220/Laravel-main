





{{--
@extends('layouts.appteacher')

@section('content')
@yield('content') --}}



{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../student/css/simplebar.css">

{{-- <br> --}}

<div class="col-md-12 mb-12">





  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content ">
      <div class="modal-header bg-dark text-white ">
        <h5 class="modal-title text center " id="varyModalLabel">ดูข้อมูล</h5>
        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> --}}
      </div>


      <div class="modal-body">
{{-- <main role="main" class="main-content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">


<div class="row">
  <div class="col-md-12">
    <div class="card shadow mb-4">
      <div class="card-header">
        <strong class="card-title">เพิ่มข้อมูล</strong> --}}
      </div>



            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
      <div class="card-body">
        <form method="POST" action="{{url('/studenthome/updateestimate1/'.$users->id)}}"enctype="multipart/form-data">
          @csrf
          @if ($errors->any())
          <div class="alert alert-danger col-md-4">

              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      <div class="row mb-3">
        <label for="fname" class="col-md-4 col-form-label text-md-end"></label>
      <div class="col-md-6">
        <img src="/รูปโปรไฟล์/{{$users->images }}" class="rounded" style="max-height: 100px; max-width: 100px;" alt="" srcset="">

    </div></div>


      <div class="row mb-3">


        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('รหัสประจำตัว') }}</label>

        <div class="col-md-6">
            <input id="username" type="text" value="{{$users->username}}" class="form-control @error('username') is-invalid @enderror" disabled name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

            @error('code_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label for="fname" class="col-md-4 col-form-label text-md-end">{{ __('ชื่อ-นามสกุล') }}</label>

        <div class="col-md-6">
            <input id="fname" type="text"value="{{$users->fname}}  {{$users->surname}}" class="form-control @error('fname') is-invalid @enderror" disabled name="fname" value="{{ old('fname') }}" required autocomplete="fname">

            @error('fname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>




    <div class="row mb-3">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('อีเมล์') }}</label>

        <div class="col-md-6">
            <input id="email" type="email"value="{{$users->email}}" class="form-control" name="email" disabled required autocomplete="email">
        </div>
    </div>

    <div class="row mb-3">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('ที่อยู่') }}</label>

        <div class="col-md-6">
            <input id="address" type="text"value="{{$users->address}}" class="form-control" disabled name="address" required autocomplete="address">
        </div>
    </div>
    <div class="row mb-3">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('เบอร์โทรศัพท์') }}</label>

        <div class="col-md-6">
            {{-- <div class="badge rounded-pill bg-warning text-dark">*** 123-45-678</div> --}}
            <input id="telephonenumber" type="text" value="{{$users->telephonenumber}}"class="form-control" disabled name="telephonenumber" placeholder="" required autocomplete="telephonenumber">
        </div>
    </div>
    <div class="row mb-3">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('หลักสูตร') }}</label>

        <div class="col-md-6">
            {{-- <input id="telephonenumber" type="text" class="form-control" name="major_id" required autocomplete="major_id"> --}}
            <input id="address" type="text" value="{{$users->major_id}}"class="form-control" disabled name="major_id" required autocomplete="address">

        </div>
    </div>
    <div class="row mb-3">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('เกรดเฉลี่ย') }}</label>

        <div class="col-md-6">
            <input id="telephonenumber" type="text"value="{{$users->GPA}}" class="form-control" disabled name="GPA" required autocomplete="GPA">
        </div>
    </div>


    <div class="row mb-3">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('ชื่อสถานประกอบการ') }}</label>

        <div class="col-md-6">
            <input id="em_name" type="text"value="{{$users->em_name}}" class="form-control" disabled name="em_name" required autocomplete="em_name">
        </div>
    </div>
    <div class="row mb-3">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('ภาคเรียนที่') }}</label>

        <div class="col-md-6">
            <input id="em_name" type="text"value="{{$users->term}}" class="form-control"  disabled name="term" required autocomplete="em_name">

        </div>
    </div>
    <div class="row mb-3">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('ปีการศึกษา') }}</label>

        <div class="col-md-6">
            <input id="em_name" type="text" value="{{$users->year}}"class="form-control"  disabled name="year" required autocomplete="em_name">

        </div>
    </div>


      <br>
          <div class="modal-footer">
            <a href="/teacher/request" type="submit" class="btn mb-2 btn-primary" >ย้อนกลับ</a>
            {{-- <button type="reset" class="btn mb-2 btn-danger" >ยกเลิก</button>
            <button type="submit" class="btn mb-2 btn-primary">ตกลง</button> --}}
          </div>
        </form>
      </div> <!-- /. card-body -->
    </div> <!-- /. card -->
  </div> <!-- /. col -->
</div> <!-- /. end-section -->







{{-- @endsection --}}
