@extends('layouts.app')

@section('content')

<section>
    <div class="row pb-3" id="portal_card_container">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <div class="card" id="customersBookingCard">
                <div class="card-header primaryColor">
                    <div class="card-title">
                        <h1 class="text-white text-center"><b>CUSTOMERS BOOKING PORTAL</b></h1>
                    </div>
                </div>
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <p class="card-text"><b><i>N.B.</i></b>To all our esteemed <b>customers/clients</b>, please <b><i>book</i></b> a <b>Skills Person</b> in the form below.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <form action=" {{ route('customers_booking.store') }} " method="POST" name="register" class="" enctype="multipart/form-data" accept-charset="UTF-8">
                                @csrf

                                <div class="row pt-3">
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label for="inputFirstName"><b>First Name</b></label>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="input_first_name" name="first_name" value="{{old('first_name')}}" minlength="1" maxlength="19" autocomplete="first_name" title="First Name" placeholder="First Name" autofocus>

                                                @error('first_name')
                                                <span class="invalid-feedback alert alert-warning" role="alert">
                                                    <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label for="inputSurName"><b>Surname</b></label>

                                        <div class="form-row">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <input type="text" class="form-control @error('surname') is-invalid @enderror" id="input_surname" name="surname" value="{{old('surname')}}" minlength="1" maxlength="19" autocomplete="surname" title="Surname" placeholder="Surname" autofocus>

                                                @error('surname')
                                                <span class="invalid-feedback alert alert-warning" role="alert">
                                                    <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label for="inputMiddleName"><b>Middle Name</b></label>
                                        
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <input type="text" class="form-control @error('middle_name') is-invalid @enderror" id="input_middle_name" name="middle_name" value="{{old('middle_name')}}" minlength="1" maxlength="19" autocomplete="middle_name" title="Middle Name" placeholder="Middle Name" autofocus>

                                                @error('middle_name')
                                                <span class="invalid-feedback alert alert-warning" role="alert">
                                                    <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="row pt-3">
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label for="inputIdnumber"><b>ID Number</b></label>           

                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <input type="number" class="form-control @error('id_number') is-invalid @enderror" id="input_id_number" placeholder="ID Number" name="id_number" value="{{old('id_number')}}" minlength="7" maxlength="19" autocomplete="id_number" title="ID Number" autofocus>

                                                @error('id_number')
                                                <span class="invalid-feedback alert alert-warning" role="alert">
                                                    <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label for="inputCustomerServicenumber"><b>Customer Service Number</b></label>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <input type="text" class="form-control @error('customers_service_number') is-invalid @enderror" id="input_customer_service_number" placeholder="Customers Service Number" name="customers_service_number" value="{{old('customers_service_number')}}" autocomplete="customers_service_number" title="Customer Service Number" autofocus readonly>

                                                @error('customers_service_number')
                                                <span class="invalid-feedback alert alert-warning" role="alert">
                                                    <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <p class="card-text"><b><i>N.B.</i></b>To be assigned by the <b><i>system administrator</i></b> upon registration.</p>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label for="inputPhoneNumber"><b>Phone Number</b></label>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" id="input_phone_number" name="phone_number" value="{{old('phone_number')}}" minlength="7" maxlength="17" autocomplete="phone_number" title="Phone Number" placeholder="Phone Number" autofocus>

                                                @error('phone_number')
                                                <span class="invalid-feedback alert alert-warning" role="alert">
                                                    <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="row pt-3">
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label for="inputAlternativePhoneNumber"><b>Alternative Phone Number</b></label>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <input type="tel" class="form-control @error('alternative_phone_number') is-invalid @enderror" id="input_alternative_phone_number" name="alternative_phone_number" value="{{old('alternative_phone_number')}}" minlength="7" maxlength="17" autocomplete="alternative_phone_number" title="Alternative Phone Number" placeholder="Alternative Phone Number" autofocus>

                                                @error('alternative_phone_number')
                                                <span class="invalid-feedback alert alert-warning" role="alert">
                                                    <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label for="inputEmail"><b>Email</b></label>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <input type="email" class="form-control @error('customer_email') is-invalid @enderror" id="input_customerEmail" placeholder="Email Address" name="customer_email" value="{{old('customer_email')}}" minlength="3" maxlength="69" autocomplete="customer_email" title="Email" autofocus>

                                                @error('customer_email')
                                                <span class="invalid-feedback alert alert-warning" role="alert">
                                                    <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label for="inputAddress"><b>Address</b></label>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <input type="text" class="form-control @error('address') is-invalid @enderror" id="input_address" placeholder="Address" name="address" value="{{old('address')}}" minlength="5" maxlength="49" autocomplete="address" title="Address" autofocus>

                                                @error('address')
                                                <span class="invalid-feedback alert alert-warning" role="alert">
                                                    <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row pt-3">
                                     <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label for="inputBookingServices"><b>Services</b></label>

                                        <p class="card-text">You can only select <b><u>ONE</u></b> service at a <b><u>TIME</u></b>.</p>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <select name="services" id="input_booking_services" title="Services" autofocus>
                                                    <option class="custom-control-input" value="Plumbing">Plumbing</option>
                                                    <option class="custom-control-input" value="Carpentry">Carpentry</option>
                                                    <option class="custom-control-input" value="Cabinet Making">Cabinet Making</option>
                                                    <option class="custom-control-input" value="Masonry">Masonry</option>
                                                    <option class="custom-control-input" value="Gardening">Gardening</option>
                                                    <option class="custom-control-input" value="Landscaping">Landscaping</option>
                                                    <option class="custom-control-input" value="Electrical Works">Electrical Works</option>
                                                    <option class="custom-control-input" value="Painting">Painting</option>
                                                    <option class="custom-control-input" value="Food Delivery">Food Delivery</option>
                                                    <option class="custom-control-input" value="General Delivery">General Delivery</option>
                                                    <option class="custom-control-input" value="Transportation">Transportation</option>
                                                </select>

                                                @error('services')
                                                <span class="invalid-feedback alert alert-warning" role="alert">
                                                    <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                     </div>

                                     <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label for="inputServiceRequired"><b>Describe the Nature of the Service Required<br></b></label>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <textarea name="service_required" class="form-control @error('service_required') is-invalid @enderror" id="input_service_required" placeholder="Please describe the nature of the service that you require" minlength="10" maxlength="640" rows="3" autocomplete="service_required" title="Describe Service Required" autofocus></textarea>

                                                @error('service_required')
                                                <span class="invalid-feedback alert alert-warning" role="alert">
                                                    <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label for="inputDate"><b>Date<br><i>(Please select a date that our skills person will attend to you...)</i></b></label>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <input type="date" class="form-control @error('service_date') is-invalid @enderror" id="input_date" name="service_date" autocomplete="service_date" title="Date" autofocus>

                                                @error('service_date')
                                                <span class="invalid-feedback alert alert-warning" role="alert">
                                                    <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="row pt-3">
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label for="inputTime"><b>Time<br><i>(Please select a time that our skills person will attend to you...)</i></b></label>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <input type="time" class="form-control @error('service_time') is-invalid @enderror" id="input_time" name="service_time" autocomplete="service_time" title="Time" autofocus>

                                                @error('service_time')
                                                <span class="invalid-feedback alert alert-warning" role="alert">
                                                    <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row pt-3">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <input type="hidden" name="created_at" id="time_contact">
                                        <script type="text/javascript">
                                          document.getElementById('time_contact').value = new Date().toISOString().slice(0,10);
                                        </script>
                                    </div>
                                </div><hr>

                                <div class="row pt-3">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <button type="submit" class="btn btn-success float-end">Submit</button>
                                    </div>
                                </div>
                
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection


