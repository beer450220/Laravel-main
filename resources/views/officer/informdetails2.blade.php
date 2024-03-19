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
        <h5 class="card-title">เอกสารแจ้งรายละเอียดการปฎิบัติงาน</h5>
        <form action="{{ route('searchinformdetails') }}" method="GET" class="form-inline">

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
                <p class="card-text"> <tbody>
                </p>
              </div>
              <div class="col col-lg-2">
                {{-- <button type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</button> --}}
              </div>
            </div>

        </div>
        <br>   <br>
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>ชื่อนักศึกษา</th>
                {{-- <th>ชื่อสถานประกอบการ</th> --}}
                <th>ชื่อไฟล์</th>
                <th>ปีการศึกษา</th>
                <th>ภาคเรียน</th>
                <th>สถานะ</th>
                <th>หมายเหตุ</th>
                <th style="width:10%">ดูไฟล์เอกสาร</th>
                <th>ยืนยันข้อมูล</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($informdetails as $row)


              <tr class="{{
                $row->Status_informdetails === 'รอตรวจสอบเอกสาร' ? 'table-warning' : (
                    $row->Status_informdetails === 'ตรวจสอบเอกสารแล้ว' ? 'table-success' : (
                        $row->Status_informdetails === 'เอกสารไม่ผ่าน' ? 'table-danger' : ''
                    )
                )
            }}">
                <td class="col-1 text-center">{{ $informdetails->firstItem() + $loop->index }}</td>
                <td>{{ $row->fname }}  {{ $row->surname}}</td>
                {{-- <td></td> --}}
                <td>{{ $row->namefile }}</td>
                <td>{{ $row->year }}</td>
                <td>{{ $row->term }}</td>

                <td>
                    @if ($row->Status_informdetails === 'รอตรวจสอบ')
                        <span class="badge badge-pill badge-warning">{{ $row->Status_informdetails }}</span>
                    @elseif ($row->Status_informdetails === 'ตรวจสอบเอกสารแล้ว')
                        <span class="badge badge-pill badge-success">{{ $row->Status_informdetails}}</span>
                    @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
                        <span class="badge badge-pill badge-danger">{{ $row->Status_informdetails}}</span>
                    @endif
                </td>
                <td>{{ $row->annotation }}</td>
                <td><a href="/fileinformdetails/{{ $row->files }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>
              <td>
                @if ($row->Status_informdetails=== 'รอตรวจสอบ')
                <div class="d-grid gap-2 d-md-block">
                <a href="/officer/confirm3/{{$row->informdetails_id}} " onclick="return confirm('ยืนยันข้อมูล !!');" class="btn btn-outline-success fa-solid fa-check fe-16">อนุมัติ</a><br>
                <a href="/officer/editinformdetails2/{{$row->informdetails_id}}"  class="btn btn-outline-danger fa-solid fa-xmark fe-16">ไม่อนุมัติ</a></td>
                {{-- <a href="/officer/editinformdetails2/{{$row->informdetails_id}}" type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a> --}}
            </td>
            </div>
                @elseif ($row->Status_informdetails === 'ตรวจสอบเอกสารแล้ว')

            @elseif ($row->Status_informdetails === 'ไม่ผ่าน')

            @endif


            </tr>

            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
@endsection
