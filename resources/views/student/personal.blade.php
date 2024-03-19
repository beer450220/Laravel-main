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
              <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
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
                      <br> <!-- fieldsets -->
                      <fieldset>
                          <div class="form-card">
                              <div class="row">
                                  <div class="col-7">
                                      <h2 class="fs-title col">ข้อมูลส่วนตัว:</h2>
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
                                              {{-- <form method="POST" action="{{url('/studenthome/updateuser2/'.Auth::user()->id)}}" enctype="multipart/form-data">
                                                @csrf --}}
                                                      <label for="simpleinput">ชื่อผู้ใช้งาน</label>
                                                      <input type="text"value="{{ Auth::user()->username }}" disabled="" id="simpleinput" class="form-control">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                      <label for="example-email">ชื่อจริง นามสกุล</label>
                                                      <input type="email" id="example-email"value="{{ Auth::user()->fname }}  {{ Auth::user()->surname }}" disabled="" name="example-email" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                      <label for="example-password">อีเมล์</label>
                                                      <input type="text" id="example-password" class="form-control" value="{{ Auth::user()->email }}">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                      <label for="example-palaceholder">เกรดเฉลี่ย(GPA)</label>
                                                      <input type="text" id="example-palaceholder"value="{{ Auth::user()->GPA }}" disabled="" class="form-control" placeholder="placeholder">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                      <label for="example-palaceholder">เบอร์โทรศัพท์	</label>
                                                      <input type="text" id="example-palaceholder"value="{{ Auth::user()->telephonenumber}}" disabled="" class="form-control" placeholder="placeholder">
                                                    </div>

                                                </div> <!-- /.col -->
                                                  <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                      <label for="example-helping">ที่อยู่</label>
                                                      <input type="text" id="example-helping"value="{{ Auth::user()->address }}" disabled="" class="form-control" placeholder="Input with helping text">

                                                    </div>
                                                    <div class="form-group mb-3">
                                                      <label for="example-readonly">ชื่อสถานประกอบการ</label>
                                                      <input type="text" id="example-readonly"value="{{ Auth::user()->em_name}}" disabled="" class="form-control" readonly="" value="Readonly value">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                      <label for="example-static">หลักสูตร</label>
                                                      <input type="text" readonly=""value="{{ Auth::user()->course}}" disabled="" class="form-control" id="example-static" >
                                                    </div>
                                                    <div class="form-group mb-3">
                                                      <label for="example-disable">ปีการศึกษา</label>
                                                      <input type="text" class="form-control"value="{{ Auth::user()->year}}" disabled="" id="example-disable" disabled="" value="Disabled value">
                                                    </div>

                                                    <div class="form-group mb-3">
                                                      <label for="example-static">ภาคเรียน</label>
                                                      <input type="text" readonly=""value="{{ Auth::user()->term}}" disabled="" class="form-control" id="example-static" >
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
                                                      <a href="/studenthome/edituser1/{{Auth::user()->id}}"  class="btn btn-outline-warning fe fe-edit fe-16" type="button">แก้ไขข้อมูล</a> </div>
                                                </div>
                                                    </div>
                                            </div> <!-- / .card -->
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
                                  {{-- <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                       สถานประกอบการ
                                      </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                      </div>
                                    </div>
                                  </div> --}}
                                  {{-- <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        ลงทะเบียน
                                      </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                      </div>
                                    </div>
                                  </div> --}}
                                </div>
                                {{-- <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingTwo4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo">
                                      รายงานสถานะการเข้าปฏิบัติงาน
                                    </button>
                                  </h2>
                                  <div id="collapseTwo4" class="accordion-collapse collapse" aria-labelledby="headingTwo4" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                  </div>
                                </div> --}}
                               {{-- <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo5">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo">
                                      นิเทศงาน
                                  </button>
                                </h2>
                                <div id="collapseTwo5" class="accordion-collapse collapse" aria-labelledby="headingTwo5" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                  </div>
                                </div>
                              </div> --}}
                              {{-- <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingTwo6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo6" aria-expanded="false" aria-controls="collapseTwo6">
                                      รายงานผลการปฏิบัติงาน
                                    </button>
                                  </h2>
                                  <div id="collapseTwo6" class="accordion-collapse collapse" aria-labelledby="headingTwo6" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                  </div>
                                </div>
   --}}
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
                      </fieldset>
                      <fieldset>
                          <div class="form-card">
                              <div class="row">
                                  <div class="col-7">
                                      <h2 class="fs-title">Personal Information:</h2>
                                  </div>
                                  <div class="col-5">
                                      <h2 class="steps">Step 2 - 6</h2>
                                  </div>
                              </div>
                              {{-- <label class="fieldlabels">First Name: *</label>
                              <input type="text" name="fname" placeholder="First Name" />
                               <label class="fieldlabels">Last Name: *</label>
                               <input type="text" name="lname" placeholder="Last Name" />
                                <label class="fieldlabels">Contact No.: *</label>
                                 <input type="text" name="phno" placeholder="Contact No." />
                                  <label class="fieldlabels">Alternate Contact No.: *</label>
                                  <input type="text" name="phno_2" placeholder="Alternate Contact No." /> --}}

                                  <table class="table table-hover">
                                      <thead class="thead-dark">
                                        <tr>
                                          <th>#</th>
                                          <th>รายชื่อนักศึกษา</th>
                                          <th>ชื่อหน่วยงาน</th>
                                          <th>สถานะ</th>
                                          <th>แก้ไข</th>
                                          <th>ลบ</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>1</td>
                                          <td>
                                         หห
                                          </td>
                                          <td>หห</td>
                                          <td>หห</td>
                                          <td><button type="button" class="btn btn-outline-secondary fe fe-edit fe-16"></button></td>
                                          <td><button type="button" class="btn btn-outline-danger fe fe-trash-2 fe-16"></td>
                                        </tr>


                                      </tbody>
                                    </table>
                          </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                      </fieldset>
                      <fieldset>
                          <div class="form-card">
                              <div class="row">
                                  <div class="col-7">
                                      <h2 class="fs-title">Image Upload:</h2>
                                  </div>
                                  <div class="col-5">
                                      <h2 class="steps">Step 3 - 6</h2>
                                  </div>
                              </div> <label class="fieldlabels">Upload Your Photo:</label> <input type="file" name="pic" accept="image/*"> <label class="fieldlabels">Upload Signature Photo:</label> <input type="file" name="pic" accept="image/*">
                          </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                      </fieldset>
                      <fieldset>
                          <div class="form-card">
                              <div class="row">
                                  <div class="col-7">
                                      <h2 class="fs-title">Finish:</h2>
                                  </div>
                                  <div class="col-5">
                                      <h2 class="steps">Step 4 - 6</h2>
                                  </div>
                              </div><label class="fieldlabels">Upload Your Photo:</label> <input type="file" name="pic" accept="image/*"> <label class="fieldlabels">Upload Signature Photo:</label> <input type="file" name="pic" accept="image/*">
                          </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                      </fieldset>

                      <fieldset>
                          <div class="form-card">
                              <div class="row">
                                  <div class="col-7">
                                      <h2 class="fs-title">Finish:</h2>
                                  </div>
                                  <div class="col-5">
                                      <h2 class="steps">Step 5 - 6</h2>
                                  </div>
                              </div><label class="fieldlabels">Upload Your Photo:</label> <input type="file" name="pic" accept="image/*"> <label class="fieldlabels">Upload Signature Photo:</label> <input type="file" name="pic" accept="image/*">
                          </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                      </fieldset>
                      <fieldset>
                          <div class="form-card">
                              <div class="row">
                                  <div class="col-7">
                                      <h2 class="fs-title">Finish:</h2>
                                  </div>
                                  <div class="col-5">
                                      <h2 class="steps">Step 6 - 6</h2>
                                  </div>
                              </div> <br><br>
                              <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                              <div class="row justify-content-center">
                                  <div class="col-3"> <img src="" class="fit-image"> </div>
                              </div> <br><br>
                              <div class="row justify-content-center">
                                  <div class="col-7 text-center">
                                      <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                  </div>
                              </div>
                          </div>
                      </fieldset>

                    </form>
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
