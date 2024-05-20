







@extends('layouts.officermin1')

@section('content')
@yield('content')


{{-- <div class="wrapper">

    <main role="main" class="main-content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">

            <div class="row">

              <div class="col-md-12 my-4">

                <div class="card shadow">
                  <div class="card-body">
                    <div class="toolbar row mb-3">
                      <div class="col">
                           <h2 class="h4 mb-1">สถานประกอบการ</h2><br>
                        <form class="form-inline">
                          <div class="form-row">
                            <div class="form-group col-auto">

                              <label for="search" class="sr-only">Search</label>
                              <input type="text" class="form-control" id="search" value="" placeholder="Search">
                            </div>


                          </div>
                          <div class="col col-lg-2">
                            <a href="ss"  type="button"  class=" btn btn-outline-success"data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">เพิ่มข้อมูล</a>
                          </div>
                        </div>
                        </form>
                      </div>

                    </div>
                    @if(session("success"))
                <div class="alert alert-success">{{session('success')}}
@endif

                </div>

                    <table class="table table-bordered">
                      <thead class=table-dark>
                        <tr role="row">



                          <th >ลำดับ</th>
                          <th colspan="1">ชื่อสถานประกอบการ</th>
                          <th colspan="1">ที่อยู่</th>
                          <th colspan="1">เบอร์โทร</th>
                          <th colspan="1">ดูข้อมูล</th>
                          <th colspan="1">แก้ข้อมูล</th>
                          <th scope="col-2">ลบข้อมูล</th>
                        </tr>
                      </thead>
                      <tbody>


                        <tr>


                          <td class="col-1 "><a href="ss" class="btn mb btn-outline-primary fa-solid fa-eye  "data-toggle="modal" data-target="#varyModal1" data-whatever="@mdo"></a></td>
                          <td class="col-1 "><a href="" class="btn mb btn-outline-secondary fa-solid fa-pen-to-square  "data-toggle="modal" data-target="#varyModal2" data-whatever="@mdo"></a></td>
                          <td class="col-1"><a href="" class="btn mb btn-outline-danger fa-solid fa-trash-can "></a></td>


                        </tr>



                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
        <header class="bg-dark text-white d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">

            <a  class="d-flex align-items-center col-md-3 mb-2 mb-md-0  text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>

            </a>
        {{-- ระบบสารสนเทศสหกิจศึกษา คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏอุตรดิตถ์ --}}
            <ul class="nav col-8 col-md-auto mb-2 justify-content-center mb-md-0">
              <li><a href="" class="nav-link px-2 text-white"><h3> ระบบสารสนเทศสหกิจศึกษา คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏอุตรดิตถ์</h3></a></li>
              {{-- <li><a href="คู่มือการใช้งาน.pdf" target="_blank" class="nav-link px-2 text-white">คู่มือการใช้งาน</a></li> --}}
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
              {{-- <a type="button"href="/cooperative1" class="btn btn-outline-primary me-2"> {{ Auth::user()->username }}</a>
              <a type="button" href="/login" class="btn btn-outline-warning me-2">ล็อกอิน</a> --}}
            </div>
          </header>
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


                  <form method="POST" action="">
                    @csrf

                    <img src="/image/{{ $establishments->images }}" class="img-responsive rounded mx-auto d-block" style="max-height: 300px; max-width: 200px;" alt="" srcset="">
                    <br>


                    <div class="row">

                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">ชื่อสถานประกอบการ</label><br>

                        <input type="text" class="form-control" name="annotation" value=" {{$establishments->em_name}}"disabled required>
                    </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">ที่อยู่</label><br>

                        <input type="text" class="form-control" name="annotation" value=" {{$establishments->em_address}}"disabled required>
                      </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">เบอร์โทร</label><br>
                        <input type="text" class="form-control" name="annotation" value=" {{$establishments->em_telephone}}"disabled required>

                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">อีเมล์</label><br>
                        <input type="text" class="form-control" name="annotation" value="{{$establishments->em_email}}"disabled required>

                      </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">ชื่อผู้ติดต่อ</label><br>
                        <input type="text" class="form-control" name="annotation" value="{{$establishments->em_contact_name}}"disabled required>

                      </div>

                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">อีเมล์ผู้ติดต่อ</label><br>
                        <input type="text" class="form-control" name="annotation" value="{{$establishments->em_Contact_email}}"disabled required>

                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                          <label for="recipient-name" class="col-form-label">ตำแหน่งผู้ติดต่อ</label><br>
                          <input type="text" class="form-control" name="annotation" value="{{$establishments->em_contactposition}}"disabled required>

                        </div>
                        <div class="col-md-4">
                            <label for="recipient-name" class="col-form-label">เว็บไซต์</label><br>
                            <input type="text" class="form-control" name="annotation" value=" {{$establishments->website}}"disabled required>

                          </div>
                        <div class="row">
                        <div class="col-md-4">
                          <label for="recipient-name" class="col-form-label">รายละเอียดงาน</label><br>

                          {{-- <textarea  rows="4" cols="50" name="em_job" disabled readonly >
                        </textarea> --}}
{{$establishments->em_job}}
                        </div>
                      </div>
                </div>
                <div class="modal-footer">

                  <a href="/teacher/establishmentuser1" class="btn mb-2 btn-primary">ย้อนกลับ</a>
                </div></form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a  class="nav-link px-2 text-muted">หลักสูตรวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏอุตรดิตถ์</a></li>

        </ul>
        <p class="text-center text-muted">© 2024 Company, Inc</p>
      </footer>


@endsection
