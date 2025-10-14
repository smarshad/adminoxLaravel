@extends('admin.layout.app')
@push('scripts')
<script src="{{asset('backend/libs/chart-js/Chart.bundle.min.js')}}"></script>
<script src="{{asset('backend/js/pages/chartjs.init.js')}}"></script>
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
                            <li class="breadcrumb-item active">Chart js</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Chart js</h4>
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
                                    <p class="text-uppercase font-13 font-weight-medium">Lifetime total sales</p>
                                    <h3 class="mb-0 text-danger"><i class="mdi mdi-arrow-down"></i> 256</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Income amounts</p>
                                    <h3 class="mb-0 text-success"><i class="mdi mdi-arrow-up"></i> 39652</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Total visits</p>
                                    <h3 class="mb-0 text-warning"><i class="mdi mdi-arrow-up"></i> 7852</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <canvas id="bar" height="300" class="mt-2"></canvas>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Line Chart</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Lifetime total sales</p>
                                    <h3 class="mb-0 text-danger"><i class="mdi mdi-arrow-down"></i> 95221</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Income amounts</p>
                                    <h3 class="mb-0 text-success"><i class="mdi mdi-arrow-up"></i> 4894</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Total visits</p>
                                    <h3 class="mb-0 text-warning"><i class="mdi mdi-arrow-up"></i> 48</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <canvas id="lineChart" height="300" class="mt-2"></canvas>
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
                                    <h3 class="mb-0 text-danger"><i class="mdi mdi-arrow-down"></i> 8563</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Income amounts</p>
                                    <h3 class="mb-0 text-success"><i class="mdi mdi-arrow-up"></i> 12365</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Total visits</p>
                                    <h3 class="mb-0 text-warning"><i class="mdi mdi-arrow-up"></i> 2850</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <canvas id="pie" height="300" class="mt-2"></canvas>

                </div>
            </div>

            <div class="col-lg-6">

                <div class="card-box">
                    <h4 class="header-title">Donut Chart</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Lifetime total sales</p>
                                    <h3 class="mb-0 text-danger"><i class="mdi mdi-arrow-down"></i> 5362</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Income amounts</p>
                                    <h3 class="mb-0 text-success"><i class="mdi mdi-arrow-up"></i> 1002</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Total visits</p>
                                    <h3 class="mb-0 text-warning"><i class="mdi mdi-arrow-up"></i> 25600</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <canvas id="doughnut" height="300" class="mt-2"></canvas>

                </div>
            </div>

        </div>
        <!-- end row -->


        <div class="row">

            <div class="col-lg-6">

                <div class="card-box">
                    <h4 class="header-title">Polar area Chart</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Lifetime total sales</p>
                                    <h3 class="mb-0 text-danger"><i class="mdi mdi-arrow-down"></i> 8695</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Income amounts</p>
                                    <h3 class="mb-0 text-success"><i class="mdi mdi-arrow-up"></i> 4521</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Total visits</p>
                                    <h3 class="mb-0 text-warning"><i class="mdi mdi-arrow-up"></i> 7854</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <canvas id="polarArea" height="300" class="mt-2"> </canvas>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Radar Chart</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Lifetime total sales</p>
                                    <h3 class="mb-0 text-danger"><i class="mdi mdi-arrow-down"></i> 256</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Income amounts</p>
                                    <h3 class="mb-0 text-success"><i class="mdi mdi-arrow-up"></i> 39652</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Total visits</p>
                                    <h3 class="mb-0 text-warning"><i class="mdi mdi-arrow-up"></i> 7852</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <canvas id="radar" height="300" class="mt-2"></canvas>

                </div>
            </div>

        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->

</div>
@endsection