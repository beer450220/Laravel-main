{{-- @extends('layouts.app') --}}
@extends('layouts.adminmin')

{{-- @section('titlebar','home') --}}
    <title>admin</title>
  @section('content')

{{-- @include('layouts.adminsidebsr')

    @include('layouts.admintop') --}}
    @yield('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Register') }}</div> --}}

                <div class="card-body">
                    {{-- <form method="POST" action="{{ route('register') }}"> --}}
                        <form method="POST" action="{{ route('adduser') }}" enctype="multipart/form-data">
                        @csrf
<h4 class="text-primary">ข้อมูลส่วนตัว</h4>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>

@if(session("error"))
<div class="alert alert-danger col-6">{{session('error')}}
@endif


                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('ชื่อผู้ใช้งาน') }}</label>

                            <div class="col-md-6">
                                <input id="	username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="fname" class="col-md-4 col-form-label text-md-end">{{ __('ชื่อ') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname">

                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="surname" class="col-md-4 col-form-label text-md-end">{{ __('นามสกุล') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="surname" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

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
                                <input id="email" type="email" class="form-control" name="email" required autocomplete="email">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('ที่อยู่') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" required autocomplete="address">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('เบอร์โทรศัพท์') }}</label>

                            <div class="col-md-6">
                                <input id="telephonenumber" type="tel" class="form-control" name="telephonenumber"maxlength="10" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"placeholder="123-45-678" required autocomplete="telephonenumber">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('หลักสูตร') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="telephonenumber" type="text" class="form-control" name="major_id" required autocomplete="major_id"> --}}
                                <select class="form-control" id="validationSelect1" name="major_id" >
                                    <option value="">กรุณาเลือกหลักสูตร</option>
                                    @foreach ($major as $row)
                                    {{-- <optgroup label="Mountain Time Zone"> --}}
                                      <option value="{{$row->major_id}}">{{$row->name_major}}  ({{$row->faculty}})</option>
                                      {{-- <option value="{{$row->major_id}}">{{$row->major}}</option> --}}
                                    </optgroup>

                                    @endforeach
                                  </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('เกรดเฉลี่ย') }}</label>

                            <div class="col-md-6">
                                <input id="telephonenumber" type="text" class="form-control" name="GPA" required autocomplete="GPA">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('ชื่อสถานประกอบการ') }}</label>

                            <div class="col-md-6">
                                <input id="em_name" type="text" class="form-control" name="em_name" required autocomplete="em_name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('ภาคเรียนที่') }}</label>

                            <div class="col-md-6">
                                <select class="form-control "  name="term" required>
                                    <option value="">กรุณาเลือกภาคเรียน</option>

                                  <option value="ภาคเรียนที่1">ภาคเรียนที่:1 </option>
                                    <option value="ภาคเรียนที่2">ภาคเรียนที่:2 </option>
                                  </select>
                            </div>


                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('ปีการศึกษา') }}</label>

                            <div class="col-md-6">
                                <select class="form-control "  name="year"required >
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
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            @endfor
                            </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('รูปภาพผู้ใช้งาน') }}</label>

                            <div class="col-md-6">
                                <input id="inputGroupFile02" type="file" class="form-control" name="images" required autocomplete="images">


                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('บทบาท') }}</label>

                            <div class="col-md-6">

                            <select class="form-control" aria-label="Default select example"@error('role') is-invalid @enderror name="role"value="{{ old('role') }}" required autocomplete="role">
                            <option selected>เลือกสถานะผู้ใช้งาน</option>
                                <option value="student">นักศึกษา</option>
                            <option value="teacher">อาจาร์ยนิเทศ</option>
                            <option value="officer">เจ้าหน้าที่</option>
                            </select>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('สถานนะ') }}</label>

                            <div class="col-md-6">

                            <select class="form-control" aria-label="Default select example"@error('status') is-invalid @enderror name="status"value="{{ old('status') }}" required autocomplete="role">
                            <option selected>เลือกสถานะ</option>
                                <option value="รออนุมัติ">รออนุมัติ</option>
                            <option value="ไม่อนุมัติ">ไม่อนุมัติ</option>
                            <option value="ไม่ผ่าน">ไม่ผ่าน</option>
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
                                <input id="inputGroupFile02" type="text" class="form-control" name="annotation" required autocomplete="annotation">


                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="/user" type="submit" class="btn btn-primary">
                                    {{ __('ย้อมกลับ') }}
                                </a>
                                <button type="submit" class="btn btn-primary"onclick="return confirm('ยืนยันการเพิ่มข้อมูล !!');">
                                    {{ __('ตกลง') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
