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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">UI Kit</a></li>
                            <li class="breadcrumb-item active">Images</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Images</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="header-title">Images shapes</h4>
                            <p class="sub-header">
                                Add classes to an <code>&lt;img&gt;</code> element to easily style
                                images in any project.
                            </p>

                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="{{asset('backend/images/small/img-1.jpg')}}" alt="image"
                                        class="img-fluid rounded" width="200" />
                                    <p class="mt-3 mb-0">
                                        <code>.rounded</code>
                                    </p>
                                </div>

                                <div class="col-sm-4">
                                    <img src="{{asset('backend/images/users/avatar-6.jpg')}}" alt="image"
                                        class="img-fluid rounded-circle" width="120" />
                                    <p class="mt-3 mb-0">
                                        <code>.rounded-circle</code>
                                    </p>
                                </div>

                                <div class="col-sm-4">
                                    <img src="{{asset('backend/images/small/img-3.jpg')}}" alt="image"
                                        class="img-fluid img-thumbnail" width="200" />
                                    <p class="mt-3 mb-0">
                                        <code>.img-thumbnail</code>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5 mt-4 mt-md-0">
                            <h4 class="header-title"><b>Image sizes</b></h4>
                            <p class="sub-header">
                                Add classes to an <code>&lt;img&gt;</code> element to easily style
                                images in any project.
                            </p>

                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="{{asset('backend/images/users/avatar-5.jpg')}}" alt="image"
                                        class="img-fluid avatar-lg" />
                                    <p class="mt-3">
                                        <code>.thumb-lg</code>
                                    </p>
                                </div>

                                <div class="col-sm-4">
                                    <img src="{{asset('backend/images/users/avatar-3.jpg')}}" alt="image"
                                        class="img-fluid avatar-md" />
                                    <p class="mt-3">
                                        <code>.thumb-md</code>
                                    </p>
                                </div>

                                <div class="col-sm-4">
                                    <img src="{{asset('backend/images/users/avatar-4.jpg')}}" alt="image"
                                        class="img-fluid avatar-sm" />
                                    <p class="mt-3">
                                        <code>.thumb-sm</code>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- ===== MEDIA ==== -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title">Default media object</h4>
                    <p class="sub-header">The default media displays a media object
                        (images, video, audio) to the left or right of a content block.</p>
                    <div>
                        <div class="media mb-3">
                            <img class="d-flex mr-3 rounded-circle" src="{{asset('backend/images/users/avatar-1.jpg')}}" alt="Generic placeholder image" height="64">
                            <div class="media-body">
                                <h5 class="mt-0">Media heading</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>


                        <div class="media mb-3">
                            <img class="d-flex mr-3 rounded-circle" src="{{asset('backend/images/users/avatar-2.jpg')}}" alt="Generic placeholder image" height="64">
                            <div class="media-body">
                                <h5 class="mt-0">Media heading</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                                <div class="media mt-3 mb-3">
                                    <a class="d-flex pr-3" href="#">
                                        <img src="{{asset('backend/images/users/avatar-3.jpg')}}" alt="Generic placeholder image" height="64" class="rounded-circle">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="mt-0">Media heading</h5>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="media">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">Media object</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                            <img class="d-flex ml-3 rounded-circle" src="{{asset('backend/images/users/avatar-4.jpg')}}" alt="Generic placeholder image" height="64">
                        </div>

                    </div>
                </div>
            </div>
        </div> <!-- end row -->

        <!-- Media alignment -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title">Media alignment</h4>
                    <p class="sub-header">The images or other media can be aligned top,
                        middle, or bottom. The default is top aligned.</p>

                    <div>
                        <div class="media mb-3">
                            <img class="d-flex align-self-start mr-3" src="{{asset('backend/images/users/avatar-5.jpg')}}" alt="Generic placeholder image" height="64">
                            <div class="media-body">
                                <h5 class="mt-0">Top-aligned media</h5>
                                <p class="mb-1">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                            </div>
                        </div>

                        <div class="media mb-3">
                            <img class="d-flex align-self-center mr-3" src="{{asset('backend/images/users/avatar-6.jpg')}}" alt="Generic placeholder image" height="64">
                            <div class="media-body">
                                <h5 class="mt-0">Center-aligned media</h5>
                                <p class="mb-1">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                        </div>

                        <div class="media">
                            <img class="d-flex align-self-end mr-3" src="{{asset('backend/images/users/avatar-7.jpg')}}" alt="Generic placeholder image" height="64">
                            <div class="media-body">
                                <h5 class="mt-0">Bottom-aligned media</h5>
                                <p class="mb-1">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div> <!-- end row -->

    </div> <!-- end container-fluid -->

</div>
@endsection