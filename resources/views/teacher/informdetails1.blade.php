@extends('layouts.appteacher')

@section('content')
<title>user</title>

<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
<div class="col-md-12 my-4">
    <div class="card shadow">
      <div class="card-body">
        <h5 class="card-title">เอกสารแจ้งรายละเอียดการปฎิบัติงาน</h5>
        <form action="{{ route('searchinformdetails0') }}" method="GET" class="form-inline">

            <div class="form-row">
              <div class="form-group col-auto">

                <label for="search" class="sr-only">Search</label>
                <input type="text" class="form-control" name="keyword"  id="keyword" value="{{ request('keyword') }}" placeholder="Search">

              </div>

            </div>

            <div class="">
              {{-- <a href="" name="keyword" value="{{ request('keyword') }}"  type="submit"  class=" btn btn-outline-warning">ค้นหาข้อมูล</a> --}}
            </form>
            </div>

        <div class="container">
            <div class="row">
              <div class="col-10">
                {{-- <p class="card-text">Add <tbody>
                </p> --}}
              </div>
              {{-- <div class="col col-lg-2">
                <button type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</button>
              </div> --}}
            </div>

        </div>

<br>



        <table class="table table-hover ">
          <thead class="thead-dark ">
            <tr>
              <th>#</th>
               <th>ชื่อนักศึกษา</th>
              <th>ชื่อเอกสาร</th>
              <th>ปีการศึกษา</th>
              <th>ภาคเรียนที่</th>
              <th>เอกสารแจ้ง</th>
              {{-- <th>สถานะ</th> --}}
              {{-- <th>ดูข้อมูล</th> --}}
              {{-- <th>ลบ</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach ($informdetails as $row)
            <tr>
              <td>{{$informdetails->firstItem()+$loop->index}}</td>
              <td>{{$row->fname}} {{$row->surname}}</td>
              <td>{{$row->namefile}}</td>
              <td>{{$row->year}}</td>
               <td>{{$row->term}}</td>
              <td><a href="/fileinformdetails/{{ $row->files }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>
              {{-- <td class="text-danger">{{$row->Status_informdetails}}</td> --}}
              {{-- <td><a href="/teacher/viewinformdetails1/{{$row->informdetails_id}}" type="button" class="btn btn-outline-secondary fa-regular fa-eye fe-16"></a></td> --}}

              {{-- <td><button type="button" class="btn btn-outline-danger fe fe-trash-2 fe-16"></td> --}}
            </tr>

            @endforeach
          </tbody>
        </table>
      </div>{!!$informdetails->links('pagination::bootstrap-4')!!}
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
@endsection
