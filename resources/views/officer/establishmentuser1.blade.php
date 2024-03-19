@extends('layouts.officermin')

@section('content')
{{-- @yield('content') --}}



<div class="wrapper">

    <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
            @if(session("success"))
            <div class="alert alert-success col-4">{{session('success')}}
@endif
   @if(session("success1"))
            <div class="alert alert-danger col-4">{{session('success1')}}
@endif

            </div>


            <div class="col-md-12 my-4">
                <div class="card shadow">
                  <div class="card-body">
                    {{-- <div class="toolbar row mb-3"> --}}
                      <div class="col">
                           <h2 class="h4 mb-1">สถานประกอบการ</h2><br>
                        <form action="{{ route('searchestablishment') }}" method="GET" class="form-inline">

                          <div class="form-row">
                            <div class="form-group col-auto">
  {{-- <form action="{{ route('search1') }}" method="GET"> --}}
                              <label for="search" class="sr-only">Search</label>
                              <input type="text" class="form-control" name="keyword"  id="keyword" value="{{ request('keyword') }}" placeholder="Search">
                              {{-- <input type="text" class="form-control" name="search"  id="keyword" value="" placeholder="Search"> --}}
                            {{-- </form> --}}
                            {{-- <input type="text" name="keyword" id="keyword" class="form-control" value="{{ request('keyword') }}"placeholder="Search"> --}}
                            </div>
                            {{-- <div class="form-group col-auto ml-3">
                              <label class="my-1 mr-2 sr-only" for="inlineFormCustomSelectPref">Status</label>
                              <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option selected>Choose...</option>
                                <option value="1">Processing</option>
                                <option value="2">Success</option>
                                <option value="3">Pending</option>
                                <option value="3">Hold</option>
                              </select>
                            </div> --}}

                          </div>

                          <div class="">
                            <a href="" name="keyword" value="{{ request('keyword') }}"  type="submit"  class=" btn btn-outline-warning">ค้นหาข้อมูล</a>




                          </div>
                          <div class="col col-lg-2">
                            {{-- <a href="/officer/addestablishmentuser1"  type="button"  class=" btn btn-outline-success"data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">เพิ่มข้อมูล</a> --}}
                            <a href="/officer/addestablishmentuser1"  type="button"  class=" btn btn-outline-success">เพิ่มข้อมูล</a>
                          </div> </form>
                        </div>


                      {{-- <div class="col ml-auto">
                        <div class="dropdown float-right">
                          <button class="btn btn-primary float-right ml-3" type="button">Add more +</button>
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="actionMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
                          <div class="dropdown-menu" aria-labelledby="actionMenuButton">
                            <a class="dropdown-item" href="#">Export</a>
                            <a class="dropdown-item" href="#">Delete</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </div>
                      </div> --}}
<br>

                    <!-- table -->
                    <table class="table table-bordered ">
                      <thead class="table-dark ">
                        <tr >



                          <th >ลำดับ</th>
                          <th >ชื่อสถานประกอบการ</th>
                          {{-- <th colspan="1">ที่อยู่</th>
                          <th colspan="1">เบอร์โทร</th> --}}
                          {{-- <th >รูปหน่วยงาน</th> --}}
                          <th >ดูข้อมูล</th>
                          <th >แก้ข้อมูล</th>
                          <th s>ลบข้อมูล</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($establishments as $row)
                        <tr>

                          <td >{{$establishments->firstItem()+$loop->index}}</td>
                          <td>{{$row->em_name}}</td>
                         {{--  <td>{{$row->address}}</td>
                          <td>{{$row->phone}}</td>--}}
                          {{-- <td><img src="/image/{{ $row->images }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset=""></td> --}}

                          <td class=""><a href="/officer/view/{{$row->id}}" class="btn mb btn-outline-primary fa-solid fa-eye  "></a></td>
                          <td ><a href="/officer/establishmentuser1/{{$row->id}}" class="btn mb btn-outline-secondary fa-solid fa-pen-to-square  "></a></td>
                          <td ><a href="/officer/delete/{{$row->id}}" class="btn mb btn-outline-danger fa-solid fa-trash-can  "onclick="return confirm('ยืนยันการลบข้อมูล !!');"></a></td>
                          {{-- {{url('/officer/editestablishmentuser1/'.$row->id)}} --}}

                        </tr>


                        @endforeach


                          {{-- @endforeach --}}
                      </tbody>
                    </table>
                    {!!$establishments->links('pagination::bootstrap-5')!!}
                  </div>
                </div>
              </div> <!-- Bordered table -->
            </div> <!-- end section -->

   {{-- เพิ่มข้อมูล --}}
            {{-- <div class="col-md-4 mb-4">




              <div class="modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                  <div class="modal-content ">
                    <div class="modal-header ">
                      <h5 class="modal-title text center" id="varyModalLabel">เพิ่มข้อมูล</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>


                    <div class="modal-body">


                      <form method="POST" action="{{ route('addestablishment') }}"enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                          <div class="col-md-4">
                            <label for="recipient-name" class="col-form-label">ชื่อสถานประกอบการ</label>
                            <input type="text" class="form-control " name="em_name" placeholder="" aria-label="First name "required autocomplete="fname">
                          </div>
                          <div class="col-md-4">
                            <label for="recipient-name" class="col-form-label">ที่อยู่</label>
                            <input type="text" class="form-control"	name="em_address" placeholder="" aria-label="Last name"required autocomplete="fname">
                          </div>
                          <div class="col-md-4">
                            <label for="recipient-name" class="col-form-label">เบอร์โทร</label>
                            <input type="text" class="form-control" name="em_telephone" placeholder="" aria-label="Last name"required autocomplete="fname">
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-md-4">
                            <label for="recipient-name" class="col-form-label">อีเมล์</label>
                            <input type="email" class="form-control" placeholder=""name="em_email" aria-label="First name"required autocomplete="fname">
                          </div>
                          <div class="col-md-4">
                            <label for="recipient-name" class="col-form-label">ชื่อผู้ติดต่อ</label>
                            <input type="text" class="form-control" placeholder=""name="em_contact_name" aria-label="Last name"required autocomplete="fname">
                          </div>
                          <div class="col-md-4">
                            <label for="recipient-name" class="col-form-label">อีเมล์ผู้ติดต่อ</label>
                            <input type="text" class="form-control" placeholder="" name="em_Contact_email" aria-label="Last name"required autocomplete="fname">
                          </div>

                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <label for="recipient-name" class="col-form-label">รูปภาพสถานประกอบการ</label>
                            <input type="file" class="form-control"name="images" placeholder="" aria-label="First name"required autocomplete="fname">
                          </div>
                          @error('images')
                          <span class="invalid-feedback" >
                              {{ $message }}
                          </span>
                      @enderror
                      <div class="col-md-4">
                            <label for="recipient-name" class="col-form-label">ตำแหน่งผู้ติดต่อ</label>
                            <input type="text" class="form-control" placeholder=""name="em_contactposition" aria-label="Last name"required autocomplete="fname">
                          </div>
                          <div class="col-md-4">
                            <label for="recipient-name" class="col-form-label">หลักสูตร</label>
                            <select class="form-control" id="validationSelect1" name="major_id" >
                                <option value="">กรุณาเลือกหลักสูตร</option> --}}
                                {{-- @foreach ($major as $row) --}}
                                {{-- <optgroup label="Mountain Time Zone"> --}}
                                  {{-- <option value="{{$row->major_id}}">{{$row->name_major}}  ({{$row->faculty}})</option> --}}
                                  {{-- <option value="{{$row->major_id}}">{{$row->major}}</option> --}}
                                </optgroup>

                                {{-- @endforeach --}}
                              {{-- </select>
                          </div>


                        </div>
                        <div class="row">
  <div class="col-md-4">
                            <label for="recipient-name" class="col-form-label">รายละเอียดงาน</label>
                            <textarea rows="4" cols="50" name="em_job"  >
                                </textarea>
                          </div>
                    </div>
                </div>
                    <div class="modal-footer">

                      <button type="reset" class="btn mb-2 btn-secondary" >ยกเลิก</button>
                      <button type="submit" class="btn mb-2 btn-primary">ตกลง</button>
                    </div></form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div> --}}










@endsection
