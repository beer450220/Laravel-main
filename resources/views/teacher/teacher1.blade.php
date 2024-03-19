@extends('layouts.appteacher')

@section('content')
<title>รายชื่ออาจารย์ </title>

<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
<div class="col-md-12 my-4">
    <div class="card shadow">
      <div class="card-body">
        <h5 class="card-title">รายชื่ออาจารย์ </h5>
        <div class="container">
            <div class="row">
              <div class="col-10">
                {{-- <p class="card-text">Add <tbody>
                </p> --}}
              </div>
              <div class="col col-lg-2">
                <a href="/teacher/addteacher1" type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</a>
              </div>
            </div>

        </div>
        <br>
        @if ($errors->any())
        <div class="alert alert-danger col-md-4">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $success1 }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>ลำดับ</th>

              <th>ชื่ออาจารย์</th>



              <th>แก้ไข</th>
              <th>ลบ</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($supervision as $row)
            <tr>
              <td>{{$supervision->firstItem()+$loop->index}}</td>
              <td>{{$row->name}}</td>

              {{-- <td>{{$row->name_major}}</td> --}}



              <td><a href="/teacher/editteacher1/{{$row->id}} "type="button" class="btn btn-outline-secondary fe fe-edit fe-16"></a></td>
              <td><a href="/teacher/deletteacher/{{$row->id}} "type="button" class="btn btn-outline-danger fe fe-trash-2 fe-16"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></a></td>
            </tr>

            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
@endsection
