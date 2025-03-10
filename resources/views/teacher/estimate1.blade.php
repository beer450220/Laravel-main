@extends('layouts.appteacher')

@section('content')
<title>รายงานผลการนิเทศ </title>

<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
<div class="col-md-12 my-4">
    <div class="card shadow">
      <div class="card-body">
        <h5 class="card-title">เอกสารผลประเมินสหกิจศึกษา</h5>
        @if(session("success6"))
        <div class="alert alert-success col-4">{{session('success6')}}</div>
@endif
@if(session("success5"))
      <div class="alert alert-danger col-4">{{session('success5')}}</div>
@endif
@if(session("success7"))
<div class="alert alert-warning col-4">{{session('success7')}} </div>
@endif
 @if(session("error"))
<div class="alert alert-danger col-4">{{session('error')}} </div>
@endif
        <form action="{{ route('searchestimate2') }}" method="GET" class="form-inline">

            <div class="form-row">
              <div class="form-group col-auto">

                <label for="search" class="sr-only">Search</label>
                <input type="text" class="form-control" name="keyword"  id="keyword" value="{{ request('keyword') }}" placeholder="Search">

              </div>

            </div>

            <div class="">
              {{-- <a href="" name="keyword" value="{{ request('keyword') }}"  type="submit"  class=" btn btn-outline-warning">ค้นหาข้อมูล</a> --}}
              <a href="/teacher/addestimate1" type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</a>
            </form>
            </div>
        <div class="container">
            <div class="row">
              <div class="col-10">
                {{-- <p class="card-text">Add <tbody>
                </p> --}}
              </div>
              <div class="col col-lg-2">
                {{-- <a href="/teacher/addestimate1" type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</a> --}}
              </div>
            </div>

        </div>
        <br>
        {{-- <style>
            tr {
                color: black; /* เปลี่ยนสีข้อความของ th เป็นสีดำ */
            }
        </style> --}}
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>ลำดับ</th>
              <th>ชื่อนักศึกษา</th>
                <th>ชื่อเอกสาร</th>

              {{-- <th>ปีการศึกษา</th>
              <th>ภาคเรียนที่</th> --}}
              <th>คะแนน</th>
              {{-- <th>สถานนะ</th> --}}
              <th>หมายเหตุ</th>
              <th>ไฟล์เอกสาร</th>
              <th>แก้ไข</th>
              {{-- <th>ลบ</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach ($supervision as $row)
            <tr>
              <td>{{$supervision->firstItem()+$loop->index}}</td>


                <td>{{$row->fname}} </td>
                <td>{{$row->namefile}}</td>
                {{-- <td>{{$row->year}}</td>
                <td>{{$row->term}}</td> --}}
              <td>{{$row->score}}</td>
              {{-- <td>
                @if ($row->Status_supervision === 'รอประเมินผล')
                    <span class="badge badge-pill badge-warning">{{ $row->Status_supervision }}</span>
                @elseif ($row->Status_supervision === 'ประเมินผลแล้ว')
                    <span class="badge badge-pill badge-success">{{ $row->Status_supervision}}</span>
                @elseif ($row->Status_supervision === 'ไม่ผ่าน')
                    <span class="badge badge-pill badge-danger">{{ $row->Status_supervision}}</span>
                @endif
            </td> --}}
              <td>{{$row->annotation}}</td>
              <td><a href="/document4/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>
              <td><a href="/teacher/editestimate1/{{$row->supervision_id}} "type="button" class="btn btn-outline-secondary fe fe-edit fe-16"></a></td>
              {{-- <td><a href="/teacher/deletes7/{{$row->supervision_id}} "type="button" class="btn btn-outline-danger fe fe-trash-2 fe-16"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></td> --}}
            </tr>

            @endforeach
          </tbody>
        </table>
        {!!$supervision->links('pagination::bootstrap-5')!!}
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
@endsection
