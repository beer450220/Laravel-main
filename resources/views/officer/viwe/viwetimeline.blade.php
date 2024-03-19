{{-- @extends('layouts.appstudent1') --}}

{{-- @section('content') --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="../../student/css/app-light.css" id="lightTheme">
<link rel="stylesheet" href="../../student/css/app-dark.css" id="darkTheme" disabled>



   @foreach ($timelines as $row)
   <br>
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-6">
          <div class="card card-fill timeline">
            <div class="card-header">
              <a href="/officer/timeline2" class="btn btn-success" ><span class="fe fe-filter fe-16 text-muted"></span>ย้อมกลับ</a>
              <br>
              <br>
              <strong class="card-title">{{ $row->name}}</strong>
              <a class="float-right small text-muted" href="#!">View all</a>
            </div>

            <div class="card-body">
              <h6 class="text-uppercase text-muted mb-4">ลงทะเบียน</h6>
              <div class="pb-3 timeline-item item-primary">
                <div class="pl-5">

                <div class="mb-1"><strong>{{ $row->Status_registers}}</strong>
                  {{-- <p class="small text-muted">Creative Design <span class="badge badge-light">1h ago</span> --}}
                  </p>
                </div>
              </div>

             <br>

              </div>
              <br>
              <h6 class="text-uppercase text-muted mb-4">เอกสารตอบรับนักศึกษา</h6>
              <div class="pb-3 timeline-item item-warning">
                <div class="pl-5">
                  <div class="mb-3"><strong>@Fletcher Everett</strong><span class="text-muted small mx-2">created new group for</span><strong>Tiny Admin</strong></div>
                  <ul class="avatars-list mb-3">

                </div>
                <br>
              </div>
              <h6 class="text-uppercase text-muted mb-4">เอกสารแจ้งรายละเอียด</h6>
              <div class="pb-3 timeline-item item-success">
                <div class="pl-5">
                  <div class="mb-3"><strong>{{ $row->Status_informdetails}}</strong><span class="text-muted small mx-2"></span><strong></strong></div>

                  </p>

                </div>

              </div>
              <h6 class="text-uppercase text-muted mb-4">นิเทศงาน</h6>
              <div class="pb-3 timeline-item item-danger">
                <div class="pl-5">
                  <div class="mb-3"><strong>@Lillith Joseph</strong><span class="text-muted small mx-2">has upload new files to</span><strong>Tiny Admin</strong></div>
                  <div class="row mb-3">

                  </div>

                </div>



                </div>
<br>
                <h6 class="text-uppercase text-muted mb-4">รายงานผลฝึกประสบการณ์</h6>
                <div class="pb-3 timeline-item item-success">
                  <div class="pl-5">
                    <div class="mb-3"><strong>{{ $row->Status_report}}</strong><span class="text-muted small mx-2"></span><strong></strong></div>

                    </p>

                  </div>
                  <br>
                </div>
              </div>

            </div> <!-- / .card-body -->
          </div> <!-- / .card -->
        </div> <!-- .col-12 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->

    @endforeach


    <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="list-group list-group-flush my-n3">
              <div class="list-group-item bg-transparent">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="fe fe-box fe-24"></span>
                  </div>
                  <div class="col">
                    <small><strong>Package has uploaded successfull</strong></small>
                    <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                    <small class="badge badge-pill badge-light text-muted">1m ago</small>
                  </div>
                </div>
              </div>
              <div class="list-group-item bg-transparent">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="fe fe-download fe-24"></span>
                  </div>
                  <div class="col">
                    <small><strong>Widgets are updated successfull</strong></small>
                    <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                    <small class="badge badge-pill badge-light text-muted">2m ago</small>
                  </div>
                </div>
              </div>
              <div class="list-group-item bg-transparent">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="fe fe-inbox fe-24"></span>
                  </div>
                  <div class="col">
                    <small><strong>Notifications have been sent</strong></small>
                    <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                    <small class="badge badge-pill badge-light text-muted">30m ago</small>
                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="list-group-item bg-transparent">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="fe fe-link fe-24"></span>
                  </div>
                  <div class="col">
                    <small><strong>Link was attached to menu</strong></small>
                    <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                    <small class="badge badge-pill badge-light text-muted">1h ago</small>
                  </div>
                </div>
              </div> <!-- / .row -->
            </div> <!-- / .list-group -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body px-5">
            <div class="row align-items-center">
              <div class="col-6 text-center">
                <div class="squircle bg-success justify-content-center">
                  <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                </div>
                <p>Control area</p>
              </div>
              <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                  <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                </div>
                <p>Activity</p>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                  <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                </div>
                <p>Droplet</p>
              </div>
              <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                  <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                </div>
                <p>Upload</p>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                  <i class="fe fe-users fe-32 align-self-center text-white"></i>
                </div>
                <p>Users</p>
              </div>
              <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                  <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                </div>
                <p>Settings</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main> <!-- main -->
</div> <!-- .wrapper -->
{{-- @endsection --}}
