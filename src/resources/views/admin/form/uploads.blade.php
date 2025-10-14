@extends('admin.layout.app')
@push('styles')
<link href="{{asset('backend/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
@endpush
@push('scripts')
<script src="{{asset('backend/libs/dropzone/dropzone.min.js')}}"></script>
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
                            <li class="breadcrumb-item active">File Uploads</li>
                        </ol>
                    </div>
                    <h4 class="page-title">File Uploads</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title">Dropzone File Upload</h4>
                    <p class="sub-header">
                        DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews.
                    </p>

                    <form action="/" method="post" class="dropzone" id="myAwesomeDropzone">
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>

                        <div class="dz-message needsclick">
                            <i class="h1 text-muted dripicons-cloud-upload"></i>
                            <h4 class="mt-3">Drop files here or click to upload.</h4>
                            <span class="text-muted font-13">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                        </div>
                    </form>
                    <div class="clearfix text-right mt-3">
                        <button type="button" class="btn btn-danger"> <i class="mdi mdi-send mr-1"></i> Submit</button>
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->

</div>
@endsection