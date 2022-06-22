@extends('layouts.app')

@section('content')

<section>
    <div class="row pb-5" id="portal_card_container">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <div class="card" id="skillsPersonsRatingCard">
                <div class="card-header primaryColor">
                    <div class="card-title">
                        <h1 class="text-white text-center"><b>SKILLS PERSON RATING PORTAL</b></h1>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <p class="card-text"><b><i>N.B.</i></b>To all our esteemed <b>Skills Person</b>, this <i>rating form</i> is to be used by <b>Customers and Clients</b> to rate the way a <i>Skills Person</i> provided a <i>service</i> and how he/she behaved while providing the <i>service.</i></p> 
                            <p class="card-text">Please go to the <b>Customers Rating Portal</b> to rate the <b>Customer</b> whom you provided <i>services</i> for.</p>
                        </div>
                    </div>

                    <div class="row pt-3">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <form action=" {{ route('skills_person_rating.store') }} " method="POST" class="" enctype="multipart/form-data" accept-charset="UTF-8">
                                @csrf
                                <div class="row pt-3 pb-3">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-1">
                                        <label for="inputSkillsPersonServiceNumber"><b>Skills Person Service Number</b></label>

                                        <div class="row pt-1">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <input type="text" class="form-control @error('skills_person_service_number') is-invalid @enderror" id="input_skills_person_service_number" placeholder="Skills Person Service Number" name="skills_person_service_number" value="{{old('skills_person_service_number')}}" title="Skills Person Service Number" autocomplete="skills_person_service_number" autofocus>

                                                @error('skills_person_service_number')
                                                <span class="invalid-feedback alert alert-warning" role="alert">
                                                    <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-1">
                                        <label for="inputSkillsPersonRating"><b>Rating</b></label>

                                        <div class="row pt-1">
                                            <div class="group col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <div class="rating">
                                                    <input class="star star-5" type="radio" id="star5" name="rate" value="5" /><label class="star star-5" for="star5" title="Excellent">5 stars</label>
                                                    <input class="star star-4" type="radio" id="star4" name="rate" value="4" /><label class="star star-4" for="star4" title="Good">4 stars</label>
                                                    <input class="star star-3" type="radio" id="star3" name="rate" value="3" /><label class="star star-3" for="star3" title="Average">3 stars</label>
                                                    <input class="star star-2" type="radio" id="star2" name="rate" value="2" /><label class="star star-2" for="star2" title="Bad">2 stars</label>
                                                    <input class="star star-1" type="radio" id="star1" name="rate" value="1" /><label class="star star-1" for="star1" title="Extremely Bad">1 star</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                @error('rate')
                                                <span class="invalid-feedback alert alert-warning" role="alert">
                                                    <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row pt-3 pb-3">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <input type="hidden" name="created_at" id="time_contact">
                                        <script type="text/javascript">
                                            document.getElementById('time_contact').value = new Date().toISOString().slice(0,10);
                                        </script>
                                    </div>
                                </div><hr>

                                <div class="row pt-3 pb-3">
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
             
            
