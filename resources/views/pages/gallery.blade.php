@extends('layout')

@section('body')
<style>
    .row {
      display: flex;
      flex-wrap: wrap;
      padding: 0 4px;
    }

    .column {
      flex: 33.3333333333%;
      max-width:  33.3333333333%;
      padding: 0 4px;
    }

    .column img {
      margin-top: 8px;
      vertical-align: middle;
    }

    @media (max-width: 800px) {
      .column {
        flex: 50%;
        max-width: 50%;
      }
    }

    @media (max-width: 600px) {
      .column {
        flex: 100%;
        max-width: 100%;
      }
    }

    .archf-section-title-1{
    max-width: 80%;
    margin: 40px auto;
    }

</style>
<!-- Start of breadcrumb section
	============================================= -->
	<section id="breadcrumb" class="breadcrumb-section" data-background="/assets/img/footer/footer-bg.png">
		<div class="container">
			<div class="breadcrumb-content text-center headline">
				<h2 class="breadcrumb-title">Gallery</h2>
				<div class="breadcrumb_item ul-li">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('main') }}">Home</a></li>
						<li class="breadcrumb-item active">Gallery</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!-- End of breadcrumb section
	============================================= -->

<!-- Start of Images page section
	============================================= -->

@foreach ($workshop as $value)
    @php
        $a = array();
        foreach ( $workshopimage as $key=>$value1)
            if ($value1->workshop_id === $value->id)
                array_push($a, URL::asset('storage/'.$value1->image));
    @endphp
    <!-- Start of Commercial Projects section
	============================================= -->
	@if($value->type !== 'Workshop')
	<section id="commercial" class="archf-team-section position-relative">
		<span class="archf-team-vector position-absolute"><img src="/assets/img/f-vector3.png" alt=""></span>
		<div class="container">
            <div class="archf-section-title-1 text-center headline pera-content">
				<h2>{{$value->title}}</h2>
			</div>
            <!--<div class="archf-section-title-1 text-center headline pera-content">-->
            <!--    <p>{{ $value->description}}</p>-->
            <!--</div>-->
            <section class="gallery">
                <link rel="stylesheet" href="assets\css\galary.css">
                <div class="container">
                    <div class="grid">
                    @for ($i = 0; $i < count($a); $i++)

                        @if ($i % 6 == 0)
                            <div class="column-xs-12">
                                <figure class="img-container">
                                    <img src="{{$a[$i]}}" />
                                </figure>
                            </div>
                        @endif

                        @if ($i % 6 == 1)
                            <div class="column-xs-12 column-md-4">
                                <figure class="img-container">
                                    <img src="{{$a[$i]}}" />

                                </figure>
                            </div>
                        @endif

                        @if ($i % 6 == 2)
                            <div class="column-xs-12 column-md-4">
                                <figure class="img-container">
                                    <img src="{{$a[$i]}}" />
                                </figure>
                            </div>
                        @endif

                        @if ($i % 6 == 3)
                            <div class="column-xs-12 column-md-4">
                                <figure class="img-container">
                                    <img src="{{$a[$i]}}">
                                </figure>
                            </div>
                        @endif

                        @if ($i % 6 == 4)
                            <div class="column-xs-12 column-md-6">
                                <figure class="img-container">
                                    <img src="{{$a[$i]}}" />
                                </figure>
                            </div>
                        @endif
                        @if ($i % 6 == 5)
                            <div class="column-xs-12 column-md-6">
                                <figure class="img-container">
                                    <img src="{{$a[$i]}}" />
                                </figure>
                            </div>
                        @endif

                        @endfor
                    </div>
                </div>
            </section>

	</section>
	@endif
    <!-- End of Commercial Projects section
	============================================= -->
    @endforeach




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
<script>

document.querySelectorAll(".slider").forEach((item) => {
  let clone = item.querySelector(".slider-items").cloneNode(true);
  clone.classList.add("clone");
  clone.ariaHidden = true;
  item.append(clone);
});
</script>
@endsection
