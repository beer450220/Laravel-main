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
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                {{-- <h2 id="heading">Sign Up Your User Account</h2>
                <p>Fill all form field to go to next step</p> --}}
                <form id="msform">
                    <!-- progressbar -->

                    <ul id="progressbar">
                      {{-- <a  href="/studenthome"><li class="active" id="account"><strong>ข้อมูลส่วนตัว</strong></li></a> --}}
                      {{-- <a  href="/studenthome/establishmentuser">  <li class="active" id="personal"><strong>สถานประกอบการ</strong></li></a> --}}
                        <a  href="/studenthome">  <li class="active" id="payment"><strong>ลงทะเบียนนักศึกษา
                            สหกิจศึกษา</strong></li></a>
                        {{-- <a  href="/studenthome/informdetails"> <li class="active" id="confirm"><strong>รายงานสถานะการเข้าปฏิบัติงาน</strong></li></a> --}}
                        <a  href="/studenthome/calendar2confirm"> <li id="confirm"><strong>นิเทศงาน</strong></li></a>
                          {{-- <a  href="/studenthome/report"> <li id="payment"><strong>รายงานผลการปฏิบัติงาน</strong></li></a> --}}
                    </ul>
                    <div class="progress">
                        {{-- <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div> --}}
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title col">เอกสารปฏิบัติงานนักศึกษา:</h2>

                                </div>
                                <div class="col-4">
                                    <h2 class="steps">ขั้นตอน 2 - 2</h2>
                                </div>
                            </div><div class="col-6">
                                 <br>   <br>
                          </div>
                          {{-- <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <div class="col-7">
                                      <h1 class="steps">ให้กรอกข้อมูลนักศึกษา<br><h2 class="steps text-success">{{ Auth::user()->status}}</h2></h1>


                      </h2> --}}


                      </form>
{{--
                              <br>
                              <br> --}}


                                <br>
                                <br>


                                <main role="main" class="">
                                  <div class="container-fluid">
                                    <div class="row justify-content-center">
                                      <div class="col-10">
                                        {{-- <h2 class="page-title">Form elements</h2> --}}

                                        <div class="card shadow mb-4">
                                          <div class="card-header">
                                            @if ($errors->any())
                                            <div class="alert alert-danger col-3">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul></div>@endif
                                        @if(session("error"))
                                        <div class="alert alert-danger col-3">{{session('error')}}</div>
                                        @endif
                                            <strong class="card-title">เอกสารปฏิบัติงานนักศึกษา</strong>
                                          </div>

                                          <div class="card-body">
                                            <div class="row">
                                              <div class="col-md-6">
                                                <div class="form-group mb-3">
                                          <form method="POST"id="myForm" action="{{ route('addinformdetails') }}"enctype="multipart/form-data" >
                                            @csrf

                                                  {{-- <label for="simpleinput">ชื่อไฟล์</label>
                                                  <select class="form-control required" name="namefile" id="example-select">
                                                    <option value="">กรุณาเลือก</option>
                                                    <option value="แบบแจ้งรายละเอียดการปฏิบัติงาน(สก.07)">แบบแจ้งรายละเอียดการปฏิบัติงาน(สก.07)</option>
                                                    <option value="แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา(สก.08)">แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา(สก.08)</option>
                                                    <option value="แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา(สก.09)">แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา(สก.09)</option>

                                                  </select> --}}
                                                  <input type="hidden" id="custId" name="namefile" value="แบบแจ้งรายละเอียดการปฏิบัติงาน(สก.07)">
                                                </div>
                                                <div class="form-group mb-3">
                                                  <label for="example-email">อัพโหลดไฟล์เอกสาร</label>
                                                  {{-- <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                  </div> --}}
                                                  <div class="form-group mb-3">
                                                    <div class="custom-file">
                                                        <input type="file" name="files" class="custom-file-input" id="customFile"required>
                                                        <label class="custom-file-label" for="customFile">เลือกไฟล์PDF</label>

                                                      </div>
                                                    {{-- <input type="text"  name="namefile" class="form-control" id="example-static" > --}}
                                                  </div>
                                                </div>
                                                {{-- <div class="form-group mb-3">
                                                    <label for="inputAddress"class="col-form-label ">ปีการศึกษา</label>
      <select class="form-control "  name="year"required > --}}
        {{-- @foreach(range(date('Y'), date('Y') + 100) as $year)
        <option value="{{ $year }}">{{ $year }}</option>
    @endforeach --}}
    {{-- <option value="">กรุณาเลือกปีการศึกษา</option>
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
</select>    </div> --}}


                                                      {{-- <input type="text"  name="namefile" class="form-control" id="example-static" > --}}



                                                  {{-- <div class="form-group mb-3">
                                                      <label for="inputAddress"class="col-form-label ">ภาคเรียน</label>
                                                      <select class="form-control "  name="term"required>
                                                        <option value="">กรุณาเลือกภาคเรียน</option>

                                                      <option value="ภาคเรียนที่1">ภาคเรียนที่:1 </option>
                                                        <option value="ภาคเรียนที่2">ภาคเรียนที่:2 </option>
                                                      </select>
                                                  </div>
                                            </div> --}}
                                            </div> <!-- /.col -->
                                              {{-- <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                  <label for="example-helping">ใบสมัครงานสหกิจศึกษา(สก.03)</label>
                                                  <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                  </div> --}}

                                                </div><div class="modal-footer">
                                                    {{-- <button type="submit" class="btn mb-2 btn-primary"onclick="return confirm('ยืนยันการเพิ่มข้อมูล !!');">เพิ่มข้อมูล</button> --}}
                                                    <button type="button" class="btn mb-2 btn-primary"id="confirmButton">เพิ่มข้อมูล</button>
                                                    <button type="reset" class="btn mb-2 btn-secondary" >ยกเลิก</button>
                                                    <a href="/studenthome/informdetails" type="submit" class="btn mb-2 btn-secondary" >ย้อนกลับ</a>
                                                  </div></form>
                                                <div class="form-group mb-3">

                                                </div>



                                                <div class="form-group mb-3">


                                              </div>


                                              <script>
                                                document.getElementById('confirmButton').addEventListener('click', function(event) {
                                                    // ตรวจสอบว่าฟอร์มถูกต้องหรือไม่
                                                    let form = document.getElementById('myForm');
                                                    if (!form.checkValidity()) {
                                                        form.reportValidity();
                                                        return;
                                                    }

                                                    Swal.fire({
                                                        // title: 'คุณแน่ใจหรือไม่?',',
                                                        text: "คุณต้องการเพิ่มข้อมูลนี้หรือไม่?",
                                                        icon: 'warning',
                                                        showCancelButton: true,
                                                        confirmButtonColor: '#3085d6',
                                                        cancelButtonColor: '#d33',
                                                        confirmButtonText: 'ใช่, เพิ่มข้อมูล!',
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



                                        </div>

                                            </div>
                                            {{-- <div class="card shadow mb-4">
                                                <div class="card-header">

                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="form-group mb-3">

                                                          <label for="simpleinput">บัตรชาชน</label>
                                                          <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                          </div>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                          <label for="example-email">บัตรนักศึกษา</label>
                                                          <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                          </div>
                                                        </div> --}}


                                                    </div> <!-- /.col -->

                                                {{-- <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                      <label for="example-helping">ผลการเรียน</label>
                                                      <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                      </div>
                                                     </div>
                                                      <div class="form-group mb-3">
                                                        <label for="example-helping">ประวัติส่วนตัว(resume)</label>
                                                        <div class="custom-file">
                                                          <input type="file" class="custom-file-input" id="customFile">
                                                          <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div> --}}
                                                </div>   </div>   </div>
                                            </div> <!-- /.col -->



                                                </div>   </div>   </div>
                                            {{-- </div> <!-- /.col --><div class="modal-footer">
                                                <button type="submit" class="btn mb-2 btn-primary">ตกลง</button>
                                                <button type="reset" class="btn mb-2 btn-secondary" >ยกเลิก</button>
                                                <a href="/studenthome/register" type="submit" class="btn mb-2 btn-secondary" >ย้อนกลับ</a>
                                              </div></form> --}}
                                            <div class="col-6 text-center"></div>

                                                            <div class="col text-center">
                                            <div class="d-grid gap-2 d-md-flex   ">
                                                {{-- <a href="/studenthome"  class="btn btn-outline-primary fe-16" type="button">ย้อนกลับ</a> --}}
                                                &nbsp;&nbsp;
                                                {{-- <a href="/studenthome/updateuser2/{{Auth::user()->id}}"name="next" class="btn btn-outline-success me-md-2 success btn2" onclick="return confirm('แน่ใจจะยืนยันตัวตน?')"  type="button">ยืนยันข้อมูล</a>
                                                  &nbsp;&nbsp; --}}
                                                  {{-- <a href="/studenthome/updateuser2/{{Auth::user()->id}}" class="btn btn-outline-success me-md-2 success edit_employee_form "   type="button">ยืนยันข้อมูล</a> --}}

                                                {{-- <a href="/studenthome/updateuser2/{{Auth::user()->id}}" class="btn btn-outline-success me-md-2 success show-alert-delete-box"   type="button">ยืนยันข้อมูล</a> --}}
                                                  {{-- <a href="/studenthome/edituser1/{{Auth::user()->id}}"  class="btn btn-outline-warning fe fe-edit fe-16" type="button">แก้ไขข้อมูล</a> </div> --}}
                                            </div>
                                                </div>
                                        </div> <!-- / .card -->
                                      </div>
                                    </div>
                                  </div>






@endsection

