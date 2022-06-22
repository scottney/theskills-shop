@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid content-wrapper">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                @if (Session::has('skills-person-service-number-update-success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-xmark"></i>{{Session::get('skills-person-service-number-update-success')}}
                </div>

                @elseif(Session::has('skills-person-service-number-successfull-email'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-check"></i>{{Session::get('skills-person-service-number-successfull-email')}}
                </div>

                @elseif(Session::has('skills-person-service-number-failed-email'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-xmark"></i>{{Session::get('skills-person-service-number-failed-email')}}
                </div>

                @elseif(Session::has('image-download-success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-check"></i>{{Session::get('image-download-success')}}
                </div>

                @elseif(Session::has('image-download-failed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-xmark"></i>{{Session::get('image-download-failed')}}
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
                        <table class="table table-striped table-bordered m-3">
                            <thead>
                                <tr>
                                    <th scope="col"><b>ID</b></th>
                                    <th scope="col"><b>FIRST NAME</b></th>
                                    <th scope="col"><b>SURNAME</b></th>
                                    <th scope="col"><b>MIDDLE NAME</b></th>
                                    <th scope="col"><b>ID NUMBER</b></th>
                                    <th scope="col"><b>SKILLS PERSON SERVICE NUMBER</b></th>
                                    <th scope="col"><b>Edit SPSN</b></th>
                                    <th scope="col"><b>PHONE NUMBER</b></th>
                                    <th scope="col"><b>ALTERNATIVE PHONE NUMBER</b></th>
                                    <th scope="col"><b>SKILLS PERSON EMAIL</b></th>
                                    <th scope="col"><b>ADDRESS</b></th>
                                    <th scope="col"><b>SKILLSET</b></th>
                                    <th scope="col"><b>SKILLSSET DESCRIPTION</b></th>
                                    <th scope="col"><b>IMAGE</b></th>
                                    <th scope="col"><b>REPORT</b></th>
                                    <th scope="col"><b>LETTERS</b></th>
                                    <th scope="col"><b>CREATED AT</b></th>
                                    <th scope="col"><b>UPDATED AT</b></th>
                                </tr>
                            </thead>
                    
                            @foreach($skillsPersonRegistration as $registration)
                            <tbody class="list">
                                <tr id="skills_person_registration_items">
                                    <td class="id" scope="row"> {{ $registration->id }} </td>
                                    <td class="first_name"> {{ $registration->first_name }} </td>
                                    <td class="surname"> {{ $registration->surname }} </td>
                                    <td class="middle_name"> {{ $registration->middle_name }} </td>
                                    <td class="id_number"> {{ $registration->id_number }} </td>
                                    <td class="skills_person_service_number"> {{ $registration->skills_person_service_number }} </td>
                                    @if ($registration->skills_person_service_number == null)
                                    <td> <a class="btn btn-primary" href=" {{ route('edit_skills_person_service_number', $registration->id) }} ">Edit SPSN</a> </td>
                                    @else
                                    <td></td>
                                    @endif
                                    <td class="phone_number"> {{ $registration->phone_number }} </td>
                                    <td class="alternative_phone_number"> {{ $registration->alternative_phone_number }} </td>
                                    @if ($registration->skills_person_service_number == null)
                                    <td class="skills_person_email"> {{ $registration->skills_person_email }}</td>
                                    @else
                                    <td class="skills_person_email"> {{ $registration->skills_person_email }} <br><br> 
                                        <a href=" {{ route('mailSPSN', $registration->id) }} " class="bg-primary border border-secondary p-1 serviceNumberButton" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Skills Person Service Number">Send SPSN</a></td>
                                    @endif
                                    <td class="address"> {{ $registration->address }} </td>
                                    <td class="skillset"> {{ $registration->skillset }} </td>
                                    <td class="skillset_description"> {{ $registration->skillset_description }} </td>
                                    @if ($registration->skills_person_service_number == null)
                                    <td class="image"> {{ $registration->image }}</td>
                                    <td class="report"> {{ $registration->report }}</td>
                                    <td class="letters"> {{ $registration->letters }}</td>
                                    @else
                                    <td class="image"> {{ $registration->image }}<br><br>
                                        <a href="{{ route('imageFileDownloader', $registration->id) }}" class="bg-dark border border-secondary p-1 serviceFileButton" data-bs-toggle="tooltip" data-bs-placement="top" title="Download Image">Download Image</a>
                                    </td>
                                    <td class="report"> {{ $registration->report }} <br><br> 
                                        <a href="" class="bg-warning border border-secondary p-1 serviceFileButton" data-bs-toggle="tooltip" data-bs-placement="top" title="Download Report">Download Report</a></td>
                                    <td class="letters"> {{ $registration->letters }}<br><br> 
                                        <a href="" class="bg-success border border-secondary p-1 serviceFileButton" data-bs-toggle="tooltip" data-bs-placement="top" title="Download Letter">Download Letter</a> </td>
                                    @endif 
                                    <td class="created_at"> {{ $registration->created_at }} </td>
                                    <td class="updated_at"> {{ $registration->updated_at }} </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        <div class="d-flex justify-content-center mt-2">
                            <ul class="pagination">
                                {!! $skillsPersonRegistration->links() !!}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection