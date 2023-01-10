@extends('layouts.main')
 
@section('title', 'Mahorat & Management - Services')
 
@section('sidebar')
    @parent
 
    {{-- <p>This is appended to the master sidebar.</p> --}}
@endsection
 
@section('content')

<header class="site-header site-experts-header">
	<div class="container">
		<div class="row">

			<div class="col-lg-10 col-12 mx-auto">
				<h1 class="text-white my-font">{{ __('contacts.header') }}</h1>
				<strong class="text-white my-font">{{ __('contacts.sub-header') }}</strong>
			</div>

		</div>
	</div>

	<div class="overlay"></div>
</header>



<section class="about section-padding bg-white">
	<div class="container">
		<div class="row my-header-row">
			<div class="col">
				<h2 class="text-center my-header">{{ __('contacts.our-experts') }}</h2>
				{{-- <p class="my-p">{{ __('contacts.our-experts-text') }}</p> --}}
			</div>
		</div>
	</div>
</section>


<link href="{{asset('assets/contact/css/style.css')}}" rel="stylesheet" />
{{-- <link href="{{asset('assets\material-design-bootstrap\css\core.min.css')}}" rel="stylesheet" /> --}}


{{-- <section class="contact-us text-center">
	<div class="fields">
		<div class="container">
			<div class="row">
				<i class="fa fa-headphones fa-5x"></i>
				<h2>Contact Us</h2>
				<p class="lead">Feel free to contact us</p>
				<form action="" role="form" class="">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="User Name"/>
						</div>
						<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="Email"/>
						</div>
						<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="Phone Number"/>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<textarea class="form-control" placeholder="Your Message"></textarea>
						</div>
						<button type="button" class="btn btn-danger btn-lg btn-block">Contact Us</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section> --}}




<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="wrapper">

					<div class="row" style="margin-bottom: 7rem;">
						<div class="col-md-4">
							<div class="dbox w-100 text-center">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="fa fa-map-marker"></span>
								</div>
								<div class="text">
									<p><span>{{ __('contacts.address') }}</span> {{ __('contacts.address-1') }} <br /> {{ __('contacts.address-2') }}</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="dbox w-100 text-center">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="fa fa-phone"></span>
								</div>
								<div class="text">
									<p><span>{{ __('contacts.phone') }}</span> <a href="tel://998951950055">+998 95 195-00-55</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="dbox w-100 text-center">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="fa fa-paper-plane"></span>
								</div>
								<div class="text">
									<p><span>Email:</span> <a href="mailto:info@mahorat.org">info@mahorat.org</a></p>
								</div>
							</div>
						</div>
					</div>

					<div class="row no-gutters mb-5">
						<div class="col-md-7">
							<div class="contact-wrap w-100 p-md-5 p-4">
								<h3 class="mb-4">{{ __('contacts.contact-us') }}</h3>
								<div id="form-message-warning" class="mb-4"></div>
								<div id="form-message-success" class="mb-4">
									{{ __('contacts.your-message') }}
								</div>
								<form method="POST" id="contactForm" name="contactForm" class="contactForm">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="label" for="name">{{ __('contacts.full-name') }}</label>
												<input type="text" class="form-control" name="name" id="name" placeholder="{{ __('contacts.full-name') }}">
											</div>
										</div>
										<div class="col-md-6"> 
											<div class="form-group">
												<label class="label" for="email">{{ __('contacts.email-address') }}</label>
												<input type="email" class="form-control" name="email" id="email" placeholder="{{ __('contacts.email-address') }}">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="subject">{{ __('contacts.subject') }}</label>
												<input type="text" class="form-control" name="subject" id="subject" placeholder="{{ __('contacts.subject') }}">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="#">{{ __('contacts.message') }}</label>
												<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="{{ __('contacts.message') }}"></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="submit" value="{{ __('contacts.send-message') }}" class="btn btn-primary">
												<div class="submitting"></div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-5 d-flex align-items-stretch">
							<div id="map">
								
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5996.346567646579!2d69.251601!3d41.283333!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x672cf1e7743ccd33!2zNDHCsDE3JzAwLjAiTiA2OcKwMTUnMDUuOCJF!5e0!3m2!1sen!2s!4v1658926045086!5m2!1sen!2s" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<script src="{{asset('assets/contact/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/contact/js/popper.js')}}js/popper.js"></script>
<script src="{{asset('assets/contact/js/bootstrap.min.js')}}js/bootstrap.min.js"></script>
<script src="{{asset('assets/contact/js/jquery.validate.min.js')}}js/jquery.validate.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('assets/contact/js/google-map.js')}}js/google-map.js"></script>
<script src="{{asset('assets/contact/js/main.js')}}js/main.js"></script>


<section class="section section-default mt-none mb-none">
    <div class="container">
        <h2 class="text-center mb-lg-5 mb-4 my-header">{{ __('messages.our-partners') }}</h2>
        <strong>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="square-holder">
                        <img alt="" src="assets/images/partners/partner-friedrich-ebert-stiftung.png" />
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="square-holder">
                        <img alt="" src="assets/images/partners/partner-m-tech.jpg" />
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="square-holder">
                        <img alt="" src="assets/images/partners/partner-uz-tea.jpg" />
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="square-holder">
                        <img alt="" src="assets/images/partners/partner-raled.jpg" />
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="square-holder">
                        <img alt="" src="assets/images/partners/partner-etf.jpg" />
                    </div>
                </div>
            </div>
        </strong>
    </div>
</section>

<script>
	(function ($) {
		"use strict";
		// NAVBAR
		$('.navbar-nav .nav-link').click(function() {
			$(".navbar-collapse").collapse('hide');
		});
	})(window.jQuery);
</script>

            


@endsection