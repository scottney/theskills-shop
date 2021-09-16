@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid content-wrapper container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="card-title">
                            <h5 class="display-5">CUSTOMERS SERVICE NUMBER EDIT</h5>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                @foreach ($errors->all() as $message)
                                <p style="color: red;">{{$message}}</p>
                                @endforeach
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <form action=" {{ route('customers_booking.update', $customersBooking->id) }} " role="form" method="post" name="customer_service_number_edit_form" enctype="multipart/form-data" accept-charset="UTF-8">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-row">
                                        <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <input type="hidden" class="form-control" id="inputId" name="id" value="{{ $customersBooking['id'] }}">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                             <label class="control-label" for="inputFirstName">First Name</label>
                                            <input type="text" class="form-control" id="input_first_name" name="first_name" value="{{ $customersBooking['first_name'] }}" readonly>
                                        </div>
                                            
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label class="control-label" for="inputSurname">Surname</label>
                                            <input type="text" class="form-control" id="input_surname" name="surname" value="{{ $customersBooking['surname'] }}" readonly>
                                        </div>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label class="control-label" for="inputMiddleName">Middle Name</label>
                                            <input type="text" class="form-control" id="input_middle_name" name="middle_name" value="{{ $customersBooking['middle_name'] }}" readonly>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label class="control-label" for="inputIdNumber">ID Number</label>
                                            <input type="number" class="form-control" id="input_id_number" name="id_number" value="{{ $customersBooking['id_number'] }}" readonly>
                                        </div>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label class="control-label" for="inputCustomersServiceNumber">Customer Service Number</label>
                                            <div class="form-row">
                                                <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <input type="text" class="form-control" id="input_customer_service_number" name="customers_service_number" value="{{ $customersBooking['customers_service_number'] }}" maxlength="9">
                                                </div>
                                                <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <button onclick="RandomCustomerServiceNumberGenerator()" type="button" class="btn btn-info">Generate C.S.N</button>
                                                </div>
                                            </div>
                                            @error('customers_service_number')
                                            <p style="color:red"> {{$message}} </p>
                                            @enderror
                                        </div>

                                        <script type="text/javascript">
                                        // Start of random id generator function 
                                        RandomCustomerServiceNumberGenerator();
                                        function RandomCustomerServiceNumberGenerator() {
                                        //Returns a random integer from 0 to 1,000,000,000
                                        var random_customers_service_number = document.getElementById('input_customer_service_number');
                                        random_customers_service_number.value = Math.floor(Math.random() * 1000000001);
                                    }
                                        // End of random id generator function
                                        </script>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label class="control-label" for="inputPhoneNumber">Phone Number</label>
                                            <input type="number" class="form-control" id="input_phone_number" name="phone_number" value="{{ $customersBooking['phone_number'] }}" readonly>
                                        </div>
                                    </div>

                                     <div class="form-row">
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                             <label class="control-label" for="inputAlternativePhoneNumber">Alternative Phone Number</label>
                                            <input type="number" class="form-control" id="input_alternative_phone_number" name="alternative_phone_number" value="{{ $customersBooking['alternative_phone_number'] }}" readonly>
                                        </div>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label class="control-label" for="inputEmail">Email</label>
                                            <input type="text" class="form-control" id="input_email" name="email" value="{{ $customersBooking['email'] }}" readonly>
                                        </div>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                             <label class="control-label" for="inputAddress">Address</label>
                                            <input type="text" class="form-control" id="input_address" name="address" value="{{ $customersBooking['address'] }}" readonly>
                                        </div>
                                    </div>

                                     <div class="form-row">
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                             <label class="control-label" for="inputBookingServices">Services</label>
                                            <input type="text" class="form-control" id="input_booking_services" name="services" value="{{ $customersBooking['services'] }}" readonly>
                                        </div>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label class="control-label" for="inputServiceRequired">Service Required</label>
                                            <textarea class="form-control" id="input_service_required" name="service_required" value="#" readonly>
                                                {{ $customersBooking['service_required'] }}
                                            </textarea>
                                        </div>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                             <label class="control-label" for="inputDate">Service Date</label>
                                            <input type="date" class="form-control" id="input_date" name="service_date" value="{{ $customersBooking['service_date'] }}" readonly>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                             <label class="control-label" for="inputTime">Service Time</label>
                                            <input type="time" class="form-control" id="input_time" name="service_time" value="{{ $customersBooking['service_time'] }}" readonly>
                                        </div>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label class="control-label" for="inputCreatedAt">Created At</label>
                                            <input type="datetime" class="form-control" id="input_created_at" name="created_at" value="{{ $customersBooking['created_at'] }}" readonly>
                                        </div>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label class="control-label" for="inputUpdatedAt">Updated At</label>
                                            <input type="datetime" class="form-control" id="input_updated_at" name="updated_at" value="{{ $customersBooking['updated_at'] }}" readonly>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <div class="form-row">
                                            <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                <button type="submit" class="btn btn-success">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                      
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


