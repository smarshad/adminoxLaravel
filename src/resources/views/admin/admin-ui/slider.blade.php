@extends('admin.layout.app')
@push('styles')
<link href="{{asset('backend/libs/slick-slider/slick.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/libs/slick-slider/slick-theme.css')}}" rel="stylesheet" type="text/css" />
@endpush

@push('scripts')
<script src="{{asset('backend/libs/slick-slider/slick.min.js')}}"></script>

<!-- slick-slider init-->
<script src="{{asset('backend/js/pages/slick-slider.init.js')}}"></script>
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin UI</a></li>
                            <li class="breadcrumb-item active">Slider</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Slider</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title mb-3">Single Item</h4>
                    <div class="single-item slider" dir="ltr">
                        <div>
                            <img src="{{asset('backend/images/big/img-2.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/big/img-1.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/big/img-3.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title mb-3">Multiple Items</h4>
                    <div class="multiple-items slider-padding" dir="ltr">
                        <div>
                            <img src="{{asset('backend/images/small/img-2.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/small/img-1.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/small/img-3.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/small/img-4.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/small/img-5.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/small/img-6.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title mb-3">Responsive Display</h4>
                    <div class="responsive-slider slider-padding" dir="ltr">
                        <div>
                            <img src="{{asset('backend/images/small/img-2.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/small/img-1.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/small/img-3.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/small/img-4.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/small/img-5.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/small/img-6.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title mb-3">Center Mode</h4>
                    <div class="center-item-slider slider-padding" dir="ltr">
                        <div>
                            <img src="{{asset('backend/images/small/img-2.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/small/img-1.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/small/img-3.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/small/img-4.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/small/img-5.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/small/img-6.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title mb-3">Lazy Loading</h4>
                    <div class="lazy-load-slider slider-padding" dir="ltr">
                        <div>
                            <img src="" data-lazy="{{asset('backend/images/small/img-6.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="" data-lazy="{{asset('backend/images/small/img-5.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="" data-lazy="{{asset('backend/images/small/img-4.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="" data-lazy="{{asset('backend/images/small/img-3.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="" data-lazy="{{asset('backend/images/small/img-2.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="" data-lazy="{{asset('backend/images/small/img-1.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title mb-3">Fade</h4>
                    <div class="fade-slider slider " dir="ltr">
                        <div>
                            <img src="{{asset('backend/images/big/img-2.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/big/img-1.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/big/img-3.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title mb-3">Slider Syncing</h4>
                    <div class="slider-syncing-for" dir="ltr">
                        <div>
                            <img src="{{asset('backend/images/big/img-2.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/big/img-1.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/big/img-3.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/big/img-2.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/big/img-1.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/big/img-3.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                    </div>

                    <div class="slider-syncing-nav" dir="ltr">
                        <div>
                            <img src="{{asset('backend/images/big/img-2.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/big/img-1.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/big/img-3.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/big/img-2.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/big/img-1.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('backend/images/big/img-3.jpg')}}" alt="slider-img" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->

</div>
@endsection