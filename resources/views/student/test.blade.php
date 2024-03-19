@extends('layouts.appstudent')

 {{-- @include('layouts.menutopstudent') --}}
{{-- @include('layouts.cssstudent') --}}
{{--@include('layouts.sidebarstudent') --}}
{{-- @include('layouts.scriptsstudent') --}}
@section('content')
<title>user</title>


<div class="container">
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
                
            </div>sss
        </div>
    </div>
    
</div>
{{-- <main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="page-title">Form elements</h2>
          <p class="text-muted">Demo for form control styles, layout options, and custom components for creating a wide variety of forms.</p>
          <div class="card shadow mb-4">
            <div class="card-header">
              <strong class="card-title">Form controls</strong>
            </div>
            <div class="card-body">
              <div class="row">
               
                <div class="col-md-6"> 
                    {{-- <form method="POST" action="/studenthome/test">
                    @csrf
                    <input type="hidden"  name="line_id" class="form-control">
                  <div class="form-group mb-3">
                    <label for="simpleinput">ส่งข้อความ</label>
                    <input type="text" id="simpleinput" name="message1" class="form-control">
                  </div>
                 
               
                <div class="text-end form-group mb-3 ">
                <button type="submit" name="submit" class="btn mb-2 btn-outline-primary">ตกลง</button>  
               
                </div>
                </div>
              </div>
            </div>
          </div> 
 --}} 


          {{-- <main role="main" class="main-content">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-12">
                  <h2 class="page-title">Form elements</h2>
                  <p class="text-muted">Demo for form control styles, layout options, and custom components for creating a wide variety of forms.</p>
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <strong class="card-title">Form controls</strong>
                    </div>
                    <div class="card-body">
                      <div class="row">
                       
                        <div class="col-md-6"> 
                            <form method="POST" action="/studenthome/test">
                            @csrf
                            <input type="hidden"  name="line_id" class="form-control">
                          <div class="form-group mb-3">
                            <label for="simpleinput">ส่งข้อความ</label>
                            <input type="text" id="simpleinput" name="name" class="form-control">
                          </div>
                         
                       
                        <div class="text-end form-group mb-3 ">
                        <button type="submit" name="submit" class="btn mb-2 btn-outline-primary">ตกลง</button>  
                       
                        </div>
                        </div>
                      </div>
                    </div>
                  </div> --}}



                  <!DOCTYPE html>
                  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
                  <head>
                      <meta charset="utf-8">
                      <meta name="viewport" content="width=device-width, initial-scale=1">
                      <title>Create Fullcalender CRUD Events in Laravel</title>
                      <meta name="csrf-token" content="{{ csrf_token() }}">
                      {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" /> --}}
                      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
                      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
                  </head>
                  <body>
                      <div class="container mt-5" style="max-width: 700px">
                          <h2 class="h2 text-center mb-5 border-bottom pb-3">Laravel FullCalender CRUD Events Example</h2>
                          <div id='full_calendar_events'></div>
                      </div>
                      {{-- Scripts --}}
                      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
                      <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
                      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
                      <script>
                          $(document).ready(function () {
                              var SITEURL = "{{ url('/') }}";
                              $.ajaxSetup({
                                  headers: {
                                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                  }
                              });
                              var calendar = $('#full_calendar_events').fullCalendar({
                                  editable: true,
                                  editable: true,
                                  events: SITEURL + "/calendar-event",
                                  displayEventTime: true,
                                  eventRender: function (event, element, view) {
                                      if (event.allDay === 'true') {
                                          event.allDay = true;
                                      } else {
                                          event.allDay = false;
                                      }
                                  },
                                  selectable: true,
                                  selectHelper: true,
                                  select: function (event_start, event_end, allDay) {
                                      var event_name = prompt('Event Name:');
                                      if (event_name) {
                                          var event_start = $.fullCalendar.formatDate(event_start, "Y-MM-DD HH:mm:ss");
                                          var event_end = $.fullCalendar.formatDate(event_end, "Y-MM-DD HH:mm:ss");
                                          $.ajax({
                                              url: SITEURL + "/calendar-crud-ajax",
                                              data: {
                                                  event_name: event_name,
                                                  event_start: event_start,
                                                  event_end: event_end,
                                                  type: 'create'
                                              },
                                              type: "POST",
                                              success: function (data) {
                                                  displayMessage("Event created.");
                                                  calendar.fullCalendar('renderEvent', {
                                                      id: data.id,
                                                      title: event_name,
                                                      start: event_start,
                                                      end: event_end,
                                                      allDay: allDay
                                                  }, true);
                                                  calendar.fullCalendar('unselect');
                                              }
                                          });
                                      }
                                  },
                                  eventDrop: function (event, delta) {
                                      var event_start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                                      var event_end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
                                      $.ajax({
                                          url: SITEURL + '/calendar-crud-ajax',
                                          data: {
                                              title: event.event_name,
                                              start: event_start,
                                              end: event_end,
                                              id: event.id,
                                              type: 'edit'
                                          },
                                          type: "POST",
                                          success: function (response) {
                                              displayMessage("Event updated");
                                          }
                                      });
                                  },
                                  eventClick: function (event) {
                                      var eventDelete = confirm("Are you sure?");
                                      if (eventDelete) {
                                          $.ajax({
                                              type: "POST",
                                              url: SITEURL + '/calendar-crud-ajax',
                                              data: {
                                                  id: event.id,
                                                  type: 'delete'
                                              },
                                              success: function (response) {
                                                  calendar.fullCalendar('removeEvents', event.id);
                                                  displayMessage("Event removed");
                                              }
                                          });
                                      }
                                  }
                              });
                          });
                          function displayMessage(message) {
                              toastr.success(message, 'Event');            
                          }
                      </script>
                  </body>
                  </html>



@endsection 
{{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
    {{ Auth::user()->name }}
</a>
<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form> --}}
                                   