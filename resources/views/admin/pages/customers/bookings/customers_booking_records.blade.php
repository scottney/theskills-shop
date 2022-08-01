@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid content-wrapper">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                @if (Session::has('customers-service-number-update-success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-xmark"></i>{{Session::get('customers-service-number-update-success')}}
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
                        <table class="table table-striped table-bordered m-3" id="customer_bookings_table">
                            <thead>
                                <tr>
                                    <th scope="col"><b>ID</b></th>
                                    <th scope="col"><b>FIRST NAME</b></th>
                                    <th scope="col"><b>SURNAME</b></th>
                                    <th scope="col"><b>CUSTOMERS SERVICE NUMBER</b></th>
                                    <th scope="col"><b>EDIT CSN</b></th>
                                    <th scope="col"><b>SERVICES</b></th>
                                    <th scope="col"><b>SERVICE REQUIRED DESCRIPTION</b></th>
                                    <th scope="col"><b>OTHER OPTIONS</b></th>
                                </tr>
                            </thead>

                            @foreach($customersBooking as $booking)
                            <tbody class="list">
                                <tr id="customers_booking_items">
                                    <td class="id" scope="row"> {{ $booking->id }} </td>
                                    <td class="first_name"> {{ $booking->first_name }} </td>
                                    <td class="surname"> {{ $booking->surname }} </td>
                                    <td class="customers_service_number" id="customersServiceNumber"> {{ $booking->customers_service_number }}</td>
                                    @if ($booking->customers_service_number == null)
                                    <td> <a class="btn btn-primary" id="customersServiceNumberButton" href=" {{ route('edit_customers_service_number', $booking->id) }} ">Edit CSN</a> </td>
                                    @else
                                    <td></td>
                                    @endif
                                    <td class="services"> {{ $booking->services }} </td>
                                    <td class="service_required"> {{ $booking->service_required }} </td>
                                    @if ($booking->customers_service_number == null)
                                    <td class="account_options"></td>
                                    @else
                                    <td class="other_options">
                                        <a href="{{ route('customersData', $booking->id) }}" class="btn btn-primary" id="" data-bs-toggle="tooltip" data-bs-placement="top" title="View all customer details"><i class="fa-solid fa-eye"></i></a>
                                    </td>
                                    @endif
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        <div class="d-flex justify-content-center mt-2">
                            <ul class="pagination">
                                {!! $customersBooking->links() !!}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection