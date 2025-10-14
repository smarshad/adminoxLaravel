@extends('admin.layout.app')
@push('scripts')
<!-- Sparkline charts -->
<script src="{{asset('backend/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<!-- init js -->
<script src="{{asset('backend/js/pages/sparkline.init.js')}}"></script>
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                            <li class="breadcrumb-item active">Sparkline Charts</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Sparkline Charts</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card-box">
                    <h4 class="header-title">Line Charts</h4>

                    <div class="text-center">
                        <h5 class="font-weight-normal text-muted">You have to pay</h5>
                        <h3 class="mb-3"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 25643 <small>USD</small></h3>
                    </div>

                    <div class="">
                        <div id="sparkline1"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card-box">
                    <h4 class="header-title">Bar Chart</h4>

                    <div class="text-center">
                        <h5 class="font-weight-normal text-muted">You have to pay</h5>
                        <h3 class="mb-3"><i class="mdi mdi-arrow-down-bold-hexagon-outline text-danger"></i> 5623 <small>USD</small></h3>
                    </div>

                    <div class="">
                        <div id="sparkline2" class="text-center"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card-box">
                    <h4 class="header-title">Pie Chart</h4>

                    <div class="text-center">
                        <h5 class="font-weight-normal text-muted">You have to pay</h5>
                        <h3 class="mb-3"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 32561 <small>USD</small></h3>
                    </div>

                    <div class="">
                        <div id="sparkline3" class="text-center"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card-box">
                    <h4 class="header-title">Custom Line Chart</h4>

                    <div class="text-center">
                        <h5 class="font-weight-normal text-muted">You have to pay</h5>
                        <h3 class="mb-3"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 23657 <small>USD</small></h3>
                    </div>

                    <div class="">
                        <div id="sparkline4" class="text-center"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card-box">
                    <h4 class="header-title">Mouse Speed Chart</h4>

                    <div class="text-center">
                        <h5 class="font-weight-normal text-muted">You have to pay</h5>
                        <h3 class="mb-3"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 894798 <small>USD</small></h3>
                    </div>

                    <div class="">
                        <div id="sparkline5" class="text-center"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card-box">
                    <h4 class="header-title">Composite bar Chart</h4>

                    <div class="text-center">
                        <h5 class="font-weight-normal text-muted">You have to pay</h5>
                        <h3 class="mb-3"><i class="mdi mdi-arrow-down-bold-hexagon-outline text-danger"></i> 254 <small>USD</small></h3>
                    </div>

                    <div class="text-center">
                        <div id="sparkline6" class="text-center"></div>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-4">
                <div class="card-box">
                    <h4 class="header-title">Discrete Chart</h4>

                    <div class="text-center">
                        <h5 class="font-weight-normal text-muted">You have to pay</h5>
                        <h3 class="mb-3"><i class="mdi mdi-arrow-down-bold-hexagon-outline text-danger"></i> 5498 <small>USD</small></h3>
                    </div>

                    <div class="text-center">
                        <div id="sparkline7" class="text-center"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card-box">
                    <h4 class="header-title">Bullet Chart</h4>

                    <div class="text-center">
                        <h5 class="font-weight-normal text-muted">You have to pay</h5>
                        <h3 class="mb-3"><i class="mdi mdi-arrow-down-bold-hexagon-outline text-danger"></i> 8948 <small>USD</small></h3>
                    </div>

                    <div class="text-center" style="min-height: 165px;">
                        <div id="sparkline8" class="text-center mb-3"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card-box">
                    <h4 class="header-title">Box Plot Chart</h4>

                    <div class="text-center">
                        <h5 class="font-weight-normal text-muted">You have to pay</h5>
                        <h3 class="mb-3"><i class="mdi mdi-arrow-down-bold-hexagon-outline text-danger"></i> 1651 <small>USD</small></h3>
                    </div>

                    <div class="text-center" style="min-height: 165px;">
                        <div id="sparkline9" class="text-center mb-3"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card-box">
                    <h4 class="header-title">Tristate Charts</h4>

                    <div class="text-center">
                        <h5 class="font-weight-normal text-muted">You have to pay</h5>
                        <h3 class="mb-3"><i class="mdi mdi-arrow-down-bold-hexagon-outline text-danger"></i> 8484 <small>USD</small></h3>
                    </div>

                    <div class="text-center" style="min-height: 165px;">
                        <div id="sparkline10" class="text-center mb-3"></div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->

</div>
@endsection