@extends('admin.layout.app')
@push('scripts')
<script src="https://www.google.com/jsapi"></script>

<script src="{{asset('backend/js/pages/google-charts.init.js')}}"></script>
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
                            <li class="breadcrumb-item active">Google Charts</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Google Charts</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Line chart</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Lifetime total sales</p>
                                    <h3 class="text-danger"><i class="mdi mdi-arrow-down"></i> 256</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Income amounts</p>
                                    <h3 class="text-success"><i class="mdi mdi-arrow-up"></i> 39652</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Total visits</p>
                                    <h3 class="text-warning"><i class="mdi mdi-arrow-up"></i> 7852</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="chart mt-3" id="line-chart"></div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Area Chart</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Lifetime total sales</p>
                                    <h3 class="text-danger"><i class="mdi mdi-arrow-down"></i> 5628</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Income amounts</p>
                                    <h3 class="text-success"><i class="mdi mdi-arrow-up"></i> 3652</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Total visits</p>
                                    <h3 class="text-warning"><i class="mdi mdi-arrow-up"></i> 7841</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="chart mt-3" id="area-chart"></div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Column Chart</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Lifetime total sales</p>
                                    <h3 class="text-danger"><i class="mdi mdi-arrow-down"></i> 256</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Income amounts</p>
                                    <h3 class="text-success"><i class="mdi mdi-arrow-up"></i> 39652</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Total visits</p>
                                    <h3 class="text-warning"><i class="mdi mdi-arrow-up"></i> 7852</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="chart mt-3" id="column-chart"></div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Bar Charts</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Lifetime total sales</p>
                                    <h3 class="text-danger"><i class="mdi mdi-arrow-down"></i> 3251</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Income amounts</p>
                                    <h3 class="text-success"><i class="mdi mdi-arrow-up"></i> 85741</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Total visits</p>
                                    <h3 class="text-warning"><i class="mdi mdi-arrow-up"></i> 352</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="chart mt-3" id="bar-chart"></div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Stacked column charts</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Lifetime total sales</p>
                                    <h3 class="text-danger"><i class="mdi mdi-arrow-down"></i> 2541</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Income amounts</p>
                                    <h3 class="text-success"><i class="mdi mdi-arrow-up"></i> 11243</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Total visits</p>
                                    <h3 class="text-warning"><i class="mdi mdi-arrow-up"></i> 336952</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="chart mt-3" id="column-stacked-chart"></div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Stacked bar charts</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Lifetime total sales</p>
                                    <h3 class="text-danger"><i class="mdi mdi-arrow-down"></i> 36521</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Income amounts</p>
                                    <h3 class="text-success"><i class="mdi mdi-arrow-up"></i> 6969</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Total visits</p>
                                    <h3 class="text-warning"><i class="mdi mdi-arrow-up"></i> 130295</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="chart mt-3" id="bar-stacked-chart"></div>
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
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Lifetime total sales</p>
                                    <h3 class="text-danger"><i class="mdi mdi-arrow-down"></i> 845</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Income amounts</p>
                                    <h3 class="text-success"><i class="mdi mdi-arrow-up"></i> 5624</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Total visits</p>
                                    <h3 class="text-warning"><i class="mdi mdi-arrow-up"></i> 3848</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="google-chart text-center">
                        <div class="chart mt-3" id="pie-chart"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Donut Chart</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Lifetime total sales</p>
                                    <h3 class="text-danger"><i class="mdi mdi-arrow-down"></i> 36521</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Income amounts</p>
                                    <h3 class="text-success"><i class="mdi mdi-arrow-up"></i> 9856</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Total visits</p>
                                    <h3 class="text-warning"><i class="mdi mdi-arrow-up"></i> 78521</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="google-chart text-center">
                        <div class="chart mt-3" id="donut-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->



        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">3D Pie Chart</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Lifetime total sales</p>
                                    <h3 class="text-danger"><i class="mdi mdi-arrow-down"></i> 2584</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Income amounts</p>
                                    <h3 class="text-success"><i class="mdi mdi-arrow-up"></i> 7412</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Total visits</p>
                                    <h3 class="text-warning"><i class="mdi mdi-arrow-up"></i> 36987</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="google-chart text-center">
                        <div class="chart mt-3" id="pie-3d-chart"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Exploding a Slice</h4>

                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Lifetime total sales</p>
                                    <h3 class="text-danger"><i class="mdi mdi-arrow-down"></i> 256</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Income amounts</p>
                                    <h3 class="text-success"><i class="mdi mdi-arrow-up"></i> 39652</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4 mb-3">
                                    <p class="text-uppercase font-13 font-weight-medium">Total visits</p>
                                    <h3 class="text-warning"><i class="mdi mdi-arrow-up"></i> 7852</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="google-chart text-center">
                        <div class="chart mt-3" id="3d-exploded-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->

</div>
@endsection