@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid content-wrapper">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                @if(Session::has('newsletter-sent-successfully'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-check"></i>{{Session::get('newsletter-sent-successfully')}}
                </div>
                                            
                @elseif(Session::has('newsletter-sent-error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-xmark"></i>{{Session::get('newsletter-sent-error')}}
                </div>

                @elseif(Session::has('newsletter-upload-error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-xmark"></i>{{Session::get('newsletter-upload-error')}}
                </div>
                @endif
            </div>
        </div>

        <div class="row pt-3">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <p>Supported filetypes include:<b>.docx, .doc, .pdf</b></p>
                <form method="POST" action=" {{ route('sendout') }} " enctype="multipart/form-data" role="form" accept-charset="UTF-8">
                    @csrf

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <input type="file" class="form-control @error('newsletter_file') is-invalid @enderror" name="newsletter_file">

                            @error('newsletter_file')
                            <span class="invalid-feedback alert alert-warning" role="alert">
                                <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row pt-3">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <button type="submit" class="btn btn-primary float-start">Send Newsletter</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6"></div>
        </div>

        <div class="row pt-3">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="card shadow">
                    <div class="card-header primaryColor">
                        <div class="card-title">
                             <h2 class="text-white"><b>NEWS LETTER SUBSCRIPTIONS</b></h2>
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
                                <tr id="newsletter_items">
                                    <td class="id" scope="row"> {{ $letter->id }} </td>
                                    <td class="email"> {{ $letter->newsletter_subscription_emails }} </td>
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