@extends('admin.layout.app')

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
                            <li class="breadcrumb-item active">Pricing</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Pricing</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row row justify-content-center">
            <div class="col-lg-9 center-page">
                <div class="text-center">
                    <h3 class="mb-3 mt-2">Choose your perfect plan</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has <br /> been the industry's standard dummy text ever since the
                        1500s.
                    </p>
                </div>

                <div class="row mt-4 pt-3">

                    <!--Pricing Column-->
                    <article class="pricing-column col-md-4">
                        <div class="inner-box card-box">
                            <div class="plan-header text-white text-center bg-primary p-3 rounded">
                                <h3 class="plan-title text-uppercase text-white font-16">Starter Pack</h3>
                                <h2 class="plan-price text-white">$19</h2>
                                <div class="plan-duration">Per Month</div>
                            </div>
                            <ul class="plan-stats list-unstyled text-center">
                                <li><b>10 GB</b> Storege</li>
                                <li><b>500 GB</b> Bandwidth</li>
                                <li><b>No</b> Domain</li>
                                <li><b>1</b> User</li>
                                <li><b>Email</b> Support</li>
                                <li class="mb-0"><b>24x7</b> Support</li>
                            </ul>

                            <div class="text-center mb-2">
                                <a href="#"
                                    class="btn btn-outline-success btn-bordered width-lg btn-md width-md btn-bordred btn-rounded waves-effect waves-light">Sign
                                    Up</a>
                            </div>
                        </div>
                    </article>


                    <!--Pricing Column-->
                    <article class="pricing-column col-md-4">
                        <div class="inner-box card-box">
                            <div class="ribbon-pricing bg-danger rounded font-13 text-white"><b>POPULAR</b>
                            </div>
                            <div class="plan-header text-white text-center bg-primary p-3 rounded">
                                <h3 class="plan-title text-white text-uppercase font-16">Professional Pack
                                </h3>
                                <h2 class="plan-price text-white">$29</h2>
                                <div class="plan-duration">Per Month</div>
                            </div>
                            <ul class="plan-stats list-unstyled text-center">
                                <li><b>50 GB</b> Storege</li>
                                <li><b>900 GB</b> Bandwidth</li>
                                <li><b>1</b> Domain</li>
                                <li><b>20</b> User</li>
                                <li><b>Email</b> Support</li>
                                <li class="mb-0"><b>24x7</b> Support</li>
                            </ul>

                            <div class="text-center mb-2">
                                <a href="#"
                                    class="btn btn-success width-lg btn-md width-md btn-bordred btn-rounded waves-effect waves-light">Sign
                                    Up</a>
                            </div>
                        </div>
                    </article>


                    <!--Pricing Column-->
                    <article class="pricing-column col-md-4">
                        <div class="inner-box card-box">
                            <div class="plan-header text-white text-center bg-primary p-3 rounded">
                                <h3 class="plan-title text-white text-uppercase font-16">Enterprise Pack
                                </h3>
                                <h2 class="plan-price text-white">$39</h2>
                                <div class="plan-duration">Per Month</div>
                            </div>
                            <ul class="plan-stats list-unstyled text-center">
                                <li><b>100 GB</b> Storege</li>
                                <li><b>2000 GB</b> Bandwidth</li>
                                <li><b>10</b> Domain</li>
                                <li><b>1000</b> User</li>
                                <li><b>Email</b> Support</li>
                                <li class="mb-0"><b>24x7</b> Support</li>
                            </ul>

                            <div class="text-center mb-2">
                                <a href="#"
                                    class="btn btn-outline-success width-lg btn-md width-md btn-bordred btn-rounded waves-effect waves-light">Sign
                                    Up</a>
                            </div>
                        </div>
                    </article>

                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->

</div>
@endsection