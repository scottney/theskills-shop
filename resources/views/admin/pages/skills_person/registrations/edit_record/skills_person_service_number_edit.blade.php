@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid content-wrapper container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="card-title">
                            <h5 class="display-5">SKILLS PERSON SERVICE NUMBER EDIT</h5>
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
                                <form action=" {{ route('skills_person_registration.update', $skillsPersonRegistration->id) }} " role="form" method="POST" name="skills_persons_service_numbers_edit_form" enctype="multipart/form-data" accept-charset="UTF-8">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-row">
                                        <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <input type="hidden" class="form-control" id="inputId" name="id" value="{{ $skillsPersonRegistration['id'] }}">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label class="control-label" for="inputFirstName">First Name</label>
                                            <input type="text" class="form-control" id="input_first_name" name="first_name" value="{{ $skillsPersonRegistration['first_name'] }}" readonly>
                                        </div>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label class="control-label" for="inputSurname">Surname</label>
                                            <input type="text" class="form-control" id="input_surname" name="surname" value="{{ $skillsPersonRegistration['surname'] }}" readonly>
                                        </div>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label class="control-label" for="inputMiddleName">Middle Name</label>
                                            <input type="text" class="form-control" id="input_middle_name" name="middle_name" value="{{ $skillsPersonRegistration['middle_name'] }}" readonly>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                             <label class="control-label" for="inputIdNumber">ID Number</label>
                                            <input type="number" class="form-control" id="input_id_number" name="id_number" value="{{ $skillsPersonRegistration['id_number'] }}" readonly>
                                        </div>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label class="control-label" for="inputSkillsPersonServiceNumber">Skills Persons Service Number</label>
                                            <div class="form-row">
                                                <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <input type="text" class="form-control" id="input_skills_person_service_number" name="skills_person_service_number" value="{{ $skillsPersonRegistration['skills_person_service_number'] }}" maxlength="9">
                                                </div>
                                                <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                     <button onclick="RandomSkillsPersonServiceNumberGenerator()" type="button" class="btn btn-info">Generate S.P.S.N</button>
                                                </div>
                                            </div>
                                            @error('skills_person_service_number')
                                            <p style="color:red"> {{$message}} </p>
                                            @enderror
                                        </div>

                                        <script type="text/javascript">
                                        // Start of random id generator function 
                                        RandomSkillsPersonServiceNumberGenerator();
                                        function RandomSkillsPersonServiceNumberGenerator() {
                                        //Returns a random integer from 0 to 1,000,000,000
                                        var random_skills_person_service_number = document.getElementById('input_skills_person_service_number');
                                        random_skills_person_service_number.value = Math.floor(Math.random() * 1000000001);
                                    }
                                        // End of random id generator function
                                        </script>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                             <label class="control-label" for="inputPhoneNumber">Phone Number</label>
                                            <input type="number" class="form-control" id="input_phone_number" name="phone_number" value="{{ $skillsPersonRegistration['phone_number'] }}" readonly>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label class="control-label" for="inputAlternativePhoneNumber">Alternative Phone Number</label>
                                            <input type="number" class="form-control" id="input_alternative_phone_number" name="alternative_phone_number" value="{{ $skillsPersonRegistration['alternative_phone_number'] }}" readonly>
                                        </div>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                             <label class="control-label" for="inputEmail">Email</label>
                                            <input type="text" class="form-control" id="input_email" name="email" value="{{ $skillsPersonRegistration['email'] }}" readonly>
                                        </div>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                             <label class="control-label" for="inputAddress">Address</label>
                                            <input type="text" class="form-control" id="input_address" name="address" value="{{ $skillsPersonRegistration['address'] }}" readonly>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                             <label class="control-label" for="inputSkillset">Skillset</label>
                                            <input type="text" class="form-control" id="input_skillset" name="skillset" value="{{ $skillsPersonRegistration['skillset'] }}" readonly>
                                        </div>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                             <label class="control-label" for="inputSkillsetDescription">Skillset Description</label>
                                            <textarea class="form-control" id="input_skillset_description" name="skillset_description" value="#" readonly>
                                                {{ $skillsPersonRegistration['skillset_description'] }}
                                            </textarea>
                                        </div>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                             <label class="control-label" for="inputPassportPhoto">Passport Photo</label>
                                            <input type="text" class="form-control" id="input_passport_photo" name="image" value="{{ $skillsPersonRegistration['image'] }}" readonly>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label class="control-label" for="inputPoliceReport">Police Report</label>
                                            <input type="text" class="form-control" id="input_police_report" name="report" value="{{ $skillsPersonRegistration['report'] }}" readonly>
                                        </div>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label class="control-label" for="inputLetters">Letters</label>
                                            <input type="text" class="form-control" id="input_letters" name="letters" value="{{ $skillsPersonRegistration['letters'] }}" readonly>
                                        </div>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                             <label class="control-label" for="inputCreatedAt">Created At</label>
                                            <input type="datetime" class="form-control" id="input_created_at" name="created_at" value="{{ $skillsPersonRegistration['created_at'] }}" readonly>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label class="control-label" for="inputUpdatedAt">Updated At</label>
                                            <input type="datetime" class="form-control" id="input_updated_at" name="updated_at" value="{{ $skillsPersonRegistration['updated_at'] }}" readonly>

                                        </div>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>

                                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
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


