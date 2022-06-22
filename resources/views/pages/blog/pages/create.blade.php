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
    						<h3 class="text-center text-white"><b>CREATE BLOG POST</b></h3>
    					</div>
    				</div>

    				<div class="card-body">
    					<div class="row">
    						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    							<form action=" {{ route('blog.store') }} " method="POST" name="create_blog_post" class="" enctype="multipart/form-data" accept-charset="UTF-8">
    								@csrf

    								<div class="row">
    									<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
    									<label for="inputBlogPostName"><b>Title</b></label>

    									<div class="row">
    										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    											<input type="text" class="form-control @error('title') is-invalid @enderror" id="input_blog_post_name" name="title" placeholder="Title..." autocomplete="title" autofocus>

		    									@error('title')
		                                        <span class="invalid-feedback alert alert-warning" role="alert">
		                                        	<strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
		                                        </span>
		                                        @enderror
    										</div>
    									</div>
    								</div>

									<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
										<label for="inputBlogPostAuthor"><b>Author</b></label>

										<div class="row">
											<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
												<input type="text" class="form-control @error('author') is-invalid @enderror" id="input_blog_post_author" name="author" placeholder="Author..." autocomplete="author" autofocus>

												@error('author')
		                                        <span class="invalid-feedback alert alert-warning" role="alert">
		                                        	<strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
		                                        </span>
		                                        @enderror
											</div>
										</div>
									</div>
								</div>

								<div class="row pt-3">
									<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
										<label for="inputBlogPostImage"><b>Image</b></label>

    									<div class="row">
    										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    											<div class="input-group">
    												<span class="input-group-btn">
    													<span class="btn btn-primary">
    														<input type="file" name="blog_post_image" class="form-control @error('blog_post_image') is-invalid @enderror" id="input_blog_post_image" oninput="previewImageTextReveal();" onchange="previewImage(this);" autofocus>

    														<p class="float-end pt-3" id="previewImageText" data-bs-toggle="modal" data-bs-target="#blogImagePreviewModal">Preview Image</p>

	                                                        @error('blog_post_image')
					                                        <span class="invalid-feedback alert alert-warning" role="alert">
					                                        	<strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
					                                        </span>
					                                        @enderror
                                                    </span>
                                                </span>
                                            </div>
    										</div>
    									</div>
    								</div>

									<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
    									<label for="inputBlogPostVideo"><b>Video</b></label>

    									<div class="row">
    										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    											<div class="input-group">
    												<span class="input-group-btn">
    													<span class="btn btn-primary">
    														<input type="file" class="form-control @error('blog_post_video') is-invalid @enderror" id="input_blog_post_video" name="blog_post_video" accept="video/*" oninput="previewVideoTextReveal();" onchange="previewVideo(this);" autofocus>

    														<p class="float-end pt-3" id="previewVideoText" data-bs-toggle="modal" data-bs-target="#blogVideoPreviewModal">Preview Video</p>

	                                                        @error('blog_post_video')
					                                        <span class="invalid-feedback alert alert-warning" role="alert">
					                                        	<strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
					                                        </span>
					                                        @enderror
                                                    </span>
                                                </span>
                                            </div>
    										</div>
    									</div>
    								</div>
								</div>

								<div class="row pt-3">
									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
										<label for="inputBlogPostDescription"><b>Description</b></label>

										<div class="row">
											<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
												<textarea class="form-control @error('description') is-invalid @enderror" id="input_blog_post_description" name="description" placeholder="Description..." autocomplete="description" autofocus></textarea>

												@error('description')
			                                   	<span class="invalid-feedback alert alert-warning" role="alert">
			                                    	<strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
			                                    </span>
			                                    @enderror
											</div>
										</div>
									</div>
								</div>


								<div class="row pt-3">
									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
										<button type="submit" class="btn btn-primary float-end">Submit</button>
									</div>
								</div>
								</form>
							</div>
						</div>
					</div>
    			</div>
    		</div>
		<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
	</div>

	<div class="row pt-5">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
			<!-- Preview Image Modal -->
			<div class="modal fade" id="blogImagePreviewModal" tabindex="-1" aria-labelledby="previewImageModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="previewImageModalLabel">Image Preview</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<img src="" class="border" id="imagePreview" alt="No Image">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row pt-5">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
			<!-- Preview Video Modal -->
			<div class="modal fade" id="blogVideoPreviewModal" tabindex="-1" aria-labelledby="previewVideoModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="previewVideoModalLabel">Video Preview</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<video id="videoPreview" controls>
								<source src="" type="video">
									Your browser does not support the video tag.
							</video>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!------- End Of Create Blog Posts Section ------->

@endsection