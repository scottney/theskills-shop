@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid content-wrapper container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="row m-3">
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="card-title">
                                    <h5 class="display-5">SKILLS PERSON REGISTRATION RECORDS</h5>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="row">
                                    <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                        <form action="{{ route('skills_person_registration_search') }}" method="GET" class="search_skills_person_registration_form" id="query" name="query" accept-charset="UTF-8" enctype="multipart/form-data">
                                            <div class="form-row">
                                                @csrf

                                                <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <input type="text" class="form-control" value="" name="query" id="query" placeholder="Search skills person registration here..." autofocus>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                        {{-- Skills person registration sort functionality will go here --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body" id="skills_person_registration_list">
                        <table class="table table-striped table-bordered m-3">
                            <thead>
                                <tr>
                                    <th scope="col"><b>ID</b></th>
                                    <th scope="col"><b>FIRST NAME</b></th>
                                    <th scope="col"><b>SURNAME</b></th>
                                    <th scope="col"><b>MIDDLE NAME</b></th>
                                    <th scope="col"><b>ID NUMBER</b></th>
                                    <th scope="col"><b>SKILLS PERSON SREVICE NUMBER</b></th>
                                    <th scope="col"><b>Edit SPSN</b></th>
                                    <th scope="col"><b>PHONE NUMBER</b></th>
                                    <th scope="col"><b>ALTERNATIVE PHONE NUMBER</b></th>
                                    <th scope="col"><b>EMAIL</b></th>
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
                                    <td> <a class="btn btn-primary" href=" {{ route('edit_skills_person_service_number', $registration->id) }} ">Edit SPSN</a> </td>
                                    <td class="phone_number"> {{ $registration->phone_number }} </td>
                                    <td class="alternative_phone_number"> {{ $registration->alternative_phone_number }} </td>
                                    <td class="email"> {{ $registration->email }} </td>
                                    <td class="address"> {{ $registration->address }} </td>
                                    <td class="skillset"> {{ $registration->skillset }} </td>
                                    <td class="skillset_description"> {{ $registration->skillset_description }} </td>
                                    <td class="image"> {{ $registration->image }} </td>
                                    <td class="report"> {{ $registration->report }} </td>
                                    <td class="letters"> {{ $registration->letters }} </td>
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