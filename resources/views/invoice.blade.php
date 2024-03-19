@include('layouts.admincss')
<html>
<head>
</head>
<body>
<h1>ใบแจ้งหนี้สำหรับ คุณ{{ $name }}</h1>
ขอขอบคุณในการสั่งซื้อ
sss


        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>ลำดับ</th>
              <th>หัวเรื่อง</th>
              <th>ชื่อนักศึกษา</th>
              <th>ชื่อสถานประกอบการ</th>
              <th>สถานะ</th>
            
            </tr>
          </thead>
          <tbody>
            {{-- @foreach ($users as $users)
            <tr>
              <td class="col-1 text center">{{$users->id}}</td>
              <td>{{$users->title}}</td>
              <td>{{$users->start}}</td>
              <td>{{$users->end}}</td>
              <td>{{$users->title}}</td>
             
            </tr>

            @endforeach --}}
          </tbody>
        </table>
        {{-- {!!$users->links('pagination::bootstrap-5')!!} --}}
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
</body>
</html>