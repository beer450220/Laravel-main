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
        <h5 class="card-title">ลงทะเบียน</h5>
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
        <form action="{{ route('searchregister3') }}" method="GET" class="form-inline">

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
                <th>ลำดับ</th>
                <th>ชื่อนักศึกษา</th>
                <th>ชื่อไฟล์</th>
                {{-- <th>รูปภาพ</th> --}}
                {{-- <th>ปีการศึกษา</th>
                <th>ภาคเรียน</th> --}}
               <th>สถานะ</th>
               <th>หมายเหตุ</th>
                <th style="width:10%">ดูไฟล์เอกสาร</th>

                <th<th>ดูเอกสาร</th>
              {{-- <th style="width:10%">ลบ</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach ($registers as $row)
            <tr class="{{
                $row->Status_registers === 'รออนุมัติ' ? 'table-warning' : (
                    $row->Status_registers=== 'อนุมัติเอกสารแล้ว' ? 'table-success' : (
                        $row->Status_registers === 'ไม่อนุมัติ' ? 'table-danger' : ''
                    )
                )
            }}">
              <td class="col-1 text center">{{$registers->firstItem()+$loop->index}}</td>
              <td>{{ $row->fname }}  </td>
              <td>{{ $row->namefile }}</td>
              {{-- <td><img src="/file/{{ $row->filess }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset=""></td> --}}
              {{-- <td>{{ $row->year}}</td>
              <td>{{ $row->term}}</td> --}}
              <td>
                  @if ($row->Status_registers === 'รออนุมัติ')
                      <span class="badge badge-pill badge-warning">{{ $row->Status_registers }}</span>
                  @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                      <span class="badge badge-pill badge-success">{{ $row->Status_registers }}</span>
                  @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                      <span class="badge badge-pill badge-danger">{{ $row->Status_registers }}</span>
                  @endif
              </td>
              <td>{{ $row->annotation }}</td>
              {{-- <td><a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td> --}}
{{-- download --}}
              {{-- <td>
                @if ($row->Status_registers === 'รออนุมัติ')
                <div class="d-grid gap-2 d-md-block">
                <a href="/teacher/confirm02/{{$row->id}} " onclick="return confirm('ยืนยันข้อมูล !!');" class="btn btn-outline-success fa-solid fa-check fe-16">อนุมัติ</a><br>
                <a href="/teacher/editregister2/{{$row->id}}"type="button"  class="btn btn-outline-danger fa-solid fa-xmark fe-16">ไม่อนุมัติ</a></td>
            </div>
                @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                <a href="/teacher/editregister2/{{$row->id}}"type="button"  class="btn btn-outline-warning fa-solid fa-pen-to-square fe-16">แก้ไขข้อมูล</a></td>
            @elseif ($row->Status_registers === 'ไม่อนุมัติ')
            <a href="/teacher/editregister2/{{$row->id}}"type="button"  class="btn btn-outline-warning fa-solid fa-pen-to-square fe-16">แก้ไขข้อมูล</a></td>
            @endif --}}
            <td>  <a href="/teacher/editregister01/{{$row->id}}"type="button"  class="btn btn-outline-primary fa-solid  fe-16">ดูเอกสารทั้งหมด</a></td></td>

             {{--  <td><a  href="/studenthome/delete/{{$row->id}}" class="btn btn-outline-danger fe fe-trash-2 fe-16"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></a></td> --}}
            </tr>

            @endforeach
          </tbody>
        </table>
        {!!$registers->links('pagination::bootstrap-5')!!}
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->


{{-- @foreach ($registers as $row)
{{ $row->namefile }}
@endforeach --}}
@endsection
