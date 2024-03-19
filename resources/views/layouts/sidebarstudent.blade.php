{{-- <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">


      <li class="nav-item ">
        <a class="nav-link {{Request::is('student.studenthome')}} "
     href="{{ route('student.studenthome') }}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">หน้าแรก</span>
        </a>

       </li>


    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">จัดการข้อมูลลงทะเบียนสหกิจ</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic1">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link  "href="/studenthome/calendar">กำหนดปฏิทินสหกิจ</a></li>
          <li class="nav-item"> <a class="nav-link "href="?page=Submission">จัดการเอกสารสหกิจ</a></li>
          <li class="nav-item"> <a class="nav-link "href="?page=Form">ลงทะเบียนสหกิจ</a></li>
          <li class="nav-item"> <a class="nav-link "href="?page=Submission">ตรวจสอบสถานะสหกิจ</a></li>

        </ul>
      </div>
    </li>


      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
          <i class="menu-icon mdi mdi-file-document"></i>
          <span class="menu-title">จัดการข้อมูลนิเทศงาน</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic2">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link "href="?page=Form">จัดตารางนิเทศ</a></li>
            <li class="nav-item"> <a class="nav-link "href="?page=Submission">ข้อมูลผลประเมิน</a></li>

          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="menu-icon mdi mdi-file-document"></i>
          <span class="menu-title">เอกสาร</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link <?php echo isset($_GET['pasge']) && $_GET['page'] =='Form'?'active':''?>"href="?page=Form">แบบฟอร์มสหกิจ</a></li>
            <li class="nav-item"> <a class="nav-link <?php echo isset($_GET['pasge']) && $_GET['page'] =='Submission'?'active':''?>"href="?page=Submission">ส่งแบบฟอร์มสหกิจ</a></li>

          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link"href="?page=Record">
          <i class="mdi mdi-book-open menu-icon"></i>
          <span class="menu-title">ข้อมูลบันทึกการปฏิบัติงาน</span>
        </a>
      </li>



    </ul>

  </nav> --}}

  <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
      <i class="fe fe-x"><span class="sr-only"></span></i>

    </a>
    <nav class="vertnav navbar navbar-light">
      <!-- nav bar -->
      <div class="w-100 mb-4 d-flex">
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="/studenthome">
          {{-- <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">


      <g>
              <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
              <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
              <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
            </g>
          </svg> --}}
          <img src="{{ asset('icons/1.png') }}" sizes="16x16"alt="Girl in a jacket" width="50" height="50">
        </a>

      </div> {{-- <link rel="icon" type="image/png"  href=""> --}}
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown ">
          <a href="/studenthome"  class=" nav-link">
            <i class="fe fe-home fe-16"></i>
            <span class="ml-3 item-text">หน้าแรก</span><span class="sr-only">(current)</span>
          </a>


          {{-- <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="/studenthome/test"  class=" nav-link">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">ทดสอบไลน์</span><span class="sr-only">(current)</span>
              </a> --}}

      {{-- <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="/studenthome/establishmentuser"  class=" nav-link">
            <i class="fe fe-box fe-16"></i>
            <span class="ml-3 item-text">ข้อมูลสถานประกอบการ</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
            <li class="nav-item">
              <a class="nav-link pl-3" href="./ui-color.html"><span class="ml-1 item-text">Colors</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="./ui-typograpy.html"><span class="ml-1 item-text">Typograpy</span></a>
            </li>

        </li>



        </li>
      </ul> --}}
      {{-- <li class="nav-item dropdown ">
        <a href="/studenthome/timeline"  class=" nav-link">
          <i class="fe fe-home fe-16"></i>
          <span class="ml-3 item-text">ตรวจสอบถานะสหกิจ</span><span class="sr-only">(current)</span>
        </a> --}}

      {{-- <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="#ui-elementsss" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-box fe-16"></i>
            <span class="ml-3 item-text">ข้อมูลลงทะเบียนสหกิจ</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="ui-elementsss">
            <li class="nav-item">
              <a class="nav-link pl-3" href="/studenthome/calendar"><span class="ml-1 item-text">กำหนดการปฏิทินสหกิจ</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="/studenthome/documents"><span class="ml-1 item-text">เอกสารสหกิจ</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="/studenthome/register"><span class="ml-1 item-text">ลงทะเบียนสหกิจ</span></a>
            </li>
        </li>
        <li class="nav-item">
          <a class="nav-link pl-3" href="/studenthome/timeline"><span class="ml-1 item-text">ตรวจสอบถานะสหกิจ</span></a>
        </li>


        </li>
      </ul> --}}


      {{-- <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="/studenthome/acceptancedocument"  class=" nav-link">
            <i class="fe fe-box fe-16"></i>
            <span class="ml-3 item-text">เอกสารตอบรับ/นักศึกษา</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="ui-elementss">
            <li class="nav-item">
              <a class="nav-link pl-3" href="./ui-color.html"><span class="ml-1 item-text">Colors</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="./ui-typograpy.html"><span class="ml-1 item-text">Typograpy</span></a>
            </li>

        </li>



        </li>
      </ul> --}}


      {{-- <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item ">
          <a href="/studenthome/informdetails"  class=" nav-link">
            <i class="fe fe-box fe-16"></i>
            <span class="ml-3 item-text">เอกสารแจ้งรายละเอียด</span>
          </a>


        </li>
      </ul> --}}


      {{-- <p class="text-muted nav-heading mt-4 mb-1">
        <span>บันทึกการปฏิบัติงานรายวัน</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="/studenthome/record"  class=" nav-link">
            <i class="fe fe-book fe-16"></i>
            <span class="ml-3 item-text">บันทึกการปฏิบัติงานรายวัน</span>
          </a> --}}



