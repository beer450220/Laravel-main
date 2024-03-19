@extends('layouts.appstudent')
{{-- @include('layouts.menutopstudent')
@include('layouts.cssstudent')
@include('layouts.sidebarstudent') --}}
{{-- @include('layouts.scriptsstudent') --}}
@section('content')


{{-- <link href='https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css' rel='stylesheet'> --}}
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="row align-items-center my-3">
            <div class="col">
              <h2 class="page-title">ปฏิทินสหกิจ</h2>
            </div>
            <div class="col-auto">
              <button type="button" class="btn" data-toggle="modal" data-target=".modal-calendar"><span class="fe fe-filter fe-16 text-muted"></span></button>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#eventModal"><span class="fe fe-plus fe-16 mr-3"></span>New Event</button>
            </div>
          </div>
          <div id='calendar'></div>
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
<script src="../student/js/bootstrap.min.js"></script>
<script src="../student/js/simplebar.min.js"></script>
<script src='../student/js/daterangepicker.js'></script>
<script src='../student/js/jquery.stickOnScroll.js'></script>
<script src="../student/js/tinycolor-min.js"></script>
<script src="../student/js/config.js"></script>--}}
<script src='../student/js/fullcalendar.js'></script>
<script src='../student/js/fullcalendar.custom.js'></script> 

<script src='fullcalendar/core/index.global.js'></script>
<script src='fullcalendar/core/locales/th.global.js'></script>
<script src='fullcalendar/dist/index.global.js'></script>


{{-- <script src='../student/index.global.js'></script> --}}
{{-- <script src='../student/js/jquery.mask.min.js'></script>
<script src='../student/js/select2.min.js'></script>
<script src='../student/js/jquery.steps.min.js'></script>
<script src='../student/js/jquery.validate.min.js'></script>
<script src='../student/js/jquery.timepicker.js'></script>
<script src='../student/js/dropzone.min.js'></script>
<script src='../student/js/uppy.min.js'></script>
<script src='../student/js/quill.min.js'></script>
<script src='fullcalendar/dist/index.global.js'></script> --}}




@endsection

