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
        @if(session("success6"))
        <div class="alert alert-success col-4">{{session('success6')}}</div>
@endif
@if(session("success5"))
      <div class="alert alert-danger col-4">{{session('success5')}}</div>
@endif
@if(session("success7"))
<div class="alert alert-warning col-4">{{session('success7')}} </div>
@endif
 @if(session("error"))
<div class="alert alert-danger col-4">{{session('error')}} </div>
@endif
        <form action="{{ route('searchinformdetails1') }}" method="GET" class="form-inline">

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
              {{-- <th>ปีการศึกษา</th>
              <th>ภาคเรียนที่</th> --}}
                <th>สถานะ</th>
              <th>ดูเอกสาร</th>
              <th>ยืนยันข้อมูล</th>
              {{-- <th>ดูข้อมูล</th> --}}
              {{-- <th>ลบ</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach ($informdetails as $row)
            <tr>
              <td>{{$informdetails->firstItem()+$loop->index}}</td>
              <td>{{$row->fname}} </td>
              <td>{{$row->namefile}}</td>

              <td> @if ($row->Status_informdetails === 'รออนุมัติ')
                <span class="badge badge-pill badge-warning">{{ $row->Status_informdetails }}</span>
            @elseif ($row->Status_informdetails === 'อนุมัติเอกสารแล้ว')
                <span class="badge badge-pill badge-success">{{ $row->Status_informdetails}}</span>
            @elseif ($row->Status_informdetails === 'ไม่อนุมัติ')
                <span class="badge badge-pill badge-danger">{{ $row->Status_informdetails}}</span>
            @endif</td>
              {{-- <td>{{$row->year}}</td>
               <td>{{$row->term}}</td> --}}
              <td><a href="/document2/{{ $row->files }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>
              {{-- <td class="text-danger">{{$row->Status_informdetails}}</td> --}}
              {{-- <td><a href="/teacher/viewinformdetails1/{{$row->informdetails_id}}" type="button" class="btn btn-outline-secondary fa-regular fa-eye fe-16"></a></td> --}}

              {{-- <td><button type="button" class="btn btn-outline-danger fe fe-trash-2 fe-16"></td> --}}
                <td>
                @if ($row->Status_informdetails=== 'รออนุมัติ')
                <div class="d-grid gap-2 d-md-block">
                <a href="/teacher/confirm3/{{$row->informdetails_id}} " onclick="return confirm('ยืนยันข้อมูล !!');" class="btn btn-outline-success fa-solid fa-check fe-16">อนุมัติ</a><br>
                <a href="/teacher/editinformdetails2/{{$row->informdetails_id}}"  class="btn btn-outline-danger fa-solid fa-xmark fe-16">ไม่อนุมัติ</a></td>
                {{-- <a href="/officer/editinformdetails2/{{$row->informdetails_id}}" type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a> --}}
</td>
            </div>
                @elseif ($row->Status_informdetails === 'อนุมัติเอกสารแล้ว')
                <div class="d-grid gap-2 d-md-block">
                    {{-- <a href="/officer/confirm3/{{$row->informdetails_id}} " onclick="return confirm('ยืนยันข้อมูล !!');" class="btn btn-outline-success fa-solid fa-check fe-16">อนุมัติ</a><br> --}}
                    <a href="/teacher/editinformdetails2/{{$row->informdetails_id}}"  class="btn btn-outline-warning fa-solid fa-pen-to-square fe-16">แก้ไขการอนุมัติ</a></td>
                    {{-- <a href="/officer/editinformdetails2/{{$row->informdetails_id}}" type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a> --}}

                </div>
            @elseif ($row->Status_informdetails === 'ไม่อนุมัติ')
           <a href="/teacher/editinformdetails2/{{$row->informdetails_id}}"  class="btn btn-outline-warning fa-solid fa-pen-to-square fe-16">แก้ไขการอนุมัติ</a></td>
            @endif


            </tr>

            @endforeach
          </tbody>
        </table>
      </div>{!!$informdetails->links('pagination::bootstrap-4')!!}
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
@endsection
