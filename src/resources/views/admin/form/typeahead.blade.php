@extends('admin.layout.app')
@push('styles')
<link href="{{asset('backend/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
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
                            <li class="breadcrumb-item active">Typeahead</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Typeahead</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="p-3">
                                <h4 class="font-14">The Basics</h4>
                                <p class="sub-header">When initializing a typeahead using the typeahead.js jQuery plugin, you pass the plugin method one or more datasets. The source of a dataset is responsible for computing a set of suggestions for a given query.</p>

                                <input type="text" class="form-control" data-provide="typeahead" id="the-basics" placeholder="Basic Example">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="p-3">
                                <h4 class="font-14">Bloodhound (Suggestion Engine)</h4>
                                <p class="sub-header">For more advanced use cases, rather than implementing the source for your dataset yourself, you can take advantage of Bloodhound, the typeahead.js suggestion engine.</p>

                                <input id="bloodhound" class="form-control" type="text" placeholder="States of USA">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="p-3">
                                <h4 class="font-14">Prefetch</h4>
                                <p class="sub-header">Prefetched data is fetched and processed on initialization. If the browser supports local storage, the processed data will be cached there to prevent additional network requests on subsequent page loads.</p>

                                <input type="text" class="form-control" data-provide="typeahead" id="prefetch" placeholder="States of USA">
                            </div>
                        </div>

                    </div>


                    <div class="row">

                        <div class="col-md-4">
                            <div class="p-3">
                                <h4 class="font-14">Remote</h4>
                                <p class="sub-header">Remote data is only used when the data provided by local and prefetch is insufficient. In order to prevent an obscene number of requests being made to the remote endpoint, requests are rate-limited.</p>

                                <input type="text" class="form-control" data-provide="typeahead" id="remote" placeholder="States of USA">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="p-3">
                                <h4 class="font-14">Custom Templates</h4>
                                <p class="sub-header">Custom templates give you full control over how suggestions get rendered making it easy to customize the look and feel of your typeahead.</p>

                                <input id="custom-templates" class="form-control" type="text" placeholder="States of USA">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="p-3">
                                <h4 class="font-14">Default Suggestions</h4>
                                <p class="sub-header">Default suggestions can be shown for empty queries by setting the minLength option to 0 and having the source return suggestions for empty queries.</p>

                                <input type="text" class="form-control" data-provide="typeahead" id="default-suggestions">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="p-3">
                                <h4 class="header-title">Multiple Datasets</h4>
                                <p class="sub-header">When initializing a typeahead using the typeahead.js jQuery plugin, you pass the plugin method one or more datasets. The source of a dataset is responsible for computing a set of suggestions for a given query.</p>

                                <input type="text" class="form-control" data-provide="typeahead" id="multiple-datasets">
                            </div>
                        </div>

                    </div>


                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->

</div>
@endsection