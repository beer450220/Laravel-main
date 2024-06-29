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
        <h5 class="card-title">แจ้งกำหนดการสหกิจ</h5>
        <div class="container">
            <div class="row">
              <div class="col-10">
                <p class="card-text"> <tbody>
                </p>
              </div>
              <div class="col col-lg-2">
                <a href="/officer/addcategory" type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</a>
              </div>
            </div>
            @php
            use Carbon\Carbon;

            function formatThaiDate($date) {
                $thaiMonths = [
                    1 => 'มกราคม', 2 => 'กุมภาพันธ์', 3 => 'มีนาคม', 4 => 'เมษายน',
                    5 => 'พฤษภาคม', 6 => 'มิถุนายน', 7 => 'กรกฎาคม', 8 => 'สิงหาคม',
                    9 => 'กันยายน', 10 => 'ตุลาคม', 11 => 'พฤศจิกายน', 12 => 'ธันวาคม'
                ];

                $carbonDate = Carbon::parse($date)->setTimezone('Asia/Bangkok');
                $year = $carbonDate->year + 543;
                $month = $thaiMonths[$carbonDate->month];
                $day = $carbonDate->day;
             //    $time = $carbonDate->format('เวลา H:i:s ');

                return "$day $month $year";
            }
        @endphp
        </div>
        <br>
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>ลำดับ</th>
              {{-- <th>หัวเรื่อง</th>
              <th>หัวเรื่อง1</th> --}}
              <th>ภาคเรียนที่</th>
              <th>วันเริ่มปฏิบัติสหกิจ</th>
              <th>วันสิ้นสุดปฏิบัติสหกิจ</th>
              {{-- <th>ภาคเรียนที่</th> --}}



              <th>แก้ไข</th>
              {{-- <th>ลบ</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach ($major as $row)
            <tr>
              <td class="col-1 text center">{{$major->firstItem()+$loop->index}}</td>
              {{-- <td>{{$row->name}}</td>
              <td>{{$row->name1}}</td> --}}
              <td>{{$row->year}}</td>
              <td>{{ formatThaiDate($row->start_date) }}</td>
              <td>{{ formatThaiDate($row->end_date) }}</td>
              <td><a href="/officer/editcategory/{{$row->notify_id}}" type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a></td>
              {{-- <td><a href="/officer/deletcategory/{{$row->category_id}}"type="button" class="btn btn-outline-danger fa-solid fa-trash-can"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></td> --}}
            </tr>

            @endforeach
          </tbody>
        </table>
        {!!$major->links('pagination::bootstrap-5')!!}
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
@endsection
