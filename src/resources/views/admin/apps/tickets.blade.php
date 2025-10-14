@extends('admin.layout.app')
@push('styles')
<!-- third party css -->
<link href="{{asset('backend/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
@endpush
@push('scripts')
<!-- plugin js -->
<!-- third party js -->
<script src="{{asset('backend/libs/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/libs/datatables/dataTables.responsive.min.js')}}"></script>

<!-- Tickets js -->
<script src="{{asset('backend/js/pages/tickets.init.js')}}"></script>
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
                            <li class="breadcrumb-item active">Tickets</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Tickets</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title mb-3">Manage Tickets</h4>

                    <div class="text-center mb-4">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="my-3">
                                    <h3 class="mb-2">25563</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Total tickets</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="my-3">
                                    <h3 class="mb-2">6952</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Pending Tickets</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="my-3">
                                    <h3 class="mb-2">18361</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Closed Tickets</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="my-3">
                                    <h3 class="mb-2 text-danger">250</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium">Deleted Tickets</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <table class="table table-hover m-0 tickets-list table-actions-bar dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;" id="datatable">
                        <thead>
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>Requested By</th>
                                <th>Subject</th>
                                <th>Assignee</th>
                                <th>Priority</th>
                                <th>Status</th>
                                <th>Created Date</th>
                                <th>Due Date</th>
                                <th class="hidden-sm">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><b>#1256</b></td>
                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-2.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        <span class="ml-1"><b>George A. Llanes</b></span>
                                    </a>
                                </td>

                                <td>
                                    Support for theme
                                </td>

                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-10.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                    </a>
                                </td>

                                <td>
                                    <span class="badge badge-secondary">Low</span>
                                </td>

                                <td>
                                    <span class="badge badge-success">Open</span>
                                </td>

                                <td>
                                    2017/04/28
                                </td>

                                <td>
                                    2017/04/28
                                </td>

                                <td>
                                    <div class="btn-group dropdown">
                                        <a href="javascript: void(0);" class="table-action-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Favorite</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><b>#2542</b></td>
                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-3.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        <span class="ml-1"><b>Jose D. Delacruz</b></span>
                                    </a>
                                </td>

                                <td>
                                    New submission on your website
                                </td>

                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-9.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                    </a>
                                </td>

                                <td>
                                    <span class="badge badge-warning">Medium</span>
                                </td>

                                <td>
                                    <span class="badge badge-secondary">Closed</span>
                                </td>

                                <td>
                                    2008/04/25
                                </td>

                                <td>
                                    2008/04/25
                                </td>

                                <td>
                                    <div class="btn-group dropdown">
                                        <a href="javascript: void(0);" class="table-action-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Favorite</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><b>#320</b></td>
                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-5.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        <span class="ml-1"><b>Phyllis K. Maciel</b></span>
                                    </a>
                                </td>

                                <td>
                                    Verify your new email address!
                                </td>

                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-10.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                    </a>
                                </td>

                                <td>
                                    <span class="badge badge-danger">High</span>
                                </td>

                                <td>
                                    <span class="badge badge-success">Open</span>
                                </td>

                                <td>
                                    2017/04/20
                                </td>

                                <td>
                                    2017/04/25
                                </td>

                                <td>
                                    <div class="btn-group dropdown">
                                        <a href="javascript: void(0);" class="table-action-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Favorite</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><b>#1254</b></td>
                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-8.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        <span class="ml-1"><b>Margeret V. Ligon</b></span>
                                    </a>
                                </td>

                                <td>
                                    Your application has been received!
                                </td>

                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-10.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                    </a>
                                </td>

                                <td>
                                    <span class="badge badge-danger">High</span>
                                </td>

                                <td>
                                    <span class="badge badge-secondary">Closed</span>
                                </td>

                                <td>
                                    01/04/2017
                                </td>

                                <td>
                                    21/05/2017
                                </td>

                                <td>
                                    <div class="btn-group dropdown">
                                        <a href="javascript: void(0);" class="table-action-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Favorite</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><b>#1020</b></td>
                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-9.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        <span class="ml-1"><b>Erwin E. Brown</b></span>
                                    </a>
                                </td>

                                <td>
                                    A new rating has been received
                                </td>

                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-1.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                    </a>
                                </td>

                                <td>
                                    <span class="badge badge-warning">Medium</span>
                                </td>

                                <td>
                                    <span class="badge badge-secondary">Closed</span>
                                </td>

                                <td>
                                    2013/08/11
                                </td>

                                <td>
                                    2013/08/30
                                </td>

                                <td>
                                    <div class="btn-group dropdown">
                                        <a href="javascript: void(0);" class="table-action-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Favorite</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><b>#854</b></td>
                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-2.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        <span class="ml-1"><b>William L. Trent</b></span>
                                    </a>
                                </td>

                                <td>
                                    Your Profile has been accepted
                                </td>

                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-10.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                    </a>
                                </td>

                                <td>
                                    <span class="badge badge-danger">High</span>
                                </td>

                                <td>
                                    <span class="badge badge-success">Open</span>
                                </td>

                                <td>
                                    01/04/2017
                                </td>

                                <td>
                                    21/05/2017
                                </td>

                                <td>
                                    <div class="btn-group dropdown">
                                        <a href="javascript: void(0);" class="table-action-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Favorite</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><b>#9501</b></td>
                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-10.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        <span class="ml-1"><b>Amy R. Barnaby</b></span>
                                    </a>
                                </td>

                                <td>
                                    Homeworth for your property increased
                                </td>

                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-3.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                    </a>
                                </td>

                                <td>
                                    <span class="badge badge-secondary">Low</span>
                                </td>

                                <td>
                                    <span class="badge badge-success">Open</span>
                                </td>

                                <td>
                                    01/04/2017
                                </td>

                                <td>
                                    21/05/2017
                                </td>

                                <td>
                                    <div class="btn-group dropdown">
                                        <a href="javascript: void(0);" class="table-action-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Favorite</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><b>#3652</b></td>
                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-3.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        <span class="ml-1"><b>Jessica T. Phillips</b></span>
                                    </a>
                                </td>

                                <td>
                                    Item Support Message sent
                                </td>

                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-9.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                    </a>
                                </td>

                                <td>
                                    <span class="badge badge-warning">Medium</span>
                                </td>

                                <td>
                                    <span class="badge badge-secondary">Closed</span>
                                </td>

                                <td>
                                    01/04/2017
                                </td>

                                <td>
                                    21/05/2017
                                </td>

                                <td>
                                    <div class="btn-group dropdown">
                                        <a href="javascript: void(0);" class="table-action-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Favorite</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><b>#9852</b></td>
                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-5.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        <span class="ml-1"><b>Debra J. Wilson</b></span>
                                    </a>
                                </td>

                                <td>
                                    Your item has been updated!
                                </td>

                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-10.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                    </a>
                                </td>

                                <td>
                                    <span class="badge badge-danger">High</span>
                                </td>

                                <td>
                                    <span class="badge badge-success">Open</span>
                                </td>

                                <td>
                                    01/04/2017
                                </td>

                                <td>
                                    21/05/2017
                                </td>

                                <td>
                                    <div class="btn-group dropdown">
                                        <a href="javascript: void(0);" class="table-action-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Favorite</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><b>#3652</b></td>
                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-4.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        <span class="ml-1"><b>Luke J. Sain</b></span>
                                    </a>
                                </td>

                                <td>
                                    Your password has been reset
                                </td>

                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-10.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                    </a>
                                </td>

                                <td>
                                    <span class="badge badge-secondary">Low</span>
                                </td>

                                <td>
                                    <span class="badge badge-success">Open</span>
                                </td>

                                <td>
                                    01/04/2017
                                </td>

                                <td>
                                    21/05/2017
                                </td>

                                <td>
                                    <div class="btn-group dropdown">
                                        <a href="javascript: void(0);" class="table-action-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Favorite</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><b>#1352</b></td>
                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-5.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        <span class="ml-1"><b>Karen R. Doyle</b></span>
                                    </a>
                                </td>

                                <td>
                                    Question regarding your Bootstrap Theme
                                </td>

                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-8.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                    </a>
                                </td>

                                <td>
                                    <span class="badge badge-danger">High</span>
                                </td>

                                <td>
                                    <span class="badge badge-success">Open</span>
                                </td>

                                <td>
                                    01/04/2017
                                </td>

                                <td>
                                    21/05/2017
                                </td>

                                <td>
                                    <div class="btn-group dropdown">
                                        <a href="javascript: void(0);" class="table-action-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Favorite</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><b>#3562</b></td>
                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-8.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        <span class="ml-1"><b>Freddie J. Plourde</b></span>
                                    </a>
                                </td>

                                <td>
                                    Security alert for my account
                                </td>

                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-2.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                    </a>
                                </td>

                                <td>
                                    <span class="badge badge-secondary">Low</span>
                                </td>

                                <td>
                                    <span class="badge badge-success">Open</span>
                                </td>

                                <td>
                                    01/04/2017
                                </td>

                                <td>
                                    21/05/2017
                                </td>

                                <td>
                                    <div class="btn-group dropdown">
                                        <a href="javascript: void(0);" class="table-action-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Favorite</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><b>#3658</b></td>
                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-9.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        <span class="ml-1"><b>Darrell J. Cook</b></span>
                                    </a>
                                </td>

                                <td>
                                    Christopher S. Ahmad
                                </td>

                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-10.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                    </a>
                                </td>

                                <td>
                                    <span class="badge badge-warning">Medium</span>
                                </td>

                                <td>
                                    <span class="badge badge-secondary">Closed</span>
                                </td>

                                <td>
                                    01/04/2017
                                </td>

                                <td>
                                    21/05/2017
                                </td>

                                <td>
                                    <div class="btn-group dropdown">
                                        <a href="javascript: void(0);" class="table-action-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Favorite</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><b>#2251</b></td>
                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-8.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        <span class="ml-1"><b>Mark C. Diaz</b></span>
                                    </a>
                                </td>

                                <td>
                                    Verify your new email address!
                                </td>

                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-10.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                    </a>
                                </td>

                                <td>
                                    <span class="badge badge-danger">High</span>
                                </td>

                                <td>
                                    <span class="badge badge-success">Open</span>
                                </td>

                                <td>
                                    01/04/2017
                                </td>

                                <td>
                                    21/05/2017
                                </td>

                                <td>
                                    <div class="btn-group dropdown">
                                        <a href="javascript: void(0);" class="table-action-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Favorite</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><b>#3654</b></td>
                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-2.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        <span class="ml-1"><b>Robert K. Joseph</b></span>
                                    </a>
                                </td>

                                <td>
                                    Support for theme
                                </td>

                                <td>
                                    <a href="javascript: void(0);" class="text-body">
                                        <img src="{{asset('backend/images/users/avatar-10.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                    </a>
                                </td>

                                <td>
                                    <span class="badge badge-secondary">Low</span>
                                </td>

                                <td>
                                    <span class="badge badge-success">Open</span>
                                </td>

                                <td>
                                    01/04/2017
                                </td>

                                <td>
                                    21/05/2017
                                </td>

                                <td>
                                    <div class="btn-group dropdown">
                                        <a href="javascript: void(0);" class="table-action-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Favorite</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->

</div>
@endsection