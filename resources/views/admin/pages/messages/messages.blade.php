@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid content-wrapper container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="card-title">
                            <h5 class="display-5">MESSAGES</h5>      
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered m-3">
                            <thead>
                                <tr>
                                    <th scope="col">ID</td>
                                    <th scope="col">FIRST NAME</th>
                                    <th scope="col">SURNAME</th>
                                    <th scope="col">MIDDLE NAME</th>
                                    <th scope="col">PHONE NUMBER</th>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col">TEXT MESSAGE</th>
                                    <th scope="col">CREATED AT</th>
                                    <th scope="col">UPDATED AT</th>
                                </tr>
                            </thead>
                            @foreach($contacts as $contact)
                            <tbody class="list">
                                <tr id="contacts_items">
                                    <td class="id"> {{ $contact->id }} </td>
                                    <td class="first_name"> {{ $contact->first_name }} </td>
                                    <td class="surname"> {{ $contact->surname }} </td>
                                    <td class="middle_name"> {{ $contact->middle_name }} </td>
                                    <td class="phone_number"> {{ $contact->phone_number }} </td>
                                    <td class="email"> {{ $contact->email }} </td>
                                    <td class="text_message"> {{ $contact->text_message }} </td>
                                    <td class="created_at"> {{ $contact->created_at }} </td>
                                    <td class="updated_at"> {{ $contact->updated_at }} </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        <div class="d-flex justify-content-center mt-2">
                            <ul class="pagination"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection