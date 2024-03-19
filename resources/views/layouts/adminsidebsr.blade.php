{{--

    <!-- Sidebar -->
    <ul class=" navbar-nav bg-secondary sidebar sidebar-dark " >

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../Admin/">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Admin </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">


     <li class="nav-item ">
            <a class="nav-link {{ set_active(['admin.adminhome'])}} " href="{{ route('admin.adminhome') }}">

               <i class="fa fa-home" aria-hidden="true"></i>

                <span>หน้าแรก</span></a>
        </li>


     <li class="nav-item">
            <a class="nav-link {{ set_active(['admin.user'])}} "href="{{ route('admin.user') }}">

           <i class="fa fa-user" aria-hidden="true"></i>


                <span>จัดการผู้ใช้งาน</span></a>
        </li>


    </ul> --}}

{{--
    <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Blank Page</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">

                  <li class="divider">Menu</li>

                  <li class=""><a href="{{ route('admin.adminhome') }}"><i class="icon mdi mdi-home"></i><span>หน้าแรก</span></a>
                  </li>
                  <li class=""><a class="text-primary" href="{{ route('admin.user') }}"><i class="icon mdi mdi-face"></i>จัดการผู้ใช้งาน</a>
                  </li> --}}
                  {{-- <li class=""><a href="/addlist"><i class="icon mdi mdi-account-add"></i><span>เพิ่มข้อมูล</span></a>
                  </li> --}}

                  {{-- <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>UI Elements</span></a>
                    <ul class="sub-menu">
                      <li><a href="ui-alerts.html">Alerts</a>
                      </li>
                      <li><a href="ui-buttons.html">Buttons</a>
                      </li>


                      </li>
                      <li><a href="ui-dragdrop.html"><span class="badge badge-primary float-right">New</span>Drag &amp; Drop</a>
                      </li>
                      <li><a href="ui-sweetalert2.html"><span class="badge badge-primary float-right">New</span>Sweetalert 2</a>
                      </li>
                    </ul>
                  </li> --}}

                  {{-- <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>UI Elements</span></a>
                    <ul class="sub-menu">
                      <li><a href="ui-alerts.html">แสดงข้อมูล</a>
                      </li>
                      <li><a href="ui-buttons.html">เพิ่มข้อมูล</a>
                      </li>

                      <li><a href="ui-panels.html">ลบ</a>
                      </li>
                      <li><a href="ui-general.html">แก้ไข</a>
                      </li>
                      <li><a href="ui-modals.html">Modals</a>
                      </li>
                      <li><a href="ui-notifications.html">Notifications</a>
                      </li>
                      <li><a href="ui-icons.html">Icons</a>
                      </li>
                      <li><a href="ui-grid.html">Grid</a>
                      </li>
                      <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a>
                      </li>
                      <li><a href="ui-nestable-lists.html">Nestable Lists</a>
                      </li>
                      <li><a href="ui-typography.html">Typography</a>
                      </li>
                      <li><a href="ui-dragdrop.html"><span class="badge badge-primary float-right">New</span>Drag &amp; Drop</a>
                      </li>
                      <li><a href="ui-sweetalert2.html"><span class="badge badge-primary float-right">New</span>Sweetalert 2</a>
                      </li>
                    </ul>
                  </li> --}}

                {{-- </ul>
              </div>
            </div>
          </div>

        </div>
      </div> --}}



      {{-- <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;" >
        <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
          <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-5 fw-semibold">Collapsible</span>
        </a>
        <ul class="list-unstyled ps-0">
          <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
              Home
            </button>
            <div class="collapse" id="home-collapse" style="">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Overview</a></li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Updates</a></li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Reports</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
              Dashboard
            </button>
            <div class="collapse" id="dashboard-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Overview</a></li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Weekly</a></li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Monthly</a></li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Annually</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
              Orders
            </button>
            <div class="collapse" id="orders-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">New</a></li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Processed</a></li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Shipped</a></li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Returned</a></li>
              </ul>
            </div>
          </li>
          <li class="border-top my-3"></li>
          <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
              Account
            </button>
            <div class="collapse" id="account-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">New...</a></li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Profile</a></li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Settings</a></li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Sign out</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div> --}}




      <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-warning opacity-25 sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../Admin/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


         <li class="nav-item active">
                <a class="nav-link "
                 href="{{ route('admin.adminhome') }}">

                   <i class="fa fa-home" aria-hidden="true"></i>

                    <span>หน้าแรก</span></a>
            </li>


         <li class="nav-item">
                <a class="nav-link "href="{{ route('admin.user') }}">

               <i class="fa fa-user" aria-hidden="true"></i>


                    <span>จัดการผู้ใช้งาน</span></a>
            </li>








            <hr class="sidebar-divider">


        </ul>
