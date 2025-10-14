@extends('admin.layout.app')
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
                            <li class="breadcrumb-item active">Form Layouts</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Form Layouts</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Basic Example</h4>

                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                    </form>
                </div>
            </div>
            <!-- end col -->

            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Horizontal form</h4>

                    <form class="form-horizontal">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Email</label>
                            <div class="col-9">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Password</label>
                            <div class="col-9">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword4" class="col-3 col-form-label">Re Password</label>
                            <div class="col-9">
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Retype Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-3 col-9">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox2" type="checkbox">
                                    <label for="checkbox2">
                                        Check me out !
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-0 row">
                            <div class="offset-3 col-9">
                                <button type="submit" class="btn btn-info waves-effect waves-light">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- end row -->


        <!-- Inline Form -->
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="header-title"><b>Inline Form</b></h4>
                    <p class="sub-header">
                        Add <code>.form-inline</code> to your form (which doesn't have to be a <code>&lt;form&gt;</code>)
                        for left-aligned and inline-block controls. <strong>This only applies to forms within viewports
                            that are at least 768px wide.</strong>
                    </p>
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <h5>Style 1</h5>

                            <form class="form-inline">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail21">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail21" placeholder="Enter email">
                                </div>

                                <div class="form-group ml-2">
                                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                </div>
                                <div class="form-group ml-2">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox3" type="checkbox">
                                        <label for="checkbox3">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success waves-effect waves-light ml-2 btn-md">Sign in</button>
                            </form>
                        </div>


                    </div>

                    <div class="row">

                        <div class="col-lg-12">
                            <h5>Style 2</h5>
                            <form class="form-inline">
                                <div class="form-group mr-2">
                                    <label for="exampleInputName2" class="mr-2">Name</label>
                                    <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                                </div>
                                <div class="form-group mr-2">
                                    <label for="exampleInputEmail2" class="mr-2">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                                </div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light btn-md">
                                    Send invitation
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->

</div>
@endsection