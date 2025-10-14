@extends('admin.layout.app')
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin UI</a></li>
                            <li class="breadcrumb-item active">Tiles Box</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Tiles Box</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">

            <div class="col-xl-3 col-sm-6">
                <div class="card-box widget-box-two widget-two-custom">
                    <div class="media">
                        <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                            <i class="mdi mdi-currency-usd avatar-title font-30 text-white"></i>
                        </div>

                        <div class="wigdet-two-content media-body">
                            <p class="m-0 text-uppercase font-weight-medium text-truncate"
                                title="Statistics">Total Revenue</p>
                            <h3 class="font-weight-medium my-2">$ <span
                                    data-plugin="counterup">65,841</span></h3>
                            <p class="m-0">Jan - Apr 2019</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-xl-3 col-sm-6">
                <div class="card-box widget-box-two widget-two-custom ">
                    <div class="media">
                        <div class="avatar-lg rounded-circle bg-info widget-two-icon align-self-center">
                            <i class="mdi mdi-account-multiple avatar-title font-30 text-white"></i>
                        </div>

                        <div class="wigdet-two-content media-body">
                            <p class="m-0 text-uppercase font-weight-medium text-truncate"
                                title="Statistics">Total Unique Visitors</p>
                            <h3 class="font-weight-medium my-2"> <span data-plugin="counterup">26,521</span>
                            </h3>
                            <p class="m-0">Jan - Apr 2019</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-xl-3 col-sm-6">
                <div class="card-box widget-box-two widget-two-custom ">
                    <div class="media">
                        <div class="avatar-lg rounded-circle bg-warning widget-two-icon align-self-center">
                            <i class="mdi mdi-crown avatar-title font-30 text-white"></i>
                        </div>

                        <div class="wigdet-two-content media-body">
                            <p class="m-0 text-uppercase font-weight-medium text-truncate"
                                title="Statistics">Number of Transactions</p>
                            <h3 class="font-weight-medium my-2"><span data-plugin="counterup">7,842</span>
                            </h3>
                            <p class="m-0">Jan - Apr 2019</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-xl-3 col-sm-6">
                <div class="card-box widget-box-two widget-two-custom ">
                    <div class="media">
                        <div class="avatar-lg rounded-circle bg-danger widget-two-icon align-self-center">
                            <i class="mdi mdi-auto-fix  avatar-title font-30 text-white"></i>
                        </div>

                        <div class="wigdet-two-content media-body">
                            <p class="m-0 text-uppercase font-weight-medium text-truncate"
                                title="Statistics">Conversation Rate</p>
                            <h3 class="font-weight-medium my-2"><span data-plugin="counterup">2.07</span>%
                            </h3>
                            <p class="m-0">Jan - Apr 2019</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->



        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="card-box widget-box-three">
                    <div class="media">
                        <div class="avatar-lg bg-icon rounded-circle align-self-center">
                            <img class="avatar-sm" src="{{asset('backend/images/icons/clock.svg')}}" title="clock.svg">
                        </div>
                        <div class="wigdet-two-content media-body text-right">
                            <p class="mt-1 text-uppercase font-weight-medium">Product Sold</p>
                            <h2 class="mb-2"><span data-plugin="counterup">2,562</span></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card-box widget-box-three">
                    <div class="media">
                        <div class="avatar-lg bg-icon rounded-circle align-self-center">
                            <img class="avatar-sm" src="{{asset('backend/images/icons/advertising.svg')}}"
                                title="advertising.svg">
                        </div>
                        <div class="wigdet-two-content media-body text-right">
                            <p class="mt-1 text-uppercase font-weight-medium">User This Month</p>
                            <h2 class="mb-2"><span data-plugin="counterup">8,542</span></h2>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card-box widget-box-three">
                    <div class="media">
                        <div class="avatar-lg bg-icon rounded-circle align-self-center">
                            <img class="avatar-sm" src="{{asset('backend/images/icons/paid.svg')}}" title="paid.svg">
                        </div>
                        <div class="wigdet-two-content media-body text-right">
                            <p class="mt-1 text-uppercase font-weight-medium">Request Per Minute</p>
                            <h2 class="mb-2"><span data-plugin="counterup">6,254</span></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card-box widget-box-three">
                    <div class="media">
                        <div class="avatar-lg bg-icon rounded-circle align-self-center">
                            <img class="avatar-sm" src="{{asset('backend/images/icons/timeline.svg')}}"
                                title="timeline.svg">
                        </div>
                        <div class="wigdet-two-content media-body text-right">
                            <p class="mt-1 text-uppercase font-weight-medium">Total Users</p>
                            <h2 class="mb-2"><span data-plugin="counterup">7,524</span></h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="card-box widget-box-three">
                    <div class="media">
                        <div class="avatar-lg bg-icon rounded-circle align-self-center">
                            <i class="fe-server font-30 text-muted avatar-title"></i>
                        </div>
                        <div class="wigdet-two-content media-body text-right">
                            <p class="mt-1 text-uppercase font-weight-medium">New Downloads</p>
                            <h2 class="mb-2"><span data-plugin="counterup">6521</span></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card-box widget-box-three">
                    <div class="media">
                        <div class="avatar-lg bg-icon rounded-circle align-self-center">
                            <i class="fe-briefcase font-30 text-muted avatar-title"></i>
                        </div>
                        <div class="wigdet-two-content media-body text-right">
                            <p class="mt-1 text-uppercase font-weight-medium">Statistics</p>
                            <h2 class="mb-2"><span data-plugin="counterup">7854</span></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card-box widget-box-three">
                    <div class="media">
                        <div class="avatar-lg bg-icon rounded-circle align-self-center">
                            <i class="fe-download font-30 text-muted avatar-title"></i>
                        </div>
                        <div class="wigdet-two-content media-body text-right">
                            <p class="mt-1 text-uppercase font-weight-medium">User Today</p>
                            <h2 class="mb-2"><span data-plugin="counterup">3652</span></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card-box widget-box-three">
                    <div class="media">
                        <div class="avatar-lg bg-icon rounded-circle align-self-center">
                            <i class="fe-bar-chart-2 font-30 text-muted avatar-title"></i>
                        </div>
                        <div class="wigdet-two-content media-body text-right">
                            <p class="mt-1 text-uppercase font-weight-medium">User This Month</p>
                            <h2 class="mb-2"><span data-plugin="counterup">1250</span></h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="{{asset('backend/images/users/avatar-3.jpg')}}"
                            class="img-fluid rounded-circle avatar-md" alt="user">
                        <div class="wid-u-info">
                            <h5 class="mt-3 mb-1">Chadengle</h5>
                            <p class="text-muted mb-0">coderthemes@gmail.com</p>
                            <div class="user-position">
                                <span class="text-warning font-secondary">Admin</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="{{asset('backend/images/users/avatar-2.jpg')}}"
                            class="img-fluid rounded-circle avatar-md" alt="user">
                        <div class="wid-u-info">
                            <h5 class="mt-3 mb-1"> Michael Zenaty</h5>
                            <p class="text-muted mb-0">coderthemes@gmail.com</p>
                            <div class="user-position">
                                <span class="text-info font-secondary">User</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="{{asset('backend/images/users/avatar-1.jpg')}}"
                            class="img-fluid rounded-circle avatar-md" alt="user">
                        <div class="wid-u-info">
                            <h5 class="mt-3 mb-1">Stillnotdavid</h5>
                            <p class="text-muted mb-0">coderthemes@gmail.com</p>
                            <div class="user-position">
                                <span class="text-success font-secondary">Admin</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="{{asset('backend/images/users/avatar-10.jpg')}}"
                            class="img-fluid rounded-circle avatar-md" alt="user">
                        <div class="wid-u-info">
                            <h5 class="mt-3 mb-1">Tomaslau</h5>
                            <p class="text-muted mb-0">coderthemes@gmail.com</p>
                            <div class="user-position">
                                <span class="text-pink font-secondary">User</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div>
    <!-- end container-fluid -->

</div>
@endsection