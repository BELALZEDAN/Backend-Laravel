@extends('layout')

@section('style')
<link rel="stylesheet" href="/css/assets/bootstrap.min.css">
<link rel="stylesheet" href="/css/assets/flaticon.css">
<link rel="stylesheet" href="/css/assets/sitefont.css">
<link rel="stylesheet" href="/css/assets/fontawesome-all.css">
<link rel="stylesheet" href="/css/assets/owl.carousel.css">
<link rel="stylesheet" href="/css/assets/odometer-theme-default.css">
<link rel="stylesheet" href="/css/assets/animate.css">
<link rel="stylesheet" href="/css/assets/video.min.css">
<link rel="stylesheet" href="/css/assets/style.css">
@endsection

@section('body')

<!-- Start of breadcrumb section
	============================================= -->
	<section id="breadcrumb" class="breadcrumb-section" data-background="/assets/img/footer/footer-bg.png">
		<div class="container">
			<div class="breadcrumb-content text-center headline">
				<h2 class="breadcrumb-title">Get In Touch</h2>
				<div class="breadcrumb_item ul-li">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('main') }}">Home</a></li>
						<li class="breadcrumb-item active">Contact Us</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!-- End of breadcrumb section
	============================================= -->


<!-- Start of contact content section
	============================================= -->
	<section id="contact-content" class="contact-content-section">
		<div class="container">
			<div class="contact-content-area">
				<div class="row">
					<div class="col-lg-7">
						<div class="contact-google-map">
							<div class="earth3dmap-com">
								<iframe id="iframemap" class="google-map" src="https://maps.google.com/maps?q=18%204th%20St%20-%20Musaffah%20-%20ICAD%20I%20-%20Abu%20Dhabi&t=m&z=16&output=embed&iwloc=near" width="100%" height="550"></iframe>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="contact-content-info">
							<div class="contact-widget">
								<div class="contact-widget-icon-text">
									<div class="contact-widget-icon float-left">
										<i class="flaticon-call"></i>
									</div>
									<div class="contact-widget-text headline">
										<h3>Phone Number</h3>
										<span>
                                            Landline: <a href="tel:{{ $contacts->phone }}">{{ $contacts->phone }}</a>
                                            <br>
                                            Phone: <a href="tel:{{ $contacts->mobile }}">{{ $contacts->mobile }}</a>
                                        </span>
									</div>
								</div>
								<div class="contact-widget-icon-text">
									<div class="contact-widget-icon float-left">
										<i class="flaticon-message"></i>
									</div>
									<div class="contact-widget-text headline">
										<h3>Email Address</h3>
										<span>
                                            E-mail:
                                            <br>
                                            <a href="{{ $contacts->email }}">{{ $contacts->email }}</a>
                                        </span>
									</div>
								</div>
								<div class="contact-widget-icon-text">
									<div class="contact-widget-icon float-left">
										<i class="flaticon-house"></i>
									</div>
									<div class="contact-widget-text headline">
										<h3>Office Address</h3>
										<span>18 4th St - Musaffah - ICAD I - Abu Dhabi</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of Contact content section
	============================================= -->

<!-- Start of Get Quote  section
	============================================= -->
	<section id="get-quote" class="get-quote-section contact-page-get-quote position-relative">
		<div class="container">
			<div class="get-quote-content">
				<div class="section-title title-center text-center position-relative headline">
					<span class="title-tag">Get Quote</span>
					<h2>Free Consultancy</h2>
				</div>
				<div class="get-quote-form">
					<form id="contact_form" action="mailto:sales@groveinteriorsuae.com" method="POST" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-6">
								<div class="contact-info">
									<input class="email" name="name" type="text" placeholder="Your full name">
									<div class="icon-bg">
										<i class="far fa-user"></i>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="contact-info">
									<input class="name" name="Email" type="email" placeholder="Enter email address">
									<div class="icon-bg">
										<i class="far fa-envelope"></i>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="contact-info">
									<input class="name" name="phone" type="phone" placeholder="Add phone number">
									<div class="icon-bg">
										<i class="fas fa-phone"></i>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="contact-info">
									<input class="name" name="sub" type="text" placeholder="Select Subject">
									<div class="icon-bg">
										<i class="far fa-file-alt"></i>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="contact-info">
									<textarea id="message" name="message"  placeholder="Enter messages"></textarea>
									<div class="icon-bg">
										<i class="far fa-edit"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="sub-button text-center">
							<button type="submit" value="Submit">Get Free Consultancy</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
<!-- End of Get Quote  section
	============================================= -->



@endsection
