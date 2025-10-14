@extends('admin.layout.app')
@push('styles')
<link href="{{asset('backend/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
@endpush
@push('scripts')
<script src="{{asset('backend/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('backend/libs/jquery-vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('backend/libs/jquery-vectormap/jquery-jvectormap-us-merc-en.js')}}"></script>
<script src="{{asset('backend/libs/jquery-vectormap/jquery-jvectormap-in-mill-en.js')}}"></script>
<script src="{{asset('backend/libs/jquery-vectormap/jquery-jvectormap-au-mill-en.js')}}"></script>
<script src="{{asset('backend/libs/jquery-vectormap/jquery-jvectormap-us-il-chicago-mill-en.js')}}"></script>
<script src="{{asset('backend/libs/jquery-vectormap/jquery-jvectormap-uk-mill-en.js')}}"></script>
<script src="{{asset('backend/libs/jquery-vectormap/jquery-jvectormap-ca-lcc-en.js')}}"></script>
<script src="{{asset('backend/js/pages/jvectormap.init.js')}}"></script>
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Maps</a></li>
                            <li class="breadcrumb-item active">Vector Map</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Vector Map</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="header-title mb-3">World Map</h4>

                    <div id="world-map-markers" style="height: 500px"></div>

                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">USA Map</h4>

                    <div id="usa" style="height: 400px"></div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">India Map</h4>

                    <div id="india" style="height: 400px"></div>

                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">UK Map</h4>

                    <div id="uk" style="height: 400px"></div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Chicago Map</h4>

                    <div id="chicago" style="height: 400px"></div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Australia Map</h4>

                    <div id="australia" style="height: 400px"></div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Canada Map</h4>

                    <div id="canada" style="height: 400px"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->

</div>
@endsection