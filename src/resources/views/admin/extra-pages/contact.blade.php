@extends('admin.layout.app')
<!-- Begin page -->
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Extras</a></li>
                            <li class="breadcrumb-item active">Contact Us</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Contact Us</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="contact-map">
                                <iframe
                                    src="https://www.google.com/maps/embed/v1/place?q=New+York+University&key=AIzaSyBSFRN6WWGYwmFi498qXXsD2UwkbmD74v4"
                                    style="width: 100%; height: 360px; border:0; margin: 0; overflow:hidden;"></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center mt-4 mb-3">
                        <div class="col-md-10">
                            <div class="row mb-4">
                                <div class="col-sm-12">
                                    <h4 class="title">Send us a Message</h4>
                                    <p class="text-muted sub-title">The clean and well commented code allows
                                        easy customization of the theme.It's <br> designed for describing
                                        your app, agency or business.</p>
                                </div>
                            </div>

                            <div class="row">

                                <!-- Contact form -->
                                <div class="col-sm-6">
                                    <form name="ajax-form" action="#" method="post" class="contact-form"
                                        data-parsley-validate="" novalidate="">

                                        <div class="form-group">
                                            <input class="form-control" id="name2" name="name"
                                                placeholder="Your name" type="text" value="" required="">
                                        </div>
                                        <!-- /Form-name -->

                                        <div class="form-group">
                                            <input class="form-control" id="email2" name="email"
                                                type="email" placeholder="Your email" value="" required="">
                                        </div>
                                        <!-- /Form-email -->

                                        <div class="form-group">
                                            <textarea class="form-control" id="message2" name="message"
                                                rows="5" placeholder="Message" required=""></textarea>
                                        </div>
                                        <!-- /Form Msg -->

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="">
                                                    <button type="submit"
                                                        class="btn btn-primary waves-effect waves-light"
                                                        id="send">Submit</button>
                                                </div>
                                            </div> <!-- /col -->
                                        </div> <!-- /row -->

                                    </form> <!-- /form -->
                                </div> <!-- end col -->

                                <div class="col-sm-4 offset-sm-1">
                                    <div class="contact-box">

                                        <div class="contact-detail mb-4">
                                            <i class="mdi mdi-tooltip-account float-left font-20 mr-2"></i>
                                            <address class="overflow-hidden">
                                                795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107
                                            </address>
                                        </div>

                                        <div class="contact-detail mb-4">
                                            <i
                                                class=" mdi mdi-cellphone-iphone float-left font-20 mr-2"></i>
                                            <p class="overflow-hidden pt-1">
                                                (120) 456-789-123
                                            </p>
                                        </div>

                                        <div class="contact-detail">
                                            <i class="mdi mdi-email float-left font-20 mr-2"></i>
                                            <p class="overflow-hidden pt-1">
                                                <a href="">support@yourmail.com</a>
                                            </p>
                                        </div>

                                    </div>
                                </div> <!-- end col -->
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- end container-fluid -->
</div>
@endsection