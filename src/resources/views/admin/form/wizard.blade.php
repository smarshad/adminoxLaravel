@extends('admin.layout.app')
@push('scripts')
<script src="{{asset('backend/libs/stepy/jquery.stepy.js')}}"></script>
<!-- Validation init js-->
<script src="{{asset('backend/js/pages/wizard.init.js')}}"></script>
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
                            <li class="breadcrumb-item active">Form Wizard</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Form Wizard</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <!-- Basic Form Wizard -->
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="header-title"><b>Basic Wizard</b></h4>
                    <p class="sub-header">
                        jQuery Stepy is a plugin based on FormToWizard that generates a customizable wizard.
                    </p>

                    <form id="default-wizard">
                        <fieldset title="1">
                            <legend>Basic Information</legend>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname">First Name</label>
                                        <input type="text" class="form-control" id="firstname" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="username">User Name</label>
                                        <input type="text" class="form-control" id="username" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname">Last Name</label>
                                        <input type="text" class="form-control" id="lastname" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="emailaddress">Email Address</label>
                                        <input type="email" class="form-control" id="emailaddress" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="password1">Confirm Password</label>
                                        <input type="password" class="form-control" id="password1" placeholder="">
                                    </div>
                                </div>
                            </div>

                        </fieldset>

                        <fieldset title="2">
                            <legend>About you</legend>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phonenumber">Phone Number</label>
                                        <input type="text" class="form-control" id="phonenumber" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="aboutme">About Me</label>
                                        <textarea class="form-control" rows="5" id="aboutme"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="currentlocation">Current Location</label>
                                        <input type="text" class="form-control" id="currentlocation" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="username">Freelance</label>
                                        <select class="form-control">
                                            <option>Available</option>
                                            <option>Unavailable</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset title="3">
                            <legend>Social Profiles</legend>

                            <div class="row mt-2">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="mdi mdi-facebook"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Facebook url">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label>Linkdin</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="mdi mdi-linkedin"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Linkdin url">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="mdi mdi-instagram"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Instagram url">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="mdi mdi-twitter"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Twitter url">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Skype</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="mdi mdi-skype"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Skype url">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Pinterest</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="mdi mdi-pinterest"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Pinterest url">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <button type="submit" class="btn btn-primary stepy-finish">Submit</button>
                    </form>

                </div>
            </div>
        </div>

        <!-- End row -->


        <!-- Clickable Wizard -->
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="header-title">Clickable Wizard</h4>
                    <p class="sub-header">
                        jQuery Stepy is a plugin based on FormToWizard that generates a customizable wizard.
                    </p>

                    <form id="wizard-clickable">
                        <fieldset title="1">
                            <legend>Basic Information</legend>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname1">First Name</label>
                                        <input type="text" class="form-control" id="firstname1" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="username1">User Name</label>
                                        <input type="text" class="form-control" id="username1" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="password11">Password</label>
                                        <input type="password" class="form-control" id="password11" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname1">Last Name</label>
                                        <input type="text" class="form-control" id="lastname1" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="emailaddress1">Email Address</label>
                                        <input type="email" class="form-control" id="emailaddress1" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="password2">Confirm Password</label>
                                        <input type="password" class="form-control" id="password2" placeholder="">
                                    </div>
                                </div>
                            </div>

                        </fieldset>

                        <fieldset title="2">
                            <legend>About you</legend>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phonenumber1">Phone Number</label>
                                        <input type="text" class="form-control" id="phonenumber1" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="address1">Address</label>
                                        <input type="text" class="form-control" id="address1" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="aboutme1">About Me</label>
                                        <textarea class="form-control" rows="5" id="aboutme1"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="currentlocation1">Current Location</label>
                                        <input type="text" class="form-control" id="currentlocation1" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="username">Freelance</label>
                                        <select class="form-control">
                                            <option>Available</option>
                                            <option>Unavailable</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset title="3">
                            <legend>Social Profiles</legend>

                            <div class="row mt-3">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="mdi mdi-facebook"></i></span>
                                            <input type="text" class="form-control" placeholder="Facebook url">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Linkdin</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="mdi mdi-linkedin"></i></span>
                                            <input type="text" class="form-control" placeholder="Linkdin url">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="mdi mdi-instagram"></i></span>
                                            <input type="text" class="form-control" placeholder="Instagram url">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="mdi mdi-twitter"></i></span>
                                            <input type="text" class="form-control" placeholder="Twitter url">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Skype</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="mdi mdi-skype"></i></span>
                                            <input type="text" class="form-control" placeholder="Skype url">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Pinterest</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="mdi mdi-pinterest"></i></span>
                                            <input type="text" class="form-control" placeholder="Pinterest url">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <button type="submit" class="btn btn-primary stepy-finish">Submit</button>
                    </form>

                </div>
            </div>
        </div>

        <!-- End row -->

        <!-- Clickable Wizard -->
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="header-title">Wizard Callbacks</h4>
                    <p class="sub-header">
                        jQuery Stepy is a plugin based on FormToWizard that generates a customizable wizard.
                    </p>

                    <form id="wizard-callbacks">
                        <fieldset title="1">
                            <legend>Basic Information</legend>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname2">First Name</label>
                                        <input type="text" class="form-control" id="firstname2" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="username2">User Name</label>
                                        <input type="text" class="form-control" id="username2" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="password3">Password</label>
                                        <input type="password" class="form-control" id="password3" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname2">Last Name</label>
                                        <input type="text" class="form-control" id="lastname2" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="emailaddress2">Email Address</label>
                                        <input type="email" class="form-control" id="emailaddress2" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="password4">Confirm Password</label>
                                        <input type="password" class="form-control" id="password4" placeholder="">
                                    </div>
                                </div>
                            </div>

                        </fieldset>

                        <fieldset title="2">
                            <legend>About you</legend>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phonenumber2">Phone Number</label>
                                        <input type="text" class="form-control" id="phonenumber2" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="address2">Address</label>
                                        <input type="text" class="form-control" id="address2" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="aboutme2">About Me</label>
                                        <textarea class="form-control" rows="5" id="aboutme2"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="currentlocation2">Current Location</label>
                                        <input type="text" class="form-control" id="currentlocation2" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="username">Freelance</label>
                                        <select class="form-control">
                                            <option>Available</option>
                                            <option>Unavailable</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset title="3">
                            <legend>Social Profiles</legend>

                            <div class="row mt-3">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="mdi mdi-facebook"></i></span>
                                            <input type="text" class="form-control" placeholder="Facebook url">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Linkdin</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="mdi mdi-linkedin"></i></span>
                                            <input type="text" class="form-control" placeholder="Linkdin url">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="mdi mdi-instagram"></i></span>
                                            <input type="text" class="form-control" placeholder="Instagram url">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="mdi mdi-twitter"></i></span>
                                            <input type="text" class="form-control" placeholder="Twitter url">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Skype</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="mdi mdi-skype"></i></span>
                                            <input type="text" class="form-control" placeholder="Skype url">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Pinterest</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="mdi mdi-pinterest"></i></span>
                                            <input type="text" class="form-control" placeholder="Pinterest url">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <button type="submit" class="btn btn-primary stepy-finish">Submit</button>
                    </form>

                </div>
            </div>
        </div>
        <!-- End row -->



    </div> <!-- end container-fluid -->

</div>
@endsection