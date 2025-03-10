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
        <h5 class="card-title">ดาวน์โหลดเอกสาร</h5>@if(session("success6"))
        <div class="alert alert-success col-4">{{session('success6')}}
@endif
@if(session("success5"))
      <div class="alert alert-danger col-4">{{session('success5')}}
@endif
@if(session("success7"))
<div class="alert alert-warning col-4">{{session('success7')}}
@endif
 @if(session("error"))
<div class="alert alert-danger col-4">{{session('error')}}
@endif
      </div>

        <form action="{{ route('searchschedule') }}" method="GET" class="form-inline">

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


              <a href="/officer/addschedule" type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</a>

            </div>
        <div class="container">
            <div class="row">
              <div class="col-10">
                <p class="card-text"> <tbody>
                </p>
              </div>
              <div class="col col-lg-2">

              </div>
            </div>

        </div>
        <br><br>
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>ลำดับ</th>

              <th>ชื่อเอกสาร</th>
               <th>ไฟล์เอกสาร</th>
              {{-- <th>ปีการศึกษา</th>
              <th>ภาคเรียน</th> --}}

              <th>สถานะ</th>

              <th>แก้ไข</th>
              {{-- <th>ลบ</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach ($schedules as $row)
            <tr>
              <td class="col-1 text center">{{$schedules->firstItem()+$loop->index}}</td>

              <td>{{$row->namefile}}</td>
              <td><a href="../download/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>
              <td>
                @if ($row->status === '1')
                    <span class="badge badge-pill badge-warning">สำหรับนักศึกษา</span>
                @elseif ($row->status === '2')
                    <span class="badge badge-pill badge-success">สำหรับอาจารย์</span>
                @elseif ($row->status === '3')
                    <span class="badge badge-pill badge-danger">สำหรับสถานประกอบการ</span>
                @endif
            </td>
              {{-- <td>{{$row->term}}</td> --}}
              <td><a href="/officer/editschedule1/{{$row->id}}" type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a></td>
              {{-- <td><a href="/officer/deleschedule1/{{$row->id}}"type="button" class="btn btn-outline-danger fa-solid fa-trash-can"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></td> --}}
            </tr>

            @endforeach
          </tbody>
        </table>
        {!!$schedules->links('pagination::bootstrap-5')!!}
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
@endsection
