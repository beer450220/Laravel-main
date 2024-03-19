@extends('layouts.appstudent')
{{-- @include('layouts.admincss2') --}}
 {{-- @include('layouts.menutopstudent') --}}
{{-- @include('layouts.cssstudent') --}}
{{--@include('layouts.sidebarstudent') --}}
{{-- @include('layouts.scriptsstudent') --}}
@section('content')
<title>ระบบสารสนเทศสหกิจศึกษา</title>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


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
              <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                  {{-- <h2 id="heading">Sign Up Your User Account</h2>
                  <p>Fill all form field to go to next step</p> --}}
                  <form id="msform">
                      <!-- progressbar -->

                      <ul id="progressbar">
                        {{-- class="active" --}}
                        {{-- <a  href="/studenthome"><li class="active" id="account"><strong>ข้อมูลส่วนตัว</strong><br><br> --}}
                            <br>
                            {{-- @if (Auth::user()->status === 'ยืนยันตัวตนแล้ว')
                            <span class="circle circle-sm bg-success-light">

                                <i class="fe fe-16 fe-check text-white mb-0"></i>

                                <!-- เนื้อหาภายใน <span> element ที่ต้องการแสดง -->
                            </span><span class="text-Success" >ยืนยันตัวตนแล้ว </span>
                            @elseif (Auth::user()->status === 'ยังไม่ได้ยืนยันตัวตน')
                            <span class="circle circle-sm bg-warning-light">

                                <i class="fe fe-16 fe-alert-triangle text-white mb-0"></i> --}}
                                {{-- <i class="fe fe-16 fe-alert-triangle text-white "></i> --}}



                        {{-- @endif --}}
                    </li></a>
                        {{-- <a  href="/studenthome/establishmentuser">  <li id="personal" ><strong>สถานประกอบการ</strong><br><br>
                           <br>   @if (Auth::user()->statusestablishment === 'ยืนยันได้สถานประกอบการแล้ว')
                            <span class="circle circle-sm bg-success-light">

                                <i class="fe fe-16 fe-check text-white mb-0"></i>

                                <!-- เนื้อหาภายใน <span> element ที่ต้องการแสดง -->
                            </span><span class="text-Success" >ยืนยันได้สถานประกอบการแล้ว </span>
                            @elseif (Auth::user()->statusestablishment === 'ยังไม่ได้ยืนยันตัวตน')
                            <span class="circle circle-sm bg-secondary-light">

                                <i class="fe fe-16 fe-check text-white mb-0"></i>

                                @else
                                <span class="circle circle-sm bg-secondary-light">

                                    <i class="fe fe-16 fe-check text-white mb-0"></i>



                        @endif</li></a> --}}
                          <a  href="/studenthome/register">  <li id="payment"><strong>ลงทะเบียน</strong><br><br><br>
                            {{-- @if (Auth::user()->status === 'ยืนยันตัวตนแล้ว')
                            <span class="circle circle-sm bg-success-light">

                                <i class="fe fe-16 fe-check text-white mb-0"></i>

                                <!-- เนื้อหาภายใน <span> element ที่ต้องการแสดง -->
                            </span>
                            @elseif (Auth::user()->status === 'ยังไม่ได้ยืนยันตัวตน')
                            <span class="circle circle-sm bg-secondary-light">

                                <i class="fe fe-16 fe-check text-white mb-0"></i>




                        @endif --}}
                        </li></a>
                            <a  href="/studenthome/informdetails"> <li id="confirm"><strong>รายงานสถานะการเข้าปฏิบัติงาน</strong>
                                <br><br>
                                 {{-- @if (Auth::user()->status === 'ยืนยันตัวตนแล้ว')
                                <span class="circle circle-sm bg-success-light">

                                    <i class="fe fe-16 fe-check text-white mb-0"></i>

                                    <!-- เนื้อหาภายใน <span> element ที่ต้องการแสดง -->
                                </span>
                                @elseif (Auth::user()->status === 'ยังไม่ได้ยืนยันตัวตน')
                                <span class="circle circle-sm bg-secondary-light">

                                    <i class="fe fe-16 fe-check text-white mb-0"></i>




                            @endif --}}
                            </li></a>
                              <a  href="/studenthome/calendar2confirm"> <li id="confirm"><strong>นิเทศงาน</strong>
                                <br><br> <br>
                                 {{-- @if (Auth::user()->status === 'ยืนยันตัวตนแล้ว')
                                <span class="circle circle-sm bg-success-light">

                                    <i class="fe fe-16 fe-check text-white mb-0"></i>

                                    <!-- เนื้อหาภายใน <span> element ที่ต้องการแสดง -->
                                </span>
                                @elseif (Auth::user()->status === 'ยังไม่ได้ยืนยันตัวตน')
                                <span class="circle circle-sm bg-secondary-light">

                                    <i class="fe fe-16 fe-check text-white mb-0"></i>




                            @endif --}}
                            </li></a>
                            <a  href="/studenthome/report"> <li id="payment"><strong>รายงานผลการปฏิบัติงาน</strong>
                                <br><br>
                                  {{-- @if (Auth::user()->status === 'ยืนยันตัวตนแล้ว')
                                    <span class="circle circle-sm bg-success-light">

                                        <i class="fe fe-16 fe-check text-white mb-0"></i>

                                        <!-- เนื้อหาภายใน <span> element ที่ต้องการแสดง -->
                                    </span>
                                    @elseif (Auth::user()->status === 'ยังไม่ได้ยืนยันตัวตน')
                                    <span class="circle circle-sm bg-secondary-light">

                                        <i class="fe fe-16 fe-check text-white mb-0"></i>




                                @endif --}}
                                </li></a>
                      </ul>
                      <div class="progress">
                          {{-- <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div> --}}
                      </div> <br> <!-- fieldsets -->
                      <fieldset>
                          <div class="form-card">
                              <div class="row">
                                  <div class="col-7">


                                      <h2 class="fs-title">ข้อมูลส่วนตัว:</h2>
                                  </div>
                                  <div class="col-4">
                                      <h2 class="steps">ขั้นตอน 1 - 5</h2>
                                  </div>
                              </div><div class="col-6">
    <div class=" alert alert-primary  " role="alert">

        {{-- @if (Auth::user()->status === 'ยืนยันตัวตนแล้ว')
        <span class="circle circle-sm bg-secondary-light">

            {{ Auth::user()->status}}</span>

    @endif --}}
    <br>


    <br>
    <h2><span>{{-- <i class="fe fe-16 fe-check text-white mb-0"></i> --}}
                                   {{-- @if (Auth::user()->status === 'ยืนยันตัวตนแล้ว')
    <span class="circle circle-sm bg-success-light">

        <i class="fe fe-16 fe-check text-white mb-0"></i>

        <!-- เนื้อหาภายใน <span> element ที่ต้องการแสดง -->
    </span>
    @elseif (Auth::user()->status === 'ยังไม่ได้ยืนยันตัวตน')
    <span class="circle circle-sm bg-warning-light"> --}}
{{--
        <i class="fe fe-16 fe-check text-white mb-0"></i> --}}
        {{-- <i class="fe fe-16 fe-alert-triangle text-white mb-0"></i>



@endif --}}
 </span><span>ขั้นตอนที่ 1 ข้อมูลส่วนตัว:</h1>ตรวจสอบข้อมูลและทำการยืนยันข้อมูล</span>
                                       <br> <br>
                                       {{-- <br>ถ้าจะทำการแก้ไขข้อมูลให้ --}}
                                       {{-- <br> <br>ถ้ายืนยันตัวตนแล้วให้ <a href="/studenthome/establishmentuser"  class="btn btn-outline-warning " type="button">>คลิกที่นี่<</a> เพื่อทำขั้นตอนถัดไป --}}
                                    </div>
