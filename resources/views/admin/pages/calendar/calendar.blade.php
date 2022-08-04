@extends('admin.layouts.app')

@php

use App\Http\Controllers\CustomersBookingController;

$calendar = new CustomersBookingController(date("Y-m-d"));
$calendar->add_bookings( 'Today', date("Y-m-d"), 1, 'green');

@endphp

@section('content')
    <div class="container-fluid content-wrapper">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="card shadow">
                    <div class="card-header primaryColor">
                        <div class="card-title">
                            <h2 class="text-white"><b>SERVICE CALENDAR</b></h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <?=$calendar;?>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="card-header primaryColor">
                                        <div class="card-title">
                                            <h3 class="text-white"><b>{{ date('Y-m-d H:i:s') }} BOOKINGS</b></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        @if (Session::has('schedules-error-message'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                            <i class="fa-solid fa-circle-xmark"></i>{{Session::get('schedules-error-message')}}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <a class="btn btn-primary" id="" href=" {{ route('create_bookings_pdf') }} ">Print Schedule to PDF</a>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <form action="{{ route('schedules_search') }}" method="GET" class="search_schedules_form" id="query" name="query" accept-charset="UTF-8" enctype="multipart/form-data">
                                            <div class="row">
                                                @csrf

                                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                    <div class="row">
                                                       <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8 noPadding">
                                                            <input type="date" class="form-control" value="" name="query" id="query" placeholder="Search schedules here..." autofocus>
                                                       </div>

                                                       <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 noPadding">
                                                           <button type="submit" class="fa fa-search search_icon" title="Search..."></button>
                                                       </div>
                                                   </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <table class="table table-striped table-bordered m-3">
                                                <thead>
                                                    <tr id="customers_booking_calendar_records">
                                                        <th class="id" scope="row">ID</th>
                                                        <th class="first_name">FIRST NAME</th>
                                                        <th class="surname">SURNAME</th>
                                                        <th class="middle_name">MIDDLE NAME</th>
                                                        <th class="id_number">ID NUMBER</th>
                                                        <th class="customers_service_number">CUSTOMER SERVICE NUMBER</th>
                                                        <th class="phone_number">PHONE NUMBER</th>
                                                        <th class="alternative_phone_number">ALTERNATIVE PHONE NUMBER</th>
                                                        <th class="address">ADDRESS</th>
                                                        <th class="services">SERVICES</th>
                                                        <th class="service_date">SERVICE DATE</th>
                                                        <th class="service_time">SERVICE TIME</th>
                                                    </tr>
                                                </thead>
                                                @foreach ($customersBooking as $booking)
                                                <tbody class="list">
                                                    <tr id="customers_booking_calendar_records">
                                                        <td class="id" scope="row" title="ID"> {{ $booking->id }} </td>
                                                        <td class="first_name" title="FIRST NAME"> {{ $booking->first_name }} </td>
                                                        <td class="surname" title="SURNAME"> {{ $booking->surname }} </td>
                                                        <td class="middle_name" title="MIDDLE NAME"> {{ $booking->middle_name }} </td>
                                                        <td class="id_number" title="ID NUMBER"> {{ $booking->id_number }} </td>
                                                        <td class="customers_service_number" title="CUSTOMER SERVICE NUMBER"> {{ $booking->customers_service_number }}</td>
                                                        <td class="phone_number" title="PHONE NUMBER"> {{ $booking->phone_number }} </td>
                                                        <td class="alternative_phone_number" title="ALTERNATIVE PHONE NUMBER"> {{ $booking->alternative_phone_number }} </td>
                                                        <td class="address" title="ADDRESS"> {{ $booking->address }} </td>
                                                        <td class="services" title="SERVICES"> {{ $booking->services }} </td>
                                                        <td class="service_date" title="SERVICE DATE"> {{ $booking->service_date }} </td>
                                                        <td class="service_time" title="SERVICE TIME"> {{ $booking->service_time }} </td>
                                                    </tr>
                                                </tbody>
                                                @endforeach
                                            </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')

<!-- Start Of Calendar Script -->

<script type="text/javascript">

</script>

<!-- End Of Calendar Script -->

@endpush