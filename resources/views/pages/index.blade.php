@extends('layouts.app')

@section('content')

<!------- Start Of Images Slider ------->

<section id="home">
    <div class="container-fluid" style="margin-top: -25px;">
    	<div class="row">
    	    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="padding: 0;">

    	        <div id="main_images_slider" class="carousel slide" data-ride="carousel">
    	            <ul class="carousel-indicators">
    	                <li data-target="#main-images-slider" data-slide-to="0" class="active"></li>
    			        <li data-target="#main-images-slider" data-slide-to="1"></li>
    			        <li data-target="#main-images-slider" data-slide-to="2"></li>
    			    </ul>
    			    
    			    <div class="carousel-inner">
    			        <div class="carousel-item active">
    			            <img class="nth_slide" src=" {{ ('/images/worker.jpeg') }} " alt="skills-person">
    			            <div class="carousel-caption">
    			                <h1 class="display-4 head_one">&#11908HE &#350KILL&#350 &#350HOP</h1>
    			            </div>
    			        </div>
    			        
    			        <div class="carousel-item">
    				        <img class="nth_slide" src=" {{ ('/images/courier.jpg') }} " alt="courier-services">
    				        <div class="carousel-caption">
    					        <h1 class="display-4 head_one">ONE S&#11908OP SHOP</h1>
    				        </div>
    			        </div>
    
    			        <div class="carousel-item">
    				        <img class="nth_slide" src=" {{ ('/images/taxi.jpg') }} " alt="taxi-services">
    				        <div class="carousel-caption">
    					        <h1 class="display-4 head_one">HERE FOR YOU</h1>
    				        </div>
    			        </div>
    		        </div>
    		        
    		        <a class="carousel-control-prev" href="#main_images_slider" role="button" data-slide="prev" id="carousel_main_buttons" style="margin-left: 5px;">
    		            <span class="carousel-control-prev-icon" aria-hidden="true" style="color: black; opacity: 1; background-color: black; width: 35px; height: 95px;"></span>
    		            <span class="sr-only">Previous</span>
    		        </a>
    
    		        <a class="carousel-control-next" href="#main_images_slider" role="button" data-slide="next" id="carousel_main_buttons" style="margin-right: 5px;">
    			        <span class="carousel-control-next-icon" aria-hidden="true" style="color: black; opacity: 1; background-color: black; width: 35px; height: 95px;"></span>
    			        <span class="sr-only">Next</span>
    		        </a>
    
    	        </div>
    	    </div>
    	</div>
    </div>
</section>

<!------- End Of Images Slider ------->

<!------- Start Of Jumbotron ------->

<section id="system_users_text_area">
	<div class="container-fluid mt-5 mb-5">
		<div class="row jumbotron-fluid">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

				<div class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<h1 class="display-5 text-center">BOOK A SKILLS PERSON TODAY...</h1>
						</div>

						<div class="carousel-item">
							<h1 class="display-5 text-center">REGISTER AS A SKILLS PERSON TODAY...</h1>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!------- End Of Jumbotron ------->

<!------- Start Of Buttons Section ------->

<section id="buttons_area">
    <div class="container-fluid">
    	<div class="row">
    	    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 card shadow" id="system_service_area">
    	    	<h3 class="display-5 text-center mt-3 mb-5"><u><i>CUSTOMERS AREA</i></u></h3>
    	    	<div class="row">
    	            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6" id="button_link_container">
    	                <a href=" {{ route('customers_booking') }} " class="p-3" id="button_link">BOOK A SKILLS PERSON</a>
    	            </div>
    	            
    	            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6" id="button_link_container">
    	                <a href=" {{ route('skills_person_rating') }} " class="p-3" id="button_link">RATE A SKILLS PERSON</a>
    	            </div>
    	        </div>
    	    </div>
    	    
    	    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 card shadow" id="system_service_area">
    	    	<h3 class="display-5 text-center mt-3 mb-5"><u><i>SKILLS PERSON AREA</i></u></h3>
    	        <div class="row">
    	            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6" id="button_link_container">
    	                <a href=" {{ route('skills_person_registration') }} " class="p-3" id="button_link">REGISTER AS A SKILLS PERSON</a>
    	            </div>
    	            
    	            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6" id="button_link_container">
    	                <a href=" {{ route('customers_rating') }} " class="p-3" id="button_link">RATE A CUSTOMER</a>
    	            </div>
    	        </div>
    	    </div>
    
    	</div>
    </div>
</section>

<!------- End Of Buttons Section ------->

<!------- Mobile APP Section ------->

<section id="mobile-application">
    <div class="container-fluid text-center mt-5 mb-5">
    	<div class="row jumbotron-fluid">
    		<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-2 mb-5">
    			<h3 class="display-5 text-center">Android Mobile Application</h3>
    			<p class="text-center">Get Quick Access To Our Services Via Our Android Mobile APP...</p>
    			<a download="theskills-shop" href=" {{ Storage::url('mobile_app/android/app-release.apk') }} " class="p-3 mb-5" id="button_link"  title="theskills-shop"><span class="span-b">DOWNLOAD ANDROID MOBILE APP</span></a>
    		</div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-2 mb-5">
    			<h3 class="display-5 text-center">Ios Mobile Application</h3>
    			<p class="text-center">Get Quick Access To Our Services Via Our Ios Mobile APP...</p>
    			<a class="p-3 mb-5" id="button_link"><span class="span-b">DOWNLOAD IOS MOBILE APP</span></a>
    		</div>

    	</div>
    </div>
</section>

<!------- End Of Mobile APP Section ------->

<!------- Services Section ------->

<section id="services">
    <div class="container-fluid" style="background-color: #A25C0C;">
    	<div class="row">
    	    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    	        <h1 class="text-center py-4 text-white display-5">SERVICES</h1>
    	        <p class="text-white" style="font-size: 16px; text-indent: 30px;">
    	            Welcome to <b><i>The Skills Shop.</i></b> Your <b><i>One Stop Shop</i></b> for <b><i>Quality Skills.</i></b> All our <b><i>Skills Persons</i></b> are <b><i>Screened and Vetted.</i></b>
    	            They are <b><i>Honest, Knowledgeable, Reliable and Punctual.</i></b>
    	            We aim to deliver <b><i>High-quality Services</i></b> with <b><i>Integrity</i></b> and at <b><i>Reasonable prices</i></b> to <b><i>all our Clients.</i></b>
    	            We <b><i>guarantee quality</i></b> and <b><i>reliable services</i></b> and <b><i>customer satisfaction.</i></b> Our <b><i>key areas</i></b> of <b><i>specialization</i></b> include:
    	        </p>
    	    </div>
    	</div>
    
    	<div class="row text-center mt-5">
    	    
    	    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mb-4 d-flex">
    			<div class="card shadow">
    				<div class="card-body">
    					<div class="py-3 text-center">
    					    <img src=" {{ ('images/icons/plumbing-icon.png') }} " class="card-img-top" alt="plumbing-services" style="width: 50px; height: 50px;">
    					</div>
    					<h5 class="text-center display-5" style="text-decoration: underline;">PLUMBING</h5>
    					<p class="card-text" style="text-indent: 10px;">
    					    Consult our plumbing contractor to determine how often your home needs drain cleaning services.
    					</p>
    				</div>
    			</div>
    		</div>
    
    		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mb-4 d-flex">
    			<div class="card shadow">
    				<div class="card-body">
    					<div class="py-3 text-center">
    						<img src=" {{ ('images/icons/carpentry-icon.png') }} " class="card-img-top" alt="carpentry/cabinet-making-services" style="width: 50px; height: 50px;">
    					</div>
    					<h5 class="text-center display-5" style="text-decoration: underline;">CARPENTRY/CABINET MAKING</h5>
    					<p class="card-text" style="text-indent: 10px;">
    					    Building a beautiful home is like making a journey. You need to know where you want to go and how you're going to get there.Our home improvement professionals are skilled carpenters and furniture builders. We install and build cabinets, bookcases, wooden countertops and more.
    					</p>
    			    </div>
    		    </div>
    		</div>
    
    		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mb-4 d-flex">
    			<div class="card shadow">
    				<div class="card-body">
    					<div class="py-3 text-center">
    						<img src=" {{ ('images/icons/masonry-icon.png') }} " class="card-img-top" alt="masonry-services" style="width: 50px; height: 50px;">
    					</div>
    					<h5 class="display-5 text-center" style="text-decoration: underline;">MASONRY</h5>
    					<p class="card-text" style="text-indent: 10px;">
    					    The durability and strength of masonry wall construction depends on the type and quality of material used and workmanship. Get in touch with us to experience true masonry.
    					</p>
    				</div>
    			</div>
    		</div>

    	</div>
    	
    	<div class="row">
    	    
    	     <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mb-4 d-flex">
    			<div class="card shadow">
    				<div class="card-body">
    					<div class="py-3 text-center">
    						<img src=" {{ ('images/icons/gardening-icon.png') }} " class="card-img-top" alt="gardening-services" style="width: 50px; height: 50px;">
    					</div>
    					<h5 class="display-5 text-center" style="text-decoration: underline;">GARDENING</h5>
    					<p class="card-text" style="text-indent: 10px;">
    						Like good neighbours, companion planting will help the rest of your garden out. Our team will design your front and backyard beautifully.
    					</p>
    				</div>
    			</div>
    		</div>
    
    		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mb-4 d-flex">
    			<div class="card shadow">
    				<div class="card-body">
    					<div class="py-3 text-center">
    						<img src=" {{ ('images/icons/landscaping-icon.jpg') }} " class="card-img-top" alt="landscaping-services" style="width: 50px; height: 50px;">
    					</div>
    					<h5 class="display-5 text-center" style="text-decoration: underline;">LANDSCAPING</h5>
    					<p class="card-text" style="text-indent: 10px;">
    						Discover new landscape designs and ideas to boost your home's curb appeal because thoughtful landscape designs are key to creating an outdoor oasis.
    					</p>
    				</div>
    			</div>
    		</div>
    
    		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mb-4 d-flex">
    			<div class="card shadow">
    				<div class="card-body">
    					<div class="py-3 text-center">
    						<img src=" {{ ('images/icons/electrical-work-icon.png') }} " class="card-img-top" alt="electrical-works-services" style="width: 50px; height: 50px;">
    					</div>
    					<h5 class="display-5 text-center" style="text-decoration: underline;">ELECTRICAL WORK</h5>
    					<p class="card-text" style="text-indent: 10px;">
    					    Our job is to install, alter, maintain and extend electrical wiring systems.
    					</p>
    				</div>
    			</div>
    		</div>
    		
    	</div>
    	
    	<div class="row">
    	    
    	    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mb-4 d-flex">
    			<div class="card shadow">
    				<div class="card-body">
    					<div class="py-3 text-center">
    						<img src=" {{ ('images/icons/painting-icon.jpg') }} " class="card-img-top" alt="painting-services" style="width: 50px; height: 50px;">
    					</div>
    					<h5 class="display-5 text-center" style="text-decoration: underline;">PAINTING</h5>
    						<p class="card-text" style="text-indent: 10px;">
    							Allow out team to color your home with your own ideas. Design your home to suite your style, needs and emotions.
    						</p>
    				</div>
    			</div>
    		</div>
    
    		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mb-4 d-flex">
    			<div class="card shadow">
    				<div class="card-body">
    					<div class="py-3 text-center">
    						<img src=" {{ ('images/icons/food-delivery-icon.png') }} " class="card-img-top" alt="food/delivery-services" style="width: 50px; height: 50px;">
    					</div>
    					<h5 class="display-5 text-center" style="text-decoration: underline;">FOOD/DELIVERY SERVICES</h5>
    					<p class="card-text" style="text-indent: 10px;">
    					    Delivery & takeout from the best local restaurants. Breakfast, lunch, dinner and more, delivered safely to your door.
    					</p>
    				</div>
    			</div>
    		</div>
    
    		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mb-4 d-flex">
    			<div class="card shadow">
    				<div class="card-body">
    					<div class="py-3 text-center">
    						<img src=" {{ ('images/icons/general-delivery-icon.png') }} " class="card-img-top" alt="general-delivery-services" style="width: 50px; height: 50px;">
    					</div>
    					<h5 class="display-5 text-center" style="text-decoration: underline;">GENERAL DELIVERY SERVICES</h5>
    					<p class="card-text" style="text-indent: 10px;">
    						We pick and deliver parcels bringing a new approach to individuals and businesses.
    					</p>
    				</div>
    			</div>
    		</div>
    		
    	</div>
    	
    	<div class="row">
    	    
    	    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4 d-flex">
    			<div class="card shadow">
    				<div class="card-body">
    					<div class="py-3 text-center">
    						<img src=" {{ ('images/icons/transportation-icon.png') }} " class="card-img-top" alt="transportation-services" style="width: 50px; height: 50px;">
    					</div>
    					<h5 class="display-5 text-center" style="text-decoration: underline;">TRANSPORTATION</h5>
    					<p class="card-text" style="text-indent: 10px;">
    						You are our priority. Don't feel left out. Get in touch with us and we will get you to where you are going, on time.
    					</p>
    				</div>
    			</div>
    		</div>
    		
    	</div>
    	
    </div>
</section>

<!------- End Of Services Section ------->

<!------- Start Of Operations Section ------->

<section id="operations">
    <div class="container-fluid mt-3 mb-5" style="padding-top: 15px; padding-bottom: 15px;">
    	<div class="row">
    	    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    	        	<h1 class="display-5 text-center">OPERATIONS</h1>
    	    </div>
    	 </div>
    	 
    	 <div class="row">
    	     <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex">
    			<div class="card shadow">
    				<div class="card-body">
    					<div class="media">
    						<div class="mr-4" style="height: 75px; width: 75px;">
    							<img src=" {{ ('images/icons/phone-call-icon.jpg') }} " class="card-img-top" style="width: 55px; height: 55px;">
    						</div>
    						<div class="media-body">
    							<h4 class="mt-0 text-dark">REQUEST</h4>
    							<p class="text-secondary">Get in touch with us to request for the service that you require.</p>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    
    		<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex">
    			<div class="card shadow">
    				<div class="card-body">
    					<div class="media">
    						<div class="mr-4" style="height: 75px; width: 75px;">
    							<img src=" {{ ('images/icons/calendar-icon.png') }} " class="card-img-top" style="width: 55px; height: 55px;">
    						</div>
    						<div class="media-body">
    							<h4 class="mt-0 text-dark">BOOK</h4>
    							<p class="text-secondary">Book your skilled person for a specific day and time and he/she will be there 15 minutes early before the agreed time.</p>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		
    	 </div>
    
    	<div class="row">
    	    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex">
    			<div class="card shadow">
    				<div class="card-body">
    					<div class="media">
    						<div class="mr-4" style="height: 75px; width: 75px;">
    							<img src=" {{ ('images/icons/computer-icon.jpg') }} " class="card-img-top" style="width: 55px; height: 55px;">
    						</div>
    						<div class="media-body">
    							<h4 class="mt-0 text-dark">CONSULT</h4>
    							<p class="text-secondary">Our Customer Care Consultants will do an assessment of the service and provide a CONTRACT to include the price of the service.</p>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    
    		<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex">
    			<div class="card shadow">
    				<div class="card-body">
    					<div class="media">
    						<div class="mr-4" style="height: 75px; width: 75px;">
    							<img src=" {{ ('images/icons/money-icon.jpg') }} " class="card-img-top" style="width: 55px; height: 55px;">
    						</div>
    						<div class="media-body">
    							<h4 class="mt-0 text-dark">PAY</h4>
    							<p class="text-secondary">Once the service has been offered and completed, payment is made to The Skills Shop. Customer Care Consultants will provide further payment details. A deposit maybe required for some jobs.</p>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		
    	</div>
    	
    </div>
</section>

<!------- End Of Operations Section ------->

<!------- About Us Section ------->

<section id="about-us">
    <div class="container-fluid text-center" style="background-color: #A25C0C; padding-top: 15px; padding-bottom: 15px;">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h1 class="text-center text-white display-5">ABOUT US</h1><br>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <p class="card-text" style="font-style: italic; color: white;"><b><i>The Skills Shop</i></b> is a <b><i>One Stop Shop</i></b> for <b><i>QUALITY PEOPLE</i></b> providing <b><i>Construction, Home Improvement, Landscaping, Gardening, Labourers, Plumbing, Electrical, Carpentry, Wood Work, Cabinet Making Services</i></b> at a <b><i>FAIR, PREDICTABLE</i></b> AND <b><i>CONSISTENT PRICE.</i></b></p>
            </div>
        </div><br>

        <div class="row text-center mt-5">

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mb-4 d-flex">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="display-5 text-center" style="text-decoration: underline;">MOTTO</h5>
                        <p class="card-text text-dark" style="font-style: italic; color: white;">The diffence is <b>measurable</b> with <b>exceptional people,</b> providing <b>exceptional services,</b> with more than a <b>personal touch.</b></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mb-4 d-flex">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="display-5 text-center" style="text-decoration: underline;">MISSION</h5>
                        <p class="card-text text-dark" style="font-style: italic; color: white;">To <b>inspire healthier societies and communities</b> by <b>providing effective, efficient and reliable service delivery</b> wherever you are, whenever you need it and however you want it.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mb-4 d-flex">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="display-5 text-center" style="text-decoration: underline;">VISION</h5>
                        <p class="card-text text-dark" style="font-style: italic; color: white;">Create <b><i>fast, reliable, efficient</i></b> and <b><i>effective service delivery.</i></b></p>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h1 class="display-5 text-center text-white">So, why choose us ?</h1>
            </div>
        </div><br>

        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <img src="{{ ('images/icons/customer_support/customer_service_desk.png') }}" alt="customer-service-assistance" class="about_us_icons">

                <h5 class="text-white"><b>Reliable Customer Support</b></h5>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <img src="{{ ('images/icons/experience/experience_one.jpg') }}" class="about_us_icons">

                <h5 class="text-white"><b>High Level Of Experience</b></h5>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <img src="{{ ('images/icons/services/services.jpg') }}" class="about_us_icons">

                <h5 class="text-white"><b>100% Service Affordability</b></h5>
            </div>

        </div>

        <div class="row" style="background-image: url('/images/woodwork.jpeg'); background-size: cover; background-attachment: fixed; background-repeat: no-repeat; padding-top: 25px;">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 counter-container">
                <div class="icon"><i class="fa fa-clock fa-5x text-white"></i></div>
                <p class="text-white counter" style="font-size: 60px;">250</p>
                <p class="text-white" style="font-size: 24px;">Working Hours</p>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 counter-container">
                <div class="icon"><i class="fa fa-briefcase fa-5x text-white"></i></div>
                <p class="text-white counter" style="font-size: 60px;">125</p>
                <p class="text-white" style="font-size: 24px;">Completed Projects</p>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 counter-container">
                <div class="icon"><i class="fa fa-user fa-5x text-white"></i></div>
                <p class="text-white counter" style="font-size: 60px;">350</p>
                <p class="text-white" style="font-size: 24px;">Happy Clients</p>
            </div>
        </div>

    </div>
</section>

<!------- End Of About Us Section ------->

<!------- Start Of Testimonials Section ------->

<section id="testimonials">
    <div class="container-fluid mt-3 mb-3" style="padding-top: 15px; padding-bottom: 15px;">
    	<div class="row">
    	    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    	        <h1 class="display-4 text-center" id="testimonial" style="font-size: 48px;">TESTIMONIALS</h1>
    	    </div>
    	</div>
    	
    	<div class="row">
    	    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex">
        	    <div class="card shadow">
        			<div class="card-body">
        				<div class="media">
        					<div class="mr-4" style="height: 75px; width: 75px;">
        						<i class="fas fa-users card-img-top fa-5x" aria-hidden="true"></i>
        					</div>
        					<div class="media-body">
        						<h4 class="mt-0 text-dark">CUSTOMERS</h4>
        						<p class="text-secondary">What our customers say about us...</p>
        					</div>
        				</div>
        
        				<div id="myCarousel" class="carousel slide" data-ride="carousel">
        					<div class="carousel-inner" role="listbox">
        						<div class="carousel-item text-center active">
        							<p><q>From estimate to completion the project was on schedule as promised. The work was very professional and the interface with the owner was pleasant and responsive. To date the project has met my expectations.</q></p>
        
                                   	<h6>Aayla Brown</h6>
        						</div>
        
        						<div class="carousel-item text-center">
                                    <p><q>We would definitely recommend you to our friends and family. Your reliability and prompt service is always appreciated.</q></p>
                                    	
                                    <h6>Johnson Amelia</h6>
                              	</div>
                            
                              	<div class="carousel-item text-center">
                                    <p><q>Thanks for providing an excellent service. You guys are prompt, efficient, courteous and always manage to solve the problem. My only complaint is that your prices are far too low considering the great work you do! I'd strongly recommend your business to anyone.</q></p>
                                    	
                                    <h6>Anna Andersson</h6>
                              	</div>
        
                              	<div class="carousel-item text-center">
                                    <p><q>I would highly recommend The Skills Shop employees! These guys were hard working, very talented Artisans. The mailbox is absolutely stunning. A real highlight to the house. It only took a few hours to build this wonderful product! We are very happy with the results!</q></p>
                                    	
                                    <h6>Lewis Campbell</h6>
                              	</div>
        
                              	<div class="carousel-item text-center">
                                    <p><q>I had a fairly large parcel for delivery to my mom. I used 'The Skills Shop' to deliver the parcel. Booking online was quick & easy. I booked on a Sunday, the parcel was collected on a Monday and delivered on a Tuesday. The service was excellent and I was kept informed at all stages of the delivery.</q></p>
                                    	
                                    <h6>Dillon Thompson</h6>
                              	</div>
        
        					</div>
        
        				</div>
        			</div>
        		</div>
        	</div>
        	
        	<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex">
        		<div class="card shadow">
        			<div class="card-body">
        				<div class="media">
        					<div class="mr-4" style="height: 75px; width: 75px;">
        						<i class="fas fa-user-graduate card-img-top fa-5x" aria-hidden="true"></i>
        					</div>
        					
        					<div class="media-body">
        						<h4 class="mt-0 text-dark">EMPLOYEES</h4>
        						<p class="text-secondary">What our employees say about us...</p>
        					</div>
        				</div>
        
        				<div id="myCarousel" class="carousel slide" data-ride="carousel">
        					<div class="carousel-inner" role="listbox">
        						<div class="carousel-item text-center active">
        							<p><q>l love my jobs, one of the best l have ever had. The customers are great and the jobs are never boring. There is always something to do and a variety as well.</q></p>
        
                                   	<h6>Barrett Graham</h6>
        						</div>
        
        						<div class="carousel-item text-center">
                                    <p><q>This was a great experience for me. The management was easy to work with and was very laid back when it came to asking for time off. As long as you got the job done they were happy with you.</q></p>
                                    	
                                    <h6>Samuel Gayle</h6>
                              	</div>
                            
                              	<div class="carousel-item text-center">
                                    <p><q>It's a wonderful opportunity to work in the organisation, management encourages improving the skills of employees. I'm Proud to be part of The Skills Shop.</q></p>
                                    	
                                    <h6>Rose Hanson</h6>
                              	</div>
        
                              	<div class="carousel-item text-center">
                                    <p><q>Great place, great people, great culture, good bosses.</q></p>
                                    	
                                    <h6>Munroe Thorpe</h6>
                              	</div>
        
                              	<div class="carousel-item text-center">
                                    <p><q>The team I'm working with is amazing. We fit together like a little family. Our team manager(TM) is amazing, so supportive and always wants us all to be our best and be successful in our roles.</q></p>
                                    	
                                    <h6>Lindsay Tulloch</h6>
                              	</div>
        
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>	
        	
    	</div>
    	
    </div>
</section>

<!------- End Of Testimonials Section ------->

<!------- Start Of Working Hours Section ------->

<section id="working_hours">
    <div class="container-fluid text-center mt-3 mb-5" style="padding-top: 15px;">
    	<div class="row">
    		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    		    <b><h1 class="text-center display-4" id="working-hours" style="font-size: 48px;">WORKING HOURS</h1></b>
    			<ul class="list-group list-group-flush">
    				<li class="list-group-item">Monday    ---   9:00 A.M.   ---   5:00 P.M.</li>
    				<li class="list-group-item">Teusday   ---   9:00 A.M.   ---   5:00 P.M.</li>
    				<li class="list-group-item">Wednesday ---   9:00 A.M.   ---   5:00 P.M.</li>
    				<li class="list-group-item">Thursday  ---   9:00 A.M.   ---   5:00 P.M.</li>
    				<li class="list-group-item">Friday    ---   9:00 A.M.   ---   5:00 P.M.</li>
    				<li class="list-group-item">Saturday  ---   9:00 A.M.   ---   12:00 P.M.</li>
    			</ul>
    		</div>
    	</div>
    </div>
</section>

<!------- End Of Working Hours Section ------->

<!------- Start Of Location Section ------->

<section id="location">
    <div class="container-fluid text-center">
    	<div class="row">
    		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    			<div id="googleMap" style="width: 100%; height: 400px;">
    				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30286.597392010728!2d-77.0999729692874!3d18.400828948628302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8edafdc91dfb81d5%3A0x24cebac16dce2c77!2sOcho%20Rios%2C%20Jamaica!5e0!3m2!1sen!2ske!4v1590949346023!5m2!1sen!2ske" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    			</div>
    		</div>
    	</div>
    </div>
</section>

<!------- End Of Location Section ------->

@endsection

@push('scripts')

<!-- Start Of Projects Counter Script -->
<script type="text/javascript">
    $(document).ready(function(){
        $(".counter").counterUp({
            delay: 10,
            time: 1200
        });
    });
</script>

<!-- End Of Projects Counter Script -->

@endpush