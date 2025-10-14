@extends('admin.layout.app')
@push('styles')
<link href="{{asset('backend/libs/custombox/custombox.min.css')}}" rel="stylesheet" type="text/css">
@endpush
@push('scripts')
<script src="{{asset('backend/libs/custombox/custombox.min.js')}}"></script>
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">UI Kit</a></li>
                            <li class="breadcrumb-item active">Modals</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Modals</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <!-- Bootstrap Modals -->
        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <h4 class="header-title">Bootstrap Modals (default)</h4>

                    <p class="sub-header">
                        A rendered modal with header, body, and set of actions in the footer.
                    </p>

                    <!-- sample modal content -->
                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
                                </div>
                                <div class="modal-body">
                                    <h5>Text in a modal</h5>
                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                    <hr>
                                    <h5>Overflowing text to show scroll behavior</h5>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <!--  Modal content for the above example -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title mt-0">Center modal</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <p>Cras mattis consectetur purus sit amet fermentum.
                                        Cras justo odio, dapibus ac facilisis in,
                                        egestas eget quam. Morbi leo risus, porta ac
                                        consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque
                                        nisl consectetur et. Vivamus sagittis lacus vel
                                        augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                        Praesent commodo cursus magna, vel scelerisque
                                        nisl consectetur et. Donec sed odio dui. Donec
                                        ullamcorper nulla non metus auctor
                                        fringilla.</p>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <div class="button-list">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Standard Modal</button>
                        <!-- Large modal -->
                        <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
                        <!-- Small modal -->
                        <button type="button" class="btn btn-purple waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>
                        <!-- Center modal -->
                        <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">Center modal</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Custom Modals -->
        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <h4 class="header-title">Custom Modals</h4>

                    <p class="sub-header">
                        Examples of custom modals.
                    </p>

                    <!-- sample modal content -->

                    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title">Modal Content is Responsive</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Name</label>
                                                <input type="text" class="form-control" id="field-1" placeholder="John">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Surname</label>
                                                <input type="text" class="form-control" id="field-2" placeholder="Doe">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="field-3" class="control-label">Address</label>
                                                <input type="text" class="form-control" id="field-3" placeholder="Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="field-4" class="control-label">City</label>
                                                <input type="text" class="form-control" id="field-4" placeholder="Boston">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="field-5" class="control-label">Country</label>
                                                <input type="text" class="form-control" id="field-5" placeholder="United States">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="field-6" class="control-label">Zip</label>
                                                <input type="text" class="form-control" id="field-6" placeholder="123456">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group no-margin">
                                                <label for="field-7" class="control-label">Personal Info</label>
                                                <textarea class="form-control" id="field-7" placeholder="Write something about yourself"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.modal -->


                    <div id="accordion-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content p-0">
                                <div id="accordion">
                                    <div class="card mb-0">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="m-0">
                                                <a href="#collapseOne" class="text-dark" data-toggle="collapse"
                                                    aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Collapsible Group Item #1
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse show"
                                            aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                accusamus terry richardson ad squid. 3 wolf moon officia
                                                aute, non cupidatat skateboard dolor brunch. Food truck
                                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                sunt aliqua put a bird on it squid single-origin coffee
                                                nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt
                                                sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                Leggings occaecat craft beer farm-to-table, raw denim
                                                aesthetic synth nesciunt you probably haven't heard of them
                                                accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-0">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="m-0">
                                                <a href="#collapseTwo" class="text-dark collapsed" data-toggle="collapse"
                                                    aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    Collapsible Group Item #2
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                accusamus terry richardson ad squid. 3 wolf moon officia
                                                aute, non cupidatat skateboard dolor brunch. Food truck
                                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                sunt aliqua put a bird on it squid single-origin coffee
                                                nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt
                                                sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                Leggings occaecat craft beer farm-to-table, raw denim
                                                aesthetic synth nesciunt you probably haven't heard of them
                                                accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-0">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="m-0">
                                                <a href="#collapseThree" class="text-dark collapsed" data-toggle="collapse"
                                                    aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                    Collapsible Group Item #3
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse"
                                            aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                accusamus terry richardson ad squid. 3 wolf moon officia
                                                aute, non cupidatat skateboard dolor brunch. Food truck
                                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                sunt aliqua put a bird on it squid single-origin coffee
                                                nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt
                                                sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                Leggings occaecat craft beer farm-to-table, raw denim
                                                aesthetic synth nesciunt you probably haven't heard of them
                                                accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <div class="button-list">
                        <!-- Responsive modal -->
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Responsive Modal</button>
                        <!-- Accordion modal -->
                        <button type="button" class="btn btn-purple waves-effect waves-light" data-toggle="modal" data-target="#accordion-modal">Accordion in Modal</button>
                    </div>
                </div>
            </div><!-- end col -->
        </div>
        <!-- End row -->



        <!-- Custom Modals -->
        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <h4 class="header-title">Modal with Pages</h4>

                    <p class="sub-header">
                        Examples of custom modals.
                    </p>

                    <!-- Signup modal content -->
                    <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-body p-3">
                                    <div class="text-center mb-3">
                                        <a href="index.html">
                                            <img src="{{asset('backend/images/logo-dark.png')}}" alt="" height="30">
                                        </a>
                                    </div>


                                    <form class="form-horizontal" action="#">

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="username">Name</label>
                                                <input class="form-control" type="email" id="username" required="" placeholder="Michael Zenaty">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="emailaddress">Email address</label>
                                                <input class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox11" type="checkbox" checked>
                                                    <label for="checkbox11">
                                                        I accept <a href="#">Terms and Conditions</a>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row account-btn text-center mb-0">
                                            <div class="col-12">
                                                <button class="btn width-lg btn-rounded btn-lg btn-primary waves-effect waves-light" type="submit">Sign up Free</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->


                    <!-- Signup modal content -->
                    <div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-body p-3">
                                    <div class="text-center mb-3">
                                        <a href="index.html">
                                            <img src="{{asset('backend/images/logo-dark.png')}}" alt="" height="30">
                                        </a>
                                    </div>

                                    <form class="form-horizontal" action="#">

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="emailaddress1">Email address</label>
                                                <input class="form-control" type="email" id="emailaddress1" required="" placeholder="john@deo.com">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <a href="page-recoverpw.html" class="text-muted float-right font-12">Forgot your password?</a>
                                                <label for="password1">Password</label>
                                                <input class="form-control" type="password" required="" id="password1" placeholder="Enter your password">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox12" type="checkbox" checked>
                                                    <label for="checkbox12">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group account-btn row text-center mb-0">
                                            <div class="col-12">
                                                <button class="btn width-lg btn-rounded btn-lg btn-primary waves-effect waves-light" type="submit">Sign In</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <div class="button-list">
                        <!-- Custom width modal -->
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#signup-modal">Sign Up Modal</button>
                        <!-- Full width modal -->
                        <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#login-modal">Log in Modal</button>
                    </div>
                </div>
            </div><!-- end col -->
        </div>
        <!-- End row -->



        <!-- Custom Modals -->
        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <h4 class="header-title">Modals Examples (Animations)</h4>

                    <p class="sub-header">Use<code>data-animation="xxx" data-plugin="custommodal"
                            data-overlaySpeed="xxx" data-overlayColor="#xxx"</code>. </p>

                    <div class="button-list">
                        <a href="#custom-modal" class="btn btn-secondary waves-effect width-md" data-animation="fadein" data-plugin="custommodal"
                            data-overlaySpeed="200" data-overlayColor="#36404a">Fade in</a>

                        <a href="#custom-modal" class="btn btn-secondary waves-effect width-md" data-animation="slide" data-plugin="custommodal"
                            data-overlaySpeed="200" data-overlayColor="#36404a">Slide</a>

                        <a href="#custom-modal" class="btn btn-secondary waves-effect width-md" data-animation="newspaper" data-plugin="custommodal"
                            data-overlaySpeed="200" data-overlayColor="#36404a">Newspaper</a>

                        <a href="#custom-modal" class="btn btn-secondary waves-effect width-md" data-animation="fall" data-plugin="custommodal"
                            data-overlaySpeed="100" data-overlayColor="#36404a">Fall</a>

                        <a href="#custom-modal" class="btn btn-secondary waves-effect width-md" data-animation="sidefall" data-plugin="custommodal"
                            data-overlaySpeed="100" data-overlayColor="#36404a">Side Fall</a>

                        <a href="#custom-modal" class="btn btn-secondary waves-effect width-md" data-animation="blur" data-plugin="custommodal"
                            data-overlaySpeed="100" data-overlayColor="#36404a">Blur</a>

                        <a href="#custom-modal" class="btn btn-secondary waves-effect width-md" data-animation="flip" data-plugin="custommodal"
                            data-overlaySpeed="100" data-overlayColor="#36404a">Flip</a>

                        <a href="#custom-modal" class="btn btn-secondary waves-effect width-md" data-animation="sign" data-plugin="custommodal"
                            data-overlaySpeed="100" data-overlayColor="#36404a">Sign</a>

                        <a href="#custom-modal" class="btn btn-secondary waves-effect width-md" data-animation="superscaled" data-plugin="custommodal"
                            data-overlaySpeed="100" data-overlayColor="#36404a">Super Scaled</a>

                        <a href="#custom-modal" class="btn btn-secondary waves-effect width-md" data-animation="slit" data-plugin="custommodal"
                            data-overlaySpeed="100" data-overlayColor="#36404a">Slit</a>

                        <a href="#custom-modal" class="btn btn-secondary waves-effect width-md" data-animation="rotate" data-plugin="custommodal"
                            data-overlaySpeed="100" data-overlayColor="#36404a">Rotate</a>

                        <a href="#custom-modal" class="btn btn-secondary waves-effect width-md" data-animation="letmein" data-plugin="custommodal"
                            data-overlaySpeed="100" data-overlayColor="#36404a">Letmein</a>

                        <a href="#custom-modal" class="btn btn-secondary waves-effect width-md" data-animation="makeway" data-plugin="custommodal"
                            data-overlaySpeed="100" data-overlayColor="#36404a">Makeway</a>

                        <a href="#custom-modal" class="btn btn-secondary waves-effect width-md" data-animation="slip" data-plugin="custommodal"
                            data-overlaySpeed="100" data-overlayColor="#36404a">Slip</a>

                        <a href="#custom-modal" class="btn btn-secondary waves-effect width-md" data-animation="corner" data-plugin="custommodal"
                            data-overlaySpeed="100" data-overlayColor="#36404a">Corner</a>

                        <a href="#custom-modal" class="btn btn-secondary waves-effect width-md" data-animation="slidetogether" data-plugin="custommodal"
                            data-overlaySpeed="100" data-overlayColor="#36404a">Slide together</a>

                        <a href="#custom-modal" class="btn btn-secondary waves-effect width-md" data-animation="scale" data-plugin="custommodal"
                            data-overlaySpeed="100" data-overlayColor="#36404a">Scale</a>

                        <a href="#custom-modal" class="btn btn-secondary waves-effect width-md" data-animation="door" data-plugin="custommodal"
                            data-overlaySpeed="100" data-overlayColor="#36404a">Door</a>

                        <a href="#custom-modal" class="btn btn-secondary waves-effect width-md" data-animation="push" data-plugin="custommodal"
                            data-overlaySpeed="100" data-overlayColor="#36404a">Push</a>

                        <a href="#custom-modal" class="btn btn-secondary waves-effect width-md" data-animation="contentscale" data-plugin="custommodal"
                            data-overlaySpeed="100" data-overlayColor="#36404a">Content Scale</a>

                        <a href="#custom-modal" class="btn btn-secondary waves-effect width-md" data-animation="swell" data-plugin="custommodal"
                            data-overlaySpeed="100" data-overlayColor="#36404a">Swell</a>

                        <a href="#custom-modal" class="btn btn-secondary waves-effect width-md" data-animation="rotatedown" data-plugin="custommodal"
                            data-overlaySpeed="100" data-overlayColor="#36404a">Rotate Down</a>

                        <a href="#custom-modal" class="btn btn-secondary waves-effect width-md" data-animation="flash" data-plugin="custommodal"
                            data-overlaySpeed="100" data-overlayColor="#36404a">Flash</a>
                    </div>
                </div>
            </div><!-- end col -->
        </div>
        <!-- End row -->

    </div> <!-- end container-fluid -->

</div>
@endsection