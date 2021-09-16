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
                                    <h5 class="display-5">SKILLS PERSON RATING RECORDS</h5>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="row">
                                    <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                        <form action="{{ route('skills_person_rating_search') }}" method="GET" class="search_skills_person_rating_form" id="query" name="query" accept-charset="UTF-8" enctype="multipart/form-data">
                                            <div class="form-row">
                                                @csrf

                                                <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <input type="text" class="form-control" value="" name="query" id="query" placeholder="Search skills person ratings here..." autofocus>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                        {{-- Skills person rating sort functionality will go here --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body" id="skills_person_rating_list">
                        <table class="table table-striped table-bordered m-3">
                            <thead>
                                <tr>
                                    <th scope="col"><b>ID</b></th>
                                    <th scope="col"><b>SKILLS PERSON SERVICE NUMBER</b></th>
                                    <th scope="col"><b>RATE</b></th>
                                    <th scope="col"><b>CREATED AT</b></th>
                                    <th scope="col"><b>UPDATED AT</b></th>
                                </tr>
                            </thead>
                            @foreach($skillsPersonRating as $rating)
                            <tbody class="list">
                                <tr id="skills_person_rating_items">
                                    <td class="id" scope="row">{{ $rating->id }}</td>
                                    <td class="skills_person_service_number"> {{ $rating->skills_person_service_number }} </td>
                                    <td class="rate"> {{ $rating->rate }} </td>
                                    <td class="created_at"> {{ $rating->created_at }} </td>
                                    <td class="updated_at"> {{ $rating->updated_at }} </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        <div class="d-flex justify-content-center mt-2">
                            <ul class="pagination">
                                {!! $skillsPersonRating->links() !!}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection