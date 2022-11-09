<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>App Name - @yield('title')</title>
	<!-- CSS FILES -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">


	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/bootstrap-icons.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/tooplate-crispy-kitchen.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
	<!-- MDB -->
	{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" /> --}}
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-white shadow-lg noselect">
		<div class="container">
			<div class="row">
				<div class="col">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
						aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<a class="navbar-brand" href="/home">
						<!-- Crispy Kitchen -->
						<img src="assets/images/logo/mahorat3-80.png" width="180px">
					</a>

					<div class="d-lg-none">
						<button type="button" class="custom-btn btn btn-success me-5" data-bs-toggle="modal"
							data-bs-target="#BookingModal">{{ __('messages.menu-apply') }}</button>
					</div>

					<div class="d-none d-lg-block">
						<i class="flag flag-andorra"></i>
						<select class="form-control changeLang">
							<option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}><i class="flag flag-andorra"></i> {{ __('messages.lang-english') }}</option>
							<option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>{{ __('messages.lang-russian') }}</option>
							<option value="uz-Cyrl" {{ session()->get('locale') == 'uz-Cyrl' ? 'selected' : '' }}>{{ __('messages.lang-uzbek-cyrillic') }}</option>
							<option value="uz-Latn" {{ session()->get('locale') == 'uz-Latn' ? 'selected' : '' }}>{{ __('messages.lang-uzbek-latin') }}</option>
						</select>
					</div>

					<div class="d-none d-lg-block">
						<button type="button" class="custom-btn btn btn-success me-5" data-bs-toggle="modal"
							data-bs-target="#BookingModal">{{ __('messages.menu-apply') }}</button>
					</div>

					<script>
						$(function(){
							$('.selectpicker').selectpicker();
						});
					</script>
				</div>
			</div>

			<div class="row">
				<div class="container">
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav mx-auto">
							<li class="nav-item"><a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="/home">{{ __('messages.menu-home') }}</a></li>
							<li class="nav-item"><a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">{{ __('messages.menu-about') }}</a></li>
							<li class="nav-item"><a class="nav-link {{ request()->is('services') ? 'active' : '' }}" href="/services">{{ __('messages.menu-services') }}</a></li>
							<li class="nav-item"><a class="nav-link {{ request()->is('projects') ? 'active' : '' }}" href="/projects">{{ __('messages.menu-projects') }}</a></li>
							<li class="nav-item"><a class="nav-link {{ request()->is('experts') ? 'active' : '' }}" href="/experts">{{ __('messages.menu-experts') }}</a></li>
							<li class="nav-item"><a class="nav-link {{ request()->is('journal') ? 'active' : '' }}" href="https://raled.org/index.php/conferences">{{ __('messages.menu-journal') }}</a></li>
							<li class="nav-item"><a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="/contact">{{ __('messages.menu-contact') }}</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>

		@section('sidebar')
			{{-- This is the master sidebar. --}}
		@show
		<main>
			@yield('content')
		</main>

		<footer class="site-footer section-padding">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h4 class="text-white mb-4 me-5">Mahorat & Management</h4>
					</div>
					<div class="col-lg-4 col-md-7 col-xs-12 tooplate-mt30">
						<h6 class="text-white mb-lg-4 mb-3">Location</h6>
						<p>Shota Rustavili Street 53B</p>
						<p>Tashkent, Uzbekistan</p>
						<a href="https://yandex.uz/maps/-/CCU6F8VfhA" target="_blank" class="custom-btn btn btn-dark mt-2">Directions</a>
					</div>
					<div class="col-lg-4 col-md-5 col-xs-12 tooplate-mt30">
						<h6 class="text-white mb-lg-4 mb-3">Opening Hours</h6>
						<p class="mb-2">Monday - Friday</p>
						<p>10:00 AM - 08:00 PM</p>
						<p>Tel: <a href="tel: +99895 195-00-55" class="tel-link">+998 95 195-00-55</a></p>
					</div>
					<div class="col-lg-4 col-md-6 col-xs-12 tooplate-mt30">
						<h6 class="text-white mb-lg-4 mb-3">Social</h6>
						<ul class="social-icon">
							<li><a href="https://www.facebook.com/watch/mahoratLC/" target="_blank" class="social-icon-link bi-facebook"></a></li>
							<li><a href="https://www.instagram.com/mahoratmanagement/" target="_blank" class="social-icon-link bi-instagram"></a></li>
							<li><a href="https://t.me/mahorat_management" target="_blank" class="social-icon-link bi-telegram"></a></li>
							<li><a href="https://www.youtube.com/channel/UC5a9BbxxGgeOJaZ2wdA9-xg" target="_blank" class="social-icon-link bi-youtube"></a></li>
						</ul>
					</div>
				</div><!-- row ending -->
				<div class="row">
					<div class="col-12">
						<p class="text-end copyright-text tooplate-mt60">© 2022 Mahorat & Management. All rights reserved.</p>
					</div>
				</div>
			</div><!-- container ending -->
		</footer>


	<!-- Modal -->
	<div class="modal fade" id="BookingModal" tabindex="-1" aria-labelledby="BookingModal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="mb-0">Reserve a table</h3>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body d-flex flex-column justify-content-center">
					<div class="booking">
						<form class="booking-form row" role="form" action="#" method="post">
							<div class="col-lg-6 col-12">
								<label for="name" class="form-label">Full Name</label>
								<input type="text" name="name" id="name" class="form-control"
									placeholder="Your Name" required>
							</div>
							<div class="col-lg-6 col-12">
								<label for="email" class="form-label">Email Address</label>
								<input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
									class="form-control" placeholder="your@email.com" required>
							</div>
							<div class="col-lg-6 col-12">
								<label for="phone" class="form-label">Phone Number</label>
								<input type="telephone" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
									class="form-control" placeholder="123-456-7890">
							</div>
							<div class="col-lg-6 col-12">
								<label for="people" class="form-label">Number of persons</label>
								<input type="text" name="people" id="people" class="form-control"
									placeholder="12 persons">
							</div>
							<div class="col-lg-6 col-12">
								<label for="date" class="form-label">Date</label>
								<input type="date" name="date" id="date" value="" class="form-control">
							</div>
							<div class="col-lg-6 col-12">
								<label for="time" class="form-label">Time</label>
								<select class="form-select form-control" name="time" id="time">
									<option value="5" selected>5:00 PM</option>
									<option value="6">6:00 PM</option>
									<option value="7">7:00 PM</option>
									<option value="8">8:00 PM</option>
									<option value="9">9:00 PM</option>
								</select>
							</div>
							<div class="col-12">
								<label for="message" class="form-label">Special Request</label>
								<textarea class="form-control" rows="4" id="message" name="message"
									placeholder=""></textarea>
							</div>
							<div class="col-lg-4 col-12 ms-auto">
								<button type="submit" class="form-control">Submit Request</button>
							</div>
						</form>
					</div>
				</div>
				<div class="modal-footer"></div>
			</div>
		</div>
	</div>

	<!-- JAVASCRIPT FILES -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>

<script type="text/javascript">
	var url = "{{ route('changeLang') }}";
	$(".changeLang").change(function() {
		window.location.href = url + "?lang=" + $(this).val();
	});
</script>

</html>