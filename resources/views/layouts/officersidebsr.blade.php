<div id="wrapper">

    <!-- Sidebar -->
    <ul class=" navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/officer/home">
            <div class="sidebar-brand-icon rotate">
                {{-- <i class=" fas fa-laugh-wink"src="../icons/1.png"></i> --}}
                <img src="{{ asset('icons/1.png') }}" sizes="16x16"alt="Girl in a jacket" width="50" height="50">
            </div>
            {{-- <span class="avatar avatar-sm mt-2">
                    <img src="/icons/1.png " sizes="16x16" alt="..." class="avatar-img rounded-circle"></span> --}}
            <div class="sidebar-brand-text mx-3"></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">


     <li class="nav-item active">
            <a class="nav-link "
             href="/officer/home">

               <i class="fa fa-home" aria-hidden="true"></i>

                <span>หน้าแรก</span></a>
        </li>


     {{-- <li class="nav-item">
            <a class="nav-link"href="/officer/user1">

           <i class="fa fa-user" aria-hidden="true"></i>


                <span>จัดการผู้ใช้งาน</span></a>
        </li> --}}

        {{-- <li class="nav-item">
            <a class="nav-link"href="/officer/major">

           <i class="fa fa-user" aria-hidden="true"></i>


                <span>หลักสูตรสาขา</span></a>
        </li> --}}

        {{-- <li class="nav-item">
            <a class="nav-link"href="/officer/establishmentuser1">

           <i class="fa fa-user" aria-hidden="true"></i>


                <span>สถานประกอบการ</span></a>
        </li> --}}<li class="nav-item">
            <a class="nav-link"href="/officer/category">
                <i class="fa-solid fa-bell"></i>
                {{-- <i class="fa-solid fa-download"></i> --}}


                <span>จัดการแจ้งกำหนดการสหกิจ</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link"href="/officer/in2">
         <i class="fa-regular fa-address-book"></i>
                {{-- <i class="fa-solid fa-download"></i> --}}


                <span>ข้อมูลตรวจสอบเอกสาร</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link"href="/officer/schedule">

                <i class="fa-solid fa-download"></i>


                <span>เอกสารสหกิจศึกษา</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo2"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fa-solid fa-id-card"></i>
                <span>ข้อมูลนักศึกษา</span>
            </a>
            <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header"></h6>

                    {{-- <a class="collapse-item "href="/officer/schedule">ตารางกำหนดการปฏิทินสหกิจ</a> --}}
                    {{-- <a class="collapse-item "href="/officer/calendar6">กำหนดการปฏิทินสหกิจ</a> --}}
                    <a class="collapse-item "href="/officer/establishmentuser1">ข้อมูลสถานประกอบการ</a>
                    <a class="collapse-item "href="/officer/student">ข้อมูลนักศึกษา</a>
                    {{-- <a class="collapse-item "href="/officer/category">หนวดหมู่</a> --}}
                    <a class="collapse-item "href="/officer/major">หลักสูตรสาขา</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fa-solid fa-address-book"></i>
                <span>ลงทะเบียนสหกิจ</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header"></h6>

                    {{-- <a class="collapse-item "href="/officer/schedule">ตารางกำหนดการปฏิทินสหกิจ</a> --}}
                    {{-- <a class="collapse-item "href="/officer/calendar6">กำหนดการปฏิทินสหกิจ</a> --}}
                    <a class="collapse-item "href="/officer/register1">ลงทะเบียนสหกิจ</a>
                    <a class="collapse-item "href="/officer/acceptancedocument1">เอกสารตอบรับ/นักศึกษา</a>
                    <a class="collapse-item "href="/officer/informdetails2">เอกสารปฏิบัติงานนักศึกษา</a>
                </div>
            </div>
        </li>


        {{-- <li class="nav-item">
            <a class="nav-link"href="/officer/acceptancedocument1">

           <i class="fa fa-user" aria-hidden="true"></i>


                <span>เอกสารตอบรับ/นักศึกษา</span></a>
        </li> --}}

        {{-- <li class="nav-item">
            <a class="nav-link"href="/officer/informdetails2">

           <i class="fa fa-user" aria-hidden="true"></i>


                <span>เอกสารแจ้งรายละเอียด</span></a>
        </li> --}}


        <li class="nav-item">
            <a class="nav-link"href="/officer/es1">

                <i class="fa-solid fa-calendar-days"></i>


                <span>เอกสารขออนุญาตนิเทศงาน</span></a>
        </li>

        {{-- <li class="nav-item">
            <a class="nav-link"href="/officer/record2">

           <i class="fa fa-user" aria-hidden="true"></i>


                <span>บันทึกการปฏิบัติงานรายวัน</span></a>
        </li>  --}}
        <li class="nav-item">
            <a class="nav-link"href="/officer/Evaluate">

           <i class="fa fa-file" aria-hidden="true"></i>


                <span>เอกสารประเมินผล</span></a>
        </li>


{{--
        <li class="nav-item">
            <a class="nav-link"href="/officer/experiencereport2">

           <i class="fa fa-file" aria-hidden="true"></i>


                <span>เอกสารฝึกประสบการณ์</span></a>
        </li> --}}
{{--
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3"
                aria-expanded="true" aria-controls="collapse3">
                <i class="fa fa-file"></i>
                <span>รายงานผลปฏิบัติงาน</span>
            </a>
            <div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header"></h6>


                    <a class="collapse-item "href="/officer/experiencereport2">เอกสารฝึกประสบการณ์</a>
                    <a class="collapse-item "href="/officer/Evaluationdocuments">เอกสารประเมิน</a>

                </div>
            </div>
        </li>--}}
    </ul>
