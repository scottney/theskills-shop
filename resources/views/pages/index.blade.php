@extends('layouts.app')

@section('content')

<!------- Start Of Images Slider ------->

<section id="home">
    <div class="row">
    	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 noPadding">
    		<div id="main_images_slider" class="carousel slide carousel-fade" data-bs-ride="carousel">
    			<ul class="carousel-indicators">
    				<li data-bs-target="#main_images_slider" data-bs-slide-to="0" class="active"></li>
    				<li data-bs-target="#main_images_slider" data-bs-slide-to="1"></li>
    				<li data-bs-target="#main_images_slider" data-bs-slide-to="2"></li>
    				<li data-bs-target="#main_images_slider" data-bs-slide-to="3"></li>
    				<li data-bs-target="#main_images_slider" data-bs-slide-to="4"></li>
    			</ul>

    			<div class="carousel-inner">
    				<div class="carousel-item active">
    					<img class="nth_slide1">
    					<div class="carousel-caption">
    						<h1 class="head_one">THE SKILLS SHOP</h1>
    					</div>
    				</div>
    			        
    				<div class="carousel-item">
    				   	<img class="nth_slide2">
    				    <div class="carousel-caption">
    						<h1 class="head_one">Your One Stop Shop For All Your Blue Collar Needs</h1>
    				    </div>
    			    </div>
    
    			    <div class="carousel-item">
    				    <img class="nth_slide3">
    				   	<div class="carousel-caption">
    						<h1 class="head_one">Here For You Through Every Step Of The Way</h1>
    				    </div>
    			    </div>

    			    <div class="carousel-item">
    				    <img class="nth_slide4">
    				   	<div class="carousel-caption">
    						<h1 class="head_one">Experience The Beauty Of Your Home</h1>
    				    </div>
    			    </div>

    			    <div class="carousel-item">
    				    <img class="nth_slide5">
    				   	<div class="carousel-caption">
    						<h1 class="head_one">Experience Blue Collar Service Delivery</h1>
    				    </div>
    			    </div>
    		    </div>

    		    <a class="carousel-control-prev left_handler" href="#main_images_slider" role="button" data-bs-slide="prev" id="main_buttons" data-bs-target="#main_images_slider">
    		    	<span class="carousel-control-prev-icon" aria-hidden="true" id="controlIcon"></span>
    		    	<span class="sr-only">Previous</span>
    		    </a>
    
    		    <a class="carousel-control-next right_handler" href="#main_images_slider" role="button" data-bs-slide="next" id="main_buttons" data-bs-target="#main_images_slider">
    			   	<span class="carousel-control-next-icon" aria-hidden="true" id="controlIcon"></span>
    			  	<span class="sr-only">Next</span>
    		    </a>
    
    	   	</div>
    	</div>
  	</div>
</section>

<!------- End Of Images Slider ------->

<!------- Start Of Information Area ------->

<section id="system_users_text_area">
	<div class="row mt-5 mb-5">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">

			<div class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<h2 class="text-center">BOOK A SKILLS PERSON TODAY...</h2>
					</div>

					<div class="carousel-item">
						<h2 class="text-center">REGISTER AS A SKILLS PERSON TODAY...</h2>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<!------- End Of Information Area ------->

<!------- Start Of Buttons Section ------->

<section id="buttons_area">
    <div class="row text-center">
    	<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 noPadding" id="system_service_area">
    	    <div class="card systemServiceAreaCard">
    	    	<div class="card-header specialAreaColor">
    	    		<h2 class="pt-3 pb-3 text-center text-white"><u>CUSTOMERS AREA</u></h2>
    	    	</div>

    	    	<div class="card-body">
	    	    	<div class="row pt-3 pb-5">
	    	    		<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
	    	    		<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
	    	    			<a href=" {{ route('customers_booking') }} " class="pt-3 pb-3 left_handler" id="button_link">BOOK A SKILLS PERSON</a>
	    	    		</div>
	    	    		<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
	    	    	</div>

	    	    	<div class="row pt-3 pb-3">
	    	    		<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
	    	    		<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
	    	        		<a href=" {{ route('skills_person_rating') }} " class="pt-3 pb-3 left_handler" id="button_link">RATE A SKILLS PERSON</a>
	    	    		</div>
	    	    		<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
	    	    	</div>
	    	    </div>

	    	    <div class="card-footer specialAreaColor"></div>
    	    </div>
    	</div>
    	    
    	<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 noPadding" id="system_service_area">
    	    <div class="card systemServiceAreaCard">
    	    	<div class="card-header specialAreaColor">
    	    		<h2 class="pt-3 pb-3 text-center text-white"><u>SKILLS PERSON AREA</u></h2>
    	    	</div>

    	    	<div class="card-body">
    	    		<div class="row pt-3 pb-5">
    	    			<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
    	    			<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
    	    				<a href=" {{ route('skills_person_registration') }} " class="pt-3 pb-3 left_handler" id="button_link">REGISTER AS A SKILLS PERSON</a>
    	    			</div>
    	    			<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
    	    		</div>

    	    		<div class="row pt-3 pb-3">
    	    			<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
    	    			<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">    
    	        			<a href=" {{ route('customers_rating') }} " class="pt-3 pb-3 left_handler" id="button_link">RATE A CUSTOMER</a>
    	    			</div>
    	    			<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
    	    		</div>
    	    	</div>

    	    	<div class="card-footer specialAreaColor"></div>
    	    </div>       
    	</div>
    
    </div>
</section>

<!------- End Of Buttons Section ------->

<!------- Mobile APP Section ------->

<section id="mobile-application">
    <div class="row text-center pt-3 pb-3">
    	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    		<h2 class="text-center">Android Mobile Application</h2>
    		<p class="text-center">Get Quick Access To Our Services Via Our Mobile Application...</p>
    	</div>
    </div>

    <div class="row text-center pt-3 pb-5">
    	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 pb-3">
    		<a download="theskills-shop" href=" {{ Storage::url('mobile_app/android/app-release.apk') }} " class="" id="button_link"  title="theskills-shop">DOWNLOAD MOBILE APP</a>
    	</div>
    </div>
</section>

<!------- End Of Mobile APP Section ------->

<!------- Services Section ------->

