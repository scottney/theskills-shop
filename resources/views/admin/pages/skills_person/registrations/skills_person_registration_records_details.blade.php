@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid content-wrapper">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                @if(Session::has('skills-person-service-number-successfull-email'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-check"></i>{{Session::get('skills-person-service-number-successfull-email')}}
                </div>

                @elseif(Session::has('skills-person-service-number-failed-email'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-xmark"></i>{{Session::get('skills-person-service-number-failed-email')}}
                </div>

                @elseif(Session::has('image-download-file-error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-xmark"></i>{{Session::get('image-download-file-error')}}
                </div>

                @elseif(Session::has('police-report-download-file-error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-xmark"></i>{{Session::get('police-report-download-file-error')}}
                </div>

                @elseif(Session::has('recommendation-letter-download-file-error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-xmark"></i>{{Session::get('recommendation-letter-download-file-error')}}
                </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="card shadow">
                    <div class="card-header primaryColor">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="card-title">
                                    <h2 class="text-white"><b>SKILLS PERSON REGISTRATION RECORDS</b></h2>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <form action="{{ route('skills_person_registration_search') }}" method="GET" class="search_skills_person_registration_form" id="query" name="query" accept-charset="UTF-8" enctype="multipart/form-data">
                                            <div class="row">
                                                @csrf

                                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                    <div class="row">
                                                       <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8 noPadding">
                                                            <input type="text" class="form-control" value="" name="query" id="query" placeholder="Search customer ratings here..." autofocus>
                                                       </div>

                                                       <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 noPadding">
                                                           <button type="submit" class="fa fa-search search_icon" title="Search..."></button>
                                                       </div>
                                                   </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-1">
                            @if (Session::has('users-error-message'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                <i class="fa-solid fa-circle-xmark"></i>{{Session::get('users-error-message')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="card-body" id="skills_person_registration_list" style="overflow-x: scroll;">
                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>ID</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $skillsPersonRegistration->id }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>FIRST NAME</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $skillsPersonRegistration->first_name }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>SURNAME</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $skillsPersonRegistration->surname }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>MIDDLE NAME</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $skillsPersonRegistration->middle_name }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>ID NUMBER</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $skillsPersonRegistration->id_number }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>SKILLS PERSON SERVICE NUMBER</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $skillsPersonRegistration->skills_person_service_number }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>PHONE NUMBER</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $skillsPersonRegistration->phone_number }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>ALTERNATIVE PHONE NUMBER</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $skillsPersonRegistration->alternative_phone_number }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>SKILLS PERSON EMAIL</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <div class="row">
                                    <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                                        <p class="">{{ $skillsPersonRegistration->skills_person_email }}</p>
                                    </div>

                                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 pt-2 border">
                                        <a href=" {{ route('mailSPSN', $skillsPersonRegistration->id) }} " class="bg-primary border border-secondary p-1 serviceNumberButton" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Skills Person Service Number">Send SPSN</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>ADDRESS</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $skillsPersonRegistration->address }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>SKILLSET</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $skillsPersonRegistration->skillset }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>SKILLSET DESCRIPTION</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $skillsPersonRegistration->skillset_description }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>IMAGES</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <div class="row">
                                    <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                                        <p class="">{{ $skillsPersonRegistration->images }}</p>
                                    </div>

                                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 pt-2 border">
                                        <a href="{{ route('downloadSkillsPersonImage', $skillsPersonRegistration->id) }}" class="bg-secondary border border-secondary p-1 serviceNumberButton" data-bs-toggle="tooltip" data-bs-placement="top" title="Download Image">Download Image</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>REPORTS</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <div class="row">
                                    <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                                        <p class="">{{ $skillsPersonRegistration->reports }}</p>
                                    </div>

                                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 pt-2 border">
                                        <a href="{{ route('downloadSkillsPersonPoliceReport', $skillsPersonRegistration->id) }}" class="bg-warning border border-secondary p-1 serviceNumberButton" data-bs-toggle="tooltip" data-bs-placement="top" title="Download Report">Download Report</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>LETTERS</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <div class="row">
                                    <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                                        <p class="">{{ $skillsPersonRegistration->letters }}</p>
                                    </div>

                                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 pt-2 border">
                                        <a href="{{ route('downloadSkillsPersonRecommendationLetter', $skillsPersonRegistration->id) }}" class="bg-success border border-secondary p-1 serviceNumberButton" data-bs-toggle="tooltip" data-bs-placement="top" title="Download Letter">Download Letter</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>CREATED AT</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $skillsPersonRegistration->created_at }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border">
                                <p class=""><b>UPDATED AT</b></p>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border">
                                <p class="">{{ $skillsPersonRegistration->updated_at }}</p>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection