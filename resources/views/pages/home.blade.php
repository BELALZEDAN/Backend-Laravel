@extends('layout')

@section('body')
<style>
    .owl-stage{
        display: flex;
        flex-wrap: wrap;
    }
</style>

<!-- Start of slider section
	============================================= -->
	<section id="archf-slider" class="archf-slider-section position-relative">
		<div class="archf-slider-wrapper">
            @php
                $i = 1
            @endphp
			@foreach ( $slider as $slide )
                <div class="archf-slider-item position-relative" style="height: 100%">
                    <div class="archf-slider-img" data-background="{{URL::asset('storage/'.$slide->image)}}"></div>
                    <div class="archf-slider-content">
                        <div class="container">
                            <div class="archf-slider-text headline pera-content text-center">
                                <h2>{{ $slide->title }}</h2>
                                <p>{{$slide->description}}</p>
                            </div>
                        </div>
                        <div class="archf-slider-number">
                            <span class="active-number">{{ $i }}</span>
                            <span class="total-number">{{ count($slider) }}</span>
                        </div>
                    </div>
                </div>
                @php
                    $i++
                @endphp
            @endforeach
		</div>
		<div class="archf-slider-social">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-linkedin"></i></a>
		</div>
		<div class="archf-slider-cta">
			<i class="fas fa-phone"></i> <span>+971-506-330-349</span>
		</div>
	</section>
<!-- End of slider section
	============================================= -->

<!-- Start of about section
	============================================= -->
	<section id="archf-about" class="archf-about-section position-relative">
		<span class="archf-about-bg"><img src="img/ab-bg1.png" alt=""></span>
		<div class="container">
			<div class="archf-about-content">
				<div class="row">
					<div class="col-lg-6">
						<div class="archf-about-img">
							<img src="img/home/our-approach.jpg" alt="">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="archf-about-text archf-section-title-2">
							<div class=" headline pera-content">
                               <h2>Our Approach</h2>
                            </div>
							<div class="archf-about-text-area pera-content ul-li">
                                <h3>Meet & Greet</h3>
                                <p>Understanding client’s vision and requirements.</p>
                                <h3>Schematic Design</h3>
                                <p>
                                    Rough sketches and elevations are created, preliminary furniture and finish ideas are developed and then presented to the client for review.
                                </p>
                                <h3>Design Development</h3>
                                <p>
                                    After approval of the schematic design, everything is developed in greater detail. Cost estimates are prepared. The resulting design is then presented to the client for review, revision and final approval.
                                </p>
                                <h3>Delivery & Installation</h3>
                                <p>Upon final approval, things are built and installed. All items are carefully placed, exquisitely styled, and forever admired</p>

								<div class="about-btn">
                                    <a class="d-inline-block text-center" href="{{ route('about')}}">About Us</a>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of about section
	============================================= -->

