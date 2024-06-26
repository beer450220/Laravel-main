@extends('layouts.officermin')

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
        <form action="{{ route('searches') }}" method="GET" class="form-inline">

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


 {{-- <a href="/officer/addestimate2" type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</a> --}}

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
        <br>  <br>
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>ลำดับ</th>
              <th>ชื่อนักศึกษา</th>
              {{-- <th>ชื่อสถานประกอบการ</th> --}}

                {{-- <th>ชื่อเอกสาร</th> --}}
                {{-- <th>ปีการศึกษา</th>
                <th>ภาคเรียน</th>

                <th>สถานะ</th> --}}
                <th>สถานะเวลานัดนิเทศ</th>
                <th >ดูข้อมูล</th>
              {{-- <th>ไฟล์เอกสาร</th> --}}
              {{-- <th>ยืนยันข้อมูล</th> --}}
              {{-- <th>ลบ</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach ($supervision as $row)
            <tr>
              <td>{{$supervision->firstItem()+$loop->index}}</td>
              <td>{{$row->student_name}}</td>
              {{-- <td>{{$row->em_name}}</td> --}}
              {{-- <td>{{$row->namefiles}}</td> --}}
              {{-- <td>{{$row->year}}</td>
              <td>{{$row->term}}</td>
              <td>  @if ($row->status === 'รออนุมัติ')
                <span class="badge badge-pill badge-warning">{{ $row->status }}</span>
            @elseif ($row->status === 'อนุมัติแล้ว')
                <span class="badge badge-pill badge-success">{{ $row->status}}</span>
            @elseif ($row->status === 'ไม่อนุมัติ')
                <span class="badge badge-pill badge-danger">{{ $row->status}}</span>
            @endif</td> --}}
            <td class="">
                @if ($row->Status_events === 'รอรับทราบและยืนยันเวลานัดนิเทศ')
               <span class="badge badge-pill badge-warning">{{ $row->Status_events}}</span>
            @elseif ($row->Status_events === 'รับทราบและยืนยันเวลานัดแล้ว')
         <span class="badge badge-pill badge-success ">{{ $row->Status_events}}</span>
            @elseif ($row->Status_events === 'ขอเปลี่ยนเวลานัดนิเทศ')
           <span class="badge badge-pill badge-danger ">{{ $row->Status_events}}</span>
            @endif


               </td>
 <td class=""><a href="/officer/view1/{{$row->id}}" class="btn mb btn-outline-primary fa-solid fa-eye  "></a></td>
              {{-- <td><a href="/../ไฟล์เอกสารขออนุญาตนิเทศงาน/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td> --}}

              {{-- <td>
                @if ($row->status=== 'รออนุมัติ')
                <div class="d-grid gap-2 d-md-block">
                <a href="/officer/confirm4/{{$row->id}} " onclick="return confirm('ยืนยันข้อมูล !!');" class="btn btn-outline-success fa-solid fa-check fe-16">อนุมัติ</a><br>
                <a href="/officer/edites1/{{$row->id}}"  class="btn btn-outline-danger fa-solid fa-xmark fe-16">ไม่อนุมัติ</a></td>
                {{-- <a href="/officer/editinformdetails2/{{$row->informdetails_id}}" type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a> --}}
            {{-- </td> --}}
            </div>
                {{-- @elseif ($row->status === 'อนุมัติแล้ว')

            @elseif ($row->status === 'ไม่อนุมัติ')

            @endif --}}


                {{-- <a href="/officer/edites1/{{$row->id}} "type="button" class="btn btn-outline-secondary fe fe-edit fe-16"></a></td> --}}
              {{-- <td><a href="/teacher/deletes1/{{$row->id}} "type="button" class="btn btn-outline-danger fe fe-trash-2 fe-16"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></td> --}}
            </tr>

            @endforeach
          </tbody>
        </table>
        {!!$supervision->links('pagination::bootstrap-5')!!}
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
@endsection
