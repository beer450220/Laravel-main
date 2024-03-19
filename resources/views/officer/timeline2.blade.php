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
        <h5 class="card-title">ติดตามสถานะนักศึกษา</h5>
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
        <br>
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>#</th>
              <th>ชื่อนักศึกษา</th>
             
              <th   class="">ดูข้อมูล</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($timelines as $row)
            <tr>
              <td class="col-1 text center">{{$timelines->firstItem()+$loop->index}}</td>

              <td>{{$row->name}}</td>
             
             <td class=""><a href="/officer/viwetimeline2/{{$row->timeline_id}}"><i class="fa-regular fa-eye fe-16"></i></a></td>

            </tr>
            
    @endforeach
          </tbody>
        </table>
        {!!$timelines->links('pagination::bootstrap-5')!!}
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
@endsection
