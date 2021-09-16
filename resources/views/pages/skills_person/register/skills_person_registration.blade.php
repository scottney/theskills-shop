@extends('layouts.app')

@section('content')
<div class="container-fluid" style="margin-top: 55px;">
    
    <div class="row" id="portal_card_container">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card shadow">
                <div class="card-header" style="background: #A25C0C";>
                    <div class="card-title">
                        <h5 class="display-5 text-white text-center">SKILLS PERSON REGISTRATION PORTAL</h5>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <p class="card-text"><b><i>N.B.</i></b>To all <b>personnel interested</b>, in becoming part of us, please <i>register</i> as a <b>Skills Persons</b> in the form below.</p>
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
                            <form action=" {{ route('skills_person_registration.store') }} " method="POST" name="register" class="mt-5" enctype="multipart/form-data" accept-charset="UTF-8">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                        <label for="inputFirstName"><b>First Name</b></label>
                                        <input type="text" class="form-control" id="input_first_name" name="first_name" value="{{old('first_name')}}" maxlength="43" autocomplete="first_name" autofocus required="">
                                        @error('first_name')
                                        <p style="color:red;">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                        <label for="inputSurName"><b>Surname</b></label>
                                        <input type="text" class="form-control" id="input_surname" name="surname" value="{{old('surname')}}" maxlength="43" autocomplete="surname" autofocus required>
                                        @error('surname')
                                        <p style="color:red;">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                        <label for="inputName3"><b>Middle Name</b></label>
                                        <input type="text" class="form-control" id="input_middle_name" name="middle_name" value="{{old('middle_name')}}" maxlength="43" autocomplete="middle_name" autofocus required>
                                        @error('middle_name')
                                        <p style="color:red;">{{$message}}</p>
                                        @enderror
                                  </div>
                              </div>

                              <div class="form-row">
                                <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                    <label for="inputIdNumber"><b>ID Number</b></label>
                                    <input type="number" class="form-control" id="input_id_number" placeholder="Your ID number" name="id_number" value="{{old('id_number')}}" maxlength="19" autocomplete="id_number" autofocus required>
                                    @error('id_number')
                                    <p style="color:red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                    <label for="inputSkillsPersonServiceNumber"><b>Skills Persons Service Numbers</b></label>
                                    <input type="text" class="form-control" id="input_skills_person_service_number" placeholder="Skills Person Service Number" name="skills_person_service_number" value="{{old('skills_person_service_number')}}" readonly autocomplete="skills_person_service_number" autofocus>
                                    @error('skills_person_service_number')
                                    <p style="color:red;">{{$message}}</p>
                                    @enderror
                                    <p class="card-text"><b><i>N.B.</i></b>To be assigned by the <b><i>system administrator</i></b> upon registration.</p>
                                </div>

                                <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                    <label for="inputPhoneNumber"><b>Phone Number</b></label>
                                    <input type="number" class="form-control" id="input_phone_number" name="phone_number" value="{{old('phone_number')}}" maxlength="19" autocomplete="phone_number" autofocus required="">
                                    @error('phone_number')
                                    <p style="color:red;">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                    <label for="inputAlternativePhoneNumber"><b>Alternative Phone Number</b></label>
                                    <input type="number" class="form-control" id="input_alternative_phone_number" name="alternative_phone_number" value="{{old('alternative_phone_number')}}" maxlength="19" autocomplete="alternative_phone_number" autofocus required>
                                    @error('alternative_phone_number')
                                    <p style="color:red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                    <label for="inputEmail"><b>Email</b></label>
                                    <input type="text" class="form-control" id="input_email" placeholder="Your Email" name="email" value="{{old('email')}}" maxlength="69" autocomplete="email" autofocus required="">
                                    @error('email')
                                    <p style="color:red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                    <label for="inputAddress"><b>Address</b></label>
                                    <input type="text" class="form-control" id="input_address" placeholder="Your Address" name="address" value="{{old('address')}}" maxlength="43" autocomplete="address" autofocus required="">
                                    @error('address')
                                    <p style="color:red;">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                    <p class="card-text">Please select <b><u>ONLY ONE</u></b> skillset at a <b><u>TIME</u></b> so that you are assigned <b><i><u>CLIENTS</u></i></b> requiring your <b><u>SKILLSET</u></b>.</p>
                                </div>

                                <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                    <label for="inputSkillset"><b>Skill Set</b></label>
                                    <select name="skillset" id="input_skillset" autofocus required>
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
                                </div>

                                @error('skillsset')
                                <p style="color:red;">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-row">
                                <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <label for="inputSkillsetDescription"><b>Skillset Description</b></label>
                                    <textarea name="skillset_description" class="form-control" id="input_skillset_description" placeholder="Please describe the nature of the skills that you offer" maxlength="256" rows="3" autofocus required></textarea>
                                    @error('skillset_description')
                                    <p style="color:red;">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <p class="card-text">Please <b><u>NOTE</u></b> all <b><u>FILE UPLOADS</u></b> except photos, must contain your <b>ID Number</b> for quicker sorting within our records.
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <p class="card-text">Please <b><u>UPLOAD</u></b> a <b><u>PASSPORT SIZE</u></b> photo of yourself. (Allowed file types include: JPG, JPEG, PNG, GIF, SVG).
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <span class="btn btn-primary">
                                                    <input type="file" name="image" id="imgInp">
                                                </span>
                                            </span>
                                        </div>

                                        @error('image')
                                        <p style="color:red;">{{$message}}</p>
                                        @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <p class="card-text">Please <b><u>UPLOAD</u></b> a <b><u>POLICE REPORT</u></b> for <b><u>VERIFICATION</u></b> (Allowed file types include: PDF, DOC, DOCX).</p>

                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <span class="btn btn-primary">
                                                <input type="file" name="report">
                                            </span>
                                        </span>
                                    </div>

                                    @error('report')
                                    <p style="color:red;">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <p class="card-text">Please <b><u>UPLOAD</u></b> at least 3(three) <b><u>LETTERS OF RECOMMENDATION</u></b> from your previous employers.<b>MERGE</b> all 3 letters into one document then submit. (Allowed file types include: PDF, DOC, DOCX).</p>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <span class="btn btn-primary">
                                                <input type="file" name="letters">
                                            </span>
                                        </span>
                                    </div>

                                    @error('letters')
                                    <p style="color:red;">{{$message}}</p>
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


