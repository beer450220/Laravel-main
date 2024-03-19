@extends('layouts.adminmin1')
<title>admin</title>
@section('content')

{{-- @include('layouts.adminsidebsr')

  @include('layouts.admintop') --}}
  @yield('content')

  {{-- <div class="container">
    <div class="row justify-content-center">
       <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ Auth::user()->name }}
                    <br>
                    {{$msg}}
                </div>
            </div>
        </div>
    </div>
</div>  --}}

   <div class="container-fluid">
<div class="card   ">
    <div class="card-body p-2 ">
        <!-- Nested Row within Card Body -->
        <div class="row  justify-content-md-center">

            <div class="col-lg-8 ">
                <div class="p-5">
                    {{-- <div class="text-center">
                        <h1 class="h4  text-gray-900 mb-4">แก้ไขข้อมูลผู้ใช้งาน</h1>
                    </div> --}}




                    {{-- <form  method="post" class="user   "enctype="multipart/form-data"> --}}



                    <div class="form-group row ">
                        <div class="col-16  " >

</div>
<div class="col-sm-4">
                                {{-- <input type="text" class="form-control  "
                                name="txt_StudentID" value="{{$users->username}}" pattern="[0-9]{1,}" maxlength="11"  placeholder="รหัสนักศึกษา"> --}}

<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
{{-- <input type="submit" name="btn_update" class="btn btn-primary  btn-block " value="แก้ไขข้อมูล"> --}}
</div> <div class="col-sm-6">


