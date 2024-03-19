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
        <h5 class="card-title">จัดอาจารย์ที่ปรึกษา</h5>
        <div class="container">
            <div class="row">
              <div class="col-10">
                {{-- <p class="card-text">Add <tbody>
                </p> --}}
              </div>
              <div class="col col-lg-2">
                {{-- <button type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</button> --}}
              </div>
            </div>

        </div>
        <br>
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>#</th>
              <th>รายชื่อนักศึกษา</th>
              <th>ชื่อหน่วยงาน</th>
              <th>สถานะ</th>
              <th>แก้ไข</th>
              <th>ลบ</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>
             หห
              </td>
              <td>หห</td>
              <td>หห</td>
              <td><button type="button" class="btn btn-outline-secondary fe fe-edit fe-16"></button></td>
              <td><button type="button" class="btn btn-outline-danger fe fe-trash-2 fe-16"></td>
            </tr>


          </tbody>
        </table>
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
@endsection
