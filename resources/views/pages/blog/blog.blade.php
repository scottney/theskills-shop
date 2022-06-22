@extends('layouts.app')

@section('content')

<!------- Start Of Top Blog Section ------->
<section id="top-section">
	<div class="row background-image">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
			<h1 class="text-white text-center blogImageText">Quality services, Affordable prices...</h1>
		</div>
	</div>
</section>

<!------- End Of Top Blog Section ------->

<!------- Start Of Middle Blog Section ------->

<section id="middle-section">
	<div class="row pt-3">
		<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
			<h3 class="text-center"><u>Struggling to locate work as a <b><i>Skills Person</i></b>?</u></h3>

			<p class="blogTextIndent">Skilled Personnel tend to expirience a unique set of challenges when looking for continous sources of employment. Some of the challenges include:
				<ul class="list-group">
					<li class="list-group-item list-group-item-info">Skilled Persons tend to lack a solid platform for airing out their port folio. Due to this, as a business we have made it our sole objective to make it possible for skilled workers to find continous sources of employment by tracking their port folio and keeping rates on it.</li>
					<li class="list-group-item list-group-item-info">By being part of us, we hold responsibility for all skilled persons. Hence, when employers search for trust worthy skilled personnel, our employees tend to be recommended because as a business we have already created a bond and trust with employers.</li>
					<li class="list-group-item list-group-item-info">We tend to offer kickbacks to our skilled personnel hence providing them with a continous and sustainable form of both revenue and employemnt.</li>
					<li class="list-group-item list-group-item-info">We know how working alone can sometimes be challenging. So when it comes to heavy tasks, we tend to provide more than just ons skilled personnel with the task. This enables for faster and more efficient completion of work</li>
					<li class="list-group-item list-group-item-info">Working for longer hours than what has been agreed upon resides in our skilled personnel being paid overtime capital for the hours that they have worked overtime. This enables for them to be motivated and do the job much better.</li>
				</ul>
			</p>
		</div>

			<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
				<h3 class="text-center"><u>Struggling to find the <b><i>right workers</i></b> for the <b><i>job</i></b>?</u></h3>

				<p class="blogTextIndent">With alot of work within the economy, some of the challenges employers face while looking for skilled personnel include:
					<ul class="list-group">
						<li class="list-group-item list-group-item-secondary">Lack of a platform to easily access the readily available labour offered by personnnel within the economy. Hence, at our platform and with us, it is easy for any employer to be able to book for a specific set of service and get the right individual that offers such a service from us.</li>
						<li class="list-group-item list-group-item-secondary">Inadequacy in verification of skilled personnel within a given trade. As a business, we have made it our priority to verify that our employees are excellent in the services that we deliver to the market.</li>
						<li class="list-group-item list-group-item-secondary">Due to security concerns, employers tend to be cautious with the personnel that they are hiring for work. With our personnel, due diligence is done to verify their background and ascertain that they will not pose as a security threat to the business and our clients.</li>
						<li class="list-group-item list-group-item-secondary">Employers tend to find it difficult to trust every new skilled person that works for them. Due to this they work with refferrals from individuals they know personally. So as a business we provide a bridge in the trust gap between people searching for services and those offering them.</li>
						<li class="list-group-item list-group-item-secondary">People tend to be very occupied with their day to day activities such that when they need a service, it becomes very difficult to search for individuals offering such services. Hence as a business we have made it our priority to bring you the service personnel at the comfort of your residence or business.</li>
					</ul>
				</p>
			</div>
		</div>
	
</section>

<!------- End Of Middle Blog Section ------->

<!------- Start Of Blog Posts Section ------->

<section id="blog-posts">
	<div class="row pb-5">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    		<div class="card shadow">
    			<div class="card-header primaryColor">
    				<div class="card-title">
    					<h1 class="text-center text-white">RECENT BLOG POSTS</h1>
    				</div>
    			</div>

    			<div class="card-body">
    				<div class="row">
    					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" id="blogPostContainer">
    						@if (Auth::check())
    						<a class="btn btn-primary blog-slug" href=" {{ route('create_blog_posts') }} ">Create Post</a>
    						@endif

    						@foreach($blog as $post)

    						<div class="row pt-5">
    							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    								<div class="card" id="containerCardBlogPost">
    									<div class="card-header bg-info">
    										<div class="card-title">
    											<h4 class="text-white">{{ $post->title }}</h4>
    										</div>
    									</div>
    									<div class="card-body" id="containerCardBlogPostBody">
    										<div class="row">
    											<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    												<p class="blogPostCardText">{{ $post->description }}</p>

    												<i class="fa-solid fa-user fa-1x p-1"></i><span>By<b> {{ $post->author }},</b></span><br>
				    								<i class="fa-solid fa-calendar fa-1x p-1"></i><i>Created on {{ date('jS M Y', strtotime($post->updated_at)) }}</i>

				    								<a href="" class="bg-success float-end p-2 blogReadMoreLink" data-bs-toggle="modal" data-bs-target="#blogPostModal">Read more...</a>
    											</div>
    										</div>
    									</div>
    									<div class="card-footer bg-info">
    										@if (Auth::check())
				    						<span>
				    							<a class="btn btn-secondary float-end blog-slug" href=" {{ route('edit_blog_posts', $post->id) }} ">Edit Post</a>
				    							<a class="btn btn-danger float-start blog-slug" href=" {{ route('delete_blog_post', $post->id) }} ">Delete Post</a><br><br>
				    						</span>
				    						@endif
    									</div>
    								</div>
    							</div>
    						</div>

    						<!-- Modal -->
							<div class="modal fade" id="blogPostModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="blogPostLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-scrollable">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="blogPostLabel"><b>{{ $post->title }}</b></h4>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>

										<div class="modal-body" id="blogPostModalBody">
											<img src="{{ Storage::url('app/'.$post->blog_post_image) }}" id="imagePreview" alt="" title="" />
											<p class="blogPostCardText">{{ $post->description }}</p>

											<i class="fa-solid fa-user fa-1x p-1"></i><span>By<b> {{ $post->author }},</b></span><br>
				    						
				    						<i class="fa-solid fa-calendar fa-1x p-1"></i><i>Created on {{ date('jS M Y', strtotime($post->updated_at)) }}</i>
										</div>

										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
    						@endforeach
    					</div>
    				</div>
    			</div>
    		</div>
		</div>
	</div>
</section>

<!------- End Of Blog Posts Section ------->

@endsection