</div>


<main role="main" class="">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
            @if(session("success6"))
            <div class="alert alert-success col-4">{{session('success6')}}
  @endif
 @if(session("success5"))
          <div class="alert alert-success col-4">{{session('success5')}}
@endif
          </div>
          </div>
{{-- <div class="col-md-12 my-4">
    <div class="card shadow">
      <div class="card-body">
        <h5 class="card-title">เอกสารแจ้งรายละเอียดการปฎิบัติงาน</h5>
        <div class="container">
            <div class="row">
              <div class="col-9">
                <p class="card-text"> <tbody>
                </p>
              </div> --}}
              {{-- <div class="col col-lg-2 ">
                <a href=""  type="button"  class=" btn btn-outline-success"data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">เพิ่มข้อมูล</a>

                <a href="/studenthome/addstudent"  class=" btn btn-outline-success">ดาวห์โหลด</a>
            </div> --}}
            {{-- <div class="col-9"> --}}

                {{-- <a href="/studenthome/documents1" type="button" class="btn btn-outline-primary">ดาวน์โหลดไฟล์เอกสาร</a> --}}



              {{-- </div>
            </div> --}}

        {{-- </div> --}}
        <br>


    {{-- </div>
</div> --}}
    <br>
    <br>

    <div class="col-md-12 mb-4">
        <div class="accordion w-100" >
            {{-- id="accordion1" --}}
          <div class="card shadow">
            <div class="card-header" id="heading1">
              {{-- <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}

                <span>
             @if (Auth::user()->status === 'ยังไม่ได้ยืนยันตัวตน')
             <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
         @elseif (Auth::user()->status === 'ยืนยันตัวตนแล้ว')
             <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>

         @endif
             {{--  class="circle circle-sm bg-warning-light">

--}}



                 </span><h3><strong>ตรวจสอบข้อมูลส่วนตัว</strong> <span class="text-success">
                    <a href="/personal/{{Auth::user()->id}}"name="next" class="btn btn-outline-Warning me-md-2 Warning btn2"   type="button">ดูข้อมูล</a>
                    <a href="/studenthome/updateuser2/{{Auth::user()->id}}"name="next" class="btn btn-outline-success me-md-2 success btn2" onclick="return confirm('แน่ใจจะยืนยันตัวตน?')"  type="button">ยืนยันข้อมูล</a>



                   @if (Auth::user()->status === 'ยังไม่ได้ยืนยันตัวตน')
                   <span class="text-warning">{{ Auth::user()->status }}</span>
                    <span class="text-primary ">( กรุณายืนยันตัวตนด้วย)</span>
               @elseif (Auth::user()->status === 'ยืนยันตัวตนแล้ว')
                   <span class="text-success  ">{{ Auth::user()->status }}</span>

               @endif


            </a>
            </div></h3>
</span>
</div>

<div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion1" style="">
              {{-- <div class="card-body">  <a href="/studenthome/addinformdetail"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div> --}}
              <br>



              <div class="text-center">
                <img src="/รูปโปรไฟล์/{{ Auth::user()->images }}" class="rounded mx-auto d-block" style="width:200px;height:200px; text-align:center;">

              </div>

              <br>
              <br>
              <main role="main" class="">
                <div class="container-fluid">
                  <div class="row justify-content-center">
                    <div class="col-7">
                      {{-- <h2 class="page-title">Form elements</h2> --}}

                      <div class="card shadow mb-4">
                        <div class="card-header">
                          <strong class="card-title">ข้อมูลรายละเอียดบุคคล</strong>
                        </div>

                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group mb-3">
                        {{-- <form method="POST" action="{{url('/studenthome/updateuser2/'.Auth::user()->id)}}" enctype="multipart/form-data">
                          @csrf --}}
                                <label for="simpleinput">รหัสนักศึกษา</label>
                                <input type="text"value="{{ Auth::user()->Student_ID }}" disabled="" id="simpleinput" class="form-control">
                              </div>
                              <div class="form-group mb-3">
                                <label for="example-email">Email</label>
                                <input type="email" id="example-email"value="{{ Auth::user()->email }}" disabled="" name="example-email" class="form-control" placeholder="Email">
                              </div>
                              <div class="form-group mb-3">
                                <label for="example-password">Password</label>
                                <input type="password" id="example-password" class="form-control" value="password">
                              </div>
                              <div class="form-group mb-3">
                                <label for="example-palaceholder">ผู้ใช้งาน</label>
                                <input type="text" id="example-palaceholder"value="{{ Auth::user()->username }}" disabled="" class="form-control" placeholder="placeholder">
                              </div>
                              <div class="form-group mb-3">
                                <label for="example-palaceholder">เกรดเฉลี่ย(GPA)	</label>
                                <input type="text" id="example-palaceholder"value="{{ Auth::user()->GPA }}" disabled="" class="form-control" placeholder="placeholder">
                              </div>

                          </div> <!-- /.col -->
                            <div class="col-md-6">
                              <div class="form-group mb-3">
                                <label for="example-helping">ที่อยู่</label>
                                <input type="text" id="example-helping"value="{{ Auth::user()->address }}" disabled="" class="form-control" placeholder="Input with helping text">

                              </div>
                              <div class="form-group mb-3">
                                <label for="example-readonly">	รหัสไปรษณีย์	</label>
                                <input type="text" id="example-readonly"value="{{ Auth::user()->postcode}}" disabled="" class="form-control" readonly="" value="Readonly value">
                              </div>
                              <div class="form-group mb-3">
                                <label for="example-disable">คณะ</label>
                                <input type="text" class="form-control"value="{{ Auth::user()->faculty}}" disabled="" id="example-disable" disabled="" value="Disabled value">
                              </div>
                              <div class="form-group mb-3">
                                <label for="example-static">หลักสูตร</label>
                                <input type="text" readonly=""value="{{ Auth::user()->course}}" disabled="" class="form-control" id="example-static" >
                              </div>
                              <div class="form-group mb-3">
                                <label for="example-static">เบอร์โทรศัพท์</label>
                                <input type="text" readonly=""value="{{ Auth::user()->telephonenumber}}" disabled="" class="form-control" id="example-static" >
                              </div>
                              <div class="form-group mb-3">


                            </div>




                      </div>

                          </div>
                          <div class="col-6 text-center"></div>

                                          <div class="col text-center">
                          <div class="d-grid gap-2 d-md-flex   ">
                            <a href="/studenthome/edituser1/{{Auth::user()->id}}"  class="btn btn-outline-warning fe fe-edit fe-16" type="button">แก้ไข</a>
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

                        <div class="col-auto">

                        </div>
                      </div>
                      <br>
                      <br>

                              </div>
                            </div>
                          </div>
                            <div class="accordion" id="accordionExample">
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                  <div class="col-7">
                                          <h2 class="steps">ทำการยืนยันข้อมูล </h2></div>
                                          <div class="col-12 text-center">
                                          <a href="/studenthome/updateuser2/{{Auth::user()->id}}"name="next" class="btn btn-outline-success me-md-2 success btn2" onclick="return confirm('แน่ใจจะยืนยันตัวตน?')"  type="button">ยืนยันข้อมูล</a>
                                  </div>
                    </div> <!-- /.card-footer -->
                  </div>
                </div>
                {{-- @endforeach --}}
              </div>

            </div>




          <main role="main" class="">
            <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-12 my-4 " >
           </div>


          </div></div></div></div> <div class="d-grid gap-2">

            <h2>ขั้นตอนต่อไป</h2>
            </div>   <a href="/studenthome/register"  id="show-alert" class="btn btn-outline-warning " type="button">>คลิกที่นี่<</a>
      </div>
    <br>
    <br>



 {{-- <div class="text-center"> --}}

                                    {{-- <div class=" alert alert-primary  " role="alert">

                                    <div> <h4> ขั้นตอน</h4>
   </div>
                                        <b>ขั้นตอนที่ 1 ข้อมูลส่วนตัว:</b> ตรวจสอบข้อมูลและทำการยืนยันข้อมูล <a href="/personal" class="btn-sm btn btn-outline-primary">คลิกที่นี่</a>
                                       <br><br>
                                       <b>ขั้นตอนที่ 2 สถานประกอบการ:</b> ให้เลือกสถานประกอบการ <a href="/studenthome/establishmentuser" class="btn-sm btn btn-outline-primary">คลิกที่นี่</a>
                                        <br>

                                        หลังจากเลือกสถานประกอบการแล้วให้ยืนยันข้อมูลว่าได้สถานประกอบการแล้ว<a href="/studenthome/establishmentstatus/{{Auth::user()->id}}"onclick="return confirm('แน่ใจจะยืนยันได้สถานประกอบการแล้ว?')" class="btn-sm btn btn-outline-primary">คลิกที่นี่</a>
                                        <br><br>
                                        <b> ขั้นตอนที่ 3 ลงทะเบียน:</b>

                                        <br> ให้กรอกข้อมูลนักศึกษา<a href="/Studentinformation" class="btn-sm btn btn-outline-primary">คลิกที่นี่</a>
                                        <br><b> อัพโหลดไฟล์เอกสาร </b><a href="/studenthome" class="btn-sm btn btn-outline-primary">คลิกที่นี่</a>
                                        <br> แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)
                                        <br> ใบสมัครงานสหกิจศึกษา(สก03)
                                        <br> แบบคำรองขอหนังสือขอควำมอนุเคราะหรับนักศึกษาสหกิจศึกษา(สก04)
                                        <br> บัตรชาชน
                                        <br> บัตรนักศึกษา
                                        <br> ผลการเรียน
                                        <br> ประวัติส่วนตัว(resume)
                                        <br> <b>ประกาศรายชื่อรับฝึกปฏิบัติงานสหกิจศึกษา</b>: <a href="/studenthome" class="btn-sm btn btn-outline-primary">คลิกที่นี่</a>
                                        <br>
                                        <br>
                                        <b> ขั้นตอนที่ 4 รายงานสถานะการเข้าปฏิบัติงาน:</b> ให้อัพโหลดไฟล์เอกสาร
                                        <br>แบบแจ้งรายละเอียดการปฏิบัติงาน(สก.07) <b>ภายในสัปดาห์แรก</b><a href="/studenthome" class="btn-sm btn btn-outline-primary">คลิกที่นี่</a>
                                        <br>แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา(สก.08) <b>ภายในสัปดาห์ที่สอง</b><a href="/studenthome" class="btn-sm btn btn-outline-primary">คลิกที่นี่</a>
                                        <br>แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา(สก.09)<b>ภายในสัปดาห์ที่สาม</b><a href="/studenthome" class="btn-sm btn btn-outline-primary">คลิกที่นี่</a>
                                        <br>
                                        <br>
                                        <b> ขั้นตอนที่ 5 นิเทศงาน:</b>
                                        <br>ตารางนิเทศนักศึกษาฝึกปฏิบัติงานสหกิจศึกษาและยืนยันเวลานัดนิเทศ<a href="/studenthome" class="btn-sm btn btn-outline-primary">คลิกที่นี่</a>
                                        <br>
                                        <br>
                                        <b> ขั้นตอนที่ 6 รายงานผลการปฏิบัติงาน:</b>
                                        <br>อัพโหลดเอกสารฝึกประสบการณ์<a href="/studenthome" class="btn-sm btn btn-outline-primary">คลิกที่นี่</a>
                                        <br> รายงานโครงการ
                                        <br> PowerPoint การนำเสนอ
                                        <br> Onepage ของโครงการ (โปสเตอร์)
                                        <br> รายงานสรุปโครงการ(ไม่เกิน 5 หน้า)

                                    </div></div> --}}
                                    {{-- </div> --}}

                                    {{-- <div id="collapseOne"  aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        <strong>กรุณาตรวจสอบข้อมูลและทำการยืนยันข้อมูล</strong>
                                        <button type="button" class="btn btn-outline-secondary fe fe-edit fe-16"></button>
                                        <button type="button" class="btn btn-outline-danger fe fe-trash-2 fe-16">


                                      </div>
                                    </div> --}}



                                      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                                      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

                                      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
                                      <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
                                      <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
                                      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                            <script type="text/javascript">

