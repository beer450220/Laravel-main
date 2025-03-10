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
        <h5 class="card-title">เอกสารปฏิบัติงานนักศึกษา</h5>
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
                <th>ลำดับ</th>
                <th>ชื่อนักศึกษา</th>
                <th>ปี</th>
                <th>ดูเอกสาร</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($informdetails as $row)


              {{-- <tr class="{{
                $row->Status_informdetails === 'รออนุมัติเอกสาร' ? 'table-warning' : (
                    $row->Status_informdetails === 'อนุมัติเอกสารแล้ว' ? 'table-success' : (
                        $row->Status_informdetails === 'เอกสารไม่อนุมัติ' ? 'table-danger' : ''
                    )
                )
            }}"> --}}
            <td class="col-1 text center">{{$informdetails->firstItem()+$loop->index}}</td>
            {{-- <td>{{ $row->id }} </td> --}}
            <td>{{ $row->fname }} </td>
            {{-- <td>{{ \Carbon\Carbon::parse($row->created_at)->addYears(543)->translatedFormat(' Y ') }}</td> --}}
            <td>{{($row->term) }}</td>
                {{-- <td>
                    @if ($row->Status_informdetails === 'รออนุมัติ')
                        <span class="badge badge-pill badge-warning">{{ $row->Status_informdetails }}</span>
                    @elseif ($row->Status_informdetails === 'อนุมัติเอกสารแล้ว')
                        <span class="badge badge-pill badge-success">{{ $row->Status_informdetails}}</span>
                    @elseif ($row->Status_informdetails === 'ไม่อนุมัติ')
                        <span class="badge badge-pill badge-danger">{{ $row->Status_informdetails}}</span>
                    @endif
                </td>
                <td>{{ $row->annotation }}</td>
                <td><a href="/document2/{{ $row->files }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>
              <td> --}}
                {{-- @if ($row->Status_informdetails=== 'รออนุมัติ')
                <div class="d-grid gap-2 d-md-block">
                <a href="/officer/confirm3/{{$row->informdetails_id}} " onclick="return confirm('ยืนยันข้อมูล !!');" class="btn btn-outline-success fa-solid fa-check fe-16">อนุมัติ</a><br>
                <a href="/officer/editinformdetails2/{{$row->informdetails_id}}"  class="btn btn-outline-danger fa-solid fa-xmark fe-16">ไม่อนุมัติ</a></td> --}}
                {{-- <a href="/officer/editinformdetails2/{{$row->informdetails_id}}" type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a> --}}
{{-- </td>
            </div>
                @elseif ($row->Status_informdetails === 'อนุมัติเอกสารแล้ว')
                <div class="d-grid gap-2 d-md-block"> --}}
                    {{-- <a href="/officer/confirm3/{{$row->informdetails_id}} " onclick="return confirm('ยืนยันข้อมูล !!');" class="btn btn-outline-success fa-solid fa-check fe-16">อนุมัติ</a><br> --}}
                    {{-- <a href="/officer/editinformdetails2/{{$row->informdetails_id}}"  class="btn btn-outline-warning fa-solid fa-pen-to-square fe-16">แก้ไขการอนุมัติ</a></td> --}}
                    {{-- <a href="/officer/editinformdetails2/{{$row->informdetails_id}}" type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a> --}}

                {{-- </div>
            @elseif ($row->Status_informdetails === 'ไม่อนุมัติ')
           <a href="/officer/editinformdetails2/{{$row->informdetails_id}}"  class="btn btn-outline-warning fa-solid fa-pen-to-square fe-16">แก้ไขการอนุมัติ</a></td>
            @endif


            </tr> --}}
            <td>  <a href="/officer/editinformdetails03/{{$row->id}}"type="button"  class="btn btn-outline-primary fa-solid  fe-16">ดูเอกสารทั้งหมด</a></td>
        </tr>
            @endforeach

          </tbody>
        </table>
        {!!$informdetails->links('pagination::bootstrap-5')!!}
      </div>
    </div> </div> </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
@endsection
