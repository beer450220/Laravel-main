<div id="wrapper">

    <!-- Sidebar -->
    <ul class=" navbar-nav bg-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../Admin/">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class=" fas fa-laugh-wink"src="/icons/1.png "></i>

            </div>
            {{-- <span class="avatar avatar-sm mt-2">
                    <img src="/icons/1.png " sizes="16x16" alt="..." class="avatar-img rounded-circle"></span> --}}
            <div class="sidebar-brand-text mx-3">officer </div>
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
        </li> --}}
        <li class="nav-item">
            <a class="nav-link"href="/officer/schedule">

           <i class="fa fa-user" aria-hidden="true"></i>


                <span>กำหนดการปฏิทินสหกิจ</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo2"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fa fa-file"></i>
                <span>ข้อมูลสถานประกอบการ</span>
            </a>
            <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header"></h6>

                    {{-- <a class="collapse-item "href="/officer/schedule">ตารางกำหนดการปฏิทินสหกิจ</a> --}}
                    {{-- <a class="collapse-item "href="/officer/calendar6">กำหนดการปฏิทินสหกิจ</a> --}}
                    <a class="collapse-item "href="/officer/establishmentuser1">สถานประกอบการ</a>
                    <a class="collapse-item "href="/officer/category">หนวดหมู่</a>
                    <a class="collapse-item "href="/officer/major">หลักสูตรสาขา</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fa fa-file"></i>
                <span>ลงทะเบียนสหกิจ</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header"></h6>

                    {{-- <a class="collapse-item "href="/officer/schedule">ตารางกำหนดการปฏิทินสหกิจ</a> --}}
                    {{-- <a class="collapse-item "href="/officer/calendar6">กำหนดการปฏิทินสหกิจ</a> --}}
                    <a class="collapse-item "href="/officer/register1">ลงทะเบียนสหกิจ</a>
                    <a class="collapse-item "href="/officer/acceptancedocument1">เอกสารตอบรับ/นักศึกษา</a>
                </div>
            </div>
        </li>


        {{-- <li class="nav-item">
            <a class="nav-link"href="/officer/acceptancedocument1">

           <i class="fa fa-user" aria-hidden="true"></i>


                <span>เอกสารตอบรับ/นักศึกษา</span></a>
        </li> --}}

        <li class="nav-item">
            <a class="nav-link"href="/officer/informdetails2">

           <i class="fa fa-user" aria-hidden="true"></i>


                <span>เอกสารแจ้งรายละเอียด</span></a>
        </li>


        <li class="nav-item">
            <a class="nav-link"href="/officer/es1">

           <i class="fa fa-user" aria-hidden="true"></i>


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



        <li class="nav-item">
            <a class="nav-link"href="/officer/experiencereport2">

           <i class="fa fa-file" aria-hidden="true"></i>


                <span>เอกสารฝึกประสบการณ์</span></a>
        </li>
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