// const btn = document.getElementById('btn');

// btn.addEventListener('click', function onClick() {
//   document.body.style.backgroundColor = 'salmon';
// });



 $(".delete-btn").click(function(e) {
             var userId = $(this).data('id');
            e.preventDefault();
             deleteConfirm(userId);
        })

        function deleteConfirm(userId) {
            Swal.fire({
                title: 'ยืนยันข้อมูลส่วนตัว',
                text: "แน่ใจจะยืนยันข้อมูลส่วนตัว?",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ยืนยันข้อมูล',
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        // $.ajax({
                        //         // url: '',
                        //         // type: 'get',
                        //         // data: 'delete=' + userId,
                        //     })
                        //     .done(function() {
                        //         Swal.fire({
                        //             title: 'success',
                        //             text: 'ยืนยันข้อมูลส่วนตัวสำเร็จ',
                        //             icon: 'success',
                        //         }).then(() => {
                        //             document.location.href = '/studenthome';
                        //         })
                        //     })
                        //     .fail(function() {
                        //         Swal.fire( 'เกิดความผิดพลาด')
                        //         window.location.reload();
                        //     });
                        // $.ajax({
                        //       type: "GET",
                        //       dataType: "json",
                        //       url: '/studenthome/updateuser2',
                        //       data: {'status': status, 'id': id+ userId},
                        //       success: function(data){
                        //         console.log(data.success)
                        //       }
                        //   });
                    });
                },
            });
          }
          $(function() {
                      $('.toggle-class').change(function() {
                          var roles = $(this).prop('checked') == true ? 'student' : 0;
                          var id = $(this).data('id');

                          $.ajax({
                              type: "GET",
                              dataType: "json",
                              url: '/user1',
                              data: {'role': roles, 'id': id},
                              success: function(data){
                                console.log(data.success)
                              }
                          });
                      })
                    })



                    $('.show-alert-delete-box').click(function(event){
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: "Are you sure you want to delete this record?",
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            type: "warning",
            buttons: ["Cancel","Yes!"],
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
    });



    $(document).on('click', '.deleteIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        let csrf = '{{ csrf_token() }}';
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: '',
              method: 'post',
              data: {
                id: id,
                _token: csrf
              },
              success: function(response) {
                console.log(response);
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
                fetchAllEmployees();
              }
            });
          }
        })
      });


