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
                            <li class="breadcrumb-item active">Bootstrap UI</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Bootstrap UI</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="header-title">badges Contextual variations</h4>
                            <p class="sub-header">
                                Add any of the below mentioned modifier classes to change the appearance of a badge.
                            </p>


                            <span class="badge badge-primary">Primary</span>
                            <span class="badge badge-info">Info</span>
                            <span class="badge badge-success">Success</span>
                            <span class="badge badge-blue">Blue</span>
                            <span class="badge badge-warning">Warning</span>
                            <span class="badge badge-danger">Danger</span>

                        </div>

                        <div class="col-md-6 mt-4 mt-md-0">
                            <h4 class="header-title">Badge</h4>
                            <p class="sub-header">
                                Add any of the below mentioned modifier classes to change the appearance of a badge.
                            </p>

                            <span class="badge badge-primary">15</span>
                            <span class="badge badge-success">0</span>
                            <span class="badge badge-info">21</span>
                            <span class="badge badge-dark">33</span>
                            <span class="badge badge-warning">35</span>
                            <span class="badge badge-danger">32</span>
                            <span class="badge badge-purple">51</span>
                            <span class="badge badge-pink">77</span>
                            <span class="badge text-dark">9</span>

                        </div>

                    </div>
                    <!-- end row -->

                    <div class="row mt-4">

                        <!-- Pagination -->
                        <div class="col-md-6 mt-3">
                            <h4 class="header-title">Pagination</h4>
                            <p class="sub-header">
                                Provide pagination links for your site or app with the multi-page pagination component.
                            </p>

                            <div>
                                <h5>Default Pagination</h5>
                                <p class="text-muted">
                                    Simple pagination inspired by Rdio, great for apps and search results.
                                </p>
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>



                                <h5 class="mt-3">Split Pagination</h5>
                                <p class="text-muted">
                                    Links are split to each other by adding a class of <code>
                                        .pagination-split</code>
                                </p>
                                <nav>
                                    <ul class="pagination pagination-split">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>



                                <h5 class="mt-3">Sizing</h5>
                                <p class="text-muted">
                                    Add <code>
                                        .pagination-lg</code>
                                    or <code>
                                        .pagination-sm</code>
                                    for additional sizes.
                                </p>
                                <nav>
                                    <ul class="pagination pagination-lg mb-0">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                                <h5 class="mt-3">Alignment</h5>
                                <p class="text-muted">
                                    Change the alignment of pagination components with flexbox utilities.
                                </p>

                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>

                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                        <!-- end col -->

                    </div>


                    <div class="row mt-3">

                        <!-- Pagination -->
                        <div class="col-12 mt-2">
                            <h4 class="header-title">Breadcrumb</h4>
                            <p class="sub-header">
                                Indicate the current page’s location within a navigational hierarchy.
                            </p>

                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Home</li>
                            </ol>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Library</li>
                            </ol>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Library</a></li>
                                <li class="breadcrumb-item active">Data</li>
                            </ol>
                        </div>
                        <!-- end col -->

                    </div>
                    <!-- end row -->

                </div>
            </div>
        </div>
        <!-- end row -->



    </div> <!-- end container-fluid -->

</div>
@endsection