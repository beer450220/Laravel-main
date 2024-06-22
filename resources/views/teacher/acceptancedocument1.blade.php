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
        <h5 class="card-title">เอกสารตอบรับนักศึกษา</h5>
        <form action="{{ route('searchacceptancedocument2') }}" method="GET" class="form-inline">

            <div class="form-row">
              <div class="form-group col-auto">
{{-- <form action="{{ route('search1') }}" method="GET"> --}}
                <label for="search" class="sr-only">Search</label>
                <input type="text" class="form-control" name="keyword"  id="keyword" value="{{ request('keyword') }}" placeholder="Search">
               {{-- <input type="text" class="form-control" name="search"  id="keyword" value="" placeholder="Search"> --}}
              {{-- </form> --}}
              {{-- <input type="text" name="keyword" id="keyword" class="form-control" value="{{ request('keyword') }}"placeholder="Search"> --}}
              </div>
              {{-- <div class="form-group col-auto ml-3">
                <label class="my-1 mr-2 sr-only" for="inlineFormCustomSelectPref">Status</label>
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                  <option selected>Choose...</option>
                  <option value="1">Processing</option>
                  <option value="2">Success</option>
                  <option value="3">Pending</option>
                  <option value="3">Hold</option>
                </select>
              </div> --}}

            </div>

            <div class="">
              {{-- <a href="" name="keyword" value="{{ request('keyword') }}"  type="submit"  class=" btn btn-outline-warning">ค้นหาข้อมูล</a> --}}


              {{-- <a href="/officer/addacceptancedocument1" type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</a> --}}

            </div>
        <div class="container">
            <div class="row">
              <div class="col-10">
                <p class="card-text"> <tbody>
                </p>
              </div>
              <div class="col col-lg-2">
                {{-- <a href="/officer/addacceptancedocument1" type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</a> --}}
              </div>
            </div>

        </div>
        <br>    <br>
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
                <th>ลำดับ</th>
                <th>ชื่อนักศึกษา</th>
                <th>ปี</th>
                <th>ดูเอกสาร</th>

                {{-- <th style="width:10%">แก้ไข</th> --}}

              {{-- <th>ลบ</th> --}}
            </tr>
          </thead>
          <tbody>
            <tr>
              @foreach ($acceptances as $row)
              <td>{{$acceptances->firstItem()+$loop->index}}</td>
              <td>{{ $row->fname }} </td>
            <td>{{($row->term) }}/{{($row->year) }}</td>
              {{-- <td>{{ $row->year}}</td>
              <td>{{ $row->term}}</td> --}}
              {{-- <td> @if ($row->Status_acceptance === 'ยังไม่ได้ตอบรับนักศึกษาแล้ว')
                <span class="badge badge-pill badge-warning">{{ $row->Status_acceptance }}</span>
            @elseif ($row->Status_acceptance === 'ตอบรับนักศึกษาแล้ว')
                <span class="badge badge-pill badge-success">{{ $row->Status_acceptance}}</span>
            @elseif ($row->Status_acceptance === 'ไม่ผ่าน')
                <span class="badge badge-pill badge-danger">{{ $row->Status_acceptance}}</span>
            @endif</td>
              <td>{{$row->annotation}}</td> --}}
              {{-- <td><a href="/document1/{{ $row->filess }}"target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td> --}}


              {{-- <td><a href="/officer/editacceptancedocument1/{{$row->acceptance_id}}" type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a></td>
              <td><a href="/officer/deletacceptance/{{$row->acceptance_id}}"type="button" class="btn btn-outline-danger fa-solid fa-trash-can"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></td> --}}
                <td>  <a href="/teacher/editacceptancedocument1/{{$row->id}}"type="button"  class="btn btn-outline-primary fa-solid  fe-16">ดูเอกสารทั้งหมด</a></td></td>
              </tr>

            @endforeach
          </tbody>
        </table>
        {!!$acceptances->links('pagination::bootstrap-5')!!}
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
@endsection
