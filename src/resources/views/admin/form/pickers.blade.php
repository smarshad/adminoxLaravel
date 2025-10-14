@extends('admin.layout.app')
@push('styles')
<link href="{{asset('backend/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/libs/clockpicker/bootstrap-clockpicker.min.css')}}" rel="stylesheet">
<link href="{{asset('backend/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/libs/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
<link href="{{asset('backend/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />

@endpush
@push('scripts')
<!-- Plugins js -->
<script src="{{asset('backend/libs/moment/moment.min.js')}}"></script>
<script src="{{asset('backend/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('backend/libs/bootstrap-timepicker/bootstrap-timepicker.min.js')}}"></script>
<script src="{{asset('backend/libs/clockpicker/bootstrap-clockpicker.min.js')}}"></script>
<script src="{{asset('backend/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('backend/libs/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- Init js-->
<script src="{{asset('backend/js/pages/form-pickers.init.js')}}"></script>
@endpush
@section('content')
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Adminox</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Form Pickers</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Form Pickers</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Timepicker</h4>
                    <p class="sub-header">
                        Easily select a time for a text input using your mouse or keyboards arrow keys.
                    </p>

                    <div class="form-group">
                        <label>Default Time Picker</label>
                        <div class="input-group">
                            <input id="timepicker" type="text" class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                            </div>
                        </div><!-- input-group -->
                    </div>

                    <div class="form-group">
                        <label>24 Hour Mode Time Picker</label>
                        <div class="input-group">
                            <input id="timepicker2" type="text" class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                            </div>
                        </div><!-- input-group -->
                    </div>

                    <div class="form-group mb-0">
                        <label>Specify a step for the minute field</label>
                        <div class="input-group">
                            <input id="timepicker3" type="text" class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                            </div>
                        </div><!-- input-group -->
                    </div>

                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Colorpicker</h4>
                    <p class="sub-header">
                        Add color picker to field or to any other element.
                    </p>

                    <form action="#">
                        <div class="form-group">
                            <label>Default</label>
                            <input type="text" class="colorpicker-default form-control" value="#8fff00">
                        </div>
                        <div class="form-group">
                            <label>RGBA</label>
                            <input type="text" class="colorpicker-rgba form-control" value="rgb(0,194,255,0.78)" data-color-format="rgba">
                        </div>
                        <div class="form-group mb-0">
                            <label>As Component</label>

                            <div class="input-group colorpicker-default" data-color-format="rgb" data-color="rgb(255, 146, 180)">
                                <input type="text" readonly="readonly" class="form-control">
                                <div class="input-group-append add-on">
                                    <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                </div>
                            </div>

                        </div>
                    </form>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Date Range Picker</h4>
                    <p class="sub-header">
                        A JavaScript component for choosing date ranges.
                        Designed to work with the Bootstrap CSS framework.
                    </p>

                    <form>
                        <div class="form-group">
                            <label>Predefined Date Ranges</label>
                            <input type="text" id="reportrange" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Date Range Pick</label>
                            <div>
                                <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2015 - 01/31/2015" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Date Range With Time</label>
                            <div>
                                <input type="text" class="form-control input-daterange-timepicker" name="daterange" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM" />
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <label>Limit Selectable Dates</label>
                            <div>
                                <input class="form-control input-limit-datepicker" type="text" name="daterange" value="06/01/2015 - 06/07/2015" />
                            </div>
                        </div>
                    </form>
                </div> <!-- end card-box -->
            </div>
            <!-- end col -->

            <div class="col-lg-6">

                <div class="card-box">
                    <h4 class="header-title">Clock Picker</h4>
                    <p class="sub-header">
                        A clock-style timepicker for Bootstrap (or jQuery).Your awesome text goes here.
                    </p>

                    <div class="form-group">
                        <label>Default Clock Picker</label>
                        <div class="input-group clockpicker">
                            <input type="text" class="form-control" value="09:30">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                            </div>
                        </div>
                    </div>




                    <div class="form-group">
                        <label>Auto close</label>
                        <div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true">
                            <input type="text" class="form-control" value="13:14">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">

                        <label>Now time</label>
                        <div class="input-group">
                            <input class="form-control" id="single-input" type="text" value="" placeholder="Now">
                            <span class="input-group-append">
                                <button type="button" id="check-minutes" class="btn waves-effect waves-light btn-primary">Check the minutes</button>
                            </span>
                        </div>

                    </div>

                    <div class="form-group mb-0">

                        <label>Place at left, align the arrow to top </label>
                        <div class="input-group clockpicker" data-placement="top" data-align="top">
                            <input type="text" class="form-control" value="13:14">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                            </div>
                        </div>

                    </div>
                </div> <!-- card-box -->

            </div> <!-- end col -->

        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title">Date Picker</h4>
                    <p class="sub-header">
                        The datepicker is tied to a standard form input field. Click on the input to open
                        an interactive calendar in a small overlay. Click elsewhere on the page or hit the Esc
                        key to close. If a date is chosen, feedback is shown as the input's value.
                    </p>

                    <div class="row">
                        <div class="col-lg-8">

                            <div class="">
                                <form action="#">
                                    <div class="form-group">
                                        <label>Default Functionality</label>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                </div>
                                            </div><!-- input-group -->
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Auto Close</label>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                </div>
                                            </div><!-- input-group -->
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Multiple Date</label>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-multiple-date">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                </div>
                                            </div><!-- input-group -->
                                        </div>
                                    </div>

                                    <div class="form-group mb-0">
                                        <label>Date Range</label>
                                        <div>
                                            <div class="input-daterange input-group" id="date-range">
                                                <input type="text" class="form-control" name="start" />
                                                <input type="text" class="form-control" name="end" />
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>

                        <div class="col-lg-4">

                            <div class="mt-3 mt-lg-0">
                                <label>Display Inline</label>
                                <div class="center-block" style="margin: 10px auto">
                                    <div id="datepicker-inline" class=""></div>
                                </div><!-- input-group -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->

</div>
@endsection