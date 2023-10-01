@extends('layout')

@section('body')
<!-- Start of breadcrumb section
	============================================= -->
	<section id="breadcrumb" class="breadcrumb-section" data-background="/assets/img/footer/footer-bg.png">
		<div class="container">
			<div class="breadcrumb-content text-center headline">
				<h2 class="breadcrumb-title">Our Services</h2>
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
