@extends('admin.layout.app')

@push('styles')
<link href="{{asset('backend/libs/ion-rangeslider/ion.rangeSlider.css')}}" rel="stylesheet" type="text/css" />
@endpush
@push('scripts')
<!-- Ion Range Slider-->
<script src="{{asset('backend/libs/ion-rangeslider/ion.rangeSlider.min.js')}}"></script>
<!-- Range slider init js-->
<script src="{{asset('backend/js/pages/range-sliders.init.js')}}"></script>
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin UI</a></li>
                            <li class="breadcrumb-item active">Range Sliders</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Range Sliders</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">

                <div class="card-box">

                    <h4 class="header-title">Modern skin</h4>

                    <p class="sub-header">
                        Cool, comfortable, responsive and easily customizable range slider
                    </p>

                    <form class="form-horizontal">
                        <div class="form-group row">
                            <label for="range_01" class="col-sm-2 col-xs-12 control-label"><b>Default</b><span class="font-13 d-block text-muted clearfix">Start without params</span></label>
                            <div class="col-sm-10 col-xs-12">
                                <input type="text" id="range_01">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="range_02" class="col-sm-2 col-xs-12 control-label"><b>Min-Max</b><span class=" font-13 d-block text-muted clearfix">Set min value, max value and start point</span></label>
                            <div class="col-sm-10 col-xs-12">
                                <input type="text" id="range_02">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="range_03" class="col-sm-2 col-xs-12 control-label"><b>Prefix</b><span class="font-13 d-block text-muted clearfix">showing grid and adding prefix "$"</span></label>
                            <div class="col-sm-10 col-xs-12">
                                <input type="text" id="range_03">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="range_04" class="col-sm-2 col-xs-12 control-label"><b>Range</b><span class="d-block font-13 text-muted clearfix">Set up range with negative values</span></label>
                            <div class="col-sm-10 col-xs-12">
                                <input type="text" id="range_04">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="range_05" class="col-sm-2 col-xs-12 control-label"><b>Step</b><span class="d-block font-13 text-muted clearfix">Using step 250</span></label>
                            <div class="col-sm-10 col-xs-12">
                                <input type="text" id="range_05">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="range_06" class="col-sm-2 col-xs-12 control-label"><b>Custom Values</b><span class="d-block font-13 text-muted clearfix">Using any strings as values</span></label>
                            <div class="col-sm-10 col-xs-12">
                                <input type="text" id="range_06">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="range_07" class="col-sm-2 col-xs-12 control-label"><b>Prettify Numbers</b><span class="d-block font-13 text-muted clearfix">Prettify enabled. Much better!</span></label>
                            <div class="col-sm-10 col-xs-12">
                                <input type="text" id="range_07">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="range_08" class="col-sm-2 col-xs-12 control-label"><b>Disabled</b><span class="d-block font-13 text-muted clearfix">Lock slider by using disable option</span></label>
                            <div class="col-sm-10 col-xs-12">
                                <input type="text" id="range_08">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="range_09" class="col-sm-2 col-xs-12 control-label"><b>Extra Example</b><span class="d-block font-13 text-muted clearfix">Whant to show that max number is not the biggest one?</span></label>
                            <div class="col-sm-10 col-xs-12">
                                <input type="text" id="range_09">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="range_10" class="col-sm-2 col-xs-12 control-label"><b>Use decorate_both option</b><span class="d-block font-13 text-muted clearfix">Use decorate_both option</span></label>
                            <div class="col-sm-10 col-xs-12">
                                <input type="text" id="range_10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="range_11" class="col-sm-2 col-xs-12 control-label"><b>Postfixes</b><span class="d-block font-13 text-muted clearfix">Using postfixes</span></label>
                            <div class="col-sm-10 col-xs-12">
                                <input type="text" id="range_11">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="range_12" class="col-sm-2 col-xs-12 control-label"><b>Hide</b><span class="d-block font-13 text-muted clearfix">Or hide any part you wish</span></label>
                            <div class="col-sm-10 col-xs-12">
                                <input type="text" id="range_12">
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- end col -->
        </div><!-- Row -->
    </div> <!-- end container-fluid -->
</div>
@endsection