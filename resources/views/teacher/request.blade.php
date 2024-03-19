@extends('layouts.appteacher')

@section('content')
<title>ยื่นประสงค์ฝึกประสบการณ์ </title>

<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
<div class="col-md-12 my-4">
    <div class="card shadow">
      <div class="card-body">
        <h5 class="card-title">ยื่นประสงค์ฝึกประสบการณ์</h5>
        <form action="{{ route('searchrequest') }}" method="GET" class="form-inline">

            <div class="form-row">
              <div class="form-group col-auto">

                <label for="search" class="sr-only">Search</label>
                <input type="text" class="form-control" name="keyword"  id="keyword" value="{{ request('keyword') }}" placeholder="Search">

              </div>

            </div>

            <div class="">
              {{-- <a href="" name="keyword" value="{{ request('keyword') }}"  type="submit"  class=" btn btn-outline-warning">ค้นหาข้อมูล</a> --}}
              {{-- <a href="/teacher/addes1" type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</a> --}}
            </form>
            </div>
        <div class="container">
            <div class="row">
              <div class="col-10">
                {{-- <p class="card-text">Add <tbody>
                </p> --}}
              </div>
              <div class="col col-lg-2">
                {{-- <a href="/teacher/addes1" type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</a> --}}
              </div>
            </div>

        </div>
        <br>
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>ลำดับ</th>
                <th>ชื่อนักศึกษา</th>

                <th>ปีการศึกษา</th>
                <th>ภาคเรียนที่</th>
                <th>สถานะ</th>
                <th>หมายเหตุ</th>
              <th>ดูข้อมูล</th>
              <th>ยืนยันข้อมูล</th>
              {{-- <th>ลบ</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $row)
            <tr>
              <td>{{$users->firstItem()+$loop->index}}</td>
              <td>{{$row->fname}}   {{$row->surname}}</td>
              <td>{{$row->year}}</td>
              <td>{{$row->term}}</td>
              <td>
                @if ($row->status === 'รออนุมัติ')
                <span class="badge rounded-pill bg-warning text-dark">{{ $row->status}}</span>
            @elseif ($row->status === 'อนุมัติแล้ว')
                <span class="badge rounded-pill bg-success ">{{ $row->status}}</span>
            @elseif ($row->status === 'ไม่อนุมัติ')
                <span class="badge rounded-pill bg-danger ">{{ $row->status}}</span>
            @endif

            </td>
            <td>{{$row->annotation}}</td>
              <td><a href="/teacher/view1/{{$row->id}} "type="button" class="btn btn-outline-primary fa-solid fa-eye fe-16"></a></td>
              {{-- <td><a href="/ไฟล์เอกสารขออนุญาตนิเทศงาน/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td> --}}
              <td>
                @if ($row->status === 'รออนุมัติ')
                <a href="/teacher/confirm/{{$row->id}} "type="button"onclick="return confirm('ยืนยันข้อมูล !!');" class="btn btn-outline-success fa-solid fa-check fe-16">อนุมัติ</a>
                <a href="/teacher/editconfirm1/{{$row->id}} "type="button" class="btn btn-outline-danger fa-solid fa-xmark fe-16">ไม่อนุมัติ</a>
                @elseif ($row->status === 'อนุมัติแล้ว')

            @elseif ($row->status === 'ไม่อนุมัติ')

            @endif


            </td>
              {{-- <td><a href="/teacher/deletes1/{{$row->id}} "type="button" class="btn btn-outline-danger fe fe-trash-2 fe-16"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></td> --}}
            </tr>

            @endforeach
          </tbody>
        </table>
      </div>{!!$users ->links('pagination::bootstrap-4')!!}
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
@endsection
