@extends('layout')

@section('body')
<style>
    .one-service-img{
        left: 50%;
        width: 80%;
        position: relative;
        transform: translateX(-50%);
    }
</style>
<!-- Start of breadcrumb section
	============================================= -->
	<section id="breadcrumb" class="breadcrumb-section" data-background="{{URL::asset('storage/'.$services->image)}}">
		<div class="container">
			<div class="breadcrumb-content text-center headline">
				<h2 class="breadcrumb-title">{{$services->title}}</h2>
				<div class="breadcrumb_item ul-li">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('services') }}">Home</a></li>
						<li class="breadcrumb-item active">Services</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!-- End of breadcrumb section
	============================================= -->

<!-- Start of service section
	============================================= -->

	<section id="archf-service" class="archf-service-section position-relative">
		<span class="archf-service-side-img"><img src="img/home/services.jpg" alt=""></span>
		<h4 style="text-align: center">{{$services->description}}</h4>
        <img src="{{URL::asset('storage/'.$services->image)}}" class="one-service-img" alt="">
	</section>
<!-- End of service section
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
