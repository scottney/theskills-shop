@section('content')

<section id="schedules">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
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
</section>

@endsection