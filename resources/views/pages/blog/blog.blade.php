@extends('layouts.app')

@section('content')

<!------- Start Of Top Blog Section ------->
<section id="top-section">
	<div class="container-fluid background-image" style="padding-top: 55px;">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<h1 class="text-white text-center" style="margin-top: 105px; font-size: 48px;">
					Quality services, Affordable prices...
				</h1>

			</div>
		</div>
	</div>
</section>

<!------- End Of Top Blog Section ------->

<!------- Start Of Middle Blog Section ------->

<section id="middle-section">
	<div class="container-fluid" style="padding-top: 25px;">
		<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<img class="blog-images" src="{{ ('/images/IMG-20200507-WA0023.jpg') }}" alt="gardens">
			</div>

			<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<h3 class="text-center" style="text-decoration: underline;">Struggling to locate work as a <b><i>Skills Person</i></b>?</h3>
				
				<p style="text-indent: 18px">Skilled Personnel tend to expirience a unique set of challenges when looking for continous sources of employment. Some of the challenges include:
					<ol>
						<li>Skilled Persons tend to lack a solid platform for airing out their port folio. Due to this, as a business we have made it our sole objective to make it possible for skilled workers to find continous sources of employment by tracking their port folio and keeping rates on it.</li>
						<li>By being part of us, we hold responsibility for all skilled persons. Hence, when employers search for trust worthy skilled personnel, our employees tend to be recommended because as a business we have already created a bond and trust with employers.</li>
						<li>We tend to offer kickbacks to our skilled personnel hence providing them with a continous and sustainable form of both revenue and employemnt.</li>
						<li>We know how working alone can sometimes be challenging. So when it comes to heavy tasks, we tend to provide more than just ons skilled personnel with the task. This enables for faster and more efficient completion of work</li>
						<li>Working for longer hours than what has been agreed upon resides in our skilled personnel being paid overtime capital for the hours that they have worked overtime. This enables for them to be motivated and do the job much better.</li>
					</ol>
				</p>

			</div>

			<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<h3 class="text-center" style="text-decoration: underline;">Struggling to find the <b><i>right workers</i></b> for the <b><i>job</i></b>?</h3>

				<p style="text-indent: 18px">With alot of work within the economy, some of the challenges employers face while looking for skilled personnel include:
					<ol>
						<li>Lack of a platform to easily access the readily available labour offered by personnnel within the economy. Hence, at our platform and with us, it is easy for any employer to be able to book for a specific set of service and get the right individual that offers such a service from us.</li>
						<li>Inadequacy in verification of skilled personnel within a given trade. As a business, we have made it our priority to verify that our employees are excellent in the services that we deliver to the market.</li>
						<li>Due to security concerns, employers tend to be cautious with the personnel that they are hiring for work. With our personnel, due diligence is done to verify their background and ascertain that they will not pose as a security threat to the business and our clients.</li>
						<li>Employers tend to find it difficult to trust every new skilled person that works for them. Due to this they work with refferrals from individuals they know personally. So as a business we provide a bridge in the trust gap between people searching for services and those offering them.</li>
						<li>People tend to be very occupied with their day to day activities such that when they need a service, it becomes very difficult to search for individuals offering such services. Hence as a business we have made it our priority to bring you the service personnel at the comfort of your residence or business.</li>
					</ol>
				</p>

			</div>


		</div>
	</div>
</section>

<!------- End Of Middle Blog Section ------->

<!------- Start Of Blog Posts Section ------->

<section id="blog-posts">
	<div class="container-fluid">
		<div class="row" style="background-color: #A25C0C;">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    			<div class="card shadow">
    				<div class="card-header">
    					<div class="card-title">
    						<div class="py-3 text-center">
    							<h5 class="text-center display-5">RECENT BLOG POSTS</h5>
    						</div>
    					</div>
    				</div>

    				<div class="card-body">
    					<div class="row">
    						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 card-body">
    							@if (Auth::check())
    							<a class="btn btn-info text-light blog-slug" href=" {{ route('create_blog_posts') }} ">Create Post</a>
    							@endif

    							@foreach($blog as $post)

    							<h3>{{ $post->title }}</h3>

    							<span>
    								By <span><b> {{ $post->author }},</b><br> <i>Created on {{ date('jS M Y', strtotime($post->updated_at)) }} </i></span>
    							</span>

    							<p>{{ $post->description }}</p>

    							@if (Auth::check())

    							<span>
    								<a class="btn btn-secondary" href=" {{ route('edit_blog_posts', $post->id) }} ">Edit Post</a>
    								<a class="btn btn-danger text-light blog-slug" href=" {{ route('delete_blog_post', $post->id) }} ">Delete Post</a><br><br>
    							</span>

    							@endif
    							@endforeach
    						</div>
    					</div>
    				</div>
    			</div>
			</div>
		</div>
	</div>
</section>

<!------- End Of Blog Posts Section ------->

@endsection