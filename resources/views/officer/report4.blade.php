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
        <h5 class="card-title">รายงานสถานะเอกสารผลการประเมิน</h5>@if(session("success6"))
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

        <form action="{{ route('searchreport4') }}" method="GET" class="form-inline">

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
                {{-- <a href="/officer/addestimate2" type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</a> --}}
              </div>
            </div>

        </div>
 </form>
 <br>
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
                {{-- <th></th>
           <th></th>
           <th></th>
           <th>เอกสารสหกิจ</th> --}}
           {{-- <th>ภาคเรียน</th>
             <th>ปีการศึกษา</th> --}}
           {{-- <th></th>
           <th></th>  <th></th> --}}

       </tr>
            <tr>
              <th>ลำดับ</th>
              <th>รหัสนักศึกษา</th>
              <th>ชื่อนักศึกษา</th>
              <th>เอกสารสหกิจ</th>
              {{-- <th>สก.12</th>
              <th>สก.13</th>
              <th>สก.14</th>
              <th>สก.15</th> --}}
              {{-- <th>ภาคเรียน</th>
                <th>ปีการศึกษา</th> --}}
              {{-- <th>ภาคเรียน</th> --}}
              {{-- <th>สถานนะ</th>
              <th>หมายเหตุ</th>
                 <th>ไฟล์เอกสาร</th>
              <th>แก้ไขข้อมูล</th>
              <th>ลบข้อมูล</th> --}}

            </tr>
          </thead>
          <tbody>
            @foreach ($supervision as $row)
            <tr>
              <td>{{$supervision->firstItem()+$loop->index}}</td>
               <td>{{$row->username}}</td>
               <td>
                {{$row->fname}} </td>
                <td><a href="/officer/editreport4/{{$row->id}}"type="button"  class="btn btn-outline-primary fa-solid  fe-16">ดูเอกสารทั้งหมด</a> </td>
               {{-- <td>{{$row->em_name}}</td>
             <td>{{$row->term}}/{{$row->year}}</td> --}}
              {{-- <td>{{$row->score}}</td> --}}
              {{-- <td>
                @if ($row->Status_supervision === 'รอประเมินผล')
                    <span class="badge badge-pill badge-warning">{{ $row->Status_supervision }}</span>
                @elseif ($row->Status_supervision === 'ประเมินผลแล้ว')
                    <span class="badge badge-pill badge-success">{{ $row->Status_supervision}}</span>
                @elseif ($row->Status_supervision === 'ไม่ผ่าน')
                    <span class="badge badge-pill badge-danger">{{ $row->Status_supervision}}</span>
                @endif
            </td> --}}
               {{-- <td>{{$row->annotation}}</td> --}}
              {{--<td><a href="../document4/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>
              <td><a href="/officer/editEvaluate/{{$row->supervision_id}} "type="button" class="btn btn-outline-secondary fa-solid  fa-pen-to-square fe-16"></a></td>
              <td><a href="/officer/deletEvaluate/{{$row->supervision_id}}"type="button" class="btn btn-outline-danger fa-solid fa-trash-can"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></td> --}}

            </tr>

            @endforeach
          </tbody>
        </table>
        {!!$supervision->links('pagination::bootstrap-5')!!}
      </div>
    </div>
  </div>
</div>
{{-- @foreach ($supervision as $row)
{{$row->namefile}}
@endforeach --}}

{{-- <div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
<div class="col-md-12 my-4">
<div class="card shadow">
  <div class="card-body">
    <h5 class="card-title">เอกสารประเมินผล</h5>
    <div class="container">
        <div class="row">
          <div class="col-10">
            <p class="card-text"> <tbody>
            </p>
          </div>
          <div class="col col-lg-2"> --}}
            {{-- <button type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</button> --}}
          </div>
        </div>
<br>
    </div>


        {{-- <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>ลำดับ</th>
              <th>ชื่อนักศึกษา</th>
              <th>ชื่อสถานประกอบการ</th>
              <th>คะแนน</th>
               <th>ไฟล์เอกสาร</th>
              <th>หมายเหตุ</th>



            </tr>
          </thead>
          <tbody>
            @foreach ($supervision as $row)
            <tr>
              <td>{{$supervision->firstItem()+$loop->index}}</td>
              <td>
                {{$row->supervision_id}}</td>
              <td>{{$row->address}}</td>
              <td>{{$row->score}}</td>
              <td>{{$row->Status_supervision}}</td>
              <td class="text-warning ">{{$row->Status_supervision}}</td>
              <td><a href="/officer/editEvaluate/{{$row->supervision_id}} "type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a></td>

            </tr>

            @endforeach
          </tbody>
        </table>


         </div> --}}



@endsection
