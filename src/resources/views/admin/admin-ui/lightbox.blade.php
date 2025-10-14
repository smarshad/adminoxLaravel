@extends('admin.layout.app')
@push('styles')
<link href="{{asset('backend/libs/lightbox2/lightbox.min.css')}}" rel="stylesheet" type="text/css" />
@endpush

@push('scripts')
<script src="{{asset('backend/libs/lightbox2/lightbox.min.js')}}"></script>
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
                            <li class="breadcrumb-item active">Light Box</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Light Box</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title mb-4">Single Images</h4>

                    <div class="row">
                        <div class="col-sm-4">
                            <a href="{{asset('backend/images/small/img-1.jpg')}}" class="img-thumbnail" data-lightbox="#single-image">
                                <img id="single-image" src="{{asset('backend/images/small/img-1.jpg')}}" alt="image-1" class="img-fluid" />
                            </a>
                        </div>

                        <div class="col-sm-4">
                            <a href="{{asset('backend/images/small/img-2.jpg')}}" class="img-thumbnail" data-lightbox="#single-image-2" data-title="Optional caption.">
                                <img id="single-image-2" src="{{asset('backend/images/small/img-2.jpg')}}" alt="image-1" class="img-fluid" />
                            </a>
                        </div>

                        <div class="col-sm-4">
                            <a href="{{asset('backend/images/small/img-3.jpg')}}" class="img-thumbnail" data-lightbox="#single-image-3">
                                <img id="single-image-3" src="{{asset('backend/images/small/img-3.jpg')}}" alt="image-1" class="img-fluid" />
                            </a>
                        </div>
                    </div>

                </div>

                <div class="card-box">
                    <h4 class="header-title mb-4">Gallery Images</h4>

                    <div class="row">
                        <div class="col-sm-3">
                            <a href="{{asset('backend/images/small/img-4.jpg')}}" data-lightbox="gallery-set" data-title="Click the right half of the image to move forward.">
                                <img src="{{asset('backend/images/small/img-4.jpg')}}" alt="" class="img-fluid" />
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <a href="{{asset('backend/images/small/img-5.jpg')}}" data-lightbox="gallery-set" data-title="Or press the right arrow on your keyboard.">
                                <img src="{{asset('backend/images/small/img-5.jpg')}}" alt="" class="img-fluid" />
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <a href="{{asset('backend/images/small/img-6.jpg')}}" data-lightbox="gallery-set" data-title="The next image in the set is preloaded as you're viewing.">
                                <img src="{{asset('backend/images/small/img-6.jpg')}}" alt="" class="img-fluid" />
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <a href="{{asset('backend/images/small/img-7.jpg')}}" data-lightbox="gallery-set" data-title="Click anywhere outside the image or the X to the right to close.">
                                <img src="{{asset('backend/images/small/img-7.jpg')}}" alt="" class="img-fluid" />
                            </a>
                        </div>
                    </div>

                </div>

            </div><!-- end col -->
        </div>
        <!-- end row -->
    </div> <!-- end container-fluid -->
</div>
@endsection