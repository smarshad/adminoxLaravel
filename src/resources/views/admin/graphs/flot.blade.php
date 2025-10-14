@extends('admin.layout.app')
@push('scripts')
<script src="{{asset('backend/libs/flot-charts/jquery.flot.js')}}"></script>
<script src="{{asset('backend/libs/flot-charts/jquery.flot.time.js')}}"></script>
<script src="{{asset('backend/libs/flot-charts/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('backend/libs/flot-charts/jquery.flot.resize.js')}}"></script>
<script src="{{asset('backend/libs/flot-charts/jquery.flot.pie.js')}}"></script>
<script src="{{asset('backend/libs/flot-charts/jquery.flot.selection.js')}}"></script>
<script src="{{asset('backend/libs/flot-charts/jquery.flot.stack.js')}}"></script>
<script src="{{asset('backend/libs/flot-charts/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('backend/libs/flot-charts/jquery.flot.crosshair.js')}}"></script>
<script src="{{asset('backend/libs/flot-charts/curvedLines.js')}}"></script>
<script src="{{asset('backend/libs/flot-charts/jquery.flot.axislabels.js')}}"></script>
<script src="{{asset('backend/js/pages/flot.init.js')}}"></script>
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
                            <li class="breadcrumb-item active">Flot Chart</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Flot Chart</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Multiple Statistics</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Lifetime total sales</p>
                                    <h3 class="text-danger"><i class="mdi mdi-arrow-down"></i> 256</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Income amounts</p>
                                    <h3 class="text-success"><i class="mdi mdi-arrow-up"></i> 39652</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Total visits</p>
                                    <h3 class="text-warning"><i class="mdi mdi-arrow-up"></i> 7852</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="website-stats" style="height: 320px;" class="flot-chart mt-3"></div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Realtime Statistics</h4>
                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Lifetime total sales</p>
                                    <h3 class="text-danger"><i class="mdi mdi-arrow-down"></i> 865</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Income amounts</p>
                                    <h3 class="text-success"><i class="mdi mdi-arrow-up"></i> 96542</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Total visits</p>
                                    <h3 class="text-warning"><i class="mdi mdi-arrow-up"></i> 36521</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="flotRealTime" style="height: 320px;" class="flot-chart mt-3"></div>
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
                                    <p class="text-uppercase font-13 font-weight-medium">Lifetime total sales</p>
                                    <h3 class="text-danger"><i class="mdi mdi-arrow-down"></i> 524</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Income amounts</p>
                                    <h3 class="text-success"><i class="mdi mdi-arrow-up"></i> 36524</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Total visits</p>
                                    <h3 class="text-warning"><i class="mdi mdi-arrow-up"></i> 2541</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="website-stats1" style="height: 320px;" class="flot-chart mt-3"></div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Donut Pie</h4>
                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Lifetime total sales</p>
                                    <h3 class="text-danger"><i class="mdi mdi-arrow-down"></i> 3254</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Income amounts</p>
                                    <h3 class="text-success"><i class="mdi mdi-arrow-up"></i> 1254</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Total visits</p>
                                    <h3 class="text-warning"><i class="mdi mdi-arrow-up"></i> 3365</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="donut-chart">
                        <div id="donut-chart-container" class="flot-chart mt-3" style="height: 320px;">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->


        <div class="row">

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Pie Chart</h4>
                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Lifetime total sales</p>
                                    <h3 class="text-danger"><i class="mdi mdi-arrow-down"></i> 35624</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Income amounts</p>
                                    <h3 class="text-success"><i class="mdi mdi-arrow-up"></i> 8548</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Total visits</p>
                                    <h3 class="text-warning"><i class="mdi mdi-arrow-up"></i> 125</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="pie-chart">
                        <div id="pie-chart-container" class="flot-chart mt-3" style="height: 320px;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Stacked Bar chart</h4>
                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Lifetime total sales</p>
                                    <h3 class="text-danger"><i class="mdi mdi-arrow-down"></i> 256</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Income amounts</p>
                                    <h3 class="text-success"><i class="mdi mdi-arrow-up"></i> 22253</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Total visits</p>
                                    <h3 class="text-warning"><i class="mdi mdi-arrow-up"></i> 2635</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="ordered-bars-chart" style="height: 320px;" class="mt-3"></div>
                </div>
            </div>

        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title">Line Chart</h4>
                    <div class="text-center">
                        <div class="row">
                            <div class="col-xs-6 col-sm-3">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Lifetime total sales</p>
                                    <h3 class="text-danger"><i class="mdi mdi-arrow-down"></i> 25698</h3>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Your Score</p>
                                    <h3 class="text-success"><i class="mdi mdi-arrow-up"></i> 39652</h3>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Income amounts</p>
                                    <h3 class="text-warning"><i class="mdi mdi-arrow-up"></i> 7852</h3>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Total visits</p>
                                    <h3 class="text-primary"><i class="mdi mdi-arrow-up"></i> 12584</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="line-chart-alt" class="mt-3" style="height:320px;">
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title">Combine Chart</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-xs-6 col-sm-3">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Lifetime total sales</p>
                                    <h3 class="text-danger"><i class="mdi mdi-arrow-down"></i> 12542</h3>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Your Score</p>
                                    <h3 class="text-success"><i class="mdi mdi-arrow-up"></i> 258492</h3>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Income amounts</p>
                                    <h3 class="text-warning"><i class="mdi mdi-arrow-up"></i> 96966</h3>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Total visits</p>
                                    <h3 class="text-primary"><i class="mdi mdi-arrow-up"></i> 125482</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="combine-chart">
                        <div id="combine-chart-container" class="flot-chart mt-3" style="height: 320px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->

</div>
@endsection