{{-- <a href="../index.php?page=user" class="btn btn-primary  btn-block">ยกเลิก</a> --}}

                       </div><br>

         </div>
                    </form>
                </div>
            </div>

                    <main role="main" class="">
                        <div class="container-fluid">
                          <div class="row justify-content-center">
                            <div class="col-12">
                              {{-- <h2 class="page-title">Form elements</h2> --}}

                              <div class="card shadow mb-4">
                                <div class="card-header">
                                  {{-- <strong class="card-title">Form controls</strong> --}}
                                  <div class="text-center">
                                    <h1 class="h4  text-gray-900 mb-4">แก้ไขข้อมูลผู้ใช้งาน</h1>
                                </div>
                                </div>
                                <div class="card-body">

                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-md-8">
                                                <div class="card">
                                                    {{-- <div class="card-header">{{ __('Register') }}</div> --}}

                                                    <div class="card-body">
                                                        {{-- <form method="POST" action="{{ route('register') }}"> --}}
                                                            <form method="POST" action="{{url('/user/updateuser/'.$users->id)}}" enctype="multipart/form-data">
                                                                @csrf
                                                 <h4 class="text-primary">ข้อมูลส่วนตัว</h4>
                                                 <div class="row mb-3">
                                                    <label for="fname" class="col-md-4 col-form-label text-md-end"></label>

                                                    <div class="col-md-6">
                                                    <img src="/รูปโปรไฟล์/{{ $users->images }}" class="rounded" style="max-height: 100px; max-width: 100px;" alt="" srcset="">


                                                    </div>
                                                </div>

                                                            <div class="row mb-3">

                                                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('ชื่อผู้ใช้งาน') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                                                                     name="username" value="{{$users->username}}"
                                                                     required autocomplete="" autofocus>
                                                                {{-- disabled="" --}}
                                                                    @error('	username')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="fname" class="col-md-4 col-form-label text-md-end">{{ __('ชื่อ') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="fname"value="{{$users->fname}}" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname">

                                                                    @error('fname')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="user_surname" class="col-md-4 col-form-label text-md-end">{{ __('นามสกุล') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="surname" value="{{$users->surname}}" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname">

                                                                    @error('surname')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('รหัสผ่าน') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="password" value="{{ $users->password }}" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                                    @error('password')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('อีเมล์') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="email" value="{{$users->email}}" type="email" class="form-control" name="email" required autocomplete="email">
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('ที่อยู่') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="address" value="{{$users->address}}" type="text" class="form-control" name="address" required autocomplete="address">
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('เบอร์โทรศัพท์') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="telephonenumber"value="{{$users->telephonenumber}}" type="text" class="form-control" name="telephonenumber" required autocomplete="telephonenumber">
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('หลักสูตร') }}</label>

                                                                <div class="col-md-6">
                                                                    {{-- <input id="telephonenumber"value="{{$users->major_id}}" type="text" class="form-control" name="major_id" required autocomplete="major_id"> --}}
                                                                    <select class="form-select select2" id="validationSelect1" name="major_id" >
                                                                        <option value="">กรุณาเลือกหลักสูตร</option>
                                                                        <option value="-"@if($users->major_id=="-") selected @endif required>-</option>
                                                                        @foreach ($major as $row)
                                                                        {{-- <optgroup label="Mountain Time Zone"> --}}
                                                                          <option value="{{$row->major_id}}"{{$row->major_id==$users->major_id ?'selected':''}}>{{$row->name_major}}  ({{$row->faculty}})</option>
                                                                          {{-- <option value="{{$row->major_id}}">{{$row->major}}</option> --}}
                                                                        </optgroup>

                                                                        @endforeach
                                                                      </select>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('เกรดเฉลี่ย') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="telephonenumber"value="{{$users->GPA}}" type="text" class="form-control" name="GPA" required autocomplete="GPA">
                                                                </div>
                                                            </div>


                                                            <div class="row mb-3">
                                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('ชื่อสถานประกอบการ') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="em_name"value="{{$users->em_name}}" type="text" class="form-control" name="em_name" required autocomplete="em_name">
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('ภาคเรียนที่') }}</label>

                                                                <div class="col-md-6">
                                                                    <select class="form-select"  name="term" required>
                                                                        <option value="">กรุณาเลือกภาคเรียน</option>

                                                                      <option value="ภาคเรียนที่1"@if($users->term=="ภาคเรียนที่1") selected @endif>ภาคเรียนที่:1 </option>
                                                                        <option value="ภาคเรียนที่2"@if($users->term=="ภาคเรียนที่1") selected @endif>ภาคเรียนที่:2 </option>
                                                                      </select>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('ปีการศึกษา') }}</label>

                                                                <div class="col-md-6">
                                                                    <select class="form-select "  name="year"required >
                                                                        {{-- @foreach(range(date('Y'), date('Y') + 100) as $year)
                                                                        <option value="{{ $year }}">{{ $year }}</option>
                                                                    @endforeach --}}
                                                                    <option value="">กรุณาเลือกปีการศึกษา</option>
                                                                    @php
                                                                    $currentYear = date('Y') + 543; // ปีปัจจุบัน
                                                                    $startYear = 2566; // ปีเริ่มต้น
                                                                    $endYear = $currentYear + 50; // ปีสิ้นสุด
                                                                @endphp

                                                                @for ($i = $endYear; $i >= $startYear; $i--)
                                                                    @for ($j = 1; $j <= 1; $j++)
                                                                        <option value="{{ $i }}"@if($users->year==$i ) selected @endif>{{ $i }}</option>
                                                                    @endfor
                                                                @endfor
                                                                </select>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('รูปภาพผู้ใช้งาน') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="inputGroupFile02" type="file" class="form-control" name="images"value="{{$users->images}}" >


                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('บทบาท') }}</label>

                                                                <div class="col-md-6">

                                                                <select class="form-select" aria-label="Default select example"@error('role') is-invalid @enderror name="role"value="{{ old('role') }}" required autocomplete="role">
                                                                <option selected>เลือกสถานะผู้ใช้งาน</option>
                                                                    <option value="student"@if($users->role=="student") selected @endif>นักศึกษา</option>
                                                                <option value="teacher"@if($users->role=="teacher") selected @endif>อาจาร์ยนิเทศ</option>
                                                                <option value="officer"@if($users->role=="officer") selected @endif>เจ้าหน้าที่</option>
                                                                </select>
                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('สถานนะ') }}</label>

                                                                <div class="col-md-6">

                                                                <select class="form-select" aria-label="Default select example"@error('status') is-invalid @enderror name="status"value="{{ old('status') }}" required autocomplete="role">
                                                                <option selected>เลือกสถานะ</option>
                                                                    <option value="รออนุมัติ"@if($users->status=="รออนุมัติ") selected @endif>รออนุมัติ</option>
                                                                <option value="ไม่อนุมัติ"@if($users->status=="ไม่อนุมัติ") selected @endif>ไม่อนุมัติ</option>
                                                                <option value="ไม่ผ่าน"@if($users->status=="ไม่ผ่าน") selected @endif>ไม่ผ่าน</option>
                                                                </select>
                                                                    @error('role')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('หมายเหตุ') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="inputGroupFile02" type="text" class="form-control" name="annotation"value="{{$users->annotation}}"  required autocomplete="annotation">


                                                                </div>
                                                            </div>
                                                            <div class="row mb-0">
                                                                <div class="col-md-6 offset-md-4">
                                                                    {{-- <a href="/user" type="submit" class="btn btn-primary">
                                                                        {{ __('ย้อมกลับ') }}
                                                                    </a>
                                                                    <button type="submit" class="btn btn-primary">
                                                                        {{ __('ตกลง') }}
                                                                    </button> --}}

                                                                </div>
                                                            </div>  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                                <button class="btn btn-outline-success me-md-2 delete-btn" onclick="return confirm('ยืนยันการอัพเดทข้อมูล !!');" type="submit">อัพเดทข้อมูล</button>
                                                                &nbsp;&nbsp;
                                                                <button  class="btn btn-outline-warning fe fe-edit fe-16" type="reset">ยกเลิก</button>
                                                                <a href="/user" class="btn btn-primary  btn-block">ย้อนกลับ</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                    @endsection
