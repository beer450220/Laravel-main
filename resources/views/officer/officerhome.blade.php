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
    <div class="col-xl-8 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                      <a href="/officer/register1">     <h5 class="text-center"> รายงานสถานะเอกสารลงทะเบียน</h5></div></a>




                        <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">

                            @foreach ($users2 as $row)
                            {{$row->count}} @endforeach
                            <form action="{{ url('/officer/search01') }}" method="GET">
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
                                        <select class="form-control" name="year" id="year">
                                            <option value="">เลือกปี</option>
                                            <option value="2024">2024</option>
                                            <option value="2023">2023</option>
                                            <option value="2022">2022</option>
                                            <!-- เพิ่มตามความเหมาะสม -->
                                        </select>
                                    </div>
                                    <div class="col-md-2 mt-4">
                                        <button type="submit" class="btn btn-primary">ค้นหา</button>
                                    </div>
                                </div>
                            </form>




                              <div class="col-md-11 my-4">
                                <div class="card shadow">
                                  <div class="card-body">
                                    {{-- <h5 class="card-title">Simple Table</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                                    <table class="table table table-striped table-hover  ">
                                      <thead>
                                        <tr>
                                          <th>ชื่อนักศึกษา</th>
                                          <th>สถานะ</th>
                                          <th>วัน เดือน ปี</th>

                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($data1 as $item)
                                        <tr style="height:20px">
                                            <td  style="height:40%"> {{ $item->fname}} </td>
                                            <td> {{ $item->Status_registers}} </td>
                                            <td>{{ \Carbon\Carbon::parse($row->created_at)->translatedFormat('วันlที่ j F Y ') }}</td>


                                        </tr>

                                        @endforeach
                                      </tbody>

                                    </table>  {!!$data1->links('pagination::bootstrap-5')!!}
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
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
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
                        {{-- <i class="fas fa-calendar fa-2x text-gray-300"></i> --}}
                    </div>
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
</div>

<div class="container-fluid">

    <!-- Page Heading -->

</div>
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
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
                        {{-- <i class="fas fa-calendar fa-2x text-gray-300"></i> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
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
                    <div class="col-auto">
                        {{-- <i class="fas fa-calendar fa-2x text-gray-300"></i> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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

