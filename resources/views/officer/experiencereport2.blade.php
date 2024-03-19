@extends('layouts.officermin')

@section('content')
<title>user</title>

<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
<div class="col-md-12 my-4">
    <div class="card shadow">
      <div class="card-body">
        <h5 class="card-title">เอกสารฝึกประสบการณ์</h5>
        <form action="{{ route('searchreport2') }}" method="GET" class="form-inline">

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
              {{-- <a href="" name="keyword" value="{{ request('keyword') }}"  type="submit"  class=" btn btn-outline-warning">ค้นหาข้อมูล</a> --}}


 {{-- <a href="/officer/addestimate2" type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</a> --}}

            </div>
        <div class="container">
            <div class="row">
              <div class="col-10">
                <p class="card-text"> <tbody>
                </p>
              </div>
              <div class="col col-lg-2">
                 {{-- <button type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</button> --}}
              </div>
            </div>

        </div>
        <br>  <br>
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>ลำดับ</th>
              <th >ชื่อนักศึกษา</th>
              <th >ชื่อไฟล์</th>
              <th >ปีการศึกษา</th>
              <th >ภาคเรียน</th>
              <th >ดูเอกสาร</th>
              <th >หมายเหตุ</th>
              <th ></th>

            </tr>
          </thead>
          <tbody>
            @foreach ($report as $row)
            <tr>
              <td>{{$report->firstItem()+$loop->index}}</td>
              <td>{{$row->fname}}  {{$row->surname}} </td>
              <td  >{{$row->namefile}}</td>
              <td  >{{$row->term}}</td>
              <td  >{{$row->year}}</td>
              <td  ><a href="/fileinformdetails/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>


              <td>{{$row->annotation}}</td>

              {{-- <td><a href="/teacher/editexperiencereport2/{{$row->report_id}}" type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a></td> --}}

            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->


{{-- main role="main" class="main-content"> --}}
    {{-- <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
<div class="col-md-12 my-4">
    <div class="card shadow">
      <div class="card-body">
        <h5 class="card-title">เอกสารฝึกประสบการณ์</h5>
        <div class="container">
            <div class="row">
              <div class="col-10">
                <p class="card-text"> <tbody>
                </p>
              </div>
              <div class="col col-lg-2">
                {{-- <button type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</button> --}}
              </div>
            </div>

        </div> --}}
{{-- <div class="col-md-6 mb-6">
  <div class="card shadow">
    <div class="card-body"> --}}
      {{-- <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">รอตรวจสอบเอกสาร</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">ตรวจสอบเอกสารแล้ว</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">ตรวจสอบเอกสารไม่ผ่าน</a>
        </li>
      </ul>
      <div class="tab-content mb-1" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th>ลำดับ</th>
                <th >ชื่อนักศึกษา</th>
                <th >ชื่อไฟล์</th>
                <th >ดูเอกสาร</th>
                <th >หมายเหตุ</th>
                <th >สถานะ</th>
                <th >ตรวจสอบเอกสาร</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($report as $row)
              <tr>
                <td>{{$report->firstItem()+$loop->index}}</td>
                <td>{{$row->fname}} </td>
                <td  >{{$row->namefile}}</td>
                <td><a href="/รายงานโครงการ/{{ $row->namefile }}" class="btn btn-outline-primary fa-regular fa-circle-down"></a> </td>
                <td>{{$row->annotation}}</td>
                <td class="text-danger">{{$row->Status_report}}</td>
                <td><a href="/teacher/editexperiencereport2/{{$row->report_id}}" type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a></td>

              </tr>
              @endforeach

            </tbody>
          </table>


           </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

          <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th>ลำดับ</th>
                <th >ชื่อนักศึกษา</th>
                <th >ชื่อไฟล์</th>
                <th >ดูเอกสาร</th>

                <th >หมายเหตุ</th>
                <th >สถานะ</th>
                <th >ตรวจสอบเอกสาร</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($report as $row)
              <tr>
                <td>{{$report->firstItem()+$loop->index}}</td>
                <td>{{$row->fname}} </td>
                <td  >{{$row->namefile}}</td>
                <td><a href="/รายงานโครงการ/{{ $row->namefile }}" class="btn btn-outline-primary fa-regular fa-circle-down"></a> </td>
                <td>{{$row->annotation}}</td>
                <td class="text-danger">{{$row->Status_report}}</td>
                <td><a href="/teacher/editexperiencereport2/{{$row->report_id}}" type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a></td>

              </tr>
              @endforeach

            </tbody>
          </table>

        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">


          <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th>ลำดับ</th>
                <th >ชื่อนักศึกษา</th>
                <th >ชื่อไฟล์</th>
                <th >ดูเอกสาร</th>

                <th >หมายเหตุ</th>
                <th >สถานะ</th>
                <th >ตรวจสอบเอกสาร</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($report as $row)
              <tr>
                <td>{{$report->firstItem()+$loop->index}}</td>
                <td>{{$row->fname}} </td>
                <td  >{{$row->namefile}}</td>
                <td><a href="/รายงานโครงการ/{{ $row->namefile }}" class="btn btn-outline-primary fa-regular fa-circle-down"></a> </td>
                <td>{{$row->annotation}}</td>
                <td class="text-danger">{{$row->Status_report}}</td>
                <td><a href="/teacher/editexperiencereport2/{{$row->report_id}}" type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a></td>

              </tr>
              @endforeach

            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</div> --}}
@endsection
