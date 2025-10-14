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
                            <li class="breadcrumb-item active">Progress Bars</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Progress Bars</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">

                    <div class="row justify-content-around">
                        <div class="col-md-5">
                            <h4 class="header-title">Basic example</h4>
                            <p class="sub-header">
                                Default progress bar.
                            </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                        </div>

                        <div class="col-md-5 mt-4 mt-md-0">
                            <h4 class="header-title">Contextual alternatives</h4>
                            <p class="sub-header">
                                Progress bars use some of the same button and alert classes for consistent styles.
                            </p>

                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row justify-content-around mt-4">
                        <div class="col-md-5">
                            <h4 class="header-title">Striped example</h4>
                            <p class="sub-header">
                                Uses a gradient to create a striped effect.
                            </p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mb-0">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                            </div>
                        </div>

                        <div class="col-md-5 mt-4 mt-md-0">
                            <h4 class="header-title">Size example</h4>
                            <p class="sub-header">
                                Your awesome text goes here.
                            </p>
                            <div class="progress" style="height: 2px;">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--- end row -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">

                    <div class="row justify-content-around">
                        <div class="col-md-5">
                            <h4 class="header-title">Progressbar Vertical</h4>
                            <p class="sub-header">
                                Use class <code>.progress-vertical</code>.
                            </p>
                            <div class="progress progress-sm progress-vertical">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="height: 89%;">
                                    <span class="sr-only">89% Complete</span>
                                </div>
                            </div>
                            <div class="progress progress-vertical">
                                <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="height: 77%;">
                                    <span class="sr-only">77% Complete</span>
                                </div>
                            </div>
                            <div class="progress progress-md progress-vertical">
                                <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="height: 45%;">
                                    <span class="sr-only">45% Complete</span>
                                </div>
                            </div>
                            <div class="progress progress-lg progress-vertical">
                                <div class="progress-bar bg-warning progress-bar-striped  progress-bar-animated" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="height: 67%;">
                                    <span class="sr-only">67% Complete</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <h4 class="header-title mt-4 mt-md-0">Progressbar Vertical Bottom</h4>
                            <p class="sub-header">
                                Use class <code>.progress-vertical-bottom</code>.
                            </p>
                            <div class="progress progress-sm progress-vertical-bottom">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="height: 89%;">
                                    <span class="sr-only">89% Complete</span>
                                </div>
                            </div>
                            <div class="progress progress-vertical-bottom">
                                <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="height: 77%;">
                                    <span class="sr-only">77% Complete</span>
                                </div>
                            </div>
                            <div class="progress progress-md progress-vertical-bottom">
                                <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="height: 45%;">
                                    <span class="sr-only">45% Complete</span>
                                </div>
                            </div>
                            <div class="progress progress-lg progress-vertical-bottom">
                                <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="height: 67%;">
                                    <span class="sr-only">67% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End of Row -->
    </div> <!-- end container-fluid -->
</div>
@endsection