







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

        <div class="col-md-12 mb-12">





            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content ">
                <div class="modal-header bg-dark text-white ">
                  <h5 class="modal-title text center " id="varyModalLabel">ดูข้อมูลนักศึกษา</h5>
                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> --}}
                </div>


                <div class="modal-body">


                  <form method="POST" action="">
                    @csrf

                    {{-- <img src="/image/{{ $establishments->images }}" class="img-responsive rounded mx-auto d-block" style="max-height: 300px; max-width: 200px;" alt="" srcset=""> --}}
                    <br>


                    <div class="row">

                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">รหัสนักศึกษา</label><br>

                        <input type="text" class="form-control" name="annotation" value=" {{$establishments->student_id}}"disabled required>
                    </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">ชื่อนักศึกษา</label><br>

                        <input type="text" class="form-control" name="annotation" value=" {{$establishments->fname}}"disabled required>
                      </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">อีเมล์</label><br>
                        <input type="text" class="form-control" name="annotation" value="{{$establishments->email}}"disabled required>

                      </div>
                    </div>
                    <br>
                    <div class="row">

                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">เกรดเฉลี่ย</label><br>
                        <input type="text" class="form-control" name="annotation" value="{{$establishments->GPA}}"disabled required>

                      </div>

                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">ที่อยู่</label><br>
                        <input type="text" class="form-control" name="annotation" value="{{$establishments->address}}"disabled required>

                      </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">หลักสูตร</label><br>
                        {{-- <input type="text" class="form-control" name="annotation" value="{{}}"disabled required> --}}
                        <select class="form-control " id="validationSelect1" name="major_id"disabled >
                          <option value="">กรุณาเลือกหลักสูตร</option>
                          <option value="-"@if($establishments->major_id=="-") selected @endif required>-</option>
                          @foreach ($users as $row)
                          {{-- <optgroup label="Mountain Time Zone"> --}}
                            <option value="{{$row->major_id}}"{{$row->major_id==$establishments->major_id ?'selected':''}}>{{$row->name_major}}  ({{$row->faculty}})</option>
                            {{-- <option value="{{$row->major_id}}">{{$row->major}}</option> --}}
                          </optgroup>

                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="row">

                        <div class="col-md-2">
                            {{-- <label for="recipient-name" class="col-form-label">ปีการศึกษา</label><br>
                            <input type="text" class="form-control" name="annotation" value=" {{$establishments->year}}"disabled required> --}}
                            <label for="recipient-name" class="col-form-label">เบอร์โทร</label><br>
                            <input type="text" class="form-control" name="annotation" value=" {{$establishments->telephonenumber}}"disabled required>
                          </div>
                        <div class="row">
                        <div class="col-md-7">
                          <label for="recipient-name" class="col-form-label">ภาคเรียนที่</label><br>

                          {{-- <textarea  rows="4" cols="50" name="em_job" disabled readonly >
                        </textarea> --}}
                         <input type="text" class="form-control" name="annotation" value=" {{$establishments->term}}"disabled required>

                        </div>
                      </div>  </div>
                </div>
                <div class="modal-footer">

                  <a href="/officer/student" class="btn mb-2 btn-primary">ย้อนกลับ</a>
                </div></form>
              </div>
            </div>
          </div>
        </div>




@endsection
