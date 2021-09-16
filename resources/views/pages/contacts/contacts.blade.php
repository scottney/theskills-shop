@extends('layouts.app')

@section('content')

<!------- Start Of Message Section ------->

<section id="contacts">
    <div class="container-fluid" style="background-color: #A25C0C; padding-top: 20px; padding-bottom: 20px;margin-top: 20px;">
    	<div class="row">
    	    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h1 class="text-center text-white display-4" id="contacts" style="font-size: 48px;">CONTACTS</h1><br>
            </div>
    	</div>

        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <p class="text-center text-white">Get in touch with us @<b><i>+1 876-540-9333</i></b><br>
                    <i class="fas fa-phone fa-5x" aria-hidden="true" id="phone-icon"></i>
                </p>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <p class="text-center text-white">Mail to:<b><a href="mailto:skillsshop2019@gmail.com"><br>
                    <i class="fa fa-envelope-square fa-5x" aria-hidden="true" id="contacts-icons"></i></a></b>
                </p>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <p class="text-center text-white">Follow us on Facebook:<b><a href="https://www.facebook.com/The-Skills-Shop-101303204582655/" target="blank"><br>
                    <i class="fa fa-facebook-official fa-5x" aria-hidden="true" id="contacts-icons"></i></a></b>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="card-title">
                            <h5 class="display-5" style="font-size: 18px;"><b>Send Message</b></h5>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row" style="background-color: #eeeeee">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                @foreach ($errors->all() as $message)
                                <p style="color: red;">{{$message}}</p>
                                @endforeach
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <form action=" {{ route('contacts.store') }} " method="POST" name="message" class="" id="message_form" enctype="multipart/form-data" accept-charset="UTF-8">
                                    @csrf

                                    <div class="form-row">
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="inputFirstName"><b>First Name</b></label>
                                            <input type="text" class="form-control" id="input_first_name" name="first_name" maxlength="13" placeholder="First Name" autofocus autocomplete="first_name" required>
                                            @error('first_name')
                                            <p style="color: red;">{{$message}}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="inputSurname"><b>Surname</b></label>
                                            <input type="text" class="form-control" id="input_surname" name="surname" maxlength="13" placeholder="Surname" autofocus autocomplete="surname" required="">
                                            @error('surname')
                                            <p style="color: red;">{{$message}}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="inputMiddleName"><b>Middle Name</b></label>
                                            <input type="text" class="form-control" id="input_middle_name" name="middle_name" maxlength="13" placeholder="Middle Name" autofocus autocomplete="middle_name" required>
                                            @error('middle_name')
                                            <p style="color: red;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="inputPhoneNumber"><b>Phone Number</b></label>
                                            <input type="tel" class="form-control" id="input_phone_number" name="phone_number" maxlength="17" placeholder="Phone Number" autofocus autocomplete="phone_number" required>
                                            @error('phone_number')
                                            <p style="color: red;">{{$message}}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="inputLocation"><b>Location</b></label>
                                            <input type="text" class="form-control" id="input_location" name="location" maxlength="19" placeholder="Location" autofocus autocomplete="location" required>
                                            @error('location')
                                            <p style="color: red;">{{$message}}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="inputEmail"><b>Email</b></label>
                                            <input type="email" class="form-control" id="input_email" name="email" maxlength="69" placeholder="Email" autofocus autocomplete="email" required>
                                            @error('email')
                                            <p style="color: red;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <label for="inputTextMessage"><b>Message</b></label>
                                            <textarea class="form-control" id="input_text_message" name="text_message" maxlength="256" placeholder="Text Message" rows="5" cols="25" autofocus required></textarea>
                                            @error('text_message')
                                            <p style="color: red;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <input type="hidden" name="created_at" id="time_contact">
                                            <script type="text/javascript">
                                                document.getElementById('time_contact').value = new Date().toISOString().slice(0,10);
                                            </script>
                                        </div>
                                    </div>

                                    <div class="card-footer text-muted">
                                        <div class="form-row">
                                            <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                <button type="reset" class="btn btn-danger">Reset</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
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
</section>

<!------- End Of Message Section ------->

<!------- Start Of News Letter Section ------->

<section id="monthly_newsletter">
    <div class="container-fluid">
        <div class="row" style="background-image: url('/images/gardens.jpg'); background-size: cover; background-attachment: fixed; background-repeat: no-repeat; padding-top: 35px; padding-bottom: 35px;">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="card-title">
                            <h5 class="display-5" style="font-size: 18px;"><b>News Letter</b></h5>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action=" {{ route('news_letter.store') }} " method="POST" name="message" class="" id="message_form" enctype="multipart/form-data" accept-charset="UTF-8">
                            @csrf

                            <div class="form-row">
                                <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <label for="inputEmail"><b>Email</b></label>
                                    <input type="email" class="form-control" id="input_email" name="email" maxlength="69" placeholder="Email" autofocus autocomplete="email" required>
                                    @error('email')
                                    <p style="color: red;">{{$message}}</p>
                                    @enderror

                                    <div class="card-footer text-muted mt-1">
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                        <button type="submit" class="btn btn-success">Sign Up</button>
                                    </div>
                                </div>

                                <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <div class="card shadow">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h5 class="display-5"><i class="fa fa-envelope-square fa-2x" aria-hidden="true" id="contacts-icons">NEWSLETTER</i></h5>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <p class="card-text">Get insight from our team and broaden your scope about:
                                                <ul class="list-group">
                                                    <li class="list-group-item">Services</li>
                                                    <li class="list-group-item">Prices</li>
                                                    <li class="list-group-item">Offers</li>
                                                    <li class="list-group-item">Discounts</li>
                                                    <li class="list-group-item">Give Aways</li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!------- End Of News Letter Section ------->

@endsection


