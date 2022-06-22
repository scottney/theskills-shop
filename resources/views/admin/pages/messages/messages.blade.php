@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid content-wrapper">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="card shadow">
                    <div class="card-header primaryColor">
                        <div class="card-title">
                            <h2 class="text-white"><b>MESSAGES</b></h2>      
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered m-3" id="customerMessagesTable">
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
                            @foreach($messages as $message)
                            <tbody class="list">
                                <tr id="contacts_items">
                                    <td class="id"> {{ $message->id }} </td>
                                    <td class="first_name"> {{ $message->first_name }} </td>
                                    <td class="surname"> {{ $message->surname }} </td>
                                    <td class="middle_name"> {{ $message->middle_name }} </td>
                                    <td class="phone_number"> {{ $message->phone_number }} </td>
                                    <td class="contact_email"> <a href="mailto:">{{ $message->contact_email }}</a> </td>
                                    <td class="text_message"> {{ $message->text_message }} </td>
                                    <td class="created_at"> {{ $message->created_at }} </td>
                                    <td class="updated_at"> {{ $message->updated_at }} </td>
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