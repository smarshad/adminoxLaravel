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
                            <li class="breadcrumb-item active">About Us</li>
                        </ol>
                    </div>
                    <h4 class="page-title">About Us</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <div class="text-center">
                        <h4 class="mb-3">It's designed for describing your app, agency or business</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s, when an unknown printer took a galley of type and scrambled it to
                            make a type specimen book. It has survived not only five centuries, but also
                            the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                    </div>

                    <div class="mt-5">

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="about-features-box text-center mt-4">
                                    <div
                                        class="feature-icon bg-primary avatar-lg mb-3 rounded-circle mx-auto">
                                        <i class="dripicons-broadcast avatar-title h2 m-0"></i>
                                    </div>
                                    <h4 class="font-15">Strategy Solutions</h4>

                                    <p class="text-muted mx-2">We put a lot of effort in design, as it’s the
                                        most important ingredient of successful website.Sed ut perspiciatis
                                        unde omnis iste natus error a type specimen book.</p>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="about-features-box text-center mt-4">
                                    <div class="feature-icon bg-info avatar-lg mb-3 rounded-circle mx-auto">
                                        <i class="dripicons-brightness-medium avatar-title h2 m-0"></i>
                                    </div>
                                    <h4 class="font-15">Dedicated Support</h4>

                                    <p class="text-muted mx-2">We put a lot of effort in design, as it’s the
                                        most important ingredient of successful website.Sed ut perspiciatis
                                        unde omnis iste natus error a type specimen book.</p>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="about-features-box text-center mt-4">
                                    <div
                                        class="feature-icon bg-purple avatar-lg mb-3 rounded-circle mx-auto">
                                        <i class="dripicons-clock avatar-title h2 m-0"></i>
                                    </div>
                                    <h4 class="font-15">Digital Design</h4>

                                    <p class="text-muted mx-2">We put a lot of effort in design, as it’s the
                                        most important ingredient of successful website.Sed ut perspiciatis
                                        unde omnis iste natus error a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="about-features-box text-center mt-4">
                                    <div
                                        class="feature-icon bg-warning avatar-lg mb-3 rounded-circle mx-auto">
                                        <i class="dripicons-graph-pie avatar-title h2 m-0"></i>
                                    </div>
                                    <h4 class="font-15">Strategy Solutions</h4>

                                    <p class="text-muted mx-2">We put a lot of effort in design, as it’s the
                                        most important ingredient of successful website.Sed ut perspiciatis
                                        unde omnis iste natus error a type specimen book.</p>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="about-features-box text-center mt-4">
                                    <div class="feature-icon bg-pink avatar-lg mb-3 rounded-circle mx-auto">
                                        <i class="dripicons-jewel avatar-title h2 m-0"></i>
                                    </div>
                                    <h4 class="font-15">Dedicated Support</h4>

                                    <p class="text-muted mx-2">We put a lot of effort in design, as it’s the
                                        most important ingredient of successful website.Sed ut perspiciatis
                                        unde omnis iste natus error a type specimen book.</p>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="about-features-box text-center mt-4">
                                    <div
                                        class="feature-icon bg-success avatar-lg mb-3 rounded-circle mx-auto">
                                        <i class="dripicons-pamphlet avatar-title h2 m-0"></i>
                                    </div>
                                    <h4 class="font-15">Digital Design</h4>

                                    <p class="text-muted mx-2">We put a lot of effort in design, as it’s the
                                        most important ingredient of successful website.Sed ut perspiciatis
                                        unde omnis iste natus error a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end services -->


                    <div class="mt-5">
                        <h4 class="text-uppercase text-center mb-5">Creative Team</h4>

                        <div class="row about-team text-center">

                            <!-- team-member -->
                            <div class="col-sm-4">
                                <div class="about-team-member">
                                    <img src="{{asset('backend/images/users/avatar-5.jpg')}}" alt="team-member"
                                        class="avatar-xl d-block mx-auto rounded-circle">
                                    <h4 class="mt-3">Daniel Syme</h4>
                                    <p>Founder</p>
                                </div>
                            </div>

                            <!-- team-member -->
                            <div class="col-sm-4">
                                <div class="about-team-member">
                                    <img src="{{asset('backend/images/users/avatar-3.jpg')}}" alt="team-member"
                                        class="avatar-xl d-block mx-auto rounded-circle">
                                    <h4 class="mt-3">Patrick Coote</h4>
                                    <p>Co-Founder</p>
                                </div>
                            </div>
                            <!-- team-member -->
                            <div class="col-sm-4">
                                <div class="about-team-member">
                                    <img src="{{asset('backend/images/users/avatar-4.jpg')}}" alt="team-member"
                                        class="avatar-xl d-block mx-auto rounded-circle">
                                    <h4 class="mt-3">Hugo Moncrieff</h4>
                                    <p>Creative Director</p>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end services -->
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div> <!-- end container-fluid -->
</div> <!-- end content -->
@endsection