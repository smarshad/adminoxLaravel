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
                            <li class="breadcrumb-item active">Form Validation</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Form Validation</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-6">

                <div class="card-box">
                    <h4 class="header-title">Basic Form</h4>
                    <p class="sub-header">
                        Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                    </p>

                    <form action="#" class="parsley-examples" novalidate="">
                        <div class="form-group">
                            <label for="userName">User Name<span class="text-danger">*</span></label>
                            <input type="text" name="nick" parsley-trigger="change" required
                                placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="form-group">
                            <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                            <input type="email" name="email" parsley-trigger="change" required
                                placeholder="Enter email" class="form-control" id="emailAddress">
                        </div>
                        <div class="form-group">
                            <label for="pass1">Password<span class="text-danger">*</span></label>
                            <input id="pass1" type="password" placeholder="Password" required
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                            <input data-parsley-equalto="#pass1" type="password" required
                                placeholder="Password" class="form-control" id="passWord2">
                        </div>
                        <div class="form-group">
                            <div class="checkbox checkbox-purple">
                                <input id="checkbox6a" type="checkbox">
                                <label for="checkbox6a">
                                    Remember me
                                </label>
                            </div>

                        </div>

                        <div class="form-group text-right mb-0">
                            <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                Submit
                            </button>
                            <button type="reset" class="btn btn-secondary waves-effect waves-light">
                                Cancel
                            </button>
                        </div>

                    </form>
                </div> <!-- end card-box -->
            </div>
            <!-- end col -->

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Horizontal Form</h4>
                    <p class="sub-header">
                        Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                    </p>

                    <form role="form" class="parsley-examples" novalidate="">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-4 col-form-label">Email<span class="text-danger">*</span></label>
                            <div class="col-7">
                                <input type="email" required parsley-type="email" class="form-control"
                                    id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hori-pass1" class="col-4 col-form-label">Password<span class="text-danger">*</span></label>
                            <div class="col-7">
                                <input id="hori-pass1" type="password" placeholder="Password" required
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hori-pass2" class="col-4 col-form-label">Confirm Password
                                <span class="text-danger">*</span></label>
                            <div class="col-7">
                                <input data-parsley-equalto="#hori-pass1" type="password" required
                                    placeholder="Password" class="form-control" id="hori-pass2">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="webSite" class="col-4 col-form-label">Web Site<span class="text-danger">*</span></label>
                            <div class="col-7">
                                <input type="url" required parsley-type="url" class="form-control"
                                    id="webSite" placeholder="URL">
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-8">
                                <div class="checkbox checkbox-purple">
                                    <input id="checkbox6" type="checkbox">
                                    <label for="checkbox6">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row justify-content-end mb-0">
                            <div class="col-8">
                                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                    Register
                                </button>
                                <button type="reset"
                                    class="btn btn-secondary waves-effect waves-light">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div> <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Validation type</h4>
                    <p class="sub-header">
                        Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                    </p>

                    <form class="parsley-examples" action="#" novalidate="">
                        <div class="form-group">
                            <label>Required</label>
                            <input type="text" class="form-control" required
                                placeholder="Type something" />
                        </div>

                        <div class="form-group">
                            <label>Equal To</label>
                            <div>
                                <input type="password" id="pass2" class="form-control" required
                                    placeholder="Password" />
                            </div>
                            <div class="mt-2">
                                <input type="password" class="form-control" required
                                    data-parsley-equalto="#pass2"
                                    placeholder="Re-Type Password" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>E-Mail</label>
                            <div>
                                <input type="email" class="form-control" required
                                    parsley-type="email" placeholder="Enter a valid e-mail" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>URL</label>
                            <div>
                                <input parsley-type="url" type="url" class="form-control"
                                    required placeholder="URL" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Digits</label>
                            <div>
                                <input data-parsley-type="digits" type="text"
                                    class="form-control" required
                                    placeholder="Enter only digits" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Number</label>
                            <div>
                                <input data-parsley-type="number" type="text"
                                    class="form-control" required
                                    placeholder="Enter only numbers" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alphanumeric</label>
                            <div>
                                <input data-parsley-type="alphanum" type="text"
                                    class="form-control" required
                                    placeholder="Enter alphanumeric value" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Textarea</label>
                            <div>
                                <textarea required class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-secondary waves-effect waves-light">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Range validation</h4>
                    <p class="sub-header">
                        Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                    </p>

                    <form class="parsley-examples" action="#" novalidate="">

                        <div class="form-group">
                            <label>Min Length</label>
                            <div>
                                <input type="text" class="form-control" required
                                    data-parsley-minlength="6" placeholder="Min 6 chars." />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Max Length</label>
                            <div>
                                <input type="text" class="form-control" required
                                    data-parsley-maxlength="6" placeholder="Max 6 chars." />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Range Length</label>
                            <div>
                                <input type="text" class="form-control" required
                                    data-parsley-length="[5,10]"
                                    placeholder="Text between 5 - 10 chars length" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Min Value</label>
                            <div>
                                <input type="text" class="form-control" required
                                    data-parsley-min="6" placeholder="Min value is 6" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Max Value</label>
                            <div>
                                <input type="text" class="form-control" required
                                    data-parsley-max="6" placeholder="Max value is 6" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Range Value</label>
                            <div>
                                <input class="form-control" required type="text" min="6"
                                    max="100" placeholder="Number between 6 - 100" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Regular Exp</label>
                            <div>
                                <input type="text" class="form-control" required
                                    data-parsley-pattern="#[A-Fa-f0-9]{6}"
                                    placeholder="Hex. Color" />
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-secondary waves-effect waves-light">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>

                </div> <!-- end card-box -->
            </div> <!-- end col -->

        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->

</div>
@endsection