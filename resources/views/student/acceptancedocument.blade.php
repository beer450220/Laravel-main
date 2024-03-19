@extends('layouts.appstudent')

@section('content')
<title>user</title>

<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
<div class="col-md-12 my-4">
    <div class="card shadow">
      <div class="card-body">
        <h5 class="card-title">เอกสารตอบรับนักศึกษา</h5>
        <div class="container">
          <div class="row">
            <div class="col-10">
              <p class="card-text"> <tbody>
              </p>
            </div>
            <div class="col col-lg-2">
              {{-- <button type="button" class=" btn btn-outline-success fa-solid fa-square-plus">&nbsp;เพิ่มข้อมูล</button> --}}
            </div>
          </div>

      </div>
        <p class="card-text"> <tbody>
        </p>
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>ลำดับ</th>
              <th>ชื่อนักศึกษา</th>
              <th>ชื่อสถานประกอบการ</th>
              <th>สถานนะ</th>
              {{-- <th>แก้ไข</th>
              <th>ลบ</th> --}}
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2370</td>
              <td>
                <div class="progress progress-sm" style="height:3px">
                  <div class="progress-bar" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
              <td>Barry Bright</td>
              <td>ตอบรับแล้ว</td>
              {{-- <td><a ><i class="btn btn-outline-secondary fa-regular fa-pen-to-square"></i></a></td>
              <td><a ><i class="btn btn-outline-secondary fa-solid fa-trash-can "></i></a></td> --}}
            </tr>
           
          </tbody>
        </table>
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
@endsection 