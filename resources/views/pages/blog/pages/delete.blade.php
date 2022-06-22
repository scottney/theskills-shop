@extends('layouts.app')

@section('content')

<!------- Start Of Create Blog Posts Section ------->

<section id="blog-posts">
	<div class="row pt-5 pb-5">
		<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
			<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
    			<div class="card" id="portal_card_container">
    				<div class="card-header primaryColor">
    					<div class="card-title">
    						<h3 class="text-center text-white"><b>DELETE BLOG POST</b></h3>
    					</div>
    				</div>

    				<div class="card-body">
    					<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
								<form action=" {{ route('blog.destroy', $blog->id) }} " method="POST" name="edit_blog_post" enctype="multipart/form-data" accept-charset="UTF-8">
									@csrf
									@method('DELETE')
									<div class="row">
										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
											<input type="hidden" class="form-control" id="inputId" name="id" value="{{ $blog['id'] }}">
										</div>
									</div>
										
									<div class="row">
										<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
											<label for="inputBlogPostName"><b>Title</b></label>
											<input type="text" class="form-control" id="input_blog_post_name" name="title" value=" {{ $blog['title'] }} " placeholder="Title..." readonly>
										</div>

										<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
											<label for="inputBlogPostAuthor"><b>Author</b></label>
											<input type="text" class="form-control" id="input_blog_post_author" name="author" value=" {{ $blog['author'] }} " placeholder="Author..." readonly>
										</div>
									</div>

									<div class="row pt-3">
									<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
										<label for="inputBlogPostImage"><b>Image</b></label>

    									<div class="row">
    										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <input type="text" class="form-control" id="input_blog_post_image" value="{{$blog['blog_post_image']}}" autofocus readonly>
    										</div>
    									</div>
    								</div>

									<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
    									<label for="inputBlogPostVideo"><b>Video</b></label>

    									<div class="row">
    										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <input type="text" class="form-control" id="input_blog_post_video" value="{{$blog['blog_post_video']}}" autofocus readonly>
    										</div>
    									</div>
    								</div>
								</div>

									<div class="row pt-3">
										<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
											<label class="control-label" for="inputCreatedAt"><b>Created At</b></label>
											<input type="datetime" class="form-control" id="input_created_at" name="created_at" value="{{ $blog['created_at'] }}" readonly>
										</div>

										<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
											<label class="control-label" for="inputUpdatedAt"><b>Updated At</b></label>
					                    	<input type="datetime" class="form-control" id="input_updated_at" name="updated_at" value="{{ $blog['updated_at'] }}" readonly>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
											<label for="inputBlogPostDescription"><b>Description</b></label>
											<textarea class="form-control" id="input_blog_post_description" name="description" value="#" placeholder="Description..." readonly>
												{{ $blog['description'] }}
											</textarea>
										</div>
					                </div><hr>

									<div class="row">
										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
											<button class="btn btn-danger float-end" type="submit">Delete</button>
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