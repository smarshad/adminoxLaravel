@extends('admin.layout.app')
@push('styles')
<link href="{{asset('libs/custombox/custombox.min.css')}}" rel="stylesheet" type="text/css">
@endpush
@push('scripts')
<!-- init js -->
<script src="{{asset('backend/libs/custombox/custombox.min.js')}}"></script>
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
                            <li class="breadcrumb-item active">Members 2</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Members 2</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-sm-4">
                <a href="#custom-modal" class="btn btn-primary waves-effect waves-light mb-3"
                    data-animation="fadein" data-plugin="custommodal" data-overlaySpeed="200"
                    data-overlayColor="#36404a"><i class="md md-add"></i> Add Member</a>
            </div><!-- end col -->
            <div class="col-sm-8">
                <div class="text-right">
                    <ul class="pagination pagination-split mt-0 float-right">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">»</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-4">
                <div class="card-box">
                    <div class="member-card-alt">
                        <div class="avatar-xxl member-thumb mb-2 float-left">
                            <img src="{{asset('backend/images/users/avatar-3.jpg')}}" class="img-thumbnail"
                                alt="profile-image">
                            <i class="mdi mdi-star-circle member-star text-success"
                                title="verified user"></i>
                        </div>

                        <div class="member-card-alt-info">
                            <h4 class="mb-1 mt-0">Julie L. Arsenault</h4>
                            <p class="text-muted">@Founder <span> | </span> <span> <a href="#"
                                        class="text-custom">websitename.com</a> </span></p>
                            <p class="text-muted font-13">
                                Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since
                                the 1500s, when an unknown printer took a galley of type.
                            </p>

                            <ul class="social-links list-inline mt-3">
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                </li>
                            </ul>

                            <button type="button"
                                class="btn btn-primary btn-sm mt-2 waves-effect waves-light"> Edit </button>
                            <button type="button"
                                class="btn btn-link text-danger btn-sm mt-2 waves-effect waves-light">
                                Delete </button>
                        </div>

                    </div>

                </div>

            </div> <!-- end col -->

            <div class="col-lg-4">
                <div class="card-box">
                    <div class="member-card-alt">
                        <div class="avatar-xxl member-thumb mb-2 float-left">
                            <img src="{{asset('backend/images/users/avatar-5.jpg')}}" class="img-thumbnail"
                                alt="profile-image">
                            <i class="mdi mdi-star-circle member-star text-success"
                                title="verified user"></i>
                        </div>

                        <div class="member-card-alt-info">
                            <h4 class="mb-1 mt-0">Freddie J. Plourde</h4>
                            <p class="text-muted">@Programmer <span> | </span> <span> <a href="#"
                                        class="text-custom">websitename.com</a> </span></p>
                            <p class="text-muted font-13">
                                Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since
                                the 1500s, when an unknown printer took a galley of type.
                            </p>

                            <ul class="social-links list-inline mt-3">
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                </li>
                            </ul>

                            <button type="button"
                                class="btn btn-primary btn-sm mt-2 waves-effect waves-light"> Edit </button>
                            <button type="button"
                                class="btn btn-link text-danger btn-sm mt-2 waves-effect waves-light">
                                Delete </button>
                        </div>

                    </div>

                </div>

            </div> <!-- end col -->

            <div class="col-lg-4">
                <div class="card-box">
                    <div class="member-card-alt">
                        <div class="avatar-xxl member-thumb mb-2 float-left">
                            <img src="{{asset('backend/images/users/avatar-2.jpg')}}" class="img-thumbnail"
                                alt="profile-image">
                            <i class="mdi mdi-star-circle member-star text-success"
                                title="verified user"></i>
                        </div>

                        <div class="member-card-alt-info">
                            <h4 class="mb-1 mt-0">Christopher Gallardo</h4>
                            <p class="text-muted">@Webdesigner <span> | </span> <span> <a href="#"
                                        class="text-custom">websitename.com</a> </span></p>
                            <p class="text-muted font-13">
                                Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since
                                the 1500s, when an unknown printer took a galley of type.
                            </p>

                            <ul class="social-links list-inline mt-3">
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                </li>
                            </ul>

                            <button type="button"
                                class="btn btn-primary btn-sm mt-2 waves-effect waves-light"> Edit </button>
                            <button type="button"
                                class="btn btn-link text-danger btn-sm mt-2 waves-effect waves-light">
                                Delete </button>
                        </div>

                    </div>

                </div>

            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-4">
                <div class="card-box">
                    <div class="member-card-alt">
                        <div class="avatar-xxl member-thumb mb-2 float-left">
                            <img src="{{asset('backend/images/users/avatar-4.jpg')}}" class="img-thumbnail"
                                alt="profile-image">
                            <i class="mdi mdi-star-circle member-star text-success"
                                title="verified user"></i>
                        </div>

                        <div class="member-card-alt-info">
                            <h4 class="mb-1 mt-0">Joseph M. Rohr</h4>
                            <p class="text-muted">@Webdesigner <span> | </span> <span> <a href="#"
                                        class="text-custom">websitename.com</a> </span></p>
                            <p class="text-muted font-13">
                                Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since
                                the 1500s, when an unknown printer took a galley of type.
                            </p>

                            <ul class="social-links list-inline mt-3">
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                </li>
                            </ul>

                            <button type="button"
                                class="btn btn-primary btn-sm mt-2 waves-effect waves-light"> Edit </button>
                            <button type="button"
                                class="btn btn-link text-danger btn-sm mt-2 waves-effect waves-light">
                                Delete </button>
                        </div>

                    </div>

                </div>

            </div> <!-- end col -->

            <div class="col-lg-4">
                <div class="card-box">
                    <div class="member-card-alt">
                        <div class="avatar-xxl member-thumb mb-2 float-left">
                            <img src="{{asset('backend/images/users/avatar-6.jpg')}}" class="img-thumbnail"
                                alt="profile-image">
                            <i class="mdi mdi-star-circle member-star text-success"
                                title="verified user"></i>
                        </div>

                        <div class="member-card-alt-info">
                            <h4 class="mb-1 mt-0">Mark K. Horne</h4>
                            <p class="text-muted">@Director <span> | </span> <span> <a href="#"
                                        class="text-custom">websitename.com</a> </span></p>
                            <p class="text-muted font-13">
                                Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since
                                the 1500s, when an unknown printer took a galley of type.
                            </p>

                            <ul class="social-links list-inline mt-3">
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                </li>
                            </ul>

                            <button type="button"
                                class="btn btn-primary btn-sm mt-2 waves-effect waves-light"> Edit </button>
                            <button type="button"
                                class="btn btn-link text-danger btn-sm mt-2 waves-effect waves-light">
                                Delete </button>
                        </div>

                    </div>

                </div>

            </div> <!-- end col -->

            <div class="col-lg-4">
                <div class="card-box">
                    <div class="member-card-alt">
                        <div class="avatar-xxl member-thumb mb-2 float-left">
                            <img src="{{asset('backend/images/users/avatar-7.jpg')}}" class="img-thumbnail"
                                alt="profile-image">
                            <i class="mdi mdi-star-circle member-star text-success"
                                title="verified user"></i>
                        </div>

                        <div class="member-card-alt-info">
                            <h4 class="mb-1 mt-0">James M. Fonville</h4>
                            <p class="text-muted">@Manager <span> | </span> <span> <a href="#"
                                        class="text-custom">websitename.com</a> </span></p>
                            <p class="text-muted font-13">
                                Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since
                                the 1500s, when an unknown printer took a galley of type.
                            </p>

                            <ul class="social-links list-inline mt-3">
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                </li>
                            </ul>

                            <button type="button"
                                class="btn btn-primary btn-sm mt-2 waves-effect waves-light"> Edit </button>
                            <button type="button"
                                class="btn btn-link text-danger btn-sm mt-2 waves-effect waves-light">
                                Delete </button>
                        </div>

                    </div>

                </div>

            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-4">
                <div class="card-box">
                    <div class="member-card-alt">
                        <div class="avatar-xxl member-thumb mb-2 float-left">
                            <img src="{{asset('backend/images/users/avatar-8.jpg')}}" class="img-thumbnail"
                                alt="profile-image">
                            <i class="mdi mdi-star-circle member-star text-success"
                                title="verified user"></i>
                        </div>

                        <div class="member-card-alt-info">
                            <h4 class="mb-1 mt-0">Jade M. Walker</h4>
                            <p class="text-muted">@Webdeveloper <span> | </span> <span> <a href="#"
                                        class="text-custom">websitename.com</a> </span></p>
                            <p class="text-muted font-13">
                                Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since
                                the 1500s, when an unknown printer took a galley of type.
                            </p>

                            <ul class="social-links list-inline mt-3">
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                </li>
                            </ul>

                            <button type="button"
                                class="btn btn-primary btn-sm mt-2 waves-effect waves-light"> Edit </button>
                            <button type="button"
                                class="btn btn-link text-danger btn-sm mt-2 waves-effect waves-light">
                                Delete </button>
                        </div>

                    </div>

                </div>

            </div> <!-- end col -->

            <div class="col-lg-4">
                <div class="card-box">
                    <div class="member-card-alt">
                        <div class="avatar-xxl member-thumb mb-2 float-left">
                            <img src="{{asset('backend/images/users/avatar-9.jpg')}}" class="img-thumbnail"
                                alt="profile-image">
                            <i class="mdi mdi-star-circle member-star text-success"
                                title="verified user"></i>
                        </div>

                        <div class="member-card-alt-info">
                            <h4 class="mb-1 mt-0">Mathias L. Lassen</h4>
                            <p class="text-muted">@Webdesigner <span> | </span> <span> <a href="#"
                                        class="text-custom">websitename.com</a> </span></p>
                            <p class="text-muted font-13">
                                Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since
                                the 1500s, when an unknown printer took a galley of type.
                            </p>

                            <ul class="social-links list-inline mt-3">
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                </li>
                            </ul>

                            <button type="button"
                                class="btn btn-primary btn-sm mt-2 waves-effect waves-light"> Edit </button>
                            <button type="button"
                                class="btn btn-link text-danger btn-sm mt-2 waves-effect waves-light">
                                Delete </button>
                        </div>

                    </div>

                </div>

            </div> <!-- end col -->

            <div class="col-lg-4">
                <div class="card-box">
                    <div class="member-card-alt">
                        <div class="avatar-xxl member-thumb mb-2 float-left">
                            <img src="{{asset('backend/images/users/avatar-10.jpg')}}" class="img-thumbnail"
                                alt="profile-image">
                            <i class="mdi mdi-star-circle member-star text-success"
                                title="verified user"></i>
                        </div>

                        <div class="member-card-alt-info">
                            <h4 class="mb-1 mt-0">Alfred M. Bach</h4>
                            <p class="text-muted">@Manager <span> | </span> <span> <a href="#"
                                        class="text-custom">websitename.com</a> </span></p>
                            <p class="text-muted font-13">
                                Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since
                                the 1500s, when an unknown printer took a galley of type.
                            </p>

                            <ul class="social-links list-inline mt-3">
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                        href="" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                </li>
                            </ul>

                            <button type="button"
                                class="btn btn-primary btn-sm mt-2 waves-effect waves-light"> Edit </button>
                            <button type="button"
                                class="btn btn-link text-danger btn-sm mt-2 waves-effect waves-light">
                                Delete </button>
                        </div>

                    </div>

                </div>

            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->

</div
    @endsection