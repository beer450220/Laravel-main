{{-- @extends('layouts.appstudent') --}}
{{-- @include('layouts.menutopstudent')
@include('layouts.cssstudent')
@include('layouts.sidebarstudent') --}}
{{-- @include('layouts.scriptsstudent') --}}
{{-- @section('content') --}}
<!doctype html>
<html lang="en">
<head>
<title>Laravel 9 Fullcalandar Jquery Ajax Create and Delete Event </title>
  {{-- <link href='https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css' rel='stylesheet'> --}}
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.1/fullcalendar.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.1/fullcalendar.min.js"></script>

  <script src='fullcalendar/core/index.global.js'></script>
  <script src='fullcalendar/core/locales/th.global.js'></script>
  <script src='fullcalendar/dist/index.global.js'></script>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.css' rel='stylesheet'>
<link href='https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.1/css/all.css' rel='stylesheet'>
</head>
<body>
<div class="container"><p><h1> </h1></p>
    
    <div class="panel panel-info  ">
        <div class="panel-heading">
          <main role="main" class="main-content">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-12">
                  <div class="row align-items-center my-3">
                    <div class="col">
                      <a href="/officer/home" class="btn btn-success" ><span class="fe fe-filter fe-16 text-muted"></span>ย้อมกลับ</a>
                    </div>
                    <div class="col-auto">
                      
                      {{-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#eventModal"><span class="fe fe-plus fe-16 mr-3"></span>New Event</button> --}}
                      {{-- <a href="/studenthome/calendar2confirm" class="btn btn-success" ><span class="fe fe-filter fe-16 text-muted"></span>ตารางยืนยันนิเทศ</a> --}}
                    </div>
                  </div>
             
                   <h2 class="page-title">กำหนดการปฏิทินสหกิจ</h2>
        </div>
       
      </div>
    </div>
  </div>
        <div class="panel-body" >
           
            <div id='calendar'></div>
            
        </div>
    </div>
</div>
</body> 



{{-- <link href='https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css' rel='stylesheet'> --}}

       


          <!DOCTYPE html>
          <html lang="th">
          <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <meta http-equiv="X-UA-Compatible" content="ie=edge">
              <title>Full Calendar js</title>
              <meta name="csrf-token" content="{{ csrf_token() }}" />
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
          
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
          </head>
          <body>
            
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
          
          
          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ข้อมูลนิเทศงาน</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div> 
                  <div class="modal-body  ">
                     
                        <p>Some text in the modal.</p>
                      </div>
                   
                      <div class="modal-body modal-body2 ">
                        <p>Some text in the modal.</p>
                      </div>
                      <div class="modal-body modal-body2 modal-body3">
                        <p>Some text in the modal.</p>
                      </div>
                      {{-- <form method="POST" action="{{ route('calendar2add'.$events->id) }}"enctype="multipart/form-data">
                        @csrf --}}
                  {{-- <div class="modal-body">
                    <label for="recipient-name" class="col-form-label">หมายเหตุ</label>
                    <input type="text" class="form-control" id="title">
                   
                    </div> --}}

                    {{-- <div class="modal-body">
                      
                      <select class="form-select form-select-lg mb-3" name="Status" aria-label="Default select example">
                        <option selected>รอยืนยัน</option>
             
                        <option value="2">ยืนยันแล้ว</option>
                        
                      </select> --}}
                 
                  
                    <span id="titleError" class="text-danger"></span>
              
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="submit" id="saveBtn" class="btn btn-primary">Save changes</button> --}}
                  </div>   </form>
                </div>
              </div>
            </div> 
          
          
           
          
          
            <!-- Modal -->
            <div class="modal fade" id="myModal1" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                  </div>
                  <div class="modal-body">
                    <p>Some text in the modal.</p>
                  </div>
                  {{-- <div class="modal-body modal-body1">
                      <p>Some text in the modal.</p>
                    </div> --}}
                    <div class="modal-body modal-body2 modal-body3">
                      <p>Some text in the modal.</p>
                    </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
                
              </div>
            </div>
          
          
             {{-- <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'> --}}
            {{--<link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'> --}}
            <script src='fullcalendar/dist/index.global.js'></script>
            <script src='fullcalendar/core/main.js'></script>
            <script src='fullcalendar/core/locales/th.js'></script>
          <script>
              $(document).ready(function() {
                  $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                  });
                  var booking = @json($events);
                  $('#calendar').fullCalendar({
                      header: {
                          left: 'prev, next today',
                          center: 'title',
                          timeZone: 'Asia/Bangkok',
                          locale:'th',
                       //  right: 'month,basicWeek,basicDay',
                         right: 'month, agendaWeek, agendaDay',
                         themeSystem: 'bootstrap5',
                        
                         
                      },
                      events: booking,
                      
                      displayEventTime: false,
                      eventRender: function (event, element, view) {
                                  if (event.allDay === 'true') {
                                          event.allDay = true;
                                  } else {
                                          event.allDay = false;
                                  }
                              }, 
                      // selectable: true,
                      // selectHelper: true,
                      // select: function(start, end, allDays) {
                      //    $('#bookingModal').modal('toggle');
                      //     $('#saveBtn').click(function() {
                      //         var title = $('#title').val();
                      //         var start = moment(start).format('YYYY-MM-DD');
                      //         var end = moment(end).format('YYYY-MM-DD');
                      //         $.ajax({
                      //             url:"",
                      //             type:"POST",
                      //             dataType:'json',
                      //             data:{ title, start, end  },
                      //             success:function(response)
                      //             {
                      //                 $('#bookingModal').modal('hide')
                      //                 $('#calendar').fullCalendar('renderEvent', {
                      //                     'title': response.title,
                      //                     'start' : response.start,
                      //                     'end'  : response.end,
                      //                     'color' : response.color
                      //                 });
                      //            },
                      //            error:function(error)
                      //            {
                      //                if(error.responseJSON.errors) {
                      //                    $('#titleError').html(error.responseJSON.errors.title);
                      //                }
                      //            },
                      //        });
                      //    });
                     // },
                      editable: false,
                      eventDrop: function(event) {
                          var id = event.id;
                          var start_date = moment(event.start).format('YYYY-MM-DD');
                          var end_date = moment(event.end).format('YYYY-MM-DD');
                          $.ajax({
                                  url:"" +'/'+ id,
                                  type:"PATCH",
                                  dataType:'json',
                                  data:{ start_date, end_date  },
                                  success:function(response)
                                  {
                                      swal("Good job!", "Event Updated!", "success");
                                  },
                                  error:function(error)
                                  {
                                      console.log(error)
                                  },
                              });
                      },
                      eventClick: function(events){
                          $('#myModal').modal('toggle');
                          $("#myModal .modal-body p").text(events.title);
                          //$("#myModal .modal-body1").text(events.id);
                          $("#myModal .modal-body2").text(events.name);
                          $("#myModal .modal-body3").text(events.Status);
                         // $("#myModal .modal-body p").text(event.name);
                         // $('#bookingModal').modal('toggle');
                      // var id = event.id;
                          // if(confirm('Are you sure want to remove it')){
                          //     $.ajax({
                          //         url:"" +'/'+ id,
                          //         type:"edit",
                          //         dataType:'json',
                          //         success:function(response)
                          //         {
                          //             $('#calendar').fullCalendar('removeEvents', response);
                          //             // swal("Good job!", "Event Deleted!", "success");
                          //         },
                          //         error:function(error)
                          //         {
                          //             console.log(error)
                              //   },
                           //  });
                        // }
                      },
                      selectAllow: function(event)
                      {
                          return moment(event.start).utcOffset(false).isSame(moment(event.end).subtract(1, 'second').utcOffset(false), 'day');
                      },
                  });
                  $("#bookingModal").on("hidden.bs.modal", function () {
                    //  $('#saveBtn').unbind();
                  });
                 // $('.fc-event').css('font-size', '20px');
                 // $('.fc-event').css('width', '100px');
                 // $('.fc-event').css('border-radius', '50%');
                // $('.fc-event').css('border', '50%');
              });
              
          </script>
         {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
         {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
         <!-- Modal -->

       
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> --}}
 






 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
       
          <div class="modal-body modal-body2">
            <p>Some text in the modal.</p>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div> 
            
           

<script src='fullcalendar/dist/index.global.js'></script>
<script src='fullcalendar/core/main.js'></script>
<script src='fullcalendar/core/locales/th.js'></script>






          <!-- new event modal -->
          <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="varyModalLabel">New Event</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body p-4">
                  <form>
                    <div class="form-group">
                      <label for="eventTitle" class="col-form-label">Title</label>
                      <input type="text" class="form-control" id="eventTitle" placeholder="Add event title">
                    </div>
                    <div class="form-group">
                      <label for="eventNote" class="col-form-label">Note</label>
                      <textarea class="form-control" id="eventNote" placeholder="Add some note for your event"></textarea>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-8">
                        <label for="eventType">Event type</label>
                        <select id="eventType" class="form-control select2">
                          <option value="work">Work</option>
                          <option value="home">Home</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="date-input1">Start Date</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16"></span></div>
                          </div>
                          <input type="text" class="form-control drgpicker" id="drgpicker-start" value="04/24/2020">
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="startDate">Start Time</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text" id="button-addon-time"><span class="fe fe-clock fe-16"></span></div>
                          </div>
                          <input type="text" class="form-control time-input" id="start-time" placeholder="10:00 AM">
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="date-input1">End Date</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16"></span></div>
                          </div>
                          <input type="text" class="form-control drgpicker" id="drgpicker-end" value="04/24/2020">
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="startDate">End Time</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text" id="button-addon-time"><span class="fe fe-clock fe-16"></span></div>
                          </div>
                          <input type="text" class="form-control time-input" id="end-time" placeholder="11:00 AM">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="RepeatSwitch" checked>
                    <label class="custom-control-label" for="RepeatSwitch">All day</label>
                  </div>
                  <button type="button" class="btn mb-2 btn-primary">Save Event</button>
                </div>
              </div>
            </div>
          </div> <!-- new event modal -->
        </div> <!-- .col-12 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->
</main> <!-- main -->
</div> <!-- .wrapper -->

{{-- <script src="../student/js/jquery.min.js"></script>
<script src="../student/js/popper.min.js"></script>
<script src="../student/js/moment.min.js"></script> 
 <script src="../student/js/bootstrap.min.js"></script> --}}

 {{-- <script src="../student/js/simplebar.min.js"></script>
<script src='../student/js/daterangepicker.js'></script> 
 <script src='../student/js/jquery.stickOnScroll.js'></script>
<script src="../student/js/tinycolor-min.js"></script>
<script src="../student/js/config.js"></script>  --}}



{{-- <script src='../student/js/fullcalendar.js'></script>
<script src='../student/js/fullcalendar.custom.js'></script>

 <script src='fullcalendar/core/index.global.js'></script>
<script src='fullcalendar/core/locales/th.global.js'></script>
<script src='fullcalendar/dist/index.global.js'></script> 


 <script src='../student/index.global.js'></script>  --}}


 {{-- <script src='../student/js/jquery.mask.min.js'></script>
<script src='../student/js/select2.min.js'></script>
<script src='../student/js/jquery.steps.min.js'></script>
<script src='../student/js/jquery.validate.min.js'></script>
<script src='../student/js/jquery.timepicker.js'></script>
<script src='../student/js/dropzone.min.js'></script>
<script src='../student/js/uppy.min.js'></script>
<script src='../student/js/quill.min.js'></script>
<script src='fullcalendar/dist/index.global.js'></script>  --}}




{{-- @endsection --}}

