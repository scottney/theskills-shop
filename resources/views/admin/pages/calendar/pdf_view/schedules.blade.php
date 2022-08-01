<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Booking Schedules</title>
</head>

<body>
<section id="schedules">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
				<h2><u>Todays Bookings</u></h2>
				<table class="table table-striped table-bordered m-3 pt-3">
					<thead>
						<tr id="customers_booking_calendar_records">
	                        <th class="first_name">NAME</th>
	                        <th class="customers_service_number">CUSTOMER SERVICE NUMBER</th>
	                        <th class="phone_number">PHONE NUMBER</th>
	                        <th class="services">SERVICES</th>
	                        <th class="service_date_time">SERVICE DATE & TIME</th>
	                    </tr>
					</thead>
					@foreach ($customersBooking as $booking)
					<tbody class="list">
						<tr id="customers_booking_calendar_records">
	                        <td class="name" title="NAME"> {{ $booking->first_name }} {{ $booking->surname }}</td>
	                        <td class="customers_service_number" title="CUSTOMER SERVICE NUMBER"> {{ $booking->customers_service_number }}</td>
	                        <td class="phone_number" title="PHONE NUMBER"> {{ $booking->phone_number }} </td>
	                        <td class="services" title="SERVICES"> {{ $booking->services }} </td>
	                        <td class="service_date" title="SERVICE DATE & TIME"> {{ $booking->service_date }}, {{ $booking->service_time }} </td>
	                    </tr>
                    </tbody>
                    @endforeach
                </table>
           </div>
       </div>
	</div>
</section>
</body>
</html>

