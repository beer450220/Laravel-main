







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
                  <h5 class="modal-title text center " id="varyModalLabel">แก้ไขข้อมูล</h5>
                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> --}}
                </div>


                <div class="modal-body">


                  <form method="POST" action="{{url('/officer/update/'.$establishments->id)}}" enctype="multipart/form-data">
                    @csrf

                    <img src="/image/{{ $establishments->images }}" class="img-responsive rounded mx-auto d-block" style="max-height: 300px; max-width: 200px;" alt="" srcset="">
                    {{-- @method("put") --}}
                    <div class="row">
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">ชื่อสถานประกอบการ</label>
                        <input type="text" class="form-control" name="em_name" value="{{$establishments->em_name}}" >
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">ที่อยู่</label>
                        <input type="text" class="form-control"	name="em_address" value="{{$establishments->em_address}}" placeholder="" aria-label="Last name">
                      </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">เบอร์โทร</label>
                        <input type="text" class="form-control" name="em_telephone"value="{{$establishments->em_telephone}}" placeholder="" aria-label="Last name">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">อีเมล์</label>
                        <input type="text" class="form-control"name="em_email"value="{{$establishments->em_email}}" placeholder="" aria-label="First name">
                      </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">ชื่อผู้ติดต่อ</label>
                        <input type="text" class="form-control"name="em_contact_name"value="{{$establishments->em_contact_name}}" placeholder="" aria-label="Last name">
                      </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">อีเมล์ผู้ติดต่อ</label>
                        <input type="text" class="form-control"name="em_Contact_email"value="{{$establishments->em_Contact_email}}" placeholder="" aria-label="Last name">
                      </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                          <label for="recipient-name" class="col-form-label">ตำแหน่งผู้ติดต่อ</label>
                          <input type="text" class="form-control"name="em_contactposition" placeholder="" aria-label="First name"value="{{$establishments->em_contactposition}}">
                        </div>
                        <div class="col-md-4">
                            <label for="recipient-name" class="col-form-label">หลักสูตร</label>
                            <select class="form-select" id="validationSelect1" name="major_id" >
                                <option value="">กรุณาเลือกหลักสูตร</option>
                                @foreach ($major as $row)
                                {{-- <optgroup label="Mountain Time Zone"> --}}
                                  <option value="{{$row->major_id}}"{{$row->major_id==$establishments->major_id ?'selected':''}}>{{$row->name_major}}  ({{$row->faculty}})</option>
                                  {{-- <option value="{{$row->major_id}}">{{$row->major}}</option> --}}
                                </optgroup>

                                @endforeach
                              </select>

                          </div>


                <div   div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">รูปหน่วยงาน</label>
                        <input type="file" class="form-control"@error('images') is-invalid @enderror  name="images"value="{{$establishments->images}}" ><br>

                        @error('images')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      </div>
                      </div>

                      <div class="row">

                        <div class="col-md-4">
                            <label for="recipient-name" class="col-form-label">หมวดหมู่</label>
                            <select class="form-select" id="validationSelect1" name="category_id" >
                                <option value="">กรุณาเลือกหมวดหมู่</option>
                                @foreach ($major1 as $row)
                                {{-- <optgroup label="Mountain Time Zone"> --}}
                                  <option value="{{$row->category_id}}"{{$row->category_id==$establishments->category_id ?'selected':''}}>{{$row->name}}  </option>
                                  {{-- <option value="{{$row->major_id}}">{{$row->major}}</option> --}}
                                </optgroup>

                                @endforeach
                              </select>

                          </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="recipient-name" class="col-form-label">รายละเอียดงาน</label>
                            <textarea  rows="4" cols="50" name="em_job"  >  {{$establishments->em_job}}
                            </textarea>
                          </div>

                    </div>








              </div>
                <div class="modal-footer">
                    <a href="/officer/establishmentuser1" class="btn mb-2 btn-primary">ย้อนกลับ</a>
                  <a href="" type="reset"  class="btn mb-2 btn-secondary" data-dismiss="modal">ยกเลิก</a>
                  <button type="submit" class="btn mb-2 btn-primary"onclick="return confirm('ยืนยันการแก้ไขข้อมูล !!');">ตกลง</button>
                </div></form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>



    {{-- <div class="col-md-12 mb-12">





      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content ">
          <div class="modal-header bg-dark text-white ">
            <h5 class="modal-title text center " id="varyModalLabel">ลบรูปภาพข้อมูล</h5>

          </div>


          <div class="modal-body">




              <div class="row">
                <div class="col-md-4 ">
                  <div class="col-lg-3 ">
                    <br>
                    <img src="/image/{{ $establishments->images }}" class="img-responsive" style="max-height: 200px; max-width: 200px;" alt="" srcset="">

                   <form action="/deleteimage/{{ $establishments->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('delete')
                    <div class="col">

                    </div>




                    <br>
                </div>
                <button class="   btn btn-outline-danger  ">X</button>    </form>
              </div>
            </div>







        </div>
          <div class="modal-footer">


          </div></form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div> --}}








@endsection
