@extends('admin.layout.app')
@push('scripts')
<!-- Sparkline charts -->
<script src="{{asset('backend/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

<script src="{{asset('backend/js/pages/profile.init.js')}}"></script>
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
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Profile</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-sm-12">
            <div class="profile-bg-picture"
                style="background-image:url({{ asset('backend/images/bg-profile.jpg') }})">
                <span class="picture-bg-overlay"></span><!-- overlay -->
            </div>

                <!-- meta -->
                <div class="profile-user-box">
                    <div class="row">
                        <div class="col-sm-6">
                            <span class="float-left mr-3"><img src="{{asset('backend/images/users/avatar-1.jpg')}}" alt=""
                                    class="avatar-xl rounded-circle"></span>
                            <div class="media-body">
                                <h4 class="mt-1 mb-1 font-18 ellipsis">Michael A. Franklin</h4>
                                <p class="font-13"> User Experience Specialist</p>
                                <p class="text-muted mb-0"><small>California, United States</small></p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-right">
                                <button type="button" class="btn btn-success waves-effect waves-light">
                                    <i class="mdi mdi-account-settings-variant mr-1"></i> Edit Profile
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ meta -->
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-4">
                <!-- Personal-Information -->
                <div class="card-box">
                    <h4 class="header-title mt-0 mb-4">Personal Information</h4>
                    <div class="panel-body">
                        <p class="text-muted font-13">
                            Hye, I’m Johnathan Doe residing in this beautiful world. I create websites and
                            mobile apps with great UX and UI design. I have done work with big companies
                            like Nokia, Google and Yahoo. Meet me or Contact me for any queries. One Extra
                            line for filling space. Fill as many you want.
                        </p>

                        <hr />

                        <div class="text-left">
                            <p class="text-muted font-13"><strong>Full Name :</strong> <span
                                    class="ml-3">Johnathan Deo</span></p>

                            <p class="text-muted font-13"><strong>Mobile :</strong><span class="ml-3">(+12)
                                    123 1234 567</span></p>

                            <p class="text-muted font-13"><strong>Email :</strong> <span
                                    class="ml-3">coderthemes@gmail.com</span></p>

                            <p class="text-muted font-13"><strong>Location :</strong> <span
                                    class="ml-3">USA</span></p>

                            <p class="text-muted font-13"><strong>Languages :</strong>
                                <span class="ml-1">
                                    <span class="flag-icon flag-icon-us mr-1 mt-0" title="us"></span>
                                    <span>English</span>
                                </span>
                                <span class="ml-1">
                                    <span class="flag-icon flag-icon-de mr-1" title="de"></span>
                                    <span>German</span>
                                </span>
                                <span class="ml-1">
                                    <span class="flag-icon flag-icon-es mr-1" title="es"></span>
                                    <span>Spanish</span>
                                </span>
                                <span class="ml-1">
                                    <span class="flag-icon flag-icon-fr mr-1" title="fr"></span>
                                    <span>French</span>
                                </span>
                            </p>

                        </div>

                        <ul class="social-links list-inline mt-4 mb-0">
                            <li class="list-inline-item">
                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                    href="" data-original-title="Facebook"><i
                                        class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                    href="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                    href="" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Personal-Information -->

                <div class="card-box ribbon-box">
                    <div class="ribbon ribbon-primary">Messages</div>
                    <div class="clearfix"></div>
                    <div class="inbox-widget">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('backend/images/users/avatar-2.jpg')}}"
                                    class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Tomaslau</p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                            <p class="inbox-item-date mt-2">
                                <button type="button"
                                    class="btn btn-icon btn-xs waves-effect waves-light btn-success"> Reply
                                </button>
                            </p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('backend/images/users/avatar-3.jpg')}}"
                                    class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Stillnotdavid</p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                            <p class="inbox-item-date mt-2">
                                <button type="button"
                                    class="btn btn-icon btn-xs waves-effect waves-light btn-success"> Reply
                                </button>
                            </p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('backend/images/users/avatar-4.jpg')}}"
                                    class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Kurafire</p>
                            <p class="inbox-item-text">Nice to meet you</p>
                            <p class="inbox-item-date mt-2">
                                <button type="button"
                                    class="btn btn-icon btn-xs waves-effect waves-light btn-success"> Reply
                                </button>
                            </p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('backend/images/users/avatar-5.jpg')}}"
                                    class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Shahedk</p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                            <p class="inbox-item-date mt-2">
                                <button type="button"
                                    class="btn btn-icon btn-xs waves-effect waves-light btn-success"> Reply
                                </button>
                            </p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('backend/images/users/avatar-6.jpg')}}"
                                    class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Adhamdannaway</p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                            <p class="inbox-item-date mt-2">
                                <button type="button"
                                    class="btn btn-icon btn-xs waves-effect waves-light btn-success"> Reply
                                </button>
                            </p>
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-xl-8">

                <div class="row">

                    <div class="col-lg-4">
                        <div class="card-box widget-box-four">
                            <div id="dashboard-1" class="widget-box-four-chart"></div>
                            <div class="float-left">
                                <h4 class="mt-0 font-16 mb-1 text-overflow" title="Total Revenue">Total
                                    Revenue</h4>
                                <p class="font-secondary text-muted">Jan - Apr 2017</p>
                                <h3 class="mb-0 mt-4"><span>$</span> <span
                                        data-plugin="counterup">1,28,5960</span></h3>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-4">
                        <div class="card-box widget-box-four">
                            <div id="dashboard-2" class="widget-box-four-chart"></div>
                            <div class="float-left">
                                <h4 class="mt-0 font-16 mb-1 text-overflow" title="Total Unique Visitors">
                                    Total Unique Visitors</h4>
                                <p class="font-secondary text-muted">Jan - Apr 2017</p>
                                <h3 class="mb-0 mt-4"><span>$</span> <span
                                        data-plugin="counterup">1,28,5960</span></h3>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-4">
                        <div class="card-box widget-box-four">
                            <div id="dashboard-3" class="widget-box-four-chart"></div>
                            <div class="float-left">
                                <h4 class="mt-0 font-16 mb-1 text-overflow" title="Number of Transactions">
                                    Number of Transactions</h4>
                                <p class="font-secondary text-muted">Jan - Apr 2017</p>
                                <h3 class="mb-0 mt-4"><span>$</span> <span
                                        data-plugin="counterup">1,28,5960</span></h3>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div><!-- end col -->

                </div>
                <!-- end row -->


                <div class="card-box">
                    <h4 class="header-title mt-0 mb-4">Experience</h4>
                    <div class="">
                        <div class="">
                            <h5 class="text-custom mb-1">Lead designer / Developer</h5>
                            <p class="mb-0">websitename.com</p>
                            <p><b>2010-2015</b></p>

                            <p class="text-muted font-13 mb-0">Lorem Ipsum is simply dummy text
                                of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the
                                1500s, when an unknown printer took a galley of type and
                                scrambled it to make a type specimen book.
                            </p>
                        </div>

                        <hr>

                        <div class="">
                            <h5 class="text-custom mb-1">Senior Graphic Designer</h5>
                            <p class="mb-0">coderthemes.com</p>
                            <p><b>2007-2009</b></p>

                            <p class="text-muted font-13 mb-0">Lorem Ipsum is simply dummy text
                                of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the
                                1500s, when an unknown printer took a galley of type and
                                scrambled it to make a type specimen book.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="card-box">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Project Name</th>
                                    <th>Start Date</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th>Assign</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Adminox Admin</td>
                                    <td>01/01/2015</td>
                                    <td>07/05/2015</td>
                                    <td><span class="badge badge-info">Work in Progress</span></td>
                                    <td>Coderthemes</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Adminox Frontend</td>
                                    <td>01/01/2015</td>
                                    <td>07/05/2015</td>
                                    <td><span class="badge badge-success">Pending</span></td>
                                    <td>Coderthemes</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Adminox Admin</td>
                                    <td>01/01/2015</td>
                                    <td>07/05/2015</td>
                                    <td><span class="badge badge-pink">Done</span></td>
                                    <td>Coderthemes</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Adminox Frontend</td>
                                    <td>01/01/2015</td>
                                    <td>07/05/2015</td>
                                    <td><span class="badge badge-purple">Work in Progress</span></td>
                                    <td>Coderthemes</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Adminox Admin</td>
                                    <td>01/01/2015</td>
                                    <td>07/05/2015</td>
                                    <td><span class="badge badge-warning">Coming soon</span></td>
                                    <td>Coderthemes</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->


    </div> <!-- end container-fluid -->

</div>
@endsection