@extends('admin.layout.app')
@push('scripts')
 <!-- Sparkline charts -->
<script src="{{asset('backend/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

<!-- init js -->
<script src="{{asset('backend/js/pages/companies.init.js')}}"></script>
@endpush
<!-- Begin page -->
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Extras</a></li>
                            <li class="breadcrumb-item active">Companies</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Companies</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="company-card card-box">
                    <div class="float-left mr-3">
                        <img src="{{asset('backend/images/companies/airbnb.png')}}" alt="logo" class="company-logo avatar-md rounded">
                    </div>
                    <div class="company-detail mb-3">
                        <h4 class="mb-1">Airbnb Inc.</h4>
                        <p>www.airbnb.com</p>
                    </div>
                    <hr>

                    <h5 class="text-muted font-weight-normal"><span class="float-right text-danger"><i class="mdi mdi-arrow-down"></i> 1.22%</span> Change(2d)</h5>

                    <div class="text-center mt-4">
                        <h5 class="font-weight-normal text-muted">You have to pay</h5>
                        <h3 class="mb-4"><i class="mdi mdi-arrow-down-bold-circle-outline text-danger"></i> 2536 <small>USD</small></h3>
                    </div>
                    <div id="company-1" class="text-center"></div>

                </div>
            </div><!-- end col -->

            <div class="col-md-6 col-xl-3">
                <div class="company-card card-box">
                    <div class="float-left mr-3">
                        <img src="{{asset('backend/images/companies/apple.png')}}" alt="logo"
                            class="company-logo avatar-md rounded">
                    </div>
                    <div class="company-detail mb-3">
                        <h4 class="mb-1">Apple Inc.</h4>
                        <p>www.apple.com</p>
                    </div>
                    <hr>

                    <h5 class="text-muted font-weight-normal"><span class="float-right text-success"><i class="mdi mdi-arrow-up"></i> 8.51%</span> Change(1d)</h5>

                    <div class="text-center mt-4">
                        <h5 class="font-weight-normal text-muted">You have to pay</h5>
                        <h3 class="mb-4"><i class="mdi mdi-arrow-up-bold-circle-outline text-success"></i>
                            89521 <small>USD</small></h3>
                    </div>
                    <div id="company-2" class="text-center"></div>
                </div>
            </div><!-- end col -->

            <div class="col-md-6 col-xl-3">
                <div class="company-card card-box">
                    <div class="float-left mr-3">
                        <img src="{{asset('backend/images/companies/google.png')}}" alt="logo" class="company-logo avatar-md rounded">
                    </div>
                    <div class="company-detail mb-3">
                        <h4 class="mb-1">Google</h4>
                        <p>www.google.com</p>
                    </div>
                    <hr>

                    <h5 class="text-muted font-weight-normal"><span class="float-right text-success"><i class="mdi mdi-arrow-up"></i> 3.38%</span> Change(2d)</h5>

                    <div class="text-center mt-4">
                        <h5 class="font-weight-normal text-muted">You have to pay</h5>
                        <h3 class="mb-4"><i class="mdi mdi-arrow-up-bold-circle-outline text-success"></i>
                            23657 <small>USD</small></h3>
                    </div>

                    <div id="company-3" class="text-center"></div>

                </div>
            </div><!-- end col -->

            <div class="col-md-6 col-xl-3">
                <div class="company-card card-box">
                    <div class="float-left mr-3">
                        <img src="{{asset('backend/images/companies/amazon.png')}}" alt="logo" class="company-logo avatar-md rounded">
                    </div>
                    <div class="company-detail mb-3">
                        <h4 class="mb-1">Amazon</h4>
                        <p>www.amazon.com</p>
                    </div>
                    <hr>

                    <h5 class="text-muted font-weight-normal"><span class="float-right text-danger"><i class="mdi mdi-arrow-down"></i> 6.35%</span> Change(2d)</h5>

                    <div class="text-center mt-4">
                        <h5 class="font-weight-normal text-muted">You have to pay</h5>
                        <h3 class="mb-4"><i class="mdi mdi-arrow-down-bold-circle-outline text-danger"></i>
                            85412 <small>USD</small></h3>
                    </div>

                    <div id="company-4" class="text-center"></div>

                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="company-card card-box">
                    <div class="float-left mr-3">
                        <img src="{{asset('backend/images/companies/facebook.png')}}" alt="logo" class="company-logo avatar-md rounded">
                    </div>
                    <div class="company-detail mb-3">
                        <h4 class="mb-1">Facebook, Inc.</h4>
                        <p>www.facebook.com</p>
                    </div>
                    <hr>

                    <h5 class="text-muted font-weight-normal"><span class="float-right text-success"><i class="mdi mdi-arrow-up"></i> 0.51%</span> Change(1d)</h5>

                    <div class="text-center mt-4">
                        <h5 class="font-weight-normal text-muted">You have to pay</h5>
                        <h3 class="mb-4"><i class="mdi mdi-arrow-up-bold-circle-outline text-success"></i>
                            78512 <small>USD</small></h3>
                    </div>

                    <div id="company-5" class="text-center"></div>

                </div>
            </div><!-- end col -->

            <div class="col-md-6 col-xl-3">
                <div class="company-card card-box">
                    <div class="float-left mr-3">
                        <img src="{{asset('backend/images/companies/intel.png')}}" alt="logo" class="company-logo avatar-md rounded">
                    </div>
                    <div class="company-detail mb-3">
                        <h4 class="mb-1">Intel</h4>
                        <p>www.intel.com</p>
                    </div>
                    <hr>

                    <h5 class="text-muted font-weight-normal"><span class="float-right text-danger"><i class="mdi mdi-arrow-down"></i> 6.35%</span> Change(2d)</h5>

                    <div class="text-center mt-4">
                        <h5 class="font-weight-normal text-muted">You have to pay</h5>
                        <h3 class="mb-4"><i class="mdi mdi-arrow-down-bold-circle-outline text-danger"></i>
                            36528 <small>USD</small></h3>
                    </div>

                    <div id="company-6" class="text-center"></div>

                </div>
            </div><!-- end col -->

            <div class="col-md-6 col-xl-3">
                <div class="company-card card-box">
                    <div class="float-left mr-3">
                        <img src="{{asset('backend/images/companies/cisco.jpg')}}" alt="logo" class="company-logo avatar-md rounded">
                    </div>
                    <div class="company-detail mb-3">
                        <h4 class="mb-1">Cisco Systems</h4>
                        <p>www.cisco.com</p>
                    </div>
                    <hr>

                    <h5 class="text-muted font-weight-normal"><span class="float-right text-success"><i class="mdi mdi-arrow-up"></i> 22.35%</span> Change(1d)</h5>

                    <div class="text-center mt-4">
                        <h5 class="font-weight-normal text-muted">You have to pay</h5>
                        <h3 class="mb-4"><i class="mdi mdi-arrow-up-bold-circle-outline text-success"></i>
                            1254 <small>USD</small></h3>
                    </div>

                    <div id="company-7" class="text-center"></div>

                </div>
            </div><!-- end col -->

            <div class="col-md-6 col-xl-3">
                <div class="company-card card-box">
                    <div class="float-left mr-3">
                        <img src="{{asset('backend/images/companies/yahoo.png')}}" alt="logo" class="company-logo avatar-md rounded">
                    </div>
                    <div class="company-detail mb-3">
                        <h4 class="mb-1">Yahoo</h4>
                        <p>www.yahoo.com</p>
                    </div>
                    <hr>

                    <h5 class="text-muted font-weight-normal"><span class="float-right text-danger"><i class="mdi mdi-arrow-down"></i> 2.94%</span> Change(2d)</h5>

                    <div class="text-center mt-4">
                        <h5 class="font-weight-normal text-muted">You have to pay</h5>
                        <h3 class="mb-4"><i class="mdi mdi-arrow-down-bold-circle-outline text-danger"></i>
                            56850 <small>USD</small></h3>
                    </div>

                    <div id="company-8" class="text-center"></div>

                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->

</div>
@endsection