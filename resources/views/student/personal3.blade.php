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



<style>


  * {
      margin: 0;
      padding: 0
  }

  html {
      height: 100%
  }

  p {
      color: grey
  }

  #heading {
      text-transform: uppercase;
      color: #020508;
      font-weight: normal
  }

  #msform {
      text-align: center;
      position: relative;
      margin-top: 20px
  }

  #msform fieldset {
      background: white;
      border: 0 none;
      border-radius: 0.5rem;
      box-sizing: border-box;
      width: 100%;
      margin: 0;
      padding-bottom: 20px;
      position: relative
  }

  .form-card {
      text-align: left
  }

  #msform fieldset:not(:first-of-type) {
      display: none
  }

  #msform input,
  #msform textarea {
      padding: 8px 15px 8px 15px;
      border: 1px solid #ccc;
      border-radius: 0px;
      margin-bottom: 25px;
      margin-top: 2px;
      width: 100%;
      box-sizing: border-box;
      font-family: montserrat;
      color: #2C3E50;
      background-color: #ECEFF1;
      font-size: 16px;
      letter-spacing: 1px
  }

  #msform input:focus,
  #msform textarea:focus {
      -moz-box-shadow: none !important;
      -webkit-box-shadow: none !important;
      box-shadow: none !important;
      border: 1px solid #673AB7;
      outline-width: 0
  }

  #msform .action-button {
      width: 100px;
      background: #673AB7;
      font-weight: bold;
      color: white;
      border: 0 none;
      border-radius: 0px;
      cursor: pointer;
      padding: 10px 5px;
      margin: 10px 0px 10px 5px;
      float: right
  }

  #msform .action-button:hover,
  #msform .action-button:focus {
      background-color: #311B92
  }

  #msform .action-button-previous {
      width: 100px;
      background: #616161;
      font-weight: bold;
      color: white;
      border: 0 none;
      border-radius: 0px;
      cursor: pointer;
      padding: 10px 5px;
      margin: 10px 5px 10px 0px;
      float: right
  }

  #msform .action-button-previous:hover,
  #msform .action-button-previous:focus {
      background-color: #000000
  }

  .card {
      z-index: 0;
      border: none;
      position: relative
  }

  .fs-title {
      font-size: 25px;
      color: #673AB7;
      margin-bottom: 15px;
      font-weight: normal;
      text-align: left
  }

  .purple-text {
      color: #673AB7;
      font-weight: normal
  }

  .steps {
      font-size: 25px;
      color: gray;
      margin-bottom: 10px;
      font-weight: normal;
      text-align: right
  }

  .fieldlabels {
      color: gray;
      text-align: left
  }

  #progressbar {
      margin-bottom: 30px;
      overflow: hidden;
      color: lightgrey
  }

  #progressbar .active {
      color: #030303
  }

  #progressbar li {
      list-style-type: none;
      font-size: 16px;
      width: 15%;
      float: left;
      position: relative;
      font-weight: 400
  }

  #progressbar #account:before {
      font-family: FontAwesome;
      content: "\f007"
  }

  #progressbar #personal:before {
      font-family: FontAwesome;
      content: "\f124"
  }

  #progressbar #payment:before {
      font-family: FontAwesome;
      content: "\f2c3"
  }

  #progressbar #confirm:before {
      font-family: FontAwesome;
      content: "\f0f6"


  }
  /* content: "\f0f6" */

  #progressbar li:before {
      width: 50px;
      height: 50px;
      line-height: 45px;
      display: block;
      font-size: 20px;
      color: #ffffff;
      background: lightgray;
      border-radius: 50%;
      margin: 0 auto 10px auto;
      padding: 2px
  }

  #progressbar li:after {
      content: '';
      width: 100%;
      height: 2px;
      background: lightgray;
      position: absolute;
      left: 0;
      top: 25px;
      z-index: -1
  }

  #progressbar li.active:before,
  #progressbar li.active:after {
      background: #123bf1
  }

  .progress {
      height: 20px
  }

  .progress-bar {
      background-color: #26cf89
  }

  .fit-image {
      width: 100%;
      object-fit: cover
  }
  </style>

  <div class="container-fluid">
      <div class="row justify-content-center">
          <div class="col-16 col-lg-8 col-xl-7 text-center p-0 mt-3 mb-2">
          {{-- <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2"> --}}
              {{-- <div class="card px-0 pt-4 pb-0 mt-3 mb-3"> --}}
                  {{-- <h2 id="heading">Sign Up Your User Account</h2>
                  <p>Fill all form field to go to next step</p> --}}
                  <form id="msform">
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
                      <br> <!-- fieldsets --></form>
                      <fieldset>
                          <div class="form-card">
                              <div class="row">
                                  <div class="col-7">
                                      {{-- <h2 class="fs-title col">ข้อมูลสถานประกอบการ:</h2> --}}
                                  </div>
                                  <div class="col-4">
                                      {{-- <h2 class="steps">ขั้นตอน 1 - 6</h2> --}}
                                  </div>
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

                                  </div>
                                  </h2>

                                    {{-- </div> --}}

                                    {{-- <div id="collapseOne"  aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        <strong>กรุณาตรวจสอบข้อมูลและทำการยืนยันข้อมูล</strong>
                                        <button type="button" class="btn btn-outline-secondary fe fe-edit fe-16"></button>
                                        <button type="button" class="btn btn-outline-danger fe fe-trash-2 fe-16">


                                      </div>
                                    </div> --}}


                                    <div class="text-center">
                                      <img src="../Establishment/{{ $users->images }}" class="rounded mx-auto d-block" style="width:200px;height:200px; text-align:center;">

                                    </div>


                                    <main role="main" class="">
                                      <div class="container-fluid">
                                        <div class="row justify-content-center">

                                          <div class="col-7">
                                            {{-- <h2 class="page-title">Form elements</h2> --}}

                                            <div class="card shadow mb-4">
                                              <div class="card-header">
                                                <strong class="card-title">ข้อมูลสถานประกอบการ</strong>
                                              </div>

                                              <div class="card-body">
                                                <div class="row">
                                                  <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                              {{-- <form method="POST" action="{{ route('addpersonal3') }}" enctype="multipart/form-data">
                                                @csrf --}}
                                                      <label for="simpleinput">รหัสนักศึกษา</label>
                                                      <input type="text" id="example-email"value="{{ $users->student_id }} " disabled="" required name="example-email" class="form-control" placeholder="Email">

                                                    </div>
                                                    <div class="form-group mb-3">
                                                      <label for="example-email">ชื่อสถานประกอบการ</label>
                                                      <input type="text" id="example-email"value="{{ $users->em_name }}" disabled="" name="em_name" class="form-control" placeholder="">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="example-email">ที่อยู่</label>
                                                        <input type="text" id="example-email"value="{{ $users->em_address }}" disabled="" name="em_address" class="form-control" placeholder="">
                                                      </div>
                                                    <div class="form-group mb-3">
                                                      <label for="example-password">เบอร์โทร</label>
                                                      <input type="text" id="example-password" class="form-control"name="em_telephone"disabled="" value="{{ $users->em_telephone }}">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                      <label for="example-palaceholder">อีเมล์</label>
                                                      <input type="email" id="example-palaceholder"value="{{ $users->em_email}}"name="em_email" disabled="" class="form-control" placeholder="">
                                                    </div>


                                                </div> <!-- /.col -->
                                                  <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                      <label for="example-helping">อีเมล์ผู้ติดต่อ</label>
                                                      <input type="email" id="example-helping"value="{{ $users->em_Contact_email }}"disabled="" name="em_Contact_email" class="form-control" placeholder="">

                                                    </div>

                                                    <div class="form-group mb-3">
                                                      <label for="example-static">ตำแหน่งผู้ติดต่อ</label>
                                                      <input type="text" id="example-helping"value="{{ $users->em_contactposition }}"disabled="" name="em_contactposition" class="form-control" placeholder="">
                                                    </div> <div class="form-group mb-3">
                                                        <label for="example-static">เว็บไซต์บริษัท</label>
                                                        <input type="text" id="example-helping"value="{{ $users->website }}"disabled="" name="website" class="form-control" placeholder="">
                                                      </div>
                                                    <div class="form-group mb-3">
                                                      <label for="example-disable">รายละเอียดงาน</label>
                                                      <input type="text" id="example-helping"value="{{ $users->em_job}}"disabled="" name="em_job" class="form-control" placeholder="">
                                                    </div>
                                                      <div class="form-group mb-3">
                                                        <label for="example-palaceholder">ชื่อผู้ติดต่อ</label>
                                                        <input type="text" id="example-palaceholder"value="{{ $users->em_contact_name }}"disabled="" name="em_contact_name" class="form-control" placeholder="">
                                                      </div>
                                                      {{-- <div class="form-group mb-3">
                                                      <label for="example-static">รูปภาพสถานประกอบการ</label>
                                                      <input type="file" id="example-helping"value="{{ $users->Student_id }}" name="images" class="form-control" placeholder="">
                                                    </div> --}}




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
                                                      <a href="/studenthome/editpersonal4/{{$users->id}}"  class="btn btn-outline-warning fe fe-edit fe-16" type="button">แก้ไขข้อมูล</a>
                                                      {{-- <a href="/studenthome/addpersonal1"  class="btn btn-outline-warning " type="button">บันทึกข้อมูล</a> --}}
                                                      {{-- <button type="submit" class="btn btn-primary"onclick="return confirm('ยืนยันการเพิ่มข้อมูล !!');">
                                                        {{ __('บันทึกข้อมูล') }}
                                                    </button> --}}
                                                    </div></form>
                                                </div>
                                                    </div>
                                            </div> <!-- / .card -->
                                          </div>
                                        </div>

                                      </div>











@endsection



