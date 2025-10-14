@extends('admin.layout.app')

@push('scripts')
<!-- google maps api -->
<script src="https://maps.google.com/maps/api/js"></script>
<!-- gmap js-->
<script src="{{asset('backend/libs/gmaps/gmaps.min.js')}}"></script>
<!-- Init js-->
<script src="{{asset('backend/js/pages/gmaps.init.js')}}"></script>

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
                            <li class="breadcrumb-item active">Google Maps</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Google Maps</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="mb-3 header-title">Basic</h4>

                    <div id="gmaps-basic" class="gmaps"></div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="mb-3 header-title">Markers</h4>

                    <div id="gmaps-markers" class="gmaps"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="mb-3 header-title">Polygons</h4>

                    <div id="gmaps-polygons" class="gmaps"></div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="mb-3 header-title">Overlays</h4>

                    <div id="gmaps-overlay" class="gmaps"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="mb-3 header-title">Street View Panoramas</h4>

                    <div id="panorama" class="gmaps-panaroma"></div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="mb-3 header-title">Routes</h4>

                    <div id="gmaps-route" class="gmaps"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="mb-3 header-title">Map Types</h4>

                    <div id="gmaps-types" class="gmaps"></div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="mb-3 header-title">Context menu (right click on map)</h4>

                    <div id="gmaps-menu" class="gmaps"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->

</div>
@endsection