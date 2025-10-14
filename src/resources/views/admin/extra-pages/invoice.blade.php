@extends('admin.layout.app')
@push('styles')
<link href="{{asset('libs/custombox/custombox.min.css')}}" rel="stylesheet" type="text/css">
@endpush
@push('scripts')
<!-- init js -->
<script src="{{asset('backend/libs/custombox/custombox.min.js')}}"></script>
@endpush
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                            <li class="breadcrumb-item active">Invoice</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Invoice</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <div class="clearfix">
                        <div class="float-left mb-2">
                            <img src="{{asset('backend/images/logo-dark.png')}}" alt="" height="28">
                        </div>
                        <div class="float-right">
                            <h3 class="m-0 d-print-none">Invoice</h3>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-3">
                                <p><b>Hello, Stanley Jones</b></p>
                                <p class="text-muted">Thanks a lot because you keep purchasing our products.
                                    Our company
                                    promises to provide high quality products for you as well as outstanding
                                    customer service for every transaction. </p>
                            </div>

                        </div><!-- end col -->
                        <div class="col-md-6">
                            <div class="mt-3 text-md-right">
                                <p><strong>Order Date: </strong> Jan 17, 2016</p>
                                <p><strong>Order Status: </strong> <span
                                        class="badge badge-success">Paid</span></p>
                                <p><strong>Order ID: </strong> #123456</p>
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <h5>Billing Address</h5>

                            <address class="line-h-24">
                                Stanley Jones<br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>

                        </div>

                        <div class="col-md-6">
                            <div class="text-md-right">
                                <h5>Shipping Address</h5>

                                <address class="line-h-24">
                                    Stanley Jones<br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table mt-4 table-centered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Item</th>
                                            <th>Quantity</th>
                                            <th>Unit Cost</th>
                                            <th class="text-right">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <b>Laptop</b> <br />
                                                Brand Model VGN-TXN27N/B
                                                11.1" Notebook PC
                                            </td>
                                            <td>1</td>
                                            <td>$1799</td>
                                            <td class="text-right">$1799</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <b>Warranty</b> <br />
                                                Two Year Extended Warranty -
                                                Parts and Labor
                                            </td>
                                            <td>3</td>
                                            <td>$499</td>
                                            <td class="text-right">$1497</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <b>LED</b> <br />
                                                80cm (32) HD Ready LED TV
                                            </td>
                                            <td>2</td>
                                            <td>$412</td>
                                            <td class="text-right">$824</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="clearfix pt-4">
                                <h6 class="text-muted">Notes:</h6>

                                <small>
                                    All accounts are to be paid within 7 days from receipt of
                                    invoice. To be paid by cheque or credit card or direct payment
                                    online. If account is not paid within 7 days the credits details
                                    supplied as confirmation of work undertaken will be charged the
                                    agreed quoted fee noted above.
                                </small>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="text-md-right">
                                <p><b>Sub-total:</b> $4120.00</p>
                                <p><b>VAT (12.5):</b> $515</p>
                                <h3>$4635.00 USD</h3>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="hidden-print mt-4">
                        <div class="text-right d-print-none">
                            <a href="javascript:window.print()"
                                class="btn btn-blue waves-effect waves-light"><i
                                    class="fa fa-print mr-1"></i> Print</a>
                            <a href="#" class="btn btn-info waves-effect waves-light">Submit</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->

</div>
@endsection