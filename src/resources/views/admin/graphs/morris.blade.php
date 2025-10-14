@extends('admin.layout.app')
@push('scripts')
<script src="{{asset('backend/libs/morris-js/morris.min.js')}}"></script>
<script src="{{asset('backend/libs/raphael/raphael.min.js')}}"></script>
<script src="{{asset('backend/js/pages/morris.init.js')}}"></script>
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
                            <li class="breadcrumb-item active">Morris Chart</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Morris Chart</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Stacked Bar Chart</h4>
                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">2563</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Lifetime total sales</p>
                                    <p class="text-danger">18% <i class="mdi mdi-trending-down"></i></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">6952</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Income amounts</p>
                                    <p class="text-success">89% <i class="mdi mdi-trending-up"></i></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">1125</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Total visits</p>
                                    <p class="text-success">53% <i class="mdi mdi-trending-up"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="morris-bar-stacked" style="height: 320px;" dir="ltr" class="morris-charts"></div>

                </div>
            </div>

            <div class="col-lg-6">

                <div class="card-box">
                    <h4 class="header-title">Area Chart</h4>
                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">7584</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Lifetime total sales</p>
                                    <p class="text-danger">68% <i class="mdi mdi-trending-down"></i></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">2536</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Income amounts</p>
                                    <p class="text-success">89% <i class="mdi mdi-trending-up"></i></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">4521</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Total visits</p>
                                    <p class="text-success">23% <i class="mdi mdi-trending-up"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="morris-area-example" style="height: 320px;" dir="ltr" class="morris-charts"></div>

                </div>
            </div>

        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-6">

                <div class="card-box">
                    <h4 class="header-title">Line Chart</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mt-2">6952</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Lifetime total sales</p>
                                    <p class="text-danger">45% <i class="mdi mdi-trending-down"></i></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mt-2">78954</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Income amounts</p>
                                    <p class="text-success">56% <i class="mdi mdi-trending-up"></i></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mt-2">1254</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Total visits</p>
                                    <p class="text-success">78% <i class="mdi mdi-trending-up"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="morris-line-example" style="height: 320px;" dir="ltr" class="morris-charts"></div>

                </div> <!-- card-box -->

            </div> <!-- end row -->

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Bar Chart</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mt-2">12548</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Lifetime total sales</p>
                                    <p class="text-danger">0.05% <i class="mdi mdi-trending-down"></i></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mt-2">9658</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Income amounts</p>
                                    <p class="text-success">19% <i class="mdi mdi-trending-up"></i></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mt-2">6952</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Total visits</p>
                                    <p class="text-success">32% <i class="mdi mdi-trending-up"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="morris-bar-example" style="height: 320px;" dir="ltr" class="morris-charts"></div>

                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">

            <div class="col-lg-6">

                <div class="card-box">
                    <h4 class="header-title">Area Chart with Point</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">9681</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Lifetime total sales</p>
                                    <p class="text-danger">32% <i class="mdi mdi-trending-down"></i></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">2536</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Income amounts</p>
                                    <p class="text-success">9% <i class="mdi mdi-trending-up"></i></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">3650</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Total visits</p>
                                    <p class="text-success">59% <i class="mdi mdi-trending-up"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="morris-area-with-dotted" style="height: 320px;" dir="ltr" class="morris-charts"></div>
                </div>
            </div>

            <div class="col-lg-6">

                <div class="card-box">
                    <h4 class="header-title">Donut Chart</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">25631</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Lifetime total sales</p>
                                    <p class="text-danger">89% <i class="mdi mdi-trending-down"></i></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">412</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Income amounts</p>
                                    <p class="text-success">23% <i class="mdi mdi-trending-up"></i></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">9520</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Total visits</p>
                                    <p class="text-success">5.5% <i class="mdi mdi-trending-up"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="morris-donut-example" style="height: 320px;" dir="ltr" class="morris-charts"></div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- end container-fluid -->
</div>
@endsection