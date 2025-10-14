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
                            <li class="breadcrumb-item active">Email Templates</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Email Templates</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="mt-0 mb-3 header-title"><b>Basic action email</b></h4>
                            <a href="#" target="_blank"> <img src="{{asset('backend/images/email/1.png')}}" class="img-fluid" alt=""> </a>
                        </div>
                        <div class="col-md-4">
                            <h4 class="mt-0 mb-3 header-title"><b>Email alert</b> </h4>
                            <a href="#" target="_blank"> <img src="{{asset('backend/images/email/2.png')}}" class="img-fluid" alt=""> </a>
                        </div>
                        <div class="col-md-4">
                            <h4 class="mt-0 mb-3 header-title"><b>Billing email</b></h4>
                            <a href="#" target="_blank"> <img src="{{asset('backend/images/email/3.png')}}" class="img-fluid" alt=""> </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->

</div>
@endsection