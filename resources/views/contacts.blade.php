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
				{{-- <p class="my-p">{{ __('experts.our-experts-text') }}</p> --}}
			</div>
		</div>
	</div>
</section>

<link href="{{asset('assets/team/sch-style1.css')}}" rel="stylesheet" />
<div class="tab-pane fade active show" id="nav-demo-1" role="tabpanel" aria-labelledby="nav-demo-1-tab">
	<div class="sch-style-light">
		<div class="container">
			{{-- <h6 class="sch-title"><i class="fa fa-asterisk"></i> Background Light</h6> --}}
			<div class="row">

				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">

				</div>


			</div>
		</div>
	</div>
</div>



	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters mb-5">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Contact Us</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Full Name</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Subject</label>
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div id="map"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-map-marker"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-phone"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-paper-plane"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-globe"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Website</span> <a href="#">yoursite.com</a></p>
				          </div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

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