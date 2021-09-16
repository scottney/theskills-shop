@extends('layouts.app')

@section('content')

<!------- Start Of Create Blog Posts Section ------->

<section id="blog-posts">
	<div class="container-fluid">
		<div class="row" style="background-color: #A25C0C;">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    			<div class="card shadow">
    				<div class="card-header">
    					<div class="card-title">
    						<div class="py-3 text-center">
    							<h5 class="text-center display-5">EDIT BLOG POST</h5>
    						</div>
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
    							<form action=" {{ route('blog.update', $blog->id) }} " method="POST" name="edit_blog_post" enctype="multipart/form-data" accept-charset="UTF-8">
    								@csrf
    								@method('PATCH')

    								<div class="form-row">
    									<div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-12">
    										<input type="hidden" class="form-control" id="inputId" name="id" value="{{ $blog['id'] }}">
    									</div>
    								</div>

    								<div class="form-row">
    									<div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4" style="padding-left: 30px;">
    										<label for="inputBlogPostName"><b>New Title</b></label>
    										<input type="text" class="form-control" id="input_blog_post_name" name="title" value=" {{ $blog['title'] }} " placeholder="Title..." required autocomplete="title" autofocus>
    									</div>

    									<div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
    										<label for="inputBlogPostAuthor"><b>New Author</b></label>
    										<input type="text" class="form-control" id="input_blog_post_author" name="author" value=" {{ $blog['author'] }} " placeholder="Author..." required autocomplete="author" autofocus>
    									</div>

    									<div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
    										<label for="inputBlogPostDescription"><b>New Description</b></label>
    										<textarea class="form-control" id="input_blog_post_description" name="description" value="#" placeholder="Description..." required autocomplete="description" autofocus>
    											{{ $blog['description'] }}
    										</textarea>
    									</div>
    								</div>

    								<div class="form-row">
				                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4" style="padding: 20px;">
				                            <label class="control-label" for="inputcreatedAt">Created At</label>
				                            <input type="datetime" class="form-control" id="inputCreatedat" name="created_at" value="{{ $blog['created_at'] }}" readonly>
				                        </div>

				                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4" style="padding: 20px;">
				                            <label class="control-label" for="inputupdatedAt">Updated At</label>
				                            <input type="datetime" class="form-control" id="inputUpdatedat" name="updated_at" value="{{ $blog['updated_at'] }}" readonly>
				                        </div>

				                        <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>

				                    </div>

				                    <div class="card-footer text-muted">
				                    	<div class="form-row">
											<div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-12">
												<button class="btn btn-danger" type="reset">Reset</button>
												<button class="btn btn-success" type="submit">Submit</button>
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
</section>

<!------- End Of Create Blog Posts Section ------->

@endsection