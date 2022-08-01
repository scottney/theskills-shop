@extends('layouts.app')

@section('content')

<!------- Start Of Edit Blog Posts Section ------->

<section id="blog-posts">
	<div class="row pt-5 pb-5">
		<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
		<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
			<div class="card" id="portal_card_container">
				<div class="card-header primaryColor">
					<div class="card-title">
    					<h3 class="text-center text-white"><b>EDIT BLOG POST</b></h3>
    				</div>
    			</div>

    			<div class="card-body">
    				<div class="row">
    					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    							<form action=" {{ route('blog.update', $blog->id) }} " method="POST" name="edit_blog_post" enctype="multipart/form-data" accept-charset="UTF-8">
    								@csrf
    								@method('PATCH')

    								<div class="row">
    									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    										<input type="hidden" class="form-control" id="inputId" name="id" value="{{ $blog['id'] }}">
    									</div>
    								</div>

    								<div class="row">
    									<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
    										<label for="inputBlogPostName"><b>New Title</b></label>

    										<div class="row">
    											<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    												<input type="text" class="form-control" id="input_blog_post_name" name="title" value=" {{ $blog['title'] }} " placeholder="Title..." autocomplete="title" autofocus required>
    											</div>
    										</div>
    									</div>

    									<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
    										<label for="inputBlogPostAuthor"><b>New Author</b></label>

    										<div class="row">
    											<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    												<input type="text" class="form-control" id="input_blog_post_author" name="author" value=" {{ $blog['author'] }} " placeholder="Author..." autocomplete="author" autofocus required>
    											</div>
    										</div>
    									</div>
    								</div>

    								<div class="row pt-3">
									<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
										<label for="inputBlogPostImage"><b>New Image</b></label>

    									<div class="row">
    										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    											<div class="input-group pb-3">
    												<span class="input-group-btn">
    													<span class="btn btn-primary">
    														<input type="file" name="blog_post_image" class="form-control @error('blog_post_image') is-invalid @enderror" id="input_blog_post_image" value="{{$blog['blog_post_image']}}" onchange="previewImage(this);" autofocus>

    														<p class="float-end pt-3" id="previewTextImage" data-bs-toggle="modal" data-bs-target="#blogImagePreviewModal">Preview Image</p>
                                                    </span>
                                                </span>
                                            </div>

                                            <input type="text" class="form-control" id="input_blog_post_image" value="{{$blog['blog_post_image']}}" title="Old Image" autofocus readonly>

    										</div>
    									</div>
    								</div>

									<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
    									<label for="inputBlogPostVideo"><b>New Video</b></label>

    									<div class="row">
    										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    											<div class="input-group pb-3">
    												<span class="input-group-btn">
    													<span class="btn btn-primary">
    														<input type="file" class="form-control @error('blog_post_video') is-invalid @enderror" id="input_blog_post_video" name="blog_post_video" accept="video/*" value="{{$blog['blog_post_video']}}" onchange="previewVideo(this);" autofocus>

    														<p class="float-end pt-3" id="previewTextVideo" data-bs-toggle="modal" data-bs-target="#blogVideoPreviewModal">Preview Video</p>
                                                    </span>
                                                </span>
                                            </div>

                                            <input type="text" class="form-control" id="input_blog_post_video" value="{{$blog['blog_post_video']}}" title="Old Video" autofocus readonly>

    										</div>
    									</div>
    								</div>
								</div>

    								<div class="row pt-3">
				                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
				                            <label class="control-label" for="inputcreatedAt"><b>Created At</b></label>

				                            <input type="datetime" class="form-control" id="input_created_at" name="created_at" value="{{ $blog['created_at'] }}" readonly>
				                        </div>

				                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
				                            <label class="control-label" for="inputupdatedAt"><b>Updated At</b></label>

				                            <input type="datetime" class="form-control" id="input_updated_at" name="updated_at" value="{{ $blog['updated_at'] }}" readonly>
				                        </div>
				                    </div>

    								<div class="row pt-3">
    									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    										<label for="inputBlogPostDescription"><b>New Description</b></label>

    										<div class="row">
    											<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    												<textarea class="form-control" id="input_blog_post_description" name="description" value="#" placeholder="Description..." required autocomplete="description" rows="25" autofocus>{{ $blog['description'] }}</textarea>
    											</div>
    										</div>
    									</div>
    								</div>

				                    <div class="row pt-3">
										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
											<button class="btn btn-primary float-end" type="submit">Update</button>
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

<!------- End Of Edit Blog Posts Section ------->

@endsection