<!-- Start of service section
	============================================= -->
	<section id="archf-service" class="archf-service-section position-relative">
		<span class="archf-service-side-img"><img src="img/home/services.jpg" alt=""></span>
		<div class="container">
			<div class="archf-service-content">
				<div class="row">
					<div class="col-lg-8">
						<div class="archf-section-title-2 headline pera-content">
							<h3>Service</h3>
							<h2>What we love to do for Clients</h2>
						</div>
						<div class="acrhf-service-item-wrapper">
							<div class="row">
                                @php
                                    $i = 1
                                @endphp
                                @foreach ( $services as $service )
                                    <div class="col-md-6">
                                        <div class="archf-service-item position-relative" style="height: 90%">
                                            <div class="archf-service-item-img">
                                                <img src="{{URL::asset('storage/'.$service->image)}}" alt="">
                                            </div>
                                            <div class="archf-service-item-icon-text">
                                                <div class="archf-ser-icon">
                                                    <i>{{ $i }}</i>
                                                </div>
                                                <div class="archf-ser-text headline pera-content">
                                                    <h3><a href="{{ route('show_service',  $service->id )}}">{{$service->title}}</a></h3>
                                                    <p>{{Str::words($service->description, 10, '...') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        $i++;
                                     @endphp
                                @endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of service section
	============================================= -->

<!-- Start of What Makes Us Different section
	============================================= -->
	<section id="archf-intro" class="archf-intro-section">
		<div class="container">
			<div class="archf-section-title-1 text-center headline pera-content">
				<h2>What makes us different</h2>
			</div>
			<div class="archf-intro-content">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="archf-intro-innerbox">
							<div class="archf-intro-img">
								<img src="img/history/h1.jpg" alt="">
							</div>
							<div class="archf-intro-text-icon position-relative">
								<div class="archf-intro-icon position-absolute text-center">
									<img src="img/icon/intro-icon1.png" alt="">
								</div>
								<div class="archf-intro-text headline pera-content">
									<h3><a>Affordable Prices</a></h3>
									<p>We offer competitive pricing</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="archf-intro-innerbox">
							<div class="archf-intro-img">
								<img src="img/history/h2.jpg" alt="">
							</div>
							<div class="archf-intro-text-icon position-relative">
								<div class="archf-intro-icon position-absolute text-center">
									<img src="img/icon/intro-icon2.png" alt="">
								</div>
								<div class="archf-intro-text headline pera-content">
									<h3><a>Certified & Experienced</a></h3>
									<p>We have proven tremendous experience</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="archf-intro-innerbox">
							<div class="archf-intro-img">
								<img src="img/history/h3.jpg" alt="">
							</div>
							<div class="archf-intro-text-icon position-relative">
								<div class="archf-intro-icon position-absolute text-center">
									<img src="img/icon/intro-icon3.png" alt="">
								</div>
								<div class="archf-intro-text headline pera-content">
									<h3><a>Customer Satisfaction</a></h3>
									<p>Our reputation precedes us!</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of What Makes Us Different section
	============================================= -->

<!-- Start of Gallery section
	============================================= -->
	<section id="archf-testimonial" class="archf-testimonial-section position-relative" data-background="img/gallery/gallery-11.jpg">
		<span class="testimonial-shape1 position-absolute"><img src="img/tst-s1.png" alt=""></span>
		<span class="testimonial-shape2 position-absolute"><img src="img/tst-s2.png" alt=""></span>
		<div class="archf-testimonial-content">
			<div id="archf-carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<div class="testimonial-carousel-indicator clearfix">
					<ol class="carousel-indicators">
						<li data-target="#archf-carouselExampleIndicators" data-slide-to="0" class="active">
							<img src="" alt="">
						</li>
						<li data-target="#archf-carouselExampleIndicators" data-slide-to="1">
							<img src="" alt="">
						</li>
						<li data-target="#archf-carouselExampleIndicators" data-slide-to="2">
							<img src="" alt="">
						</li>
						<li data-target="#archf-carouselExampleIndicators" data-slide-to="3">
							<img src="" alt="">
						</li>
						<li data-target="#archf-carouselExampleIndicators" data-slide-to="4">
							<img src="" alt="">
						</li>
						<li data-target="#archf-carouselExampleIndicators" data-slide-to="5">
							<img src="" alt="">
						</li>
						<li data-target="#archf-carouselExampleIndicators" data-slide-to="6">
							<img src="" alt="">
						</li>
						<li data-target="#archf-carouselExampleIndicators" data-slide-to="7">
							<img src="" alt="">
						</li>
					</ol>
				</div>
				<div class=" relative-position">
					<div>
						<div class="archf-testimonial-inner-wrap headline pere-content text-center pera-content position-relative clearfix">
							<div class="archf-testimonial-top">
								<h3>NO JOB IS TOO SMALL</h3>
							</div>
							<p>No job too big or too small, we do it ALL. Explore our work.</p>

							<div class="about-btn">
								<a class="d-inline-block text-center" href="{{ route('gallery')}}">View Gallery</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of Gallery section
	============================================= -->

<!-- Start of Contact Us section
	============================================= -->
	<section id="about-service-page" class="about-service-page-section position-relative">
		<div class="service-about-img position-absolute"> <img src="/assets/img/service/sab.jpg" alt=""></div>
		<div class="about-content-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="about-right-text">
							<div class="section-title title-left text-left  headline">
								<h2>Ready to transform your space?</h2>
							</div>
							<div class="title-text-details">
								Our professional team is here to give your home a fresh new look. Contact us today and get a free estimate.
                            </div>
							<div class="about-btn">
								<a class="d-inline-block text-center" href="{{ route('contact')}}">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of Contact Us section
	============================================= -->

@endsection
