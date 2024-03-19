@extends('layouts.appstudent1')
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
              <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                  {{-- <h2 id="heading">Sign Up Your User Account</h2>
                  <p>Fill all form field to go to next step</p> --}}
                   <br> <!-- fieldsets -->
                      <fieldset>
                          <div class="form-card">
                              <div class="row">
                                  <div class="col-7">

                                  </div>
                                  <div class="col-4">

                                  </div>
                              </div>
                              <div class="accordion" id="accordionExample">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                      <div class="col-8">
                                        {{-- <h2 class="steps">แก้ข้อมูล</h2> --}}
                                    </div>
                                    </h2>
                                    {{-- <div id="collapseOne"  aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        <strong>กรุณาตรวจสอบข้อมูลและทำการยืนยันข้อมูล</strong>
                                        <button type="button" class="btn btn-outline-secondary fe fe-edit fe-16"></button>
                                        <button type="button" class="btn btn-outline-danger fe fe-trash-2 fe-16">


                                      </div>
                                    </div> --}}
                                    <br>
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
                                                      <form method="POST" action="{{url('/studenthome/updateuser1/'.$users->id)}}" enctype="multipart/form-data">
                                                        @csrf
                                                      <label for="simpleinput">ชื่อผู้ใช้งาน</label>
                                                      <input type="text"value="{{ Auth::user()->username }}" disabled="" id="simpleinput" class="form-control">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                      <label for="example-email">ชื่อจริง </label>
                                                      <input type="text" id="example-email"value="{{ Auth::user()->fname }}"  name="fname" class="form-control"required placeholder="">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="example-email">นามสกุล</label>
                                                        <input type="text" id="example-email"value="{{ Auth::user()->surname}}"  name="surname" class="form-control"required placeholder="">
                                                      </div>
                                                    {{-- <div class="form-group mb-3">
                                                      <label for="example-password">Password</label>
                                                      <input type="password" id="example-password" class="form-control" value="password">
                                                    </div> --}}
                                                    <div class="form-group mb-3">
                                                      <label for="example-palaceholder">อีเมล์</label>
                                                      <input type="email" id="example-palaceholder"value="{{ Auth::user()->email}}"name="email"  class="form-control"required placeholder="">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                      <label for="example-palaceholder">เกรดเฉลี่ย(GPA)	</label>
                                                      <input type="text" id="example-palaceholder"value="{{ Auth::user()->GPA }}" name="GPA"  class="form-control"required placeholder="">

                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="example-palaceholder">เบอร์โทรศัพท์	</label>
                                                        <input type="text" id="example-palaceholder"value="{{ Auth::user()->telephonenumber}}"name="telephonenumber"  class="form-control" placeholder=""required>
                                                      </div>

                                                  </div> <!-- /.col -->
                                                  <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                      <label for="example-helping">ที่อยู่</label>
                                                      <input type="text" id="example-helping"value="{{ Auth::user()->address}}" name="address" class="form-control"required placeholder="">

                                                    </div>
                                                    <div class="form-group mb-3">
                                                      <label for="example-readonly">ชื่อสถานประกอบการ</label>
                                                      <input type="text" id="example-palaceholder"value="{{ Auth::user()->em_name}}"name="em_name"  class="form-control"required placeholder="">
                                                    </div>

                                                    <div class="form-group mb-3">
                                                      <label for="example-static">หลักสูตร</label>
                                                      <select class="form-control" id="validationSelect1" name="major_id" required>
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

                                                    <div class="form-group mb-3">
                                                        <label for="example-static">ปีการศึกษา</label>
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
                                                            <option value="{{ $i }}"@if($users->year==$i ) selected @endif>{{ $i }}</option>
                                                        @endfor
                                                    @endfor
                                                    </select>
                                                      </div>

                                                      <div class="form-group mb-3">
                                                        <label for="example-static">ภาคเรียน</label>
                                                        <select class="form-control"  name="term" required>
                                                            <option value="">กรุณาเลือกภาคเรียน</option>

                                                          <option value="ภาคเรียนที่1"@if( $users->term=="ภาคเรียนที่1") selected @endif>ภาคเรียนที่:1 </option>
                                                            <option value="ภาคเรียนที่2"@if( $users->term=="ภาคเรียนที่2") selected @endif>ภาคเรียนที่:2 </option>
                                                          </select>
                                                      </div>
                                                      <div class="form-group mb-3">
                                                        <label for="example-static">รูปโปรไฟล์</label>
                                                        <input type="file" readonly=""value="{{ Auth::user()->images}}" name="images" class="form-control" id="example-static" >
                                                      </div>

                                                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                      <a href="/studenthome" class="btn btn-outline-success me-md-2 delete-btn"  type="button">ย้อนกลับ</a>
                                                      &nbsp;&nbsp;
                                                      <button type="submit"  class="btn btn-outline-primary fe fe-edit fe-16" type="button">อัพเดทข้อมูล</button>
                                                   </div>  </div></form>
                                                </div>
                                              </div>
                                            </div> <!-- / .card -->
                                          </div>
                                        </div>

                                      </div>
                                      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                              <script>
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
                        $.ajax({
                                url: 'index.php',
                                type: 'GET',
                                data: 'delete=' + userId,
                            })
                            .done(function() {
                                Swal.fire({
                                    title: 'success',
                                    text: 'ยืนยันข้อมูลส่วนตัวสำเร็จ',
                                    icon: 'success',
                                }).then(() => {
                                    document.location.href = '/studenthome';
                                })
                            })
                            .fail(function() {
                                Swal.fire( 'เกิดความผิดพลาด')
                                window.location.reload();
                            });
                    });
                },
            });
          }

                              </script>
                                  </div>



              </div>
          </div>
      </div>
  </div>
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
