@extends('admin.layout.app')
@push('styles')
<link href="{{asset('backend/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endpush
@push('scripts')
<!-- Tree view js -->
<script src="{{asset('backend/libs/sweetalert2/sweetalert2.min.js')}}"></script>

<script src="{{asset('backend/js/pages/sweet-alerts.init.js')}}"></script>
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
                            <li class="breadcrumb-item active">Sweet Alert</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Sweet Alert</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <table class="table table-centered mb-0">
                        <thead>
                            <tr>
                                <th style="min-width:50%;">Alert Type</th>
                                <th>Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="middle-align">A basic message</td>
                                <td>
                                    <button type="button"
                                        class="btn btn-primary waves-effect waves-light btn-sm"
                                        id="sa-basic">Click me</button>
                                </td>
                            </tr>

                            <tr>
                                <td class="middle-align">A title with a text under</td>
                                <td>
                                    <button type="button"
                                        class="btn btn-primary waves-effect waves-light btn-sm"
                                        id="sa-title">Click me</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="middle-align">A success message!</td>
                                <td>
                                    <button type="button"
                                        class="btn btn-primary waves-effect waves-light btn-sm"
                                        id="sa-success">Click me</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="middle-align">A warning message, with a function attached to the
                                    "Confirm"-button...</td>
                                <td>
                                    <button type="button"
                                        class="btn btn-primary waves-effect waves-light btn-sm"
                                        id="sa-warning">Click me</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="middle-align">By passing a parameter, you can execute something
                                    else for "Cancel".</td>
                                <td>
                                    <button type="button"
                                        class="btn btn-primary waves-effect waves-light btn-sm"
                                        id="sa-params">Click me</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="middle-align">A message with custom Image Header</td>
                                <td>
                                    <button type="button"
                                        class="btn btn-primary waves-effect waves-light btn-sm"
                                        id="sa-image">Click me</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="middle-align">A message with auto close timer</td>
                                <td>
                                    <button type="button"
                                        class="btn btn-primary waves-effect waves-light btn-sm"
                                        id="sa-close">Click me</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="middle-align">Custom HTML description and buttons</td>
                                <td>
                                    <button type="button"
                                        class="btn btn-primary waves-effect waves-light btn-sm"
                                        id="custom-html-alert">Click me</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="middle-align">A message with custom width, padding and background
                                </td>
                                <td>
                                    <button type="button"
                                        class="btn btn-primary waves-effect waves-light btn-sm"
                                        id="custom-padding-width-alert">Click me</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="middle-align">Ajax request example</td>
                                <td>
                                    <button type="button"
                                        class="btn btn-primary waves-effect waves-light btn-sm"
                                        id="ajax-alert">Click me</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="middle-align">Chaining modals (queue) example</td>
                                <td>
                                    <button type="button"
                                        class="btn btn-primary waves-effect waves-light btn-sm"
                                        id="chaining-alert">Click me</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="middle-align">Dynamic queue example</td>
                                <td>
                                    <button type="button"
                                        class="btn btn-primary waves-effect waves-light btn-sm"
                                        id="dynamic-alert">Click me</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div> <!-- end card-box -->
            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->

</div>
@endsection