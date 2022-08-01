@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid content-wrapper">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                @if (Session::has('customer-service-number-successfull-email'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-xmark"></i>{{Session::get('customer-service-number-successfull-email')}}
                </div>

                @elseif (Session::has('customer-service-number-failed-email'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-xmark"></i>{{Session::get('customer-service-number-failed-email')}}
                </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="card shadow">
                    <div class="card-header primaryColor">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="card-title">
                                    <h2 class="text-white"><b>CUSTOMER BOOKING RECORDS</b></h2>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <form action="{{ route('customers_booking_search') }}" method="GET" class="search_customers_booking_form" id="query" name="query" accept-charset="UTF-8" enctype="multipart/form-data">
                                            <div class="row">
                                                @csrf

                                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                    <div class="row">
                                                       <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8 noPadding">
                                                            <input type="text" class="form-control" value="" name="query" id="query" placeholder="Search customer bookings here..." autofocus>
                                                       </div>

                                                       <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 noPadding">
                                                           <button type="submit" class="fa fa-search search_icon" title="Search..."></button>
                                                       </div>
                                                   </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-1">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                @if (Session::has('users-error-message'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                    <i class="fa-solid fa-circle-xmark"></i>{{Session::get('users-error-message')}}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="card-body" id="customer_booking_list" style="overflow-x: scroll;">
                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>ID</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $customersBooking->id }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>FIRST NAME</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $customersBooking->first_name }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>SURNAME</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $customersBooking->surname }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>MIDDLE NAME</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $customersBooking->middle_name }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>ID NUMBER</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $customersBooking->id_number }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>CUSTOMER SERVICE NUMBER</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $customersBooking->customers_service_number }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>PHONE NUMBER</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $customersBooking->phone_number }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>ALTERNATIVE PHONE NUMBER</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $customersBooking->alternative_phone_number }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>CUSTOMER EMAIL</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <div class="row">
                                    <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                                        <p class="">{{ $customersBooking->customer_email }}</p>
                                    </div>

                                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 pt-2 border">
                                        <a href=" {{ route('mailCSN', $customersBooking->id) }} " class="bg-primary border p-1 serviceNumberButton" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Customer Service Number">Send CSN</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>ADDRESS</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $customersBooking->address }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>SERVICES</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $customersBooking->services }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>SERVICE REQUIRED</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $customersBooking->service_required }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>SERVICE DATE</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $customersBooking->service_date }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>SERVICE TIME</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $customersBooking->service_time }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>CREATED AT</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $customersBooking->created_at }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>UPDATED AT</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $customersBooking->updated_at }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection