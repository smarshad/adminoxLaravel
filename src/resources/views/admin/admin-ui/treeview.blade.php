@extends('admin.layout.app')
@push('styles')
<link href="{{asset('backend/libs/treeview/style.css')}}" rel="stylesheet" type="text/css" />
@endpush
@push('scripts')
<!-- Tree view js -->
<script src="{{asset('backend/libs/treeview/jstree.min.js')}}"></script>
<script src="{{asset('backend/js/pages/treeview.init.js')}}"></script>
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
                            <li class="breadcrumb-item active">Tree View</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Tree View</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Basic Tree</h4>

                    <div id="basicTree">
                        <ul>
                            <li>Adminox
                                <ul>
                                    <li data-jstree='{"opened":true}'>Assets
                                        <ul>
                                            <li data-jstree='{"type":"file"}'>Css</li>
                                            <li data-jstree='{"opened":true}'>Plugins
                                                <ul>
                                                    <li data-jstree='{"selected":true,"type":"file"}'>Plugin one</li>
                                                    <li data-jstree='{"type":"file"}'>Plugin two</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li data-jstree='{"opened":true}'>Email Template
                                        <ul>
                                            <li data-jstree='{"type":"file"}'>Email one</li>
                                            <li data-jstree='{"type":"file"}'>Email two</li>
                                        </ul>
                                    </li>
                                    <li data-jstree='{"icon":"mdi mdi-view-dashboard"}'>Dashboard</li>
                                    <li data-jstree='{"icon":"mdi mdi-format-float-right"}'>Typography</li>
                                    <li data-jstree='{"opened":true}'>User Interface
                                        <ul>
                                            <li data-jstree='{"type":"file"}'>Buttons</li>
                                            <li data-jstree='{"type":"file"}'>Cards</li>
                                        </ul>
                                    </li>
                                    <li data-jstree='{"icon":"mdi mdi-foursquare"}'>Forms</li>
                                    <li data-jstree='{"icon":"mdi mdi-format-list-bulleted"}'>Tables</li>
                                </ul>
                            </li>
                            <li data-jstree='{"type":"file"}'>Frontend</li>
                        </ul>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Checkbox Tree</h4>

                    <div id="checkTree">
                        <ul>
                            <li>Adminox
                                <ul>
                                    <li data-jstree='{"opened":true}'>Assets
                                        <ul>
                                            <li data-jstree='{"type":"file"}'>Css</li>
                                            <li data-jstree='{"opened":true}'>Plugins
                                                <ul>
                                                    <li data-jstree='{"selected":true,"type":"file"}'>Plugin one</li>
                                                    <li data-jstree='{"type":"file"}'>Plugin two</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li data-jstree='{"opened":true}'>Email Template
                                        <ul>
                                            <li data-jstree='{"type":"file"}'>Email one</li>
                                            <li data-jstree='{"type":"file"}'>Email two</li>
                                        </ul>
                                    </li>
                                    <li data-jstree='{"icon":"mdi mdi-view-dashboard"}'>Dashboard</li>
                                    <li data-jstree='{"icon":"mdi mdi-format-float-right"}'>Typography</li>
                                    <li data-jstree='{"opened":true}'>User Interface
                                        <ul>
                                            <li data-jstree='{"type":"file"}'>Buttons</li>
                                            <li data-jstree='{"type":"file"}'>Cards</li>
                                        </ul>
                                    </li>
                                    <li data-jstree='{"icon":"mdi mdi-foursquare"}'>Forms</li>
                                    <li data-jstree='{"icon":"mdi mdi-format-list-bulleted"}'>Tables</li>
                                </ul>
                            </li>
                            <li data-jstree='{"type":"file"}'>Frontend</li>
                        </ul>
                    </div>
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Drag &amp; Drop</h4>

                    <div id="dragTree">
                        <ul>
                            <li>Adminox
                                <ul>
                                    <li data-jstree='{"opened":true}'>Assets
                                        <ul>
                                            <li data-jstree='{"type":"file"}'>Css</li>
                                            <li data-jstree='{"opened":true}'>Plugins
                                                <ul>
                                                    <li data-jstree='{"selected":true,"type":"file"}'>Plugin one</li>
                                                    <li data-jstree='{"type":"file"}'>Plugin two</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li data-jstree='{"opened":true}'>Email Template
                                        <ul>
                                            <li data-jstree='{"type":"file"}'>Email one</li>
                                            <li data-jstree='{"type":"file"}'>Email two</li>
                                        </ul>
                                    </li>
                                    <li data-jstree='{"icon":"mdi mdi-view-dashboard"}'>Dashboard</li>
                                    <li data-jstree='{"icon":"mdi mdi-format-float-right"}'>Typography</li>
                                    <li data-jstree='{"opened":true}'>User Interface
                                        <ul>
                                            <li data-jstree='{"type":"file"}'>Buttons</li>
                                            <li data-jstree='{"type":"file"}'>Cards</li>
                                        </ul>
                                    </li>
                                    <li data-jstree='{"icon":"mdi mdi-foursquare"}'>Forms</li>
                                    <li data-jstree='{"icon":"mdi mdi-format-list-bulleted"}'>Tables</li>
                                </ul>
                            </li>
                            <li data-jstree='{"type":"file"}'>Frontend</li>
                        </ul>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Ajax</h4>
                    <div id="ajaxTree"></div>
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->


    </div> <!-- end container-fluid -->

</div>
@endsection