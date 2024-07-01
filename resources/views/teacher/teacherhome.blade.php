@extends('layouts.appteacher')

@section('content')
{{-- <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/icons/1.png') }}"> --}}

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/1.png') }}">

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






{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

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
            {{-- sss --}}
        {{-- </div>
    </div>

</div>  --}}

<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">
<div class="row">
    <!-- simple table -->
    <div class="col-md-6 my-4">
      <div class="card shadow">
        <div class="card-body"><a href="/teacher/report01">
          <h5 class="card-title" >รายงานสรุปนักศึกษาสมัครสหกิจศึกษา</h5></a>
          {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
          {{-- <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Company</th>
                <th>Address</th>
                <th>Date</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>3224</td>
                <td>Keith Baird</td>
                <td>Enim Limited</td>
                <td>901-6206 Cras Av.</td>
                <td>Apr 24, 2019</td>
                <td><span class="badge badge-pill badge-warning">Hold</span></td>
              </tr>

            </tbody>
          </table> --}}
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
        </div>
      </div>
    </div> <!-- simple table -->
    <!-- Bordered table -->
    <div class="col-md-6 my-4">
      <div class="card shadow">
        <div class="card-body"><a href="/teacher/report02">
          <h5 class="card-title">รายงานสถานะเอกสารลงทะเบียน</h5></a>
          {{-- <p class="card-text">Add .table-bordered for borders on all sides of the table and cells.</p> --}}
          {{-- <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Company</th>
                <th>Address</th>
                <th>Date</th>
                <th>Activate</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td>2651</td>
                <td>Reuben Orr</td>
                <td>Nisi Aenean Eget Limited</td>
                <td>7425 Malesuada Rd.</td>
                <td>Nov 4, 2019</td>
                <td>
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="c3" checked="">
                    <label class="custom-control-label" for="c3"></label>
                  </div>
                </td>
              </tr>

            </tbody>
          </table> --}}
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
            }, {
                    label: 'จำนวน',
                    backgroundColor: 'rgb(255, 165, 0)',
                    borderColor: 'rgb(255, 165, 0)',
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
    </div> <!-- Bordered table -->
  </div>
</div> <!-- Bordered table -->
</div>  <!-- Bordered table -->
</div>

    <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">
<div class="row">
    <!-- simple table -->
    <div class="col-md-6 my-4">
      <div class="card shadow">
        <div class="card-body"><a href="/teacher/report03">
          <h5 class="card-title">รายงานแจ้งสถานะการตอบรับ/การนิเทศ</h5></a>
          {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
          {{-- <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Company</th>
                <th>Address</th>
                <th>Date</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>3224</td>
                <td>Keith Baird</td>
                <td>Enim Limited</td>
                <td>901-6206 Cras Av.</td>
                <td>Apr 24, 2019</td>
                <td><span class="badge badge-pill badge-warning">Hold</span></td>
              </tr>


            </tbody>
          </table> --}}

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
        var data4 = {!! json_encode($data007) !!};
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
                }
                ,
                {
                    label: 'จำนวน',
                    backgroundColor: 'rgb(255, 165, 0)',
                    borderColor: 'rgb(255, 165, 0)',
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
      </div>
    </div> <!-- simple table -->
    <!-- Bordered table -->
    <div class="col-md-6 my-4">
      <div class="card shadow">
        <div class="card-body"><a href="/teacher/report04">
          <h5 class="card-title">รายงานสถานะเอกสารผลการประเมิน</h5></a>
          {{-- <p class="card-text">Add .table-bordered for borders on all sides of the table and cells.</p> --}}
          {{-- <table class="table table-bordered table-hover mb-0">
            <thead class="thead-dark">
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Company</th>
                <th>Address</th>
                <th>Date</th>
                <th>Activate</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>3224</td>
                <td>Keith Baird</td>
                <td>Enim Limited</td>
                <td>901-6206 Cras Av.</td>
                <td>Apr 24, 2019</td>
                <td>
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="c1" checked="">
                    <label class="custom-control-label" for="c1"></label>
                  </div>
                </td>
              </tr>

            </tbody>
          </table> --}}

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
                } ,
                {
                    label: 'จำนวน',
                    backgroundColor: 'rgb(255, 165, 0)',
                    borderColor: 'rgb(255, 165, 0)',
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
    </div> <!-- Bordered table -->
  </div>


</div>  </div>  </div>  </div>
{{-- <main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="row">
              <div class="col-md-6 col-xl-3 mb-4">
                 <a href="/teacher/user"><div class="card shadow border-0">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center"> --}}
                          {{-- <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                          </span> --}}
                        {{-- </div>
                        <div class="col pr-0">
                          <p class=" text-muted mb-0">รายงานสรุปนักศึกษาสมัครสหกิจศึกษา</p>
                          <span class="h3 mb-0"> @foreach ($users8 as $row)
                              {{$row->count}} @endforeach</span> --}}

                          {{-- <span class="small text-success">+16.5%</span> --}}
                        {{-- </div>
                      </div>
                    </div>
                  </div>
                </div></a> --}}
              {{-- <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-0">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-3 text-center"> --}}
                        {{-- <span class="circle circle-sm bg-primary">
                          <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                        </span> --}}
                      {{-- </div>
                      <div class="col pr-0">
                        <p class=" text-muted mb-0">รออนุมัติ</p>
                        <span class="h3 mb-0"> @foreach ($users8 as $row)
                          {{$row->count}} @endforeach</span> --}}
                        {{-- <span class="small text-success">+16.5%</span> --}}
                      {{-- </div>
                    </div>
                  </div>
                </div>
              </div> --}}
              {{-- <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-0">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-3 text-center"> --}}
                        {{-- <span class="circle circle-sm bg-primary">
                          <i class="fe fe-16 fe-filter text-white mb-0"></i>
                        </span> --}}
                      {{-- </div>
                      <div class="col">
                        <p class=" text-muted mb-0">อนุมัติแล้ว</p>
                        <div class="row align-items-center no-gutters">
                          <div class="col-auto">
                            <span class="h3 mr-2 mb-0"> @foreach ($users8 as $row)
                              {{$row->count}} @endforeach </span>
                          </div>
                          <div class="col-md-12 col-lg"> --}}
                            {{-- <div class="progress progress-sm mt-2" style="height:3px">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> --}}
                          {{-- </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}
              {{-- <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-0">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-3 text-center"> --}}
                        {{-- <span class="circle circle-sm bg-primary">
                          <i class="fe fe-16 fe-filter text-white mb-0"></i>
                        </span> --}}
                      {{-- </div> --}}
                      {{-- <div class="col">
                        <p class=" text-muted mb-0">ไม่อนุมัติ</p>
                        <div class="row align-items-center no-gutters">
                          <div class="col-auto">
                            <span class="h3 mr-2 mb-0"> @foreach ($users9 as $row)
                              {{$row->count}} @endforeach </span>
                          </div>
                          <div class="col-md-12 col-lg"> --}}
                            {{-- <div class="progress progress-sm mt-2" style="height:3px">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> --}}
                          {{-- </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}
    {{-- <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="row">
            <div class="col-md-6 col-xl-3 mb-4">
               <a href="/teacher/register1"><div class="card shadow border-0">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-3 text-center"> --}}
                        {{-- <span class="circle circle-sm bg-primary">
                          <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                        </span> --}}
                      {{-- </div>
                      <div class="col pr-0">
                        <p class=" text-muted mb-0">รายงานสถานะเอกสารลงทะเบียน</p>
                        <span class="h3 mb-0"> @foreach ($users5 as $row)
                            {{$row->count}} @endforeach</span> --}}

                        {{-- <span class="small text-success">+16.5%</span> --}}
                      {{-- </div>
                    </div>
                  </div>
                </div>
              </div></a>
            <div class="col-md-6 col-xl-3 mb-4">
              <div class="card shadow border-0">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-3 text-center"> --}}
                      {{-- <span class="circle circle-sm bg-primary">
                        <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                      </span> --}}
                    {{-- </div>
                    <div class="col pr-0">
                      <p class="small text-muted mb-0">ยังไม่ได้ยืนยัน</p>
                      <span class="h3 mb-0"> @foreach ($users10 as $row)
                        {{$row->count}} @endforeach</span> --}}
                      {{-- <span class="small text-success">+16.5%</span> --}}
                    {{-- </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-4">
              <div class="card shadow border-0">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-3 text-center"> --}}
                      {{-- <span class="circle circle-sm bg-primary">
                        <i class="fe fe-16 fe-filter text-white mb-0"></i>
                      </span> --}}
                    {{-- </div>
                    <div class="col">
                      <p class="small text-muted mb-0">ยืนยันแล้ว</p>
                      <div class="row align-items-center no-gutters">
                        <div class="col-auto">
                          <span class="h3 mr-2 mb-0"> @foreach ($users11 as $row)
                            {{$row->count}} @endforeach </span>
                        </div>
                        <div class="col-md-12 col-lg"> --}}
                          {{-- <div class="progress progress-sm mt-2" style="height:3px">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                          </div> --}}
                        {{-- </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}

          {{-- </div> --}}
           <!-- end section -->

          {{-- <div class="row justify-content-center">
            <div class="col-12">
              <div class="row">
                <div class="col-md-6 col-xl-3 mb-4">
                   <a href="/teacher/acceptancedocument1"><div class="card shadow border-0">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-3 text-center"> --}}
                            {{-- <span class="circle circle-sm bg-primary">
                              <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                            </span> --}}
                          {{-- </div>
                          <div class="col pr-0">
                            <p class=" text-muted mb-0">เอกสารตอบรับ</p>
                            <span class="h3 mb-0">@foreach ($users6 as $row)
                              {{$row->count}} @endforeach</span> --}}
                            {{-- <span class="small text-success">+16.5%</span> --}}
                          {{-- </div>
                        </div>
                      </div>
                    </div>
                  </div></a> --}}
                  {{-- <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow border-0">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-3 text-center">

                          </div>
                          <div class="col pr-0">
                            <a href="/teacher/informdetails1">
                            <p class="small text-muted mb-0">เอกสารแจ้งรายละเอียด</p> </a>
                            <span class="h3 mb-0"> @foreach ($users7 as $row)
                              {{$row->count}} @endforeach</span>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

 --}}

                  {{-- </div> <!-- end section --> --}}







          {{-- <div class="row justify-content-center">
            <div class="col-12">
              <div class="row">
                <div class="col-md-6 col-xl-3 mb-4">
                   <a href="/teacher/supervision"><div class="card shadow border-0">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-3 text-center"> --}}
                            {{-- <span class="circle circle-sm bg-primary">
                              <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                            </span> --}}
                          {{-- </div>
                          <div class="col pr-0">
                            <p class=" text-muted mb-0">นิเทศงาน</p>
                            <span class="h3 mb-0">@foreach ($users1 as $row)
                              {{$row->count}} @endforeach</span> --}}
                            {{-- <span class="small text-success">+16.5%</span> --}}
                          {{-- </div>
                        </div>
                      </div>
                    </div>
                  </div></a>
                  <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow border-0">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-3 text-center"> --}}
                            {{-- <span class="circle circle-sm bg-primary">
                              <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                            </span> --}}
                          {{-- </div>
                          <div class="col pr-0">
                            <p class="small text-muted mb-0">ยังไม่ได้ยืนยัน</p>
                            <span class="h3 mb-0"> @foreach ($users2 as $row)
                              {{$row->count}} @endforeach</span> --}}
                            {{-- <span class="small text-success">+16.5%</span> --}}
                          {{-- </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow border-0">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-3 text-center"> --}}
                            {{-- <span class="circle circle-sm bg-primary">
                              <i class="fe fe-16 fe-filter text-white mb-0"></i>
                            </span> --}}
                          {{-- </div>
                          <div class="col">
                            <p class="small text-muted mb-0">ยืนยันแล้ว</p>
                            <div class="row align-items-center no-gutters">
                              <div class="col-auto">
                                <span class="h3 mr-2 mb-0"> @foreach ($users3 as $row)
                                  {{$row->count}} @endforeach </span>
                              </div>
                              <div class="col-md-12 col-lg"> --}}
                                {{-- <div class="progress progress-sm mt-2" style="height:3px">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                </div> --}}
                              {{-- </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> <!-- end section --> --}}
            {{-- <div class="row justify-content-center">
              <div class="col-12">
                <div class="row">
                  <div class="col-md-6 col-xl-3 mb-4">
                     <a href="/teacher/informdetails1"><div class="card shadow border-0">
                        <div class="card-body">
                          <div class="row align-items-center">
                            <div class="col-3 text-center">

                            </div>
                            <div class="col pr-0">
                              <p class=" text-muted mb-0">เอกสารแจ้งรายละเอียด</p>
                              <span class="h3 mb-0"></span>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div></a> --}}


                    {{-- <div class="container-fluid">
                        <div class="row justify-content-center">
                          <div class="col-12">
                            <div class="row">
                              <div class="col-md-6 col-xl-3 mb-4">
                                 <a href="/teacher/reportresults1"><div class="card shadow border-0">
                                    <div class="card-body">
                                      <div class="row align-items-center">
                                        <div class="col-3 text-center">

                                        </div>
                                        <div class="col pr-0">
                                          <p class=" text-muted mb-0">รายงานผลปฏิบัติงาน</p>
                                          <span class="h3 mb-0"></span>

                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div></a> --}}






                                    {{-- <div class="col-12">
                                      <div class="row">
                                        <div class="col-md-6 col-xl-3 mb-4">
                                           <a href="/teacher/estimate1"><div class="card shadow border-0">
                                              <div class="card-body">
                                                <div class="row align-items-center">
                                                  <div class="col-3 text-center"> --}}
                                                    {{-- <span class="circle circle-sm bg-primary">
                                                      <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                                                    </span> --}}
                                                  {{-- </div>
                                                  <div class="col pr-0">
                                                    <p class=" text-muted mb-0">รายงานสถานะเอกสารผลการประเมิน</p>
                                                    <span class="h3 mb-0">@foreach ($users9 as $row)
                                                      {{$row->count}} @endforeach</span> --}}
                                                    {{-- <span class="small text-success">+16.5%</span> --}}
                                                  {{-- </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div></a>


                                        </div> --}}

@endsection