// update employee ajax request
$("#edit_employee_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);

        $("#edit_employee_btn").text('Updating...');
        $.ajax({
          url: '',
          method: 'get',
          data: fd,
          cache: false,
          showCancelButton: true,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Updated!',
                'Employee Updated Successfully!',
                'success'
              )
              fetchAllEmployees();
            }
            $("#edit_employee_btn").text('Update Employee');
            $("#edit_employee_form")[0].reset();
            $("#editEmployeeModal").modal('hide');
          }
        });
      });





                              </script>
                                  </div>

                                </div>

                              {{-- <label class="fieldlabels">Email: *</label>
                               <input type="email" name="email" placeholder="Email Id" />
                               <label class="fieldlabels">Username: *</label>
                                <input type="text" name="uname" placeholder="UserName" />
                                 <label class="fieldlabels">Password: *</label>
                                  <input type="password" name="pwd" placeholder="Password" />
                                   <label class="fieldlabels">Confirm Password: *</label>
                                    <input type="password" name="cpwd" placeholder="Confirm Password" /> --}}


                          </div>
                          {{-- <input type="button" name="next" class="next action-button" value="Next" /> --}}


  <script>

  $(document).ready(function(){

  var current_fs, next_fs, previous_fs; //fieldsets
  var opacity;
  var current = 1;
  var steps = $("fieldset").length;

  setProgressBar(current);

  $(".next").click(function(){

  current_fs = $(this).parent();
  next_fs = $(this).parent().next();

  //Add Class Active
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

  //show the next fieldset
  next_fs.show();
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
  step: function(now) {
  // for making fielset appear animation
  opacity = 1 - now;

  current_fs.css({
  'display': 'none',
  'position': 'relative'
  });
  next_fs.css({'opacity': opacity});
  },
  duration: 500
  });
  setProgressBar(++current);
  });

  $(".previous").click(function(){

  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();

  //Remove class active
  $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

  //show the previous fieldset
  previous_fs.show();

  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
  step: function(now) {
  // for making fielset appear animation
  opacity = 1 - now;

  current_fs.css({
  'display': 'none',
  'position': 'relative'
  });
  previous_fs.css({'opacity': opacity});
  },
  duration: 500
  });
  setProgressBar(--current);
  });

  function setProgressBar(curStep){
  var percent = parseFloat(100 / steps) * curStep;
  percent = percent.toFixed();
  $(".progress-bar")
  .css("width",percent+"%")
  }

  $(".submit").click(function(){
  return false;
  })

  });

  </script>

@endsection
