@extends('layouts.app')

@section('content')

<div class="container-fluid" style="margin-top: 55px;">
    <div class="row" id="portal_card_container">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card shadow">
                <div class="card-header" style="background: #A25C0C;">
                    <div class="card-title">
                        <h5 class="display-5 text-white text-center">SKILLS PERSON RATING PORTAL</h5>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <p class="card-text"><b><i>N.B.</i></b>To all our esteemed <b>Skills Person</b>, this <i>rating form</i> is to be used by <b>Customers and Clients</b> to rate the way a <i>Skills Person</i> provided a <i>service</i> and how he/she behaved while providing the <i>service.</i></p> 
                            <p class="card-text">Please go to the <b>Customers Rating Portal</b> to rate the <b>Customer</b> whom you provided <i>services</i> for.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            @foreach ($errors->all() as $message)
                            <p style="color: red;">{{$message}}</p>
                            @endforeach
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <form action=" {{ route('skills_person_rating.store') }} " method="POST" class="mt-5" enctype="multipart/form-data" accept-charset="UTF-8">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <label for="inputSkillsPersonServiceNumber"><b>Skills Person Service Number</b></label>
                                        <input type="text" class="form-control" id="input_skills_person_service_number" placeholder="Enter Skills Person Service Number" name="skills_person_service_number" value="{{old('skills_person_service_number')}}" autocomplete="skills_person_service_number" autofocus required> 
                                        @error('skills_person_service_number')
                                        <p style="color:red;">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <label for="inputSkillsPersonRating"><b>Rating</b></label>
                                        <div class="rating">
                                            <input class="star star-5" type="radio" id="star5" name="rate" value="5" /><label class="star star-5" for="star5" title="Excellent">5 stars</label>
                                            <input class="star star-4" type="radio" id="star4" name="rate" value="4" /><label class="star star-4" for="star4" title="Good">4 stars</label>
                                            <input class="star star-3" type="radio" id="star3" name="rate" value="3" /><label class="star star-3" for="star3" title="Average">3 stars</label>
                                            <input class="star star-2" type="radio" id="star2" name="rate" value="2" /><label class="star star-2" for="star2" title="Bad">2 stars</label>
                                            <input class="star star-1" type="radio" id="star1" name="rate" value="1" /><label class="star star-1" for="star1" title="Extremely Bad">1 star</label>

                                            @error('rate')
                                            <p style="color:red;">{{$message}}</p>
                                            @enderror
                                        
                                        </div>
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
                                            <button type="reset" name="reset" class="btn btn-danger">Reset</button>
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

@endsection
             
            
