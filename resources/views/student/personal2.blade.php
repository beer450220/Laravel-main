@extends('layouts.appstudent')
{{-- @include('layouts.admincss2') --}}
 {{-- @include('layouts.menutopstudent') --}}
{{-- @include('layouts.cssstudent') --}}
{{--@include('layouts.sidebarstudent') --}}
{{-- @include('layouts.scriptsstudent') --}}
@section('content')
<title>user</title>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/1.png') }}">

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

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
            {{-- sss --}}
        {{-- </div>
    </div>

</div>  --}}




  {{-- <div class="container-fluid">
      <div class="row justify-content-center">
          <div class="col-16 col-lg-8 col-xl-7 text-center p-0 mt-3 mb-2"> --}}
          {{-- <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2"> --}}
              {{-- <div class="card px-0 pt-4 pb-0 mt-3 mb-3"> --}}
                  {{-- <h2 id="heading">Sign Up Your User Account</h2>
                  <p>Fill all form field to go to next step</p> --}}
                  {{-- <form id="msform"> --}}
                      <!-- progressbar -->

                      {{-- <ul id="progressbar">
                        <a  href="/personal"><li class="active" id="account"><strong>ข้อมูลส่วนตัว</strong></li></a>
                        <a  href="/studenthome">  <li id="personal"><strong>สถานประกอบการ</strong></li></a>
                          <a  href="/studenthome">  <li id="payment"><strong>ลงทะเบียน</strong></li></a>
                            <a  href="/studenthome"> <li id="confirm"><strong>รายงานสถานะการเข้าปฏิบัติงาน</strong></li></a>
                              <a  href="/studenthome"> <li id="confirm"><strong>นิเทศงาน</strong></li></a>
                                <a  href="/studenthome"> <li id="payment"><strong>รายงานผลการปฏิบัติงาน</strong></li></a>
                      </ul> --}}
                      {{-- <div class="progress">
                          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                      </div> --}}
                      <br><br> <br>  <!-- fieldsets -->
                      {{-- <fieldset> --}}
                          {{-- <div class="form-card">
                              <div class="row">
                                  <div class="col-7"> --}}
                                      {{-- <h2 class="fs-title col">ข้อมูลนักศึกษา:</h2> --}}
                                  {{-- </div>
                                  <div class="col-6"> --}}
                                      {{-- <h2 class="steps">ขั้นตอน 1 - 6</h2> --}}
                                  {{-- </div>
                              </div>
                              <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <div class="col-7">
                                            <h2 class="steps">
                                              @if(session("success"))
                                          <div class="alert alert-success col-4">{{session('success')}}
                              @endif

                                      </h2>
   </h2>
                                  </div>
                                </div>   </div>   </div>   </div>   </div> --}}

                                    {{-- </div> --}}

                                    {{-- <div id="collapseOne"  aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        <strong>กรุณาตรวจสอบข้อมูลและทำการยืนยันข้อมูล</strong>
                                        <button type="button" class="btn btn-outline-secondary fe fe-edit fe-16"></button>
                                        <button type="button" class="btn btn-outline-danger fe fe-trash-2 fe-16">


                                      </div>
                                    </div> --}}



                                      <img src="/Profile/{{ Auth::user()->images }}" class="rounded mx-auto d-block" style="width:200px;height:200px; text-align:center;">




                                    <main role="main" class="col-18">
                                      <div class="container-fluid">
                                        <div class="row justify-content-center">
                                          <div class="row">
                                            <div class="col-18">
                                            {{-- <h2 class="page-title">Form elements</h2> --}}

                                            <div class="card shadow ">
                                              <div class="card-header">
                                                <strong class="card-title">ข้อมูลนักศึกษา</strong>
                                              </div>

                                              <div class="card-body">
                                                <div class="row">
                                                  <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                              {{-- <form method="POST" action="{{url('/studenthome/updateuser2/'.Auth::user()->id)}}" enctype="multipart/form-data">
                                                @csrf --}}
                                                      <label for="simpleinput">รหัสนักศึกษา</label>
                                                      <input type="text"value="{{ $users->student_id }}" disabled="" id="simpleinput" class="form-control">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                      <label for="example-email">ชื่อจริง นามสกุล</label>
                                                      <input type="email" id="example-email"value="{{ $users->fname }}  {{ $users->surname }}" disabled="" name="example-email" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                      <label for="example-password">อีเมล์</label>
                                                      <input type="text" id="example-password" class="form-control" value="{{ $users->email }}"disabled="">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                      <label for="example-palaceholder">เกรดเฉลี่ย(GPA)</label>
                                                      <input type="text" id="example-palaceholder"value="{{ $users->GPA }}" disabled="" class="form-control" placeholder="placeholder">
                                                    </div>


                                                </div> <!-- /.col -->
                                                  <div class="col-md-8">
                                                    <div class=" form-group col-12">
                                                      <label for="example-helping">ที่อยู่</label>
                                                      <input type="text" id="example-helping"value="{{ $users->address }}" disabled="" class="form-control" placeholder="Input with helping text">

                                                    </div>

                                                    <div class="form-group col-12">
                                                      <label for="example-static">หลักสูตร</label>
                                                      <select class="form-control mb-6"  name="major_id"id="example-static" required  disabled="">
                                                        <option value="">กรุณาเลือกหลักสูตร</option>
                                                        <option value="-"@if($users->major_id=="-") selected @endif required>-</option>
                                                        @foreach ($major as $row)

                                                        {{-- <optgroup label="Mountain Time Zone"> --}}
                                                          <option value="{{$row->major_id}}"{{$row->major_id==$users->major_id ?'selected':''}}>{{$row->name_major}}
                                                            ({{$row->faculty}})</option>
                                                          {{-- <option value="{{$row->major_id}}">{{$row->major}}</option> --}}
                                                        </optgroup>

                                                        @endforeach
                                                      </select>
                                                    </div>
                                                    {{-- <div class="form-group col-4">
                                                      <label for="example-disable">ปีการศึกษา</label>
                                                      <input type="text" class="form-control"value="{{ $users->year}}" disabled="" id="example-disable" disabled="" value="Disabled value">
                                                    </div> --}}
                                                    <div class="form-group col-4">
                                                        <label for="example-palaceholder">เบอร์โทรศัพท์	</label>
                                                        <input type="text" id="example-palaceholder"value="{{ $users->telephonenumber}}" disabled="" class="form-control" placeholder="placeholder">
                                                      </div>
                                                    <div class="form-group col-4 ">
                                                      <label for="example-static">ภาคเรียนที่</label>
                                                      <select class="form-control mb-6"  name="major_id"id="example-static" required  disabled="">
                                                        <option value="">กรุณาเลือกภาคเรียน</option>
                                                        <option value="-"@if($users->year=="-") selected @endif required>-</option>
                                                        @foreach ($major1 as $row)

                                                        {{-- <optgroup label="Mountain Time Zone"> --}}
                                                          <option value="{{$row->year}}"{{$row->year==$users->term ?'selected':''}}>{{$row->year}}
                                                            </option>
                                                            {{-- <option value="{{$row->notify_id}}">{{$row->year}}</option> --}}
                                                          {{-- <option value="{{$row->major_id}}">{{$row->major}}</option> --}}
                                                        </optgroup>

                                                        @endforeach
                                                      </select>
                                                    </div>

{{-- /studenthome/updateuser2/{{Auth::user()->id}} --}}



                                                      {{-- </form> --}}


                                                  {{-- <button id="btn">Button</button> --}}

                                                      {{-- <script src="index.js"></script> --}}



                                            </div>

                                                </div>
                                                <div class="col-6 text-center"></div>

                                                                <div class="col text-center">
                                                <div class="d-grid gap-2 d-md-flex   ">
                                                    <a href="/studenthome"  class="btn btn-outline-primary fe-16" type="button">ย้อนกลับ</a>
                                                    &nbsp;&nbsp;
                                                    {{-- <a href="/studenthome/updateuser2/{{Auth::user()->id}}"name="next" class="btn btn-outline-success me-md-2 success btn2" onclick="return confirm('แน่ใจจะยืนยันตัวตน?')"  type="button">ยืนยันข้อมูล</a> --}}
                                                      &nbsp;&nbsp;
                                                      {{-- <a href="/studenthome/updateuser2/{{Auth::user()->id}}" class="btn btn-outline-success me-md-2 success edit_employee_form "   type="button">ยืนยันข้อมูล</a> --}}

                                                    {{-- <a href="/studenthome/updateuser2/{{Auth::user()->id}}" class="btn btn-outline-success me-md-2 success show-alert-delete-box"   type="button">ยืนยันข้อมูล</a> --}}
                                                      <a href="/studenthome/editpersonal2/{{$users->id}}"  class="btn btn-outline-warning fe fe-edit fe-16" type="button">แก้ไขข้อมูล</a> </div>
                                                </div>
                                                    </div>
                                            </div> <!-- / .card -->
                                          </div>

                                                            </div>
                                                    </div>
                                        </div>

                                      </div>
                                      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                                      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

                                      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
                                      <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
                                      <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
                                      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



@endsection
