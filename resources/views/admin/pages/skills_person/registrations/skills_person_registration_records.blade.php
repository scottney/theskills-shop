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
                                    <th scope="col"><b>SKILLS PERSON SERVICE NUMBER</b></th>
                                    <th scope="col"><b>Edit SPSN</b></th>
                                    <th scope="col"><b>PHONE NUMBER</b></th>
                                    <th scope="col"><b>SKILLSET</b></th>
                                    <th scope="col"><b>SKILLSSET DESCRIPTION</b></th>
                                    <th scope="col"><b>OTHER OPTIONS</b></th>
                                </tr>
                            </thead>
                    
                            @foreach($skillsPersonRegistration as $registration)
                            <tbody class="list">
                                <tr id="skills_person_registration_items">
                                    <td class="id" scope="row"> {{ $registration->id }} </td>
                                    <td class="first_name"> {{ $registration->first_name }} </td>
                                    <td class="surname"> {{ $registration->surname }} </td>
                                    <td class="skills_person_service_number"> {{ $registration->skills_person_service_number }} </td>
                                    @if ($registration->skills_person_service_number == null)
                                    <td> <a class="btn btn-primary" href=" {{ route('edit_skills_person_service_number', $registration->id) }} ">Edit SPSN</a> </td>
                                    @else
                                    <td></td>
                                    @endif
                                    <td class="phone_number"> {{ $registration->phone_number }} </td>
                                    <td class="skillset"> {{ $registration->skillset }} </td>
                                    <td class="skillset_description"> {{ $registration->skillset_description }} </td>
                                    @if ($registration->skills_person_service_number == null)
                                    <td></td>
                                    @else
                                    <td class="other_options">
                                        <a href="{{ route('skillsPersonData', $registration->id) }}" class="btn btn-primary" id="" data-bs-toggle="tooltip" data-bs-placement="top" title="View all skills person details"><i class="fa-solid fa-eye"></i></a>
                                    </td>
                                    @endif
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