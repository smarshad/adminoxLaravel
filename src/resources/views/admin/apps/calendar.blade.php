@extends('admin.layout.app')
@push('styles')
<link href="{{asset('backend/libs/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
@endpush
@push('scripts')
<!-- plugin js -->
<script src="{{asset('backend/libs/moment/moment.min.js')}}"></script>
<script src="{{asset('backend/libs/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('backend/libs/fullcalendar/fullcalendar.min.js')}}"></script>

<!-- Calendar init -->
<script src="{{asset('backend/js/pages/calendar.init.js')}}"></script>
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
                            <li class="breadcrumb-item active">Calendar</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Calendar</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">

                <div class="card-box">
                    <div class="row">
                        <div class="col-lg-3">
                            <a href="#" data-toggle="modal" data-target="#add-category"
                                class="btn btn-lg btn-primary btn-block waves-effect mt-2 waves-light">
                                <i class="fa fa-plus"></i> Create New
                            </a>
                            <div id="external-events" class="mt-3">
                                <br>
                                <p class="text-muted">Drag and drop your event or click in the calendar</p>
                                <div class="external-event bg-soft-success text-success"
                                    data-class="bg-success">
                                    <i class="mdi mdi-checkbox-blank-circle mr-1 vertical-middle"></i>New
                                    Theme Release
                                </div>
                                <div class="external-event bg-soft-info text-info" data-class="bg-info">
                                    <i class="mdi mdi-checkbox-blank-circle mr-1 vertical-middle"></i>My
                                    Event
                                </div>
                                <div class="external-event bg-soft-warning text-warning"
                                    data-class="bg-warning">
                                    <i class="mdi mdi-checkbox-blank-circle mr-1 vertical-middle"></i>Meet
                                    manager
                                </div>
                                <div class="external-event bg-soft-purple text-purple"
                                    data-class="bg-purple">
                                    <i class="mdi mdi-checkbox-blank-circle mr-1 vertical-middle"></i>Create
                                    New theme
                                </div>
                            </div>

                            <!-- checkbox -->
                            <div class="checkbox checkbox-primary mt-4">
                                <input type="checkbox" id="drop-remove">
                                <label for="drop-remove">
                                    Remove after drop
                                </label>
                            </div>
                        </div> <!-- end col-->
                        <div class="col-lg-9">
                            <div id="calendar"></div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div>

                <!-- BEGIN MODAL -->
                <div class="modal fade none-border" id="event-modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Add New Event</h4>
                            </div>
                            <div class="modal-body pb-0"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect"
                                    data-dismiss="modal">Close</button>
                                <button type="button"
                                    class="btn btn-success save-event waves-effect waves-light">Create
                                    event</button>
                                <button type="button"
                                    class="btn btn-danger delete-event waves-effect waves-light"
                                    data-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Add Category -->
                <div class="modal fade none-border" id="add-category" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Add a category</h4>
                            </div>
                            <div class="modal-body pb-0">
                                <form class="form">
                                    <div class="form-group">
                                        <label class="control-label">Category Name</label>
                                        <input class="form-control form-white" placeholder="Enter name"
                                            type="text" name="category-name" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Choose Category Color</label>
                                        <select class="form-control form-white"
                                            data-placeholder="Choose a color..." name="category-color">
                                            <option value="success">Success</option>
                                            <option value="danger">Danger</option>
                                            <option value="info">Info</option>
                                            <option value="pink">Pink</option>
                                            <option value="primary">Primary</option>
                                            <option value="warning">Warning</option>
                                            <option value="inverse">Inverse</option>
                                        </select>
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect"
                                    data-dismiss="modal">Close</button>
                                <button type="button"
                                    class="btn btn-danger waves-effect waves-light save-category"
                                    data-dismiss="modal">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MODAL -->
            </div>
            <!-- end col-12 -->
        </div> <!-- end row -->

    </div> <!-- end container-fluid -->

</div>
@endsection