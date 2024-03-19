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
        <h5 class="card-title">เอกสารขออนุญาตนิเทศงาน </h5>
        <form action="{{ route('searches1') }}" method="GET" class="form-inline">

            <div class="form-row">
              <div class="form-group col-auto">

                <label for="search" class="sr-only">Search</label>
                <input type="text" class="form-control" name="keyword"  id="keyword" value="{{ request('keyword') }}" placeholder="Search">

              </div>

            </div>

            <div class="">
              {{-- <a href="" name="keyword" value="{{ request('keyword') }}"  type="submit"  class=" btn btn-outline-warning">ค้นหาข้อมูล</a> --}}
              <a href="/teacher/addes1" type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</a>
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
                <th>ชื่อเอกสาร</th>



                <th>สถานะ</th>
              <th>ไฟล์เอกสาร</th>
              <th>แก้ไข</th>
              <th>ลบ</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($supervision as $row)
            <tr>
              <td>{{$supervision->firstItem()+$loop->index}}</td>
              <td>{{$row->namefile}}</td>
              <td>
                @if ($row->status === 'รออนุมัติ')
                <span class="badge rounded-pill bg-warning text-dark">{{ $row->status}}</span>
            @elseif ($row->status === 'อนุมัติแล้ว')
                <span class="badge rounded-pill bg-success ">{{ $row->status}}</span>
            @elseif ($row->status === 'ไม่อนุมัติ')
                <span class="badge rounded-pill bg-danger ">{{ $row->status}}</span>
            @endif

                </td>


              <td><a href="/ไฟล์เอกสารขออนุญาตนิเทศงาน/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>
              <td><a href="/teacher/edites1/{{$row->id}} "type="button" class="btn btn-outline-secondary fe fe-edit fe-16"></a></td>
              <td><a href="/teacher/deletes1/{{$row->id}} "type="button" class="btn btn-outline-danger fe fe-trash-2 fe-16"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></td>
            </tr>

            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
@endsection
