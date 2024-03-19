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
        <h5 class="card-title">นิเทศงาน</h5>
        <div class="container">
            <div class="row">
              <div class="col-10">
                <p class="card-text"> <tbody>
                </p>
              </div>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <div class="btn-group   " role="group" aria-label="Basic example">

                <a href="/officer/addsupervision" type="button" class=" btn btn-outline-primary">เพิ่มข้อมูล</a>
                <a href="/officer/pdf" target="_BLANK" type="button" class="btn btn-outline-danger">Pdf</a>
                {{-- <a href="/officer/Excel" type="button" class="btn btn-outline-success">Excel</a> --}}

              </div>
              {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="/officer/addsupervision" type="button" class=" btn btn-outline-primary">เพิ่มข้อมูล</a>
                <a href="/officer/addsupervision" type="button" class=" btn btn-outline-success">PDF</a>
              </div>
            </div> --}}
          </div>
        </div> </div>
        <br>
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>ลำดับ</th>
              <th>วันเวลาการนิเทศ</th>
              <th>ข้อมูลนักศึกษา</th>


              <th>ปีการศึกษา</th>
              <th> ภาคเรียน</th>

              <th>สถานะ</th>
              <th>แก้ไข</th>
              <th>ลบ</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($events as $row)
            <tr>
              <td class="col-1 text center">{{$events->firstItem()+$loop->index}}</td>
              <td>{{$row->start}}</td>
              <td><a href="/officer/editsupervision1/{{$row->id}}" type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a></td>


              <td>{{$row->start}}</td>
              <td></a>{{$row->student_name}}</td>
              <td>{{$row->fname }}  {{$row->surname }}</td>
              <td><a href="/officer/editsupervision1/{{$row->id}}" type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a></td>
              <td><a href="/officer/deletSupervise/{{$row->id}}"type="button" class="btn btn-outline-danger fa-solid fa-trash-can"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></td>
            </tr>

            @endforeach
          </tbody>
        </table>
        {!!$events->links('pagination::bootstrap-5')!!}
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
@endsection
