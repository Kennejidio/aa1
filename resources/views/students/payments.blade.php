@extends('layouts.app')
@section('content')
    <section class="container mt-4 pt-3 mb-5">
        <!-- //* Card status starts here -->
        <!-- * Card status starts here -->
        <div class="row mt-4 mb-4">
            <div class="col-md-4 text-center-alt">
                <h3><b>PAYMENTS</b></h3>
            </div>
            <div class="col-md-8">
                <div class="row justify-content-md-end">
                    <div class="col-md-6">
                        <div class="card-design bg-green text-light
                                text-center shadow">
                            <div class="row">
                                <div class="col-6">
                                    <img src="{{ asset('images/payment.png') }}" alt="student" width="50" height="50">
                                </div>
                                <div class="col-6">
                                    <font class="h3">N/A</font>
                                    <h5>Total Balance</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-design bg-blue text-light
                                text-center shadow">
                            <div class="row">
                                <div class="col-6">
                                    <img src="{{ asset('images/payment-status.png') }}" alt="student" width="50" height="50">
                                </div>
                                <div class="col-6">
                                    <font class="h3">N/A</font>
                                    <h5>Payment Status</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- //* Tables -->
        <div class="p-4 my-4 overflow-scroll shadow">
            <table class="table table-bordered table-responsive-sm">
                <thead>
                    <tr>
                        <th>List</th>
                        <th>Fees</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </section>
@endsection
