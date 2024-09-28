<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PT Bara Blasting Perkasa | Contact Us</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>
 
<div class="page-wrapper">
	
    <!-- Preloader -->
    <div class="preloader"></div>
	<!-- End Preloader -->
 	
 	<!-- Main Header -->
    <header class="main-header header-style-one">
    	
		<!-- Header Top -->
		<div class="header-top">
			<div class="auto-container">
				<div class="inner-container d-flex flex-wrap">
					<!-- Info List -->
					<ul class="info-list">
						<li><a href="#"><span class="icon fa-solid fa-phone fa-fw"></span>+62 21 837 85938</a></li>
						<li><a href="#"><span class="icon fa-solid fa-envelope fa-fw"></span>company.info@barablastingperkasa.co.id</a></li>
						<li><a href="#"><span class="icon fa-solid fa-map fa-fw"></span>Office Address : Menara Imperium 10th Floor, Jalan H.R. Rasuna Said Kav 1,<br> Setiabudi, Jakarta Selatan 12980</a></li>
					</ul>
					<!-- Social Box -->
					<!-- <ul class="header-social_box">
						<li><a href="https://www.twitter.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
						<li><a href="https://www.facebook.com/" class="fa-brands fa-twitter fa-fw"></a></li>
						<li><a href="https://dribbble.com/" class="fa-solid fa-dribbble fa-fw"></a></li>
					</ul> -->
				</div>
			</div>
		</div>
		<!-- End Header Top -->
		
        <!-- Header Lower -->
        <div class="header-lower">
            
			<div class="auto-container">
				<div class="inner-container d-flex justify-content-between align-items-center">
					
					<!-- Logo Box -->
					<div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
					
					<div class="nav-outer d-flex align-items-center">
						
						<!-- Main Menu -->
						<nav class="main-menu show navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							
							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li><a href="{{ url('/') }}">Home</a></li>
									<li><a href="{{ url('about') }}">About Us</a></li>
									<li><a href="{{ url('products') }}">Products</a></li>
									<li><a href="{{ url('contact') }}">Contact</a></li>
								</ul>
							</div>
							
						<!-- Main Menu End-->
						
						<!-- Mobile Navigation Toggler -->
						<div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>
						
					</div>
					
				</div>
				
			</div>
        </div>
        <!-- End Header Lower -->
        
		<!-- Sticky Header  -->
		<div class="sticky-header">
			<div class="auto-container">
				<div class="d-flex justify-content-between align-items-center">
					<!-- Logo -->
					<div class="logo">
						<a href="{{ url('/') }}" title=""><img src="{{ asset('images/logo.png') }}" alt="" title=""></a>
					</div>
		
					<!-- Right Col -->
					<div class="right-box d-flex align-items-center flex-wrap">
						<!-- Main Menu -->
						<nav class="main-menu">
							<!--Keep This Empty / Menu will come through Javascript-->
						</nav>
						<!-- Main Menu End-->
		
						<div class="outer-box d-flex align-items-center">
							<div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- End Sticky Menu -->
		
		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>
			<div class="close-btn"><span class="icon flaticon-020-x-mark"></span></div>
			<nav class="menu-box">
				<div class="nav-logo"><a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo" title="Logo"></a></div>
				<!-- Search -->
				<div class="search-box">
					<form method="post" action="{{ url('/contact') }}">
						@csrf <!-- Include CSRF token for security -->
						<div class="form-group">
							<input type="search" name="search-field" value="" placeholder="SEARCH HERE" required>
							<button type="submit"><span class="icon flaticon-001-loupe"></span></button>
						</div>
					</form>
				</div>
				<div class="menu-outer">
					<!-- Here Menu Will Come Automatically Via Javascript / Same Menu as in Header -->
				</div>
			</nav>
		</div>
		
		<!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->
	
	<!-- Page Title -->
    <section class="page-title" style="background-image:url('{{ asset('images/background/7.jpg') }}')">
		<div class="auto-container">
			<h2>Contact Us</h2>
			<ul class="bread-crumb clearfix" role="navigation" aria-label="Breadcrumb">
				<li><a href="{{ url('/') }}" aria-label="Home">Home</a></li>
				<li>Contact Us</li>
			</ul>
		</div>
	</section>
	
    <!-- End Page Title -->
	
	<!-- Contact One -->
	<section class="contact-one" style="background-image:url('{{ asset('images/background/map-1.png') }}')">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="left-box">
						<div class="sec-title_title">Contact us</div>
						<!-- <h2 class="sec-title_heading">Grow Your Business With <br> <span>Our Expertise</span></h2> -->
					</div> 
				</div>
			</div>
			<div class="row clearfix">
	
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Contact Block -->
						<div class="contact-block">
							<div class="block-inner">
								<span class="icon"><img src="{{ asset('images/icons/contact-1.png') }}" alt="" /></span>
								<strong>Office address</strong>
								Menara Imperium 10th Floor, Jalan H.R. Rasuna Said Kav 1, Setiabudi, Jakarta Selatan 12980
							</div>
						</div>
						
						<!-- Contact Block -->
						<div class="contact-block">
							<div class="block-inner">
								<span class="icon"><img src="{{ asset('images/icons/contact-2.png') }}" alt="" /></span>
								<strong>Telephone number</strong>
								+62 21 837 85938 <br> +62 21 837 85938
							</div>
						</div>
						
						<!-- Contact Block -->
						<div class="contact-block">
							<div class="block-inner">
								<span class="icon"><img src="{{ asset('images/icons/contact-3.png') }}" alt="" /></span>
								<strong>Mail address</strong>
								company.info@barablastingperkasa
							</div>
						</div>
						
					</div>
				</div>
				
				<!-- Form Column -->
				<div class="form-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Contact Form -->
						<div class="contact-form">
							<form method="POST" action="{{ route('send.email') }}" id="contact-form">
								@csrf
								<div class="row clearfix">
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<label>Name (required)</label>
										<input type="text" name="username" placeholder="Your name*" required="">
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<label>Email address (required)</label>
										<input type="email" name="email" placeholder="Email" required="">
									</div>
									
									<div class="col-lg-6 col-md-12 col-sm-12 form-group">
										<label>Phone (optional)</label>
										<input type="text" name="phone" placeholder="Phone">
									</div>
									
									<div class="col-lg-6 col-md-12 col-sm-12 form-group">
										<label>Subject (required)</label>
										<input type="text" name="subject" placeholder="Subject" required="">
									</div>
									
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<label>Your message</label>
										<textarea class="" name="message" placeholder="Your text here..."></textarea>
									</div>
									
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<button class="btn-style-seven theme-btn" type="submit">
											<span class="btn-wrap">
												<span class="text-one">Send message</span>
												<span class="text-two">Send message</span>
											</span>
										</button>
									</div>
									
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- End Contact One -->
	
	

	<!-- Map One -->
