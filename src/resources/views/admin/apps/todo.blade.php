@extends('admin.layout.app')
@push('styles')
<link href="{{asset('backend/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endpush
@push('scripts')
<!-- plugin js -->
<script src="{{asset('backend/libs/moment/moment.min.js')}}"></script>
<script src="{{asset('backend/libs/sweetalert2/sweetalert2.min.js')}}"></script>

<!-- Calendar init -->
<script src="{{asset('backend/js/pages/jquery.todo.js')}}"></script>
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
                            <li class="breadcrumb-item active">Todo</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Todo</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">

                    <div class="row">
                        <div class="col-sm-6">
                            <h5 id="todo-message" class="mt-0"><span id="todo-remaining"></span> of <span
                                    id="todo-total"></span> remaining</h5>
                        </div>
                        <div class="col-sm-6">
                            <a href="" class="float-right btn btn-primary btn-sm waves-effect waves-light"
                                id="btn-archive">Archive</a>
                        </div>
                    </div>

                    <form name="todo-form" id="todo-form" class="mt-4">
                        <div class="row">
                            <div class="col-sm-9 todo-inputbar">
                                <input type="text" id="todo-input-text" name="todo-input-text"
                                    class="form-control" placeholder="Add new todo">
                            </div>
                            <div class="col-sm-3 todo-send">
                                <button class="btn-primary btn-md btn-block btn waves-effect waves-light"
                                    type="button" id="todo-btn-submit">Add</button>
                            </div>
                        </div>
                    </form>

                    <ul class="list-group mt-4 todo-list mb-0" id="todo-list"></ul>

                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->

</div>
@endsection