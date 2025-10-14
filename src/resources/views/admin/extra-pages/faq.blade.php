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
                            <li class="breadcrumb-item active">Faq</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Faq</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center mt-3">
                                <h3>Frequently Asked Questions</h3>
                                <p class="text-muted mt-3 mb-2"> Nisi praesentium similique totam odio
                                    obcaecati, reprehenderit,
                                    dignissimos rem temporibus ea inventore alias!<br> Beatae animi nemo ea
                                    tempora, temporibus laborum facilis ut!</p>

                                <button type="button"
                                    class="btn btn-primary waves-effect waves-light mt-2 mr-1">Email us your
                                    question</button>
                                <button type="button"
                                    class="btn btn-info waves-effect waves-light mt-2">Send us a
                                    tweet</button>

                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->


                    <div class="row mt-4">
                        <div class="col-lg-4">
                            <div class="faq-box text-center p-4">
                                <img src="{{asset('backend/images/faq_icons/shield-1.png')}}" alt="icon"
                                    class="img-fluid avatar-md">
                                <h4 class="mt-4">What is Lorem Ipsum?</h4>
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                    text ever since the 1500s.</p>
                            </div>
                        </div>
                        <!--/col-sm-4 -->

                        <div class="col-lg-4">
                            <div class="faq-box text-center p-4">
                                <img src="{{asset('backend/images/faq_icons/envelope.png')}}" alt="icon"
                                    class="img-fluid avatar-md">
                                <h4 class="mt-4">Is safe use Lorem Ipsum?</h4>
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                    text ever since the 1500s.</p>
                            </div>
                        </div>
                        <!--/col-sm-4 -->

                        <div class="col-lg-4">
                            <div class="faq-box text-center p-4">
                                <img src="{{asset('backend/images/faq_icons/edit.png')}}" alt="icon"
                                    class="img-fluid avatar-md">
                                <h4 class="mt-4">Why use Lorem Ipsum?</h4>
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                    text ever since the 1500s.</p>
                            </div>
                        </div>
                        <!--/col-sm-4 -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="faq-box text-center p-4">
                                <img src="{{asset('backend/images/faq_icons/files.png')}}" alt="icon"
                                    class="img-fluid avatar-md">
                                <h4 class="mt-4">When can be used?</h4>
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                    text ever since the 1500s.</p>
                            </div>
                        </div>
                        <!--/col-sm-4 -->

                        <div class="col-lg-4">
                            <div class="faq-box text-center p-4">
                                <img src="{{asset('backend/images/faq_icons/open-book-1.png')}}" alt="icon"
                                    class="img-fluid avatar-md">
                                <h4 class="mt-4">How many variations exist?</h4>
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                    text ever since the 1500s.</p>
                            </div>
                        </div>
                        <!--/col-sm-4 -->

                        <div class="col-lg-4">
                            <div class="faq-box text-center p-4">
                                <img src="{{asset('backend/images/faq_icons/tag.png')}}" alt="icon"
                                    class="img-fluid avatar-md">
                                <h4 class="mt-4">License &amp; Copyright</h4>
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                    text ever since the 1500s.</p>
                            </div>
                        </div>
                        <!--/col-sm-4 -->
                    </div>
                    <!-- end row -->

                    <p class="text-right mb-0"><small><i>Icon used by <a
                                    href="http://www.flaticon.com/packs/user-interface-7"
                                    target="_blank">flaticon</a> </i></small></p>

                </div>
            </div><!-- end col -->
        </div>

    </div> <!-- end container-fluid -->

</div>
@endsection