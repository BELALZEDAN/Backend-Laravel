@extends('layout')

@section('body')

<!-- Start of breadcrumb section
	============================================= -->
	<section id="breadcrumb" class="breadcrumb-section" data-background="/assets/img/footer/footer-bg.png">
		<div class="container">
			<div class="breadcrumb-content text-center headline">
				<h2 class="breadcrumb-title"> About Us</h2>
				<div class="breadcrumb_item ul-li">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('main') }}">Home</a></li>
						<li class="breadcrumb-item active">About</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!-- End of breadcrumb section
	============================================= -->

<!-- Start of About page about section
	============================================= -->
	<section id="about" class="about-section about-section-1">
		<div class="container">
			<div class="about-content">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="about-left-img position-relative">
							<img src="{{URL::asset('storage/'.$about->image)}}" alt="">
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="about-right-text">
							<div class="section-title title-left text-left headline">
								<span class="title-tag">INTRODUCTION</span>
								<h3>{{ $about->title}}</h3>
							</div>
							<div class="title-text-details">
                                {!! $about->description !!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of  About page about section
	============================================= -->

<!-- Start of About page intro video section
	============================================= -->
	<section id="intro-video" class="intro-video-section about-page-intro-video position-relative" data-background="/assets/img/banner/ivbg.png">
		<div class="background-overlay"></div>
		<div class="intro-bg position-absolute"><img src="/assets/img/banner/abpbg.png" alt=""></div>
		<div class="container">
			<div class="section-title title-center text-center  position-relative headline">
				<span class="title-tag">PERFECT RESULTS GUARANTEED</span>

				<h2>
                    We plan and build with remarkable quality to the highest standards using the latest construction and manufacturing technology.</h2>
			</div>
            <div class="intro-video-text text-center">
                “We Take Pride In Our Work And Are Committed To Making Each Of Our Clients Happy.”
            </div>
		</div>
	</section>
<!-- End of About page intro video section
	============================================= -->

<!-- Start of team section
	============================================= -->
	<section id="archf-team" class="archf-team-section position-relative">
		<span class="archf-team-vector position-absolute"><img src="/assets/img/f-vector3.png" alt=""></span>
		<div class="container">
			<div class="archf-section-title-1 text-center headline pera-content">
				<h2>Designers</h2>
			</div>
			<div class="archf-team-content">
				<div class="row">
                    @foreach ($team as $member)
                        <div class="col-lg-3 col-md-6">
                            <div class="archf-team-innerbox">
                                <div class="archf-team-img-social position-relative">
                                    <div class="archf-team-img">
                                        <img src="{{URL::asset('storage/'.$member->image)}}" alt="">
                                    </div>
                                    <div class="archf-team-social ul-li-block">
                                        <ul class="archf-team-social-list">
                                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="tel:{{ $member->phone}}"><i class="fas fa-phone"></i></a></li>
                                            <li><a href="mailto:{{ $member->email}}"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="archf-team-text headline">
                                    <h3><a href="#">{{ $member->title}}</a></h3>
                                    <span>{{ $member->role}}</span>
                                </div>
                            </div>
                        </div>
                 @endforeach
				</div>
			</div>
		</div>
	</section>
<!-- End of team section
	============================================= -->

<!-- Start of Gallery section
	============================================= -->
	<section id="about-service-page" class="about-service-page-section position-relative">
		<div class="service-about-img position-absolute"> <img src="/assets/img/service/sab.jpg" alt=""></div>
		<div class="about-content-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="about-right-text">
							<div class="section-title title-left text-left  headline">
								<h2>Get a Free Quote</h2>
							</div>
							<div class="title-text-details">
								Our experienced painters and decorators will be happy to discuss your project, answer any questions you may have, and provide you with a free quote for your project.
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
<!-- End of Gallery section
	============================================= -->


@endsection