<section id="services">
    <div class="row pt-3 primaryColor">
    	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    		<h2 class="text-center text-white display-5">SERVICES</h2>

    		<div class="row">
    			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    				<p class="text-white text-center">Welcome to <b><i>The Skills Shop.</i></b> Your <b><i>One Stop Shop</i></b> for <b><i>Quality Skills.</i></b></p>
    					<div class="row">
    						<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
    						<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
    							<p class="text-white text-center">To all our esteemed<b>customers</b> we aim to deliver:</p>
    							<ul class="list-group">
		    						<li class="list-group-item">High Quality Services</li>
		    						<li class="list-group-item">Services with Integrity</li>
		    						<li class="list-group-item">Reasonably Priced Services</li>
		    						<li class="list-group-item">Timely Service Delivery</li>
		    					</ul>
    						</div>
    						<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
    						<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
    							<p class="text-white text-center">All our <b>Skills Persons</b> are <b>screened</b> and <b>vetted</b> and are:</p>
    							<ul class="list-group">
		    						<li class="list-group-item">Honest</li>
		    						<li class="list-group-item">Knowledgeable</li>
		    						<li class="list-group-item">Reliable</li>
		    						<li class="list-group-item">Punctual</li>
		    					</ul>
    						</div>
    						<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
    					</div>
    			</div>
    		</div>
    	</div>
   	</div>
    
    <div class="row text-center pt-3 primaryColor">
    	<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
    		<div class="card shadow" id="services-cards">
    			<div class="card-body">
    				<div class="py-3 text-center">
    					<img src=" {{ ('images/icons/plumbing-icon.png') }} " class="card-img-top" alt="plumbing-services">
    				</div>
    				<h3 class="text-center"><u>PLUMBING</u></h3>
    				<p class="card-text servicesCardsTextIndent">Consult with our plumbing contractor to determine how often your home needs drainage cleaning services. A clean home is not only a healthy home but also a happy home. Our plumbing specialists will do more than just a good job. They will do an amazing job. They will leave you wishing you could have contacted us much earlier for our services.</p>
    			</div>
    		</div>
    	</div>
    
    	<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
    		<div class="card shadow" id="services-cards">
    			<div class="card-body">
    				<div class="py-3 text-center">
    					<img src=" {{ ('images/icons/carpentry-icon.png') }} " class="card-img-top" alt="carpentry/cabinet-making-services">
    				</div>
    				<h3 class="text-center"><u>CARPENTRY/CABINET MAKING</u></h3>
    				<p class="card-text servicesCardsTextIndent">Building a beautiful home is like making a journey. You need to know where you want to go and how you're going to get there. Our home improvement professionals are skilled carpenters and furniture builders. We install and build cabinets, bookcases, wooden countertops, and more.</p>
    			</div>
    		</div>
    	</div>
    
    	<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
    		<div class="card shadow" id="services-cards">
    			<div class="card-body">
    				<div class="py-3 text-center">
    					<img src=" {{ ('images/icons/masonry-icon.png') }} " class="card-img-top" alt="masonry-services">
    				</div>
    				<h3 class="text-center"><u>MASONRY</u></h3>
    				<p class="card-text servicesCardsTextIndent">The durability and strength of masonry wall construction depend on the type and quality of material used and workmanship. Our skilled personnel has been thoroughly trained to use the best material and build the best most durable houses. Get in touch with us today. We guarantee you will not regret your decision to contact us.</p>
    			</div>
    		</div>
    	</div>
    </div>
    	
    <div class="row test-center primaryColor">
    	<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
    		<div class="card shadow" id="services-cards">
    			<div class="card-body">
    				<div class="py-3 text-center">
    					<img src=" {{ ('images/icons/gardening-icon.png') }} " class="card-img-top" alt="gardening-services">
    				</div>
    				<h3 class="text-center"><u>GARDENING</u></h3>
    				<p class="card-text servicesCardsTextIndent">As good neighbors, companion planting will help the rest of your garden out. Our team will design your front and backyard beautifully. They will give you an outstanding make-over. Your garden will be a sight to behold. The envy of all. You’ll appreciate getting in touch with us.</p>
    			</div>
    		</div>
    	</div>
    
    	<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
    		<div class="card shadow" id="services-cards">
    			<div class="card-body">
    				<div class="py-3 text-center">
    					<img src=" {{ ('images/icons/landscaping-icon.jpg') }} " class="card-img-top" alt="landscaping-services">
    				</div>
    				<h3 class="text-center"><u>LANDSCAPING</u></h3>
    				<p class="card-text servicesCardsTextIndent">Discover new landscape designs and ideas to boost your home's curb appeal because thoughtful landscape designs are key to creating an outdoor oasis. Get our state-of-the-art services and let us convert your curb and home into breathtaking scenery.</p>
    			</div>
    		</div>
    	</div>
    
    	<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
    		<div class="card shadow" id="services-cards">
    			<div class="card-body">
    				<div class="py-3 text-center">
    					<img src=" {{ ('images/icons/electrical-work-icon.png') }} " class="card-img-top" alt="electrical-works-services">
    				</div>
    				<h3 class="text-center"><u>ELECTRICAL WORKS</u></h3>
    				<p class="card-text servicesCardsTextIndent">Our job is to install, alter, maintain and extend electrical wiring systems. Our specialists will not only do an excellent job but also maintain the highest levels of safety the entire time. We guarantee excellence in our work at affordable prices.</p>
    			</div>
    		</div>
    	</div>	
    </div>
    	
    <div class="row text-center primaryColor">
    	<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 p-3">
    		<div class="card shadow" id="services-cards">
    			<div class="card-body">
    				<div class="py-3 text-center">
    					<img src=" {{ ('images/icons/painting-icon.jpg') }} " class="card-img-top" alt="painting-services">
    				</div>
    				<h3 class="text-center"><u>PAINTING</u></h3>
    					<p class="card-text servicesCardsTextIndent">Allow our team to color your home with your ideas. Design your home to suit your style, needs, and emotions. Your only limitation is your imagination.</p>
    			</div>
    		</div>
    	</div>
    
    	<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
    		<div class="card shadow" id="services-cards">
    			<div class="card-body">
    				<div class="py-3 text-center">
    					<img src=" {{ ('images/icons/food-delivery-icon.png') }} " class="card-img-top" alt="food/delivery-services">
    				</div>
    				<h3 class="text-center"><u>FOOD/DELIVERY SERVICES</u></h3>
    				<p class="card-text servicesCardsTextIndent">Delivery & takeout from the best local restaurants. Breakfast, lunch, dinner, and more, are delivered safely to your door.</p>
    			</div>
    		</div>
    	</div>
    
    	<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
    		<div class="card shadow" id="services-cards">
    			<div class="card-body">
    				<div class="py-3 text-center">
    					<img src=" {{ ('images/icons/general-delivery-icon.png') }} " class="card-img-top" alt="general-delivery-services">
    				</div>
    				<h3 class="text-center"><u>GENERAL DELIVERY SERVICES</u></h3>
    				<p class="card-text servicesCardsTextIndent">We pick and deliver parcels bringing a new approach to individuals and businesses.</p>
    			</div>
    		</div>
    	</div>
    </div>
    	
    <div class="row text-center primaryColor">
    	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-3">
    		<div class="card shadow" id="services-cards">
    			<div class="card-body">
    				<div class="py-3 text-center">
    					<img src=" {{ ('images/icons/transportation-icon.png') }} " class="card-img-top" alt="transportation-services">
    				</div>
    				<h3 class="text-center"><u>TRANSPORTATION</u></h3>
    				<p class="card-text servicesCardsTextIndent">You are our priority. Don't feel left out. Get in touch with us and we will get you to where you are going, on time.</p>
    			</div>
    		</div>
    	</div>
    </div>
