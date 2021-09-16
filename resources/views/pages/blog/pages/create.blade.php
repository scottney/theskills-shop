@extends('layouts.app')

@section('content')

<!------- Start Of Create Blog Posts Section ------->

<section id="blog-posts">
	<div class="container-fluid" style="margin-top: 55px;">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    			<div class="card shadow">
    				<div class="card-header">
    					<div class="card-title">
    						<div class="py-3 text-center">
    							<h5 class="text-center display-5">CREATE BLOG POST</h5>
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
    				</div>

    				<div class="row">
    					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    						<form action=" {{ route('blog.store') }} " method="POST" name="create_blog_post" class="" enctype="multipart/form-data" accept-charset="UTF-8">
    							@csrf

    							<div class="form-row">
    								<div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4" style="padding-left: 30px;">
    									<label for="inputBlogPostName"><b>Title</b></label>
    										<input type="text" class="form-control" id="input_blog_post_name" name="title" placeholder="Title..." required autocomplete="title" autofocus>
    								</div>

									<div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
										<label for="inputBlogPostAuthor"><b>Author</b></label>
										<input type="text" class="form-control" id="input_blog_post_author" name="author" placeholder="Author..." required autocomplete="author" autofocus>
									</div>

									<div class="form-group col-sm-4 col-md-4 col-lg-4 col-xl-4">
										<label for="inputBlogPostDescription"><b>Description</b></label>
										<textarea class="form-control" id="input_blog_post_description" name="description" placeholder="Description..." required autocomplete="description" autofocus></textarea>
									</div>

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
</section>

<!------- End Of Create Blog Posts Section ------->

@endsection