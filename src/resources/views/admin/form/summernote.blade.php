@extends('admin.layout.app')
@push('styles')
<link href="{{asset('backend/libs/summernote/summernote-bs4.css')}}" rel="stylesheet" type="text/css" />
@endpush
@push('scripts')
<!-- Summernote js -->
<script src="{{asset('backend/libs/summernote/summernote-bs4.min.js')}}"></script>
<!-- Init js -->
<script src="{{asset('backend/js/pages/form-summernote.init.js')}}"></script>
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Summernote Editor</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Summernote Editor</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title mb-3">Default Editor</h4>
                    <div class="summernote">
                        <p>Hello Summernote</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- End row -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title mb-3">Inline Editor</h4>
                    <div class="inline-editor">

                        <h5>This is an Air-mode editable area.</h5>
                        <ul>
                            <li>
                                Select a text to reveal the toolbar.
                            </li>
                            <li>
                                Edit rich document on-the-fly, so elastic!
                            </li>
                        </ul>
                        <p>
                            End of air-mode area
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End row -->

    </div> <!-- end container-fluid -->

</div>
@endsection