</section>

<!------- End Of Services Section ------->

<!------- Start Of Operations Section ------->

<section id="operations">
    <div class="row pt-3 pb-3">
    	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    		<h2 class="text-center display-5">OPERATIONS</h2>
    	</div>
    </div>
    	 
    <div class="row pb-3">
    	<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 p-3">
    		<div class="card text-center" id="operationsCards">
    			<div class="card-header specialAreaColor">
    				<h3 class="text-white">REQUEST</h3>
    			</div>
    			<div class="card-body">
    				<img src=" {{ ('images/icons/phone-call-icon.jpg') }} " class="card-img-top">
    				<p class="text-secondary pt-3">Get in touch with us to request the service that you require. Our customer representatives will take every detail of the service you require and send a service specialist over to give you a full quotation.</p>	
    			</div>
    		</div>
    	</div>
    
    	<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 p-3">
    		<div class="card text-center" id="operationsCards">
    			<div class="card-header specialAreaColor">
    				<h3 class="text-white">BOOK</h3>
    			</div>
    			<div class="card-body">
    				<img src=" {{ ('images/icons/calendar-icon.png') }} " class="card-img-top">
    				<p class="text-secondary pt-3">Book your skills person for a specific day and time and he/she will be there 15 minutes early before the agreed time. We believe that time is of the essence for not only our customers but also our skills persons.</p>
    			</div>
    		</div>
    	</div>		

    	<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 p-3">
    		<div class="card text-center" id="operationsCards">
    			<div class="card-header specialAreaColor">
    				<h3 class="text-white">CONSULT</h3>
    			</div>
    			<div class="card-body">
    				<img src=" {{ ('images/icons/computer-icon.jpg') }} " class="card-img-top">
    				<p class="text-secondary pt-3">Our Customer Care Consultants will assess the service and provide a CONTRACT that includes the price of the service. The contract will only be valid during the period of service delivery.</p>
    			</div>
    		</div>
    	</div>
    
    	<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 p-3">
    		<div class="card text-center" id="operationsCards">
    			<div class="card-header specialAreaColor">
    				<h3 class="text-white">PAY</h3>
    			</div>
    			<div class="card-body">
    				<img src=" {{ ('images/icons/money-icon.jpg') }} " class="card-img-top">
    				<p class="text-secondary pt-3">Once the service has been offered and completed, payment is made to The Skills Shop. Customer Care Consultants will provide further payment details. A deposit may be required for some jobs.</p>
    			</div>
    		</div>
    	</div>	
    </div>
</section>

<!------- End Of Operations Section ------->

<!------- About Us Section ------->

<section id="about-us">
	<div class="row primaryColor">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
			<h2 class="text-center text-white pt-3 display-5">ABOUT US</h2><br>
        </div>
    </div>

    <div class="row primaryColor">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
        	<p class="text-white text-center"><b><i>The Skills Shop</i></b> is a <b><i>One Stop Shop</i></b> for <b><i>QUALITY PEOPLE</i></b>.</p>

    		<p class="text-white text-center">Our <b>MAIN OBJECTIVE</b> is to provide <b><i>QUALITY SERVICES</i></b> at a <b><i>FAIR, PREDICTABLE</i></b> AND <b><i>CONSISTENT PRICE.</i></b></p>

        	<div class="row">
        		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
	                <div class="card" id="aboutUsCards">
	                	<div class="card-header specialAreaColor">
	                		<h3 class="text-center text-white"><u>MOTTO</u></h3>
	                	</div>
	                    <div class="card-body">
	                        <p class="text-dark">The diffence is <b>measurable</b> with <b>exceptional people,</b> providing <b>exceptional services,</b> with more than a <b>personal touch.</b></p>
	                    </div>
	                    <div class="card-footer specialAreaColor"></div>
	                </div>
	            </div>

	            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
	                <div class="card" id="aboutUsCards">
	                	<div class="card-header specialAreaColor">
	                		<h3 class="text-center text-white"><u>MISSION</u></h3>
	                	</div>
	                    <div class="card-body">
	                        <p class="text-dark">To <b>inspire healthier societies and communities</b> by <b>providing effective, efficient and reliable service delivery</b> wherever you are, whenever you need it and however you want it.</p>
	                    </div>
	                    <div class="card-footer specialAreaColor"></div>
	                </div>
	            </div>

	            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
	                <div class="card" id="aboutUsCards">
	                	<div class="card-header specialAreaColor">
	                		<h3 class="text-center text-white"><u>VISION</u></h3>
	                	</div>
	                    <div class="card-body">
	                        <p class="text-dark">Create <b><i>fast, reliable, efficient</i></b> and <b><i>effective service delivery.</i></b></p>
	                    </div>
	                    <div class="card-footer specialAreaColor"></div>
	                </div>
	            </div>
        	</div>
        </div>
    </div>

    <div class="row pt-3 primaryColor">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
        	<h3 class="text-center text-white">So, why choose us ?</h3>
        </div>
    </div>

    <div class="row text-center primaryColor">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <img src="{{ ('images/icons/customer_support/customer_service_desk.png') }}" alt="customer-service-assistance" class="about_us_icons">

            <h4 class="text-white">Reliable Customer Support</h4>
        </div>

       	<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <img src="{{ ('images/icons/experience/experience_one.jpg') }}" class="about_us_icons">

           	<h4 class="text-white">High Level Of Experience</h4>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <img src="{{ ('images/icons/services/services.jpg') }}" class="about_us_icons">

            <h4 class="text-white">100% Service Affordability</h4>
        </div>
    </div>

    <div class="row text-center" id="aboutUsCounterArea">
    	<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 pt-3" id="dark-cover">
    		<div class=""><i class="fa fa-clock fa-5x text-white"></i></div>
    		<p class="text-white counter" id="aboutUsCounterNumber" style="font-size: 60px;">250</p>
    		<p class="text-white" id="aboutUsCounterText" style="font-size: 24px;">Working Hours</p>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 pt-3" id="dark-cover">
            <div class=""><i class="fa fa-briefcase fa-5x text-white"></i></div>
            <p class="text-white counter" id="aboutUsCounterNumber" style="font-size: 60px;">125</p>
            <p class="text-white" id="aboutUsCounterText" style="font-size: 24px;">Completed Projects</p>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 pt-3" id="dark-cover">
            <div class=""><i class="fa fa-user fa-5x text-white"></i></div>
            <p class="text-white counter" id="aboutUsCounterNumber" style="font-size: 60px;">350</p>
            <p class="text-white" id="aboutUsCounterText" style="font-size: 24px;">Happy Clients</p>
        </div>
    </div>
</section>

<!------- End Of About Us Section ------->

<!------- Start of Newsletter Modal Section ------->

<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
		<div class="modal fade" id="newsletterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticNewsletterSubscriptionModalFormLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title" id="staticNewsletterSubscriptionModalFormLabel"><b>NEWSLETTER</b></h3>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>

					<div class="modal-body">
						<p class="card-text">Sign up for our monthly newsletter to get the latest news and information about our activities and services.</p>

						<form action=" {{ route('news_letter.store') }} " method="POST" name="message" class="" id="message_form" enctype="multipart/form-data" accept-charset="UTF-8">
							@csrf

							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
									<input type="email" class="form-control @error('newsletter_subscription_emails') is-invalid @enderror" id="input_newsletter_subscription_email" name="newsletter_subscription_emails" maxlength="69" placeholder="Email" autofocus autocomplete="newsletter_subscription_emails">

									@error('newsletter_subscription_emails')
                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                           </div>

                           <div class="row pt-3 pb-3">
                           	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                           		<button type="submit" class="btn btn-primary float-end">Sign Up</button>
                           	</div>
                           </div>
                       </form>
                   </div>
                   <div class="modal-footer"></div>
               </div>
           </div>
       </div>
   </div>
</div>

<!------- End of Newsletter Modal Section ------->

<!------- Start Of Send Us a Message Section ------->

<section id="contacts">
	<div class="modal fade" id="messageUsModal" tabindex="-1" aria-labelledby="messageUsModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title" id="messageUsModalLabel"><b>SEND US A MESSAGE</b></h3>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        	<form action=" {{ route('messages.store') }} " method="POST" name="message" class="" id="message_form" enctype="multipart/form-data" accept-charset="UTF-8">
                        		@csrf

                        		<div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="inputFirstName"><b>First Name</b></label>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            	<input type="text" class="form-control @error('first_name') is-invalid @enderror" id="input_first_name" name="first_name" minlength="1" maxlength="19" placeholder="First Name" title="First Name" autofocus autocomplete="first_name">

                                            	@error('first_name')
                                            	<span class="invalid-feedback alert alert-warning" role="alert">
                                            		<strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                 </span>
                                                 @enderror
                                            </div>
                                        </div>
                                    </div>

                                   	<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                       	<label for="inputSurname"><b>Surname</b></label>

                                        <div class="row">
                                        	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        		<input type="text" class="form-control @error('surname') is-invalid @enderror" id="input_surname" name="surname" minlength="1" maxlength="19" placeholder="Surname" title="Surname" autofocus autocomplete="surname">

                                        		@error('surname')
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
                                        <label for="inputMiddleName"><b>Middle Name</b></label>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <input type="text" class="form-control @error('middle_name') is-invalid @enderror" id="input_middle_name" name="middle_name" minlength="1" maxlength="19" placeholder="Middle Name" title="Middle Name" autofocus autocomplete="middle_name">

                                                @error('middle_name')
                                                <span class="invalid-feedback alert alert-warning" role="alert">
                                                	<strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                 </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="inputPhoneNumber"><b>Phone Number</b></label>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" id="input_phone_number" name="phone_number" minlength="7" maxlength="17" placeholder="Phone Number" title="Phone Number" autofocus autocomplete="phone_number">

                                                @error('phone_number')
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
                                        <label for="inputLocation"><b>Location</b></label>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <input type="text" class="form-control @error('location') is-invalid @enderror" id="input_location" name="location" minlength="3" maxlength="19" placeholder="Location" title="Location" autofocus autocomplete="location">

                                                @error('location')
                                                <span class="invalid-feedback alert alert-warning" role="alert">
                                                	<strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                  

                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="inputEmail"><b>Email</b></label>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <input type="email" class="form-control @error('contact_email') is-invalid @enderror" id="input_contactEmail" name="contact_email" minlength="3" maxlength="69" placeholder="Email" title="Email" autofocus autocomplete="contact_email">

                                                @error('contact_email')
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
                                        <label for="inputTextMessage"><b>Message</b></label>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <textarea class="form-control @error('text_message') is-invalid @enderror" id="input_text_message" name="text_message" minlength="10" maxlength="640" placeholder="Text Message" title="Text Message" rows="5" cols="25" autofocus></textarea>

                                                @error('text_message')
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
                                        <input type="hidden" name="created_at" id="time_contact">

                                       	<script type="text/javascript">
                                       		document.getElementById('time_contact').value = new Date().toISOString().slice(0,10);
                                        </script>
                                    </div>
                                </div>

                                <div class="row pt-3">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                      	<button type="submit" class="btn btn-primary border rounded float-end">Send Message</button>
                                        <button type="button" class="btn btn-danger border rounded float-end" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"></div>
           	</div>
        </div>
    </div>
</section>

<!------- End of Send Us a Message Section ------->

<!------- Start Of Testimonials Section ------->

<section id="testimonials">
	<div class="row pt-3">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
			<h2 class="text-center display-5" id="testimonial">TESTIMONIALS</h2>
    	</div>
   	</div>

   	<div class="row pb-3">
   		<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
   			<div class="card testimonialCards">
   				<div class="card-header specialAreaColor">
   					<div class="row">
   						<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
   							<i class="fas fa-users fa-2x text-white border rounded-circle p-2" aria-hidden="true"></i>
   						</div>
   						<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
   							<h3 class="text-white pt-2">CUSTOMERS</h3>
   						</div>
   					</div>
   				</div>

   				<div class="card-body text-center">
   					<p class="text-secondary">What our customers say about us...</p>	
   					<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
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
        	
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        	<div class="card testimonialCards">
        		<div class="card-header specialAreaColor">
        			<div class="row">
   						<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
   							<i class="fas fa-user-graduate fa-2x text-white border rounded-circle p-3" aria-hidden="true"></i>
   						</div>
   					<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
   						<h3 class="text-white pt-2">EMPLOYEES</h3>
   					</div>
   				</div>
   			</div>

   			<div class="card-body text-center">
   				<p class="text-secondary">What our employees say about us...</p>
   				<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
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
</section>

<!------- End Of Testimonials Section ------->

<!------- Start Of Working Hours Section ------->

<section id="working_hours">
    <div class="row text-center p-3 primaryColor">
    	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    		<h2 class="text-center text-white display-5" id="working-hours"><b>WORKING HOURS</b></h2>
    		<ul class="list-group list-group">
    			<li class="list-group-item">Monday    ---   9:00 A.M.   ---   5:00 P.M.</li>
    			<li class="list-group-item">Teusday   ---   9:00 A.M.   ---   5:00 P.M.</li>
    			<li class="list-group-item">Wednesday ---   9:00 A.M.   ---   5:00 P.M.</li>
    			<li class="list-group-item">Thursday  ---   9:00 A.M.   ---   5:00 P.M.</li>
    			<li class="list-group-item">Friday    ---   9:00 A.M.   ---   5:00 P.M.</li>
    			<li class="list-group-item">Saturday  ---   9:00 A.M.   ---   12:00 P.M.</li>
    		</ul>
    	</div>
    </div>
</section>

<!------- End Of Working Hours Section ------->

<!------- Start Of Location Section ------->

<section id="location">
    <div class="row text-center">
    	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 noPadding">
    		<div id="googleMap">
    			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30286.597392010728!2d-77.0999729692874!3d18.400828948628302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8edafdc91dfb81d5%3A0x24cebac16dce2c77!2sOcho%20Rios%2C%20Jamaica!5e0!3m2!1sen!2ske!4v1590949346023!5m2!1sen!2ske" id="googleMapFrame" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    		</div>
    	</div>
    </div>
</section>

<!------- End Of Location Section ------->

@endsection