<section class="map-one">
    <div class="map-outer">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.1498930134722!2d106.82924559999999!3d-6.2101599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f40f139955e1%3A0x7eed054747d3a97f!2sMenara%20Imperium!5e0!3m2!1sen!2sid!4v1691575443799!5m2!1sen!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<!-- End Map One -->

	
	
	
	<!-- Footer -->
	<footer class="main-footer" style="background-image:url(images/background/pattern-11.png)">
		<div class="auto-container">
			<!-- Widgets Section -->
			<div class="widgets-section">
				<div class="row clearfix">
					
					<!-- Big Column -->
					<div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget logo-widget">
									<div class="logo">
										<!-- Ganti gambar dengan teks yang dapat diklik -->
										<a href="{{ url('/') }}"><h4>PT. Bara Blasting Perkasa</h4></a>
									</div>
									<div class="text">
										"Our locally produced Ammonium Nitrate, manufactured with high-quality facilities, enables us to consistently ensure the availability of supply through comprehensive distribution to our customers."
									</div>
									<a href="#" class="theme-btn about-btn">About us</a>
								</div>
							</div>
							
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget newsletter-widget">
									<h4>Newsletter</h4>
									<div class="text">company.info@barablastingperkasa</div>
									
									<!-- Email Box -->
									
									
									<!-- Social Box -->

									<!-- End Social Box -->
									
								</div>
							</div>
							
						</div>
					</div>
					
					<!-- Big Column -->
					<div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget contact-widget">
									<h4>Official info:</h4>
									<ul class="contact-list">
										<li><span class="icon fa fa-phone"></span> Menara Imperium 10th Floor, Jalan H.R. Rasuna Said Kav 1, Setiabudi, Jakarta Selatan 12980</li>
										<li><span class="icon fa fa-envelope"></span> +62 21 837 85938</li>
									</ul>
									<div class="timing">
										<strong>Open Hours: </strong>
										Mon - Fri: 8 am - 5 pm
									</div>
								</div>
							</div>
							
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget instagram-widget">
									<h4>Gallery</h4>
									<div class="widget-content">
										<div class="images-outer clearfix">
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href="images/gallery/project-1.jpg"><img src="images/gallery/g1.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href="images/gallery/project-2.jpg"><img src="images/gallery/g2.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href="images/gallery/project-3.jpg"><img src="images/gallery/g3.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href="images/gallery/project-4.jpg"><img src="images/gallery/g4.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href="images/gallery/project-5.jpg"><img src="images/gallery/g5.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href="images/gallery/project-6.jpg"><img src="images/gallery/g6.jpg" alt=""></a></figure>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
			
		
			
		</div>
		
	</footer>
	<!-- End Footer -->
	
</div>
	<!-- End Footer -->
	
</div>
<!-- End PageWrapper -->

<!-- Search Popup -->
<div class="search-popup">
	<div class="color-layer"></div>
	<button class="close-search"><span class="flaticon-020-x-mark"></span></button>
	<form method="post" action="blog.html">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="flaticon-001-loupe"></i></button>
		</div>
	</form>
</div>
<!-- End Search Popup -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validate.js"></script>
<script src="js/odometer.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/magnific-popup.min.js"></script>

<script src="js/script.js"></script>



</body>
</html>