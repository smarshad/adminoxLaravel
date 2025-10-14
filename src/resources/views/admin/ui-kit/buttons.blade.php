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
                            <li class="breadcrumb-item active">Buttons</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Buttons</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title ">Default Buttons</h4>
                    <p class="sub-header">Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>

                    <div class="button-list">
                        <button type="button" class="btn btn-primary waves-effect width-md waves-light">Primary</button>
                        <button type="button" class="btn btn-info waves-effect width-md waves-light">Info</button>
                        <button type="button" class="btn btn-success waves-effect width-md waves-light">Success</button>
                        <button type="button" class="btn btn-purple waves-effect width-md waves-light">Purple</button>
                        <button type="button" class="btn btn-warning waves-effect width-md waves-light">Warning</button>
                        <button type="button" class="btn btn-danger waves-effect width-md waves-light">Danger</button>
                        <button type="button" class="btn btn-pink waves-effect width-md waves-light">Pink</button>
                        <button type="button" class="btn btn-secondary waves-effect width-md">Secondary</button>
                        <button type="button" class="btn btn-dark waves-effect width-md waves-light">Dark</button>
                    </div>

                    <h4 class="header-title mt-4">Button Bordered</h4>
                    <p class="sub-header">Use a classes <code>.btn-outline-**</code> to quickly create a bordered buttons.</p>

                    <div class="button-list">
                        <button type="button" class="btn btn-outline-primary waves-effect width-md waves-light">Primary</button>
                        <button type="button" class="btn btn-outline-success waves-effect width-md waves-light">Success</button>
                        <button type="button" class="btn btn-outline-info waves-effect width-md waves-light">Info</button>
                        <button type="button" class="btn btn-outline-warning waves-effect width-md waves-light">Warning</button>
                        <button type="button" class="btn btn-outline-danger waves-effect width-md waves-light">Danger</button>
                        <button type="button" class="btn btn-outline-purple waves-effect width-md waves-light">Purple</button>
                        <button type="button" class="btn btn-outline-pink waves-effect width-md waves-light">Pink</button>
                        <button type="button" class="btn btn-outline-secondary waves-effect width-md">Secondary</button>
                        <button type="button" class="btn btn-outline-dark waves-effect width-md waves-light">Dark</button>

                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Button-Rounded</h4>
                    <p class="sub-header">Add <code>.btn-rounded</code> to default button to get rounded corners.</p>

                    <div class="button-list">
                        <button type="button" class="btn btn-primary btn-rounded width-md waves-effect waves-light">Primary</button>
                        <button type="button" class="btn btn-info btn-rounded width-md waves-effect waves-light">Info</button>
                        <button type="button" class="btn btn-success btn-rounded width-md waves-effect waves-light">Success</button>
                        <button type="button" class="btn btn-purple btn-rounded width-md waves-effect waves-light">Purple</button>
                        <button type="button" class="btn btn-warning btn-rounded width-md waves-effect waves-light">Warning</button>
                        <button type="button" class="btn btn-danger btn-rounded width-md waves-effect waves-light">Danger</button>
                        <button type="button" class="btn btn-pink btn-rounded width-md waves-effect waves-light">Pink</button>
                        <button type="button" class="btn btn-secondary btn-rounded width-md waves-effect waves-light">Secondary</button>
                        <button type="button" class="btn btn-dark btn-rounded width-md waves-effect waves-light">Dark</button>
                    </div>

                    <h4 class="header-title mt-4">Button Bordered Rounded</h4>
                    <p class="sub-header">Use a classes <code>.btn-outline-**</code> to quickly create a bordered buttons.</p>

                    <div class="button-list">

                        <button type="button" class="btn btn-outline-primary btn-rounded waves-effect width-md waves-light">Primary</button>
                        <button type="button" class="btn btn-outline-success btn-rounded waves-effect width-md waves-light">Success</button>
                        <button type="button" class="btn btn-outline-info btn-rounded waves-effect width-md waves-light">Info</button>
                        <button type="button" class="btn btn-outline-warning btn-rounded waves-effect width-md waves-light">Warning</button>
                        <button type="button" class="btn btn-outline-danger btn-rounded waves-effect width-md waves-light">Danger</button>
                        <button type="button" class="btn btn-outline-purple btn-rounded waves-effect width-md waves-light">Purple</button>
                        <button type="button" class="btn btn-outline-pink btn-rounded waves-effect width-md waves-light">Pink</button>
                        <button type="button" class="btn btn-outline-secondary btn-rounded waves-effect width-md">Default</button>
                        <button type="button" class="btn btn-outline-dark btn-rounded waves-effect width-md waves-light">Dark</button>

                    </div>

                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-4">
                <div class="card-box">
                    <h4 class="header-title">Button-Width</h4>
                    <p class="sub-header">
                        Create buttons with minimum width by adding add <code>.width-xs</code>, <code>.width-sm</code>, <code>.width-md</code> or <code>.width-lg</code>.
                    </p>

                    <div class="button-list">
                        <button type="button" class="btn btn-secondary waves-effect width-xs">Xs</button>
                        <button type="button" class="btn btn-secondary waves-effect width-sm">Small</button>
                        <button type="button" class="btn btn-secondary waves-effect width-md">Middle</button>
                        <button type="button" class="btn btn-secondary waves-effect width-lg">Large</button>
                    </div>
                    <h4 class="header-title mt-4">Button-Sizes</h4>
                    <p class="sub-header">
                        Add <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code> for additional sizes.
                    </p>

                    <div class="button-list">
                        <button type="button" class="btn btn-primary waves-effect waves-light btn-lg">Large</button>
                        <button type="button" class="btn btn-pink waves-effect waves-light btn-md">Medium</button>
                        <button type="button" class="btn btn-info waves-effect waves-light">Normal</button>
                        <button type="button" class="btn btn-success waves-effect waves-light btn-sm">Small</button>
                        <button type="button" class="btn btn-purple waves-effect waves-light btn-xs">Extra small</button>
                    </div>

                    <h4 class="header-title mt-4">Button-Disabled</h4>
                    <p class="sub-header">
                        Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.
                    </p>

                    <div class="button-list">
                        <button type="button" class="btn btn-info" disabled>Info</button>
                        <button type="button" class="btn btn-purple" disabled>Purple</button>
                        <button type="button" class="btn btn-pink" disabled>Pink</button>
                        <button type="button" class="btn btn-dark" disabled>Dark</button>
                    </div>

                </div>
            </div> <!-- end col -->

            <div class="col-lg-4">
                <div class="card-box">

                    <h4 class="text-dark  header-title">Icon Button</h4>
                    <p class="sub-header">
                        Icon only button.
                    </p>

                    <div class="button-list">
                        <button type="button" class="btn btn-icon waves-effect btn-secondary"> <i class="far fa-heart"></i> </button>
                        <button type="button" class="btn btn-icon waves-effect waves-light btn-danger"> <i class="fas fa-times"></i> </button>
                        <button type="button" class="btn btn-icon waves-effect waves-light btn-purple"> <i class="fa fa-music"></i> </button>
                        <button type="button" class="btn btn-icon waves-effect waves-light btn-primary"> <i class="fa fa-star"></i> </button>
                        <button type="button" class="btn btn-icon waves-effect waves-light btn-success"> <i class="far fa-thumbs-up"></i> </button>
                        <button type="button" class="btn btn-icon waves-effect waves-light btn-info"> <i class="far fa-keyboard"></i> </button>
                        <button type="button" class="btn btn-icon waves-effect waves-light btn-warning"> <i class="fa fa-wrench"></i> </button>
                        <br>
                        <button type="button" class="btn btn-secondary waves-effect"> <i class="fa fa-heart mr-1"></i> <span>Like</span> </button>
                        <button type="button" class="btn btn-warning waves-effect waves-light"> <i class="fa fa-rocket mr-1"></i> <span>Launch</span> </button>
                        <button type="button" class="btn btn-info waves-effect waves-light"> <i class="fa fa-cloud mr-1"></i> <span>Cloud Hosting</span> </button>
                        <button type="button" class="btn btn-pink waves-effect waves-light"> <span>Book Flight</span> <i class="fa fa-plane ml-1"></i> </button>
                        <button type="button" class="btn btn-purple waves-effect waves-light"> <span>Donate Money</span> <i class="far fa-money-bill-alt ml-1"></i> </button>
                    </div>

                    <h4 class="text-dark  header-title mt-4">Block Button</h4>
                    <p class="sub-header">
                        Create block level buttons,with by adding add <code>.btn-block</code>.
                    </p>

                    <div class="button-list">
                        <button type="button" class="btn btn-block btn-primary waves-effect waves-light">Block Button</button>
                        <button type="button" class="btn btn-block btn-sm btn-info waves-effect waves-light">Block Button</button>
                        <button type="button" class="btn btn-block btn-xs btn-success waves-effect waves-light">Block Button</button>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="card-box">

                    <h4 class="text-dark  header-title">Button Group</h4>
                    <p class="sub-header">
                        Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.
                    </p>


                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-secondary waves-effect">Left</button>
                        <button type="button" class="btn btn-secondary waves-effect">Middle</button>
                        <button type="button" class="btn btn-secondary waves-effect">Right</button>
                    </div>
                    <br>
                    <div class="btn-group btn-group-justified text-white mb-2">
                        <a class="btn btn-primary waves-effect waves-light" role="button">Left</a>
                        <a class="btn btn-warning waves-effect waves-light" role="button">Middle</a>
                        <a class="btn btn-danger waves-effect waves-light" role="button">Right</a>
                    </div>
                    <br>
                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-secondary waves-effect">1</button>
                        <button type="button" class="btn btn-secondary waves-effect">2</button>
                        <button type="button" class="btn btn-dark waves-effect waves-light">3</button>
                        <button type="button" class="btn btn-secondary waves-effect">4</button>
                    </div>
                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-secondary waves-effect">5</button>
                        <button type="button" class="btn btn-dark waves-effect waves-light">6</button>
                        <button type="button" class="btn btn-secondary waves-effect">7</button>
                    </div>
                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-secondary waves-effect">8</button>
                    </div>
                    <br>
                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-secondary waves-effect">1</button>
                        <button type="button" class="btn btn-primary waves-effect waves-light">2</button>
                        <button type="button" class="btn btn-secondary waves-effect">3</button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"> Dropdown <i class="mdi mdi-chevron-down"></i> </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dropdown link</a>
                                <a class="dropdown-item" href="#">Dropdown link</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="btn-group-vertical mb-2">
                                <button type="button" class="btn btn-secondary waves-effect">Top</button>
                                <button type="button" class="btn btn-secondary waves-effect">Middle</button>
                                <button type="button" class="btn btn-secondary waves-effect">Bottom</button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="btn-group-vertical mb-2">
                                <button type="button" class="btn btn-secondary waves-effect">Button 1</button>
                                <button type="button" class="btn btn-secondary waves-effect">Button 2</button>
                                <button type="button" class="btn btn-secondary dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"> Button 3 <i class="mdi mdi-chevron-down"></i> </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end row -->



        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title"><b>Social buttons</b></h4>
                    <p class="sub-header">
                        Use class <code>.btn-@yoursocial</code> to the parent.
                    </p>

                    <div class="button-list">
                        <button type="button" class="btn btn-facebook waves-effect waves-light">
                            <i class="fab fa-facebook-f"></i>
                        </button>

                        <button type="button" class="btn btn-twitter waves-effect waves-light">
                            <i class="fab fa-twitter"></i>
                        </button>

                        <button type="button" class="btn btn-linkedin waves-effect waves-light">
                            <i class="fab fa-linkedin-in"></i>
                        </button>

                        <button type="button" class="btn btn-dribbble waves-effect waves-light">
                            <i class="fab fa-dribbble"></i>
                        </button>

                        <button type="button" class="btn btn-googleplus waves-effect waves-light">
                            <i class="fab fa-google-plus-g"></i>
                        </button>

                        <button type="button" class="btn btn-instagram waves-effect waves-light">
                            <i class="fab fa-instagram"></i>
                        </button>

                        <button type="button" class="btn btn-pinterest waves-effect waves-light">
                            <i class="fab fa-pinterest"></i>
                        </button>

                        <button type="button" class="btn btn-dropbox waves-effect waves-light">
                            <i class="fab fa-dropbox"></i>
                        </button>

                        <button type="button" class="btn btn-flickr waves-effect waves-light">
                            <i class="fab fa-flickr"></i>
                        </button>

                        <button type="button" class="btn btn-tumblr waves-effect waves-light">
                            <i class="fab fa-tumblr"></i>
                        </button>

                        <button type="button" class="btn btn-skype waves-effect waves-light">
                            <i class="fab fa-skype"></i>
                        </button>

                        <button type="button" class="btn btn-youtube waves-effect waves-light">
                            <i class="fab fa-youtube"></i>
                        </button>

                        <button type="button" class="btn btn-github waves-effect waves-light">
                            <i class="fab fa-github"></i>
                        </button>
                        <br>


                        <button type="button" class="btn btn-facebook waves-effect waves-light">
                            <i class="fab fa-facebook-f mr-1"></i> Facebook
                        </button>

                        <button type="button" class="btn btn-twitter waves-effect waves-light">
                            <i class="fab fa-twitter mr-1"></i> Twitter
                        </button>

                        <button type="button" class="btn btn-linkedin waves-effect waves-light">
                            <i class="fab fa-linkedin-in mr-1"></i> Linkedin
                        </button>

                        <button type="button" class="btn btn-dribbble waves-effect waves-light">
                            <i class="fab fa-dribbble mr-1"></i> Dribbble
                        </button>

                        <button type="button" class="btn btn-googleplus waves-effect waves-light">
                            <i class="fab fa-google-plus-g mr-1"></i> Google+
                        </button>

                        <button type="button" class="btn btn-instagram waves-effect waves-light">
                            <i class="fab fa-instagram mr-1"></i> Instagram
                        </button>

                        <button type="button" class="btn btn-pinterest waves-effect waves-light">
                            <i class="fab fa-pinterest mr-1"></i> Pinterest
                        </button>

                        <button type="button" class="btn btn-dropbox waves-effect waves-light">
                            <i class="fab fa-dropbox mr-1"></i> Dropbox
                        </button>

                        <button type="button" class="btn btn-flickr waves-effect waves-light">
                            <i class="fab fa-flickr mr-1"></i> Flickr
                        </button>

                        <button type="button" class="btn btn-tumblr waves-effect waves-light">
                            <i class="fab fa-tumblr mr-1"></i> Tumblr
                        </button>

                        <button type="button" class="btn btn-skype waves-effect waves-light">
                            <i class="fab fa-skype mr-1"></i> Skype
                        </button>

                        <button type="button" class="btn btn-youtube waves-effect waves-light">
                            <i class="fab fa-youtube mr-1"></i> Youtube
                        </button>

                        <button type="button" class="btn btn-github waves-effect waves-light">
                            <i class="fab fa-github mr-1"></i> Github
                        </button>
                    </div>

                </div>
            </div><!-- end col -->

        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->

</div>
@endsection