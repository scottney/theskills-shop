@extends('layouts.app')

@section('content')

<section>
    <div class="row pb-3" id="portal_card_container">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <div class="card" id="skillsPersonCard">
                <div class="card-header primaryColor">
                    <div class="card-title">
                        <h1 class="text-white text-center"><b>SKILLS PERSON REGISTRATION PORTAL</b></h1>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <p><b><i>N.B.</i></b>To all <b>personnel interested</b>, in becoming part of us, please <i>register</i> as a <b>Skills Persons</b> in the form below.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <form action=" {{ route('skills_person_registration.store') }} " method="POST" name="register" class="" enctype="multipart/form-data" accept-charset="UTF-8">
                                @csrf
                                <div class="row pt-3">
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label for="inputFirstName"><b>First Name</b></label>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="input_first_name" name="first_name" value="{{old('first_name')}}" minlength="1" maxlength="19" title="First Name" placeholder="First Name" autocomplete="first_name" autofocus>

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

                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <input type="text" class="form-control @error('surname') is-invalid @enderror" id="input_surname" name="surname" value="{{old('surname')}}" minlength="1" maxlength="19" title="Surname" placeholder="Surname" autocomplete="surname" autofocus>

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
                                                <input type="text" class="form-control @error('middle_name') is-invalid @enderror" id="input_middle_name" name="middle_name" value="{{old('middle_name')}}" minlength="1" maxlength="19" title="Middle Name" placeholder="Middle Name" autocomplete="middle_name" autofocus>

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
                                    <label for="inputIdNumber"><b>ID Number</b></label>

                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                             <input type="number" class="form-control @error('id_number') is-invalid @enderror" id="input_id_number" placeholder="ID number" title="ID Number" name="id_number" value="{{old('id_number')}}" minlength="7" maxlength="19" autocomplete="id_number" autofocus>

                                             @error('id_number')
                                            <span class="invalid-feedback alert alert-warning" role="alert">
                                                <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <label for="inputSkillsPersonServiceNumber"><b>Skills Persons Service Number</b></label>

                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <input type="text" class="form-control @error('skills_person_service_number') is-invalid @enderror" id="input_skills_person_service_number" placeholder="Skills Person Service Number" name="skills_person_service_number" value="{{old('skills_person_service_number')}}" readonly autocomplete="skills_person_service_number" autofocus>

                                            @error('skills_person_service_number')
                                            <span class="invalid-feedback alert alert-warning" role="alert">
                                                <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <p><b><i>N.B.</i></b>To be assigned by the <b><i>system administrator</i></b> upon registration.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <label for="inputPhoneNumber"><b>Phone Number</b></label>

                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" id="input_phone_number" name="phone_number" value="{{old('phone_number')}}" title="Phone Number" placeholder="Phone Number" minlength="7" maxlength="19" autocomplete="phone_number" autofocus>

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
                                            <input type="tel" class="form-control @error('alternative_phone_number') is-invalid @enderror" id="input_alternative_phone_number" name="alternative_phone_number" value="{{old('alternative_phone_number')}}" minlength="7" maxlength="19" placeholder="Alternative Phone Number" title="Alternative Phone Number" autocomplete="alternative_phone_number" autofocus>

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
                                            <input type="email" class="form-control @error('skills_person_email') is-invalid @enderror" id="input_skillsPersonEmail" placeholder="Email Address" title="Email Address" name="skills_person_email" value="{{old('skills_person_email')}}" minlength="3" maxlength="69" autocomplete="skills_person_email" autofocus>

                                            @error('skills_person_email')
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
                                            <input type="text" class="form-control @error('address') is-invalid @enderror" id="input_address" placeholder="Address" title="Address" name="address" value="{{old('address')}}" minlength="3" maxlength="49" autocomplete="address" autofocus>

                                            @error('address')
                                            <span class="invalid-feedback alert alert-warning" role="alert">
                                                <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row pt-5">
                                <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                    <p class="card-text">Please select <b><u>ONLY ONE</u></b> skillset at a <b><u>TIME</u></b> so that you are assigned <b><i><u>CLIENTS</u></i></b> requiring your <b><u>SKILLSET</u></b>.</p>
                                </div>

                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <label for="inputSkillset"><b>Skill Set</b></label>

                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <select name="skillset" title="Skillset" id="input_skillset" autofocus required>
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

                                            @error('skillset')
                                            <span class="invalid-feedback alert alert-warning" role="alert">
                                                <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row pt-3">
                                <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                    <label for="inputSkillsetDescription"><b>Skillset Description</b></label>

                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <textarea name="skillset_description" class="form-control @error('skillset_description') is-invalid @enderror" id="input_skillset_description" placeholder="Please describe the nature of the skills that you offer" title="Skillset Description" minlength="10" maxlength="640" rows="3" autofocus></textarea>

                                            @error('skillset_description')
                                            <span class="invalid-feedback alert alert-warning" role="alert">
                                                <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
                            </div>

                            <div class="row pt-5">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <p>Please <b><u>NOTE</u></b> all <b><u>FILE UPLOADS</u></b> except photos, must contain your <b>ID Number</b> for quicker sorting within our records.
                                </div>
                            </div>

                            <div class="row pt-3">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <p class="card-text">Please <b><u>UPLOAD</u></b> a <b><u>PASSPORT SIZE</u></b> photo of yourself. (Allowed file types include: JPG, JPEG, PNG, GIF, SVG).</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-primary">
                                                        <input type="file" name="images" class="form-control @error('images') is-invalid @enderror" id="imgInp">

                                                        @error('images')
                                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                        </span>
                                                        @enderror
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row pt-3">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <p>Please <b><u>UPLOAD</u></b> a <b><u>POLICE REPORT</u></b> for <b><u>VERIFICATION</u></b> (Allowed file types include: PDF, DOC, DOCX).</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-primary">
                                                        <input type="file" name="reports" class="form-control @error('reports') is-invalid @enderror">

                                                        @error('reports')
                                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                        </span>
                                                        @enderror
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row pt-3">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <p>Please <b><u>UPLOAD</u></b> at least 3(three) <b><u>LETTERS OF RECOMMENDATION</u></b> from your previous employers.<b>MERGE</b> all 3 letters into one document then submit. (Allowed file types include: PDF, DOC, DOCX).</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-primary">
                                                        <input type="file" name="letters" class="form-control @error('letters') is-invalid @enderror">

                                                        @error('letters')
                                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                        </span>
                                                        @enderror
                                                    </span>
                                                </span>
                                            </div>
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


