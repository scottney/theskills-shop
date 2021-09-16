@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid content-wrapper container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="row m-3">
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="card-title">
                                    <h5 class="display-5">CUSTOMER BOOKING RECORDS</h5>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="row">
                                    <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                        <form action="{{ route('customers_booking_search') }}" method="GET" class="search_customers_booking_form" id="query" name="query" accept-charset="UTF-8" enctype="multipart/form-data">
                                            <div class="form-row">
                                                @csrf

                                                <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <input type="text" class="form-control" value="" name="query" id="query" placeholder="Search customer bookings here..." autofocus>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                        {{-- Customers booking sort functionality will go here --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body" id="customer_booking_list">
                        <table class="table table-striped table-bordered m-3">
                            <thead>
                                <tr>
                                    <th scope="col"><b>ID</b></th>
                                    <th scope="col"><b>FIRST NAME</b></th>
                                    <th scope="col"><b>SURNAME</b></th>
                                    <th scope="col"><b>MIDDLE NAME</b></th>
                                    <th scope="col"><b>ID NUMBER</b></th>
                                    <th scope="col"><b>CUSTOMERS SERVICE NUMBER</b></th>
                                    <th scope="col"><b>EDIT CSN</b></th>
                                    <th scope="col"><b>PHONE NUMBER</b></th>
                                    <th scope="col"><b>ALTERNATIVE PHONE NUMBER</b></th>
                                    <th scope="col"><b>EMAIL</b></th>
                                    <th scope="col"><b>ADDRESS</b></th>
                                    <th scope="col"><b>SERVICES</b></th>
                                    <th scope="col"><b>SERVICE REQUIRED</b></th>
                                    <th scope="col"><b>SERVICE DATE</b></th>
                                    <th scope="col"><b>SERVICE TIME</b></th>
                                    <th scope="col"><b>CREATED AT</b></th>
                                    <th scope="col"><b>UPDATED AT</b></th>
                                </tr>
                            </thead>

                            @foreach($customersBooking as $booking)
                            <tbody class="list">
                                <tr id="customers_booking_items">
                                    <td class="id" scope="row"> {{ $booking->id }} </td>
                                    <td class="first_name"> {{ $booking->first_name }} </td>
                                    <td class="surname"> {{ $booking->surname }} </td>
                                    <td class="middle_name"> {{ $booking->middle_name }} </td>
                                    <td class="id_number"> {{ $booking->id_number }} </td>
                                    <td class="customers_service_number"> {{ $booking->customers_service_number }}</td>
                                    <td> <a class="btn btn-primary" href=" {{ route('edit_customers_service_number', $booking->id) }} ">Edit CSN</a> </td>
                                    <td class="phone_number"> {{ $booking->phone_number }} </td>
                                    <td class="alternative_phone_number"> {{ $booking->alternative_phone_number }} </td>
                                    <td class="email"> {{ $booking->email }} </td>
                                    <td class="address"> {{ $booking->address }} </td>
                                    <td class="services"> {{ $booking->services }} </td>
                                    <td class="service_required"> {{ $booking->service_required }} </td>
                                    <td class="service_date"> {{ $booking->service_date }} </td>
                                    <td class="service_time"> {{ $booking->service_time }} </td>
                                    <td class="created_at"> {{ $booking->created_at }} </td>
                                    <td class="updated_at"> {{ $booking->updated_at }} </td>
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