{{-- @extends('layouts.app') --}}
@extends('layouts.officermin')

{{-- @section('titlebar','home') --}}

  @section('content')

{{-- @include('layouts.adminsidebsr')

    @include('layouts.admintop') --}}
    @yield('content')





  {{-- <div class="container">
    <div class="row justify-content-center">
       <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ Auth::user()->name }}
                    <br>
                    {{$msg}}
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        {{-- <h1 class="h3 mb-0 text-gray-800">รายงาน</h1> --}}
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report
            </a> --}}
    </div>


 <!-- Content Row -->
 <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                      <a href="/officer/report1">     <h5 class="text-center"> รายงานสถานะสรุปนักศึกษาสมัครสหกิจ</h5></div></a>




                        <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">

                            {{-- @foreach ($users2 as $row)
                            {{$row->count}} @endforeach --}}
                            {{-- <form action="{{ url('/officer/search01') }}" method="GET">
                                <div class="row mb-3">
                                    <div class="col-md-2">
                                        <label for="month">เลือกเดือน:</label>
                                        <select class="form-control" name="month" id="month">
                                            <option value="">เลือกเดือน</option>
                                            <option value="01">มกราคม</option>
                                            <option value="02">กุมภาพันธ์</option>
                                            <option value="03">มีนาคม</option>
                                            <option value="04">เมษายน</option>
                                            <option value="05">พฤษภาคม</option>
                                            <option value="06">มิถุนายน</option>
                                            <option value="07">กรกฎาคม</option>
                                            <option value="08">สิงหาคม</option>
                                            <option value="09">กันยายน</option>
                                            <option value="10">ตุลาคม</option>
                                            <option value="11">พฤศจิกายน</option>
                                            <option value="12">ธันวาคม</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="year">เลือกปี:</label>
                                        <select class="form-control" name="year" id="year"> --}}
                                            {{-- @php
                                            // ตั้งค่าโซนเวลาของกรุงเทพฯ
                                            date_default_timezone_set('Asia/Bangkok');

                                            // หาค่าปีปัจจุบัน
                                            $currentYear = date('Y');

                                            // ลูปเพื่อแสดง option ใน dropdown
                                            for ($year = $currentYear; $year >= $currentYear - 5; $year--) {
                                                // แปลงปี ค.ศ. เป็น พ.ศ. (พุทธศักราช)
                                                $thaiYear = $year + 543;
                                                echo "<option value=\"$year\">$thaiYear</option>";
                                            }

                                            // เพิ่มต่อที่นี่เพื่อเพิ่มปีอนาคต
                                            for ($year = $currentYear + 1; $year <= $currentYear + 5; $year++) {
                                                $thaiYear = $year + 543;
                                                echo "<option value=\"$year\">$thaiYear</option>";
                                            }
                                            @endphp --}}
                                        {{-- </select>
                                    </div>
                                    <div class="col-md-2 mt-4">
                                        <button type="submit" class="btn btn-primary">ค้นหา</button>
                                    </div>
                                </div>
                            </form> --}}




                              {{-- <div class="col-md-11 my-4">
                                <div class="card shadow">
                                  <div class="card-body"> --}}
                                    {{-- <h5 class="card-title">Simple Table</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                                    {{-- <table class="table table table-striped table-hover  ">
                                      <thead>
                                        <tr>
                                          <th>ปี</th> --}}
                                          {{-- <th>เดือน</th> --}}
                                          {{-- <th>จำนวนสมัครสหกิจ</th> --}}
                                          {{-- <th>วัน เดือน ปี</th> --}}

                                        {{-- </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($data1 as $item)
                                        <tr style="height:20px"> --}}
                                            {{-- <td  style="height:40%"> {{ $item->fname}} </td>
                                            <td> {{ $item->Status_registers}} </td> --}}
                                            {{-- <td>{{ \Carbon\Carbon::parse($row->created_at)->translatedFormat('วันlที่ j F Y ') }}</td> --}}

                                            {{-- <td>{{ ($item->year + 543) }}</td> --}}
                                            {{-- <td>{{ ($item->month ) }}</td> --}}

                                            {{-- <td>{{$item->user_count}}</td> --}}
                                              {{-- <td>{{$item->count}}</td>
                                        </tr>

                                        @endforeach
                                      </tbody>

                                    </table> --}}
                                    {{-- {!!$data1->links('pagination::bootstrap-5')!!} --}}


                                        <!-- Area Chart -->
                                        <div class="col-xl-8 col-lg-7">
                                            <div class="card shadow mb-4">
                                                <!-- Card Header - Dropdown -->
                                                <div
                                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                                    {{-- <h6 class="m-0 font-weight-bold text-primary">ผู้ใช้งานระบบ</h6> --}}

                                                </div>
                                    <div class="card-body">
                                        <div class="chart-area">
                                            <canvas id="myChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                    <script type="text/javascript">

                                        var labels =  {{ Js::from($labels) }};
                                        var users =  {{ Js::from($data) }};

                                        const data = {
                                          labels:labels,
                                          //  ["5", "20","30", "40", "50", "60"],


                                          datasets: [{
                                            label: 'จำนวน',
                                            backgroundColor: 'rgb(255, 125, 136)',
                                            /// 'rgb(255, 99, 154)',
                                            backgroundColor: 'rgb(244, 125, 136)',
                                            borderColor: 'rgb(255, 125, 136)',
                                            borderColor: 'rgb(244, 125, 136)',
                                          //   'rgb(255, 159, 64)',
                                          //'rgb(255, 99, 136)',
                                            data:
                                            users,
                                            //[10, 20,30, 40, 50, 60],

                                          },
                                     ]
                                        };

                                        const config = {
                                          type: 'bar',
                                          data: data,
                                          options: {}
                                        };

                                        const myChart = new Chart(
                                          document.getElementById('myChart'),
                                          config
                                        );

                                  </script>
                    <div class="col-auto">
                        {{-- <i class="fas fa-calendar fa-2x text-gray-300"></i> --}}
                    </div>    </div>    </div>    </div>    </div>    </div>    </div>





    <div class="col-md-6 ">
        <div class="card shadow">
          {{-- <div class="card-body"> --}}


 <!-- Earnings (Monthly) Card Example -->
 <div class="">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                  <a href="/officer/report2">     <h5 class="text-center"> รายงานสถานะเอกสารลงทะเบียน</h5></div></a>




                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">

                        {{-- @foreach ($users2 as $row)
                        {{$row->count}} @endforeach --}}
                        {{-- <form action="{{ url('/officer/search001') }}" method="GET">
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <label for="month">เลือกเดือน:</label>
                                    <select class="form-control" name="month2" id="month2">
                                        <option value="">เลือกเดือน</option>
                                        <option value="01">มกราคม</option>
                                        <option value="02">กุมภาพันธ์</option>
                                        <option value="03">มีนาคม</option>
                                        <option value="04">เมษายน</option>
                                        <option value="05">พฤษภาคม</option>
                                        <option value="06">มิถุนายน</option>
                                        <option value="07">กรกฎาคม</option>
                                        <option value="08">สิงหาคม</option>
                                        <option value="09">กันยายน</option>
                                        <option value="10">ตุลาคม</option>
                                        <option value="11">พฤศจิกายน</option>
                                        <option value="12">ธันวาคม</option>
                                    </select>
                                </div> --}}
                                {{-- <div class="col-md-2">
                                    <label for="year">เลือกปี:</label>
                                    <select class="form-control" name="year2" id="year2"> --}}
                                        {{-- @php
                                        // ตั้งค่าโซนเวลาของกรุงเทพฯ
                                        date_default_timezone_set('Asia/Bangkok');

                                        // หาค่าปีปัจจุบัน
                                        $currentYear = date('Y');

                                        // ลูปเพื่อแสดง option ใน dropdown
                                        for ($year2 = $currentYear; $year2 >= $currentYear - 5; $year2--) {
                                            // แปลงปี ค.ศ. เป็น พ.ศ. (พุทธศักราช)
                                            $thaiYear = $year2 + 543;
                                            echo "<option value=\"$year2\">$thaiYear</option>";
                                        }

                                        // เพิ่มต่อที่นี่เพื่อเพิ่มปีอนาคต
                                        for ($year2 = $currentYear + 1; $year2 <= $currentYear + 5; $year2++) {
                                            $thaiYear = $year2 + 543;
                                            echo "<option value=\"$year2\">$thaiYear</option>";
                                        }
                                        @endphp --}}
                                    {{-- </select>
                                </div>
                                <div class="col-md-2 mt-4">
                                    <button type="submit" class="btn btn-primary">ค้นหา</button>
                                </div>
                            </div>
                        </form> --}}




                          {{-- <div class="col-md-11 my-4">
                            <div class="card shadow">
                              <div class="card-body"> --}}
                                {{-- <h5 class="card-title">Simple Table</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                                {{-- <table class="table table table-striped table-hover  ">
                                  <thead>
                                    <tr>
                                      <th>ปี</th> --}}
                                      {{-- <th>เดือน</th> --}}
                                      {{-- <th>จำนวนสมัครสหกิจ</th> --}}
                                      {{-- <th>วัน เดือน ปี</th> --}}

                                    {{-- </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($data2 as $item)
                                    <tr style="height:20px"> --}}
                                        {{-- <td  style="height:40%"> {{ $item->fname}} </td>
                                        <td> {{ $item->Status_registers}} </td> --}}
                                        {{-- <td>{{ \Carbon\Carbon::parse($row->created_at)->translatedFormat('วันlที่ j F Y ') }}</td> --}}

                                        {{-- <td>{{ ($item->year + 543) }}</td> --}}
                                        {{-- <td>{{ ($item->month ) }}</td> --}}

                                        {{-- <td>{{$item->user_count}}</td> --}}
                                          {{-- <td>{{$item->count}}</td>
                                    </tr>

                                    @endforeach
                                  </tbody>

                                </table> --}}
                                {{-- {!!$data1->links('pagination::bootstrap-5')!!} --}}

                <!-- Area Chart -->
                <div class="col-xl-8 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            {{-- <h6 class="m-0 font-weight-bold text-primary">ผู้ใช้งานระบบ</h6> --}}

                        </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myChart1"></canvas>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="chart-pie pt-4 pb-2">
        <canvas id="myPieChart2"></canvas>
    </div> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var labels =  {!! json_encode($labels01) !!};
            var users =  {!! json_encode($data01) !!};
            var data2 =  {!! json_encode($data20) !!};
            var data3 =  {!! json_encode($data21) !!};
            var data4 =  {!! json_encode($data021) !!};
            const data = {
                labels: labels,
                datasets: [{
                    label: 'อนุมัติเอกสารแล้ว',
                    backgroundColor: 'rgb(122, 198, 72)',
                    borderColor: 'rgb(122, 198, 72)',
                    data: users,
                },
                {
                    label: 'รออนุมัติ',
                    backgroundColor: 'rgb(75, 192, 192)',
                    borderColor: 'rgb(75, 192, 192)',
                    data: data2,
                },
                {
                    label: 'ไม่อนุมัติ',
                    backgroundColor: 'rgb(244, 125, 136)',
                    borderColor: 'rgb(244, 125, 136)',
                    data: data3,
                },
                    {
                        label: 'จำนวน',
                        backgroundColor: 'rgb(244, 125, 36)',
                        borderColor: 'rgb(244, 125, 36)',
                        data: data4,
                    }

            ]
            };

            const config = {
                type: 'bar',
                data: data,
                options: {}
            };

            const myChart = new Chart(
                document.getElementById('myChart1'),
                config
            );
        });
    </script>
        </div>
    </div>
  </div>  </div>  </div>

</div>
</div>
                <div class="col-auto">
                    {{-- <i class="fas fa-calendar fa-2x text-gray-300"></i> --}}
                </div>
            </div>
        </div>











<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                      <a href="/officer/report3">     <h5 class="text-center"> รายงานแจ้งสถานะการตอบรับ/การนิเทศ</h5></div></a>




                        <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">

                            {{-- @foreach ($users2 as $row)
                            {{$row->count}} @endforeach --}}
                            {{-- <form action="{{ url('/officer/search01') }}" method="GET">
                                <div class="row mb-3">
                                    <div class="col-md-2">
                                        <label for="month">เลือกเดือน:</label>
                                        <select class="form-control" name="month3" id="month3">
                                            <option value="">เลือกเดือน</option>
                                            <option value="01">มกราคม</option>
                                            <option value="02">กุมภาพันธ์</option>
                                            <option value="03">มีนาคม</option>
                                            <option value="04">เมษายน</option>
                                            <option value="05">พฤษภาคม</option>
                                            <option value="06">มิถุนายน</option>
                                            <option value="07">กรกฎาคม</option>
                                            <option value="08">สิงหาคม</option>
                                            <option value="09">กันยายน</option>
                                            <option value="10">ตุลาคม</option>
                                            <option value="11">พฤศจิกายน</option>
                                            <option value="12">ธันวาคม</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="year">เลือกปี:</label>
                                        <select class="form-control" name="year3" id="year3"> --}}
                                            {{-- @php
                                            // ตั้งค่าโซนเวลาของกรุงเทพฯ
                                            date_default_timezone_set('Asia/Bangkok');

                                            // หาค่าปีปัจจุบัน
                                            $currentYear = date('Y');

                                            // ลูปเพื่อแสดง option ใน dropdown
                                            for ($year3 = $currentYear; $year3 >= $currentYear - 5; $year3--) {
                                                // แปลงปี ค.ศ. เป็น พ.ศ. (พุทธศักราช)
                                                $thaiYear = $year3 + 543;
                                                echo "<option value=\"$year\">$thaiYear</option>";
                                            }

                                            // เพิ่มต่อที่นี่เพื่อเพิ่มปีอนาคต
                                            for ($year = $currentYear + 1; $year3 <= $currentYear + 5; $year3++) {
                                                $thaiYear = $year3 + 543;
                                                echo "<option value=\"$year3\">$thaiYear</option>";
                                            }
                                            @endphp --}}
                                        {{-- </select>
                                    </div>
                                    <div class="col-md-2 mt-4">
                                        <button type="submit" class="btn btn-primary">ค้นหา</button>
                                    </div>
                                </div>
                            </form> --}}




                              {{-- <div class="col-md-11 my-4">
                                <div class="card shadow">
                                  <div class="card-body"> --}}
                                    {{-- <h5 class="card-title">Simple Table</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                                    {{-- <table class="table table table-striped table-hover  ">
                                      <thead>
                                        <tr>
                                          <th>ปี</th> --}}
                                          {{-- <th>เดือน</th> --}}
                                          {{-- <th>จำนวนสมัครสหกิจ</th> --}}
                                          {{-- <th>วัน เดือน ปี</th> --}}

                                        {{-- </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($data3 as $item)
                                        <tr style="height:20px"> --}}
                                            {{-- <td  style="height:40%"> {{ $item->fname}} </td>
                                            <td> {{ $item->Status_registers}} </td> --}}
                                            {{-- <td>{{ \Carbon\Carbon::parse($row->created_at)->translatedFormat('วันlที่ j F Y ') }}</td> --}}

                                            {{-- <td>{{ ($item->year + 543) }}</td> --}}
                                            {{-- <td>{{ ($item->month ) }}</td> --}}

                                            {{-- <td>{{$item->user_count}}</td> --}}
                                              {{-- <td>{{$item->count}}</td>
                                        </tr>

                                        @endforeach
                                      </tbody>

                                    </table> --}}
                                    {{-- {!!$data1->links('pagination::bootstrap-5')!!} --}}
 <!-- Area Chart -->
 {{-- <div class="col-xl-8 col-lg-7">
    <div class="card shadow mb-4">

        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">


        </div>
<div class="card-body">
<div class="chart-area">
    <canvas id="myChart3"></canvas>
</div>
</div>
</div>
</div> --}}
<!-- Area Chart -->
<div class="col-xl-8 col-lg-7">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            {{-- <h6 class="m-0 font-weight-bold text-primary">ผู้ใช้งานระบบ</h6> --}}

        </div>
<div class="card-body">
<div class="chart-area">
    <canvas id="myChart03"></canvas>
</div>
</div>
</div>
</div>
{{-- <div class="chart-pie pt-4 pb-2">
<canvas id="myPieChart2"></canvas>
</div> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
{{-- <script type="text/javascript">
$(document).ready(function() {
var labels =  {!! json_encode($labels02) !!};
var users =  {!! json_encode($data02) !!};

const data = {
labels: labels,
datasets: [{
    label: 'จำนวน',
    backgroundColor: 'rgb(244, 125, 136)',
    borderColor: 'rgb(244, 125, 136)',
    data: users,
}]
};

const config = {
type: 'bar',
data: data,
options: {}
};

const myChart = new Chart(
document.getElementById('myChart3'),
config
);
});
</script> --}}
{{-- <canvas id="myChart03" width="400" height="200"></canvas> --}}
<script type="text/javascript">
    $(document).ready(function() {
        var labels = {!! json_encode($labels05) !!};
        var data1 = {!! json_encode($data05) !!};
        var data2 = {!! json_encode($data06) !!};
        var data3 = {!! json_encode($data07) !!};
        var data4 = {!! json_encode($data007) !!}
        const data = {
            labels: labels,
            datasets: [
                {
                    label: 'รับทราบและยืนยันเวลานัดแล้ว',
                    backgroundColor: 'rgb(244, 125, 136)',
                    borderColor: 'rgb(244, 125, 136)',
                    data: data1,
                },
                {
                    label: 'ขอเปลี่ยนเวลานัดนิเทศ',
                    backgroundColor: 'rgb(75, 192, 192)',
                    borderColor: 'rgb(75, 192, 192)',
                    data: data2,
                }
                ,
                {
                    label: 'รอรับทราบและยืนยันเวลานัดนิเทศ',
                    backgroundColor: 'rgb(255, 165, 0)',
                    borderColor: 'rgb(255, 165, 0)',
                    data: data3,
                },
                    {
                        label: 'จำนวน',
                        backgroundColor: 'rgb(244, 125, 36)',
                        borderColor: 'rgb(244, 125, 36)',
                        data: data4,
                    }
            ]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {}
        };

        const myChart = new Chart(
            document.getElementById('myChart03'),
            config
        );
    });
</script>
                    </div>
                    <div class="col-auto">
                        {{-- <i class="fas fa-calendar fa-2x text-gray-300"></i> --}}
                    </div>
                </div></div></div></div>

    </div>




    <div class="col-md-6 ">
        <div class="card shadow">
          {{-- <div class="card-body"> --}}


 <!-- Earnings (Monthly) Card Example -->
 <div class="">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                  <a href="/officer/report4">     <h5 class="text-center"> รายงานสถานะเอกสารผลการประเมิน</h5></div></a>




                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">

                        {{-- @foreach ($users2 as $row)
                        {{$row->count}} @endforeach
                        <form action="{{ url('/officer/search001') }}" method="GET">
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <label for="month">เลือกเดือน:</label>
                                    <select class="form-control" name="month2" id="month2">
                                        <option value="">เลือกเดือน</option>
                                        <option value="01">มกราคม</option>
                                        <option value="02">กุมภาพันธ์</option>
                                        <option value="03">มีนาคม</option>
                                        <option value="04">เมษายน</option>
                                        <option value="05">พฤษภาคม</option>
                                        <option value="06">มิถุนายน</option>
                                        <option value="07">กรกฎาคม</option>
                                        <option value="08">สิงหาคม</option>
                                        <option value="09">กันยายน</option>
                                        <option value="10">ตุลาคม</option>
                                        <option value="11">พฤศจิกายน</option>
                                        <option value="12">ธันวาคม</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="year">เลือกปี:</label>
                                    <select class="form-control" name="year2" id="year2"> --}}
                                        {{-- @php
                                        // ตั้งค่าโซนเวลาของกรุงเทพฯ
                                        date_default_timezone_set('Asia/Bangkok');

                                        // หาค่าปีปัจจุบัน
                                        $currentYear = date('Y');

                                        // ลูปเพื่อแสดง option ใน dropdown
                                        for ($year2 = $currentYear; $year2 >= $currentYear - 5; $year2--) {
                                            // แปลงปี ค.ศ. เป็น พ.ศ. (พุทธศักราช)
                                            $thaiYear = $year2 + 543;
                                            echo "<option value=\"$year2\">$thaiYear</option>";
                                        }

                                        // เพิ่มต่อที่นี่เพื่อเพิ่มปีอนาคต
                                        for ($year2 = $currentYear + 1; $year2 <= $currentYear + 5; $year2++) {
                                            $thaiYear = $year2 + 543;
                                            echo "<option value=\"$year2\">$thaiYear</option>";
                                        }
                                        @endphp --}}
                                    {{-- </select>
                                </div>
                                <div class="col-md-2 mt-4">
                                    <button type="submit" class="btn btn-primary">ค้นหา</button>
                                </div>
                            </div>
                        </form> --}}




                          {{-- <div class="col-md-11 my-4">
                            <div class="card shadow">
                              <div class="card-body"> --}}
                                {{-- <h5 class="card-title">Simple Table</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                                {{-- <table class="table table table-striped table-hover  ">
                                  <thead>
                                    <tr>
                                      <th>ปี</th> --}}
                                      {{-- <th>เดือน</th> --}}
                                      {{-- <th>จำนวนสมัครสหกิจ</th> --}}
                                      {{-- <th>วัน เดือน ปี</th> --}}

                                    {{-- </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($data4 as $item)
                                    <tr style="height:20px"> --}}
                                        {{-- <td  style="height:40%"> {{ $item->fname}} </td>
                                        <td> {{ $item->Status_registers}} </td> --}}
                                        {{-- <td>{{ \Carbon\Carbon::parse($row->created_at)->translatedFormat('วันlที่ j F Y ') }}</td> --}}

                                        {{-- <td>{{ ($item->year + 543) }}</td> --}}
                                        {{-- <td>{{ ($item->month ) }}</td> --}}

                                        {{-- <td>{{$item->user_count}}</td> --}}
                                          {{-- <td>{{$item->count}}</td>
                                    </tr>

                                    @endforeach
                                  </tbody>

                                </table> --}}
                                {{-- {!!$data1->links('pagination::bootstrap-5')!!} --}}
                                 <!-- Area Chart -->
                <div class="col-xl-12 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            {{-- <h6 class="m-0 font-weight-bold text-primary">ผู้ใช้งานระบบ</h6> --}}

                        </div>
            {{-- <div class="card-body">
                <div class="chart-area">
                    <canvas id="myChart4"></canvas>
                </div>
            </div> --}}
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myChart05"></canvas>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="chart-pie pt-4 pb-2">
        <canvas id="myPieChart2"></canvas>
    </div> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var labels =  {!! json_encode($labels03) !!};
            var users =  {!! json_encode($data03) !!};

            const data = {
                labels: labels,
                datasets: [{
                    label: 'จำนวน',
                    backgroundColor: 'rgb(244, 125, 136)',
                    borderColor: 'rgb(244, 125, 136)',
                    data: users,
                }]
            };

            const config = {
                type: 'bar',
                data: data,
                options: {}
            };

            const myChart = new Chart(
                document.getElementById('myChart4'),
                config
            );
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            var labels =  {!! json_encode($labels04) !!};
            var data13 =  {!! json_encode($data13) !!};
            var data12 =  {!! json_encode($data12) !!};
            var data14 =  {!! json_encode($data14) !!};
            var data15 =  {!! json_encode($data15) !!};
            var data16 =  {!! json_encode($data16) !!};
            var data17 =  {!! json_encode($data17) !!};
            var data18 =  {!! json_encode($data18) !!};
            var data19 =  {!! json_encode($data19) !!};
            var data20 =  {!! json_encode($data20) !!};
            const data = {
                labels: labels,
                datasets: [
                    {
                        label: 'แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13) (จำนวนผ่าน)',
                        backgroundColor: 'rgb(122, 198, 72)',
                        borderColor: 'rgb(122, 198, 72)',
                        data: data13,
                    },
                    {
                        label: 'แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13) (จำนวนไม่ผ่าน)',
                        backgroundColor: 'rgb(244, 125, 136)',
                    borderColor: 'rgb(244, 125, 136)',
                        data: data14,
                    },
                    {
                        label: 'แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)(จำนวนผ่าน)',
                        backgroundColor: 'rgb(122, 198, 72)',
                        borderColor: 'rgb(122, 198, 72)',
                        data: data12,
                    },
                    {
                        label: 'แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)(จำนวนไม่ผ่าน)',
                        backgroundColor: 'rgb(244, 125, 136)',
                    borderColor: 'rgb(244, 125, 136)',
                        data: data15,
                    }
                    ,
                    {
                        label: 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)(จำนวนผ่าน)',
                        backgroundColor: 'rgb(122, 198, 72)',
                        borderColor: 'rgb(122, 198, 72)',
                        data: data16,
                    },
                    {
                        label: 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)(จำนวนไม่ผ่าน)',
                        backgroundColor: 'rgb(244, 125, 136)',
                    borderColor: 'rgb(244, 125, 136)',
                        data: data17,
                    }
                    ,
                    {
                        label: 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)(จำนวนผ่าน)',
                        backgroundColor: 'rgb(122, 198, 72)',
                        borderColor: 'rgb(122, 198, 72)',
                        data: data18,
                    },
                    {
                        label: 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)(จำนวนไม่ผ่าน)',
                        backgroundColor: 'rgb(244, 125, 136)',
                    borderColor: 'rgb(244, 125, 136)',
                        data: data19,
                    },
                    {
                        label: 'จำนวน',
                        backgroundColor: 'rgb(244, 125, 36)',
                        borderColor: 'rgb(244, 125, 36)',
                        data: data20,
                    }
                ]
            };

            const config = {
                type: 'bar',
                data: data,
                options: {}
            };

            const myChart = new Chart(
                document.getElementById('myChart05'),
                config
            );
        });
    </script>
                              </div>
                            </div>
                          </div>  </div>  </div>

                    </div>
                </div>
                <div class="col-auto">
                    {{-- <i class="fas fa-calendar fa-2x text-gray-300"></i> --}}
                </div>
            </div>
        </div>
    </div>


    <!-- Earnings (Monthly) Card Example -->
    {{-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            <h5 class="text-center"> จำนวนการอนุมัติแล้ว</h5></div>

                        <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">{{count($users)}}</div>
                    </div>
                    <div class="col-auto"> --}}
                        {{-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> --}}
                    {{-- </div>
                </div>
            </div>
        </div>
    </div> --}}


 <!-- Earnings (Monthly) Card Example -->
 {{-- <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                        <h5 class="text-center"> จำนวนยังไม่ได้อนุมัติ</h5></div>


                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800 text-center" >{{count($users)}}</div>
                        </div>
                <div class="col-auto"> --}}
                    {{-- <i class="fas fa-clipboard-list fa-2x text-gray-300"></i> --}}
                {{-- </div>
            </div>
        </div>
    </div>
</div> --}}
</div>

{{--
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">เอกสารตอบรับนักศึกษา</h1>

    </div>
</div> --}}
{{-- <div class="row"> --}}

    <!-- Earnings (Monthly) Card Example -->
    {{-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                      <a href="/officer/acceptancedocument1">
                        <h4 class="text-center text-gray-800"> เอกสารตอบรับนักศึกษา</h4>
                        <h5 class="text-center"> จำนวนการตอบรับแล้ว</h5></div></a>




                        <div class="h5 mb-0 font-weight-bold text-gray-800 text-center"> @foreach ($users3 as $row)
                            {{$row->count}} @endforeach</div>
                    </div>
                    <div class="col-auto">

                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Earnings (Monthly) Card Example -->
    {{-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            <h5 class="text-center"> จำนวนยังไม่ได้การตอบรับ</h5></div>

                        <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">{{count($users)}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
{{-- </div>

<div class="container-fluid"> --}}

    <!-- Page Heading -->

{{-- </div>
<div class="row"> --}}

    <!-- Earnings (Monthly) Card Example -->
    {{-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                      <a href="/officer/es1">
                        <h4 class="text-center text-gray-800">เอกสารนิเทศงาน</h4>
                        <h5 class="text-center"> จำนวนเอกสาร</h5></div></a>




                        <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">@foreach ($users4 as $row)
                            {{$row->count}} @endforeach</div>
                    </div>
                    <div class="col-auto">

                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                      <a href="/officer/Evaluate">
                        <h4 class="text-center text-gray-800">รายงานสถานะเอกสารผลการประเมิน</h4>
                        <h5 class="text-center"> จำนวนเอกสาร</h5></div></a>




                        <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">@foreach ($users5 as $row)
                            {{$row->count}} @endforeach</div>
                    </div>
                    <div class="col-auto"> --}}
                        {{-- <i class="fas fa-calendar fa-2x text-gray-300"></i> --}}
                    {{-- </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


{{-- <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">นิเทศงาน</h1>

    </div>
</div>
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                          <a href="/officer/home">     <h5 class="text-center"> จำนวนยืนยันรับทราบนิเทศงานแล้ว</h5></div></a>




                            <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">{{count($users)}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                <a href="/officer/home" class="text-success ">     <h5 class="text-center"> จำนวนยังไม่ได้ยืนยันรับทราบนิเทศงาน</h5></div><a>

                            <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">{{count($users)}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}



    {{-- <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Pending Requests</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


  <!-- Content Row -->

  {{-- <div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">ลงทะเบียน</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Pie Chart -->
    {{-- <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">ปีลงทะเบียน</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart2"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Direct
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Social
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-info"></i> Referral
                    </span>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<script src="../admin/js/demo/chart-bar-demo.js"></script>

                            <!-- Bar Chart -->
                            {{-- <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-bar">
                                        <canvas id="myBarChart1"></canvas>
                                    </div>
                                    <hr>
                                    Styling for the bar chart can be found in the
                                    <code>/js/demo/chart-bar-demo.js</code> file.
                                </div>
                            </div>

                        </div>


</div> --}}
{{-- <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
    </div>
    <div class="card-body">
<div>

    <canvas id="myChart"></canvas>
  </div>--}}

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
      var labels =  {{ Js::from($labels) }};
      var users =  {{ Js::from($data) }};
   var ctx = document.getElementById("myPieChart2");

var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels:  labels,
    datasets: [{

      data: users,
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

  </script>


  <div>
    <canvas id=""></canvas>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  {{--  --}}
<script type="text/javascript">

      var labels =  {{ Js::from($labels) }};
      var users =  {{ Js::from($data) }};

      const data = {
        labels:labels,
        //  ["5", "20","30", "40", "50", "60"],


        datasets: [{
          label: 'จำนวน',
          backgroundColor: 'rgb(255, 125, 136)',
          /// 'rgb(255, 99, 154)',
          backgroundColor: 'rgb(244, 125, 136)',
          borderColor: 'rgb(255, 125, 136)',
          borderColor: 'rgb(244, 125, 136)',
        //   'rgb(255, 159, 64)',
        //'rgb(255, 99, 136)',

          data:
          users,
          //[10, 20,30, 40, 50, 60],

        },
   ]
      };

      const config = {
        type: 'bar',
        data: data,
        options: {}
      };

      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );

</script>

@endsection

