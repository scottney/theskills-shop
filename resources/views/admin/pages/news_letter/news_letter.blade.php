@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid content-wrapper container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="card-title">
                             <h5 class="display-5">NEWS LETTER SUBSCRIPTIONS</h5>
                        </div>
                    </div>

                     <div class="card-body">
                         <table class="table table-striped table-bordered m-3">
                            <thead>
                                <tr>
                                    <th scope="col"><b>ID</b></th>
                                    <th scope="col"><b>EMAIL</b></th>
                                    <th scope="col"><b>CREATED AT</b></th>
                                </tr>
                            </thead>
                            @foreach($newsLetter as $letter)
                            <tbody class="list">
                                <tr id="mewsletter_items">
                                    <td class="id" scope="row"> {{ $letter->id }} </td>
                                    <td class="email"> {{ $letter->email }} </td>
                                    <td class="created_at"> {{ $letter->created_at }} </td>
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