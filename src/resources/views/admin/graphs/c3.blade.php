@extends('admin.layout.app')
@push('styles')
<link href="{{asset('backend/libs/c3/c3.min.css')}}" rel="stylesheet" type="text/css" />
@endpush
@push('scripts')
<!--C3 Chart-->
<script src="{{asset('backend/libs/d3/d3.min.js')}}"></script>
<script src="{{asset('backend/libs/c3/c3.min.js')}}"></script>

<!-- Init js -->
<script src="{{asset('backend/js/pages/c3.init.js')}}"></script>
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
                            <li class="breadcrumb-item active">C3 Chart</li>
                        </ol>
                    </div>
                    <h4 class="page-title">C3 Chart</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-6">

                <div class="card-box">
                    <h4 class="header-title">Bar Chart</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">2563</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Lifetime Sales</p>
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

                    <div id="chart" dir="ltr"></div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Stacked Area Chart</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">5959</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Lifetime Sales</p>
                                    <p class="text-danger">18% <i class="mdi mdi-trending-down"></i></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">821</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Income amounts</p>
                                    <p class="text-success">89% <i class="mdi mdi-trending-up"></i></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">2005</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Total visits</p>
                                    <p class="text-success">53% <i class="mdi mdi-trending-up"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="chart-stacked" dir="ltr"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Roated Chart</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">8952</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Lifetime Sales</p>
                                    <p class="text-danger">18% <i class="mdi mdi-trending-down"></i></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">64684</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Income amounts</p>
                                    <p class="text-success">89% <i class="mdi mdi-trending-up"></i></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">5665</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Total visits</p>
                                    <p class="text-success">53% <i class="mdi mdi-trending-up"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="roated-chart" dir="ltr"></div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Combine Chart</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">4465</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Lifetime Sales</p>
                                    <p class="text-danger">18% <i class="mdi mdi-trending-down"></i></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">4684</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Income amounts</p>
                                    <p class="text-success">89% <i class="mdi mdi-trending-up"></i></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">6462</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Total visits</p>
                                    <p class="text-success">53% <i class="mdi mdi-trending-up"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="combine-chart" dir="ltr"></div>
                </div>
            </div>

        </div>
        <!-- end row -->


        <div class="row">

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Donut Chart</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">65498</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Lifetime Sales</p>
                                    <p class="text-danger">18% <i class="mdi mdi-trending-down"></i></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">9798</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Income amounts</p>
                                    <p class="text-success">89% <i class="mdi mdi-trending-up"></i></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">651</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Total visits</p>
                                    <p class="text-success">53% <i class="mdi mdi-trending-up"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="donut-chart" dir="ltr"></div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Pie Chart</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">2563</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Lifetime Sales</p>
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

                    <div id="pie-chart" dir="ltr"></div>
                </div>
            </div>

        </div>
        <!-- end row -->


        <div class="row">

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Scatter Plot</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">694</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Lifetime Sales</p>
                                    <p class="text-danger">18% <i class="mdi mdi-trending-down"></i></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">984</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Income amounts</p>
                                    <p class="text-success">89% <i class="mdi mdi-trending-up"></i></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">64056</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Total visits</p>
                                    <p class="text-success">53% <i class="mdi mdi-trending-up"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="scatter-plot" dir="ltr"></div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Line Chart with Regions</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">89498</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Lifetime Sales</p>
                                    <p class="text-danger">18% <i class="mdi mdi-trending-down"></i></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">56248</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Income amounts</p>
                                    <p class="text-success">89% <i class="mdi mdi-trending-up"></i></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <h3 class="mb-2">1220</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Total visits</p>
                                    <p class="text-success">53% <i class="mdi mdi-trending-up"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="line-regions" dir="ltr"></div>
                </div>
            </div>

        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->

</div>
@endsection