{{--
      <p class="text-muted nav-heading mt-4 mb-1">
        <span>นิเทศงาน</span>
      </p> --}}
      {{-- <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="#ui-elementss3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-box fe-16"></i>
            <span class="ml-3 item-text">นิเทศงาน</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="ui-elementss3">
               <li class="nav-item">
              <a class="nav-link pl-3" href="/studenthome/calendar2"><span class="ml-1 item-text">ปฏิทินนิเทศงานสหกิจ</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="/studenthome/calendar2confirm"><span class="ml-1 item-text">ตารางการนิเทศ</span>
              </a>
            </li>

        </li>



        </li>
      </ul> --}}



      {{-- <p class="text-muted nav-heading mt-4 mb-1">
        <span>รายงานผลฝึกประสบการณ์</span>
      </p> --}}
      {{-- <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="/studenthome/report" class=" nav-link">
            <i class="fe fe-box fe-16"></i>
            <span class="ml-3 item-text">รายงานผลฝึกประสบการณ์</span>
          </a>




        </li>
      </ul> --}}





    </nav>
  </aside>
    {{-- <main role="main" class="main-content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="row align-items-center mb-2">
              <div class="col">
                <h2 class="h5 page-title">Welcome!</h2>
              </div>
              <div class="col-auto">
                <form class="form-inline">
                  <div class="form-group d-none d-lg-inline">
                    <label for="reportrange" class="sr-only">Date Ranges</label>
                    <div id="reportrange" class="px-2 py-2 text-muted">
                      <span class="small"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="button" class="btn btn-sm"><span class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                    <button type="button" class="btn btn-sm mr-2"><span class="fe fe-filter fe-16 text-muted"></span></button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mb-2 align-items-center">
              <div class="card shadow mb-4">
                <div class="card-body">
                  <div class="row mt-1 align-items-center">
                    <div class="col-12 col-lg-4 text-left pl-4">
                      <p class="mb-1 small text-muted">Balance</p>
                      <span class="h3">$12,600</span>
                      <span class="small text-muted">+20%</span>
                      <span class="fe fe-arrow-up text-success fe-12"></span>
                      <p class="text-muted mt-2"> Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui </p>
                    </div>
                    <div class="col-6 col-lg-2 text-center py-4">
                      <p class="mb-1 small text-muted">Today</p>
                      <span class="h3">$2600</span><br />
                      <span class="small text-muted">+20%</span>
                      <span class="fe fe-arrow-up text-success fe-12"></span>
                    </div>
                    <div class="col-6 col-lg-2 text-center py-4 mb-2">
                      <p class="mb-1 small text-muted">Goal Value</p>
                      <span class="h3">$260</span><br />
                      <span class="small text-muted">+6%</span>
                      <span class="fe fe-arrow-up text-success fe-12"></span>
                    </div>
                    <div class="col-6 col-lg-2 text-center py-4">
                      <p class="mb-1 small text-muted">Completions</p>
                      <span class="h3">26</span><br />
                      <span class="small text-muted">+20%</span>
                      <span class="fe fe-arrow-up text-success fe-12"></span>
                    </div>
                    <div class="col-6 col-lg-2 text-center py-4">
                      <p class="mb-1 small text-muted">Conversion</p>
                      <span class="h3">6%</span><br />
                      <span class="small text-muted">-2%</span>
                      <span class="fe fe-arrow-down text-danger fe-12"></span>
                    </div>
                  </div>
                  <div class="chartbox mr-4">
                    <div id="areaChart"></div>
                  </div>
                </div> <!-- .card-body -->
              </div> <!-- .card -->
            </div>




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
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
     <!-- main -->
   {{-- <!-- .wrapper --></main></div> --}}
