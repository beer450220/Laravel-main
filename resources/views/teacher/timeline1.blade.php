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
                <h5 class="card-title">ติดตามสถานะนักศึกษา</h5>
                {{-- <p class="card-text">Add .table-hover to enable a hover state on table rows within a <tbody>
                </p> --}}
                <table class="table table-hover">
                  <thead class="thead-dark">
                    <tr>
                      <th>#</th>
                      <th>ชื่อนักศึกษา</th>
                      <th></th>
                      <th></th>
                      <th   class="text-end">ดูข้อมูล</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($timelines as $row)
                    <tr>
                      <td class="col-1 text center">{{$timelines->firstItem()+$loop->index}}</td>

                      <td>{{$row->name}}</td>
                     <td></td>
                     <td></td>
                     <td><a href="/teacher/viwetimeline/{{$row->timeline_id}}"><i class="fa-regular fa-eye fe-24"></i></a></td>

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
