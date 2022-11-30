<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="{{asset('assets/images/ico/mahorat.png')}}">
	<title>@yield('title')</title>
	<!-- CSS FILES -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
	<link href="{{asset('assets/css/icomoon.css')}}" rel="stylesheet">
	<link href="{{asset('assets/fontawesome/css/all.min.css')}}" rel="stylesheet">


	<!-- MDB -->
	{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" /> --}}
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/bootstrap-icons.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/tooplate-crispy-kitchen.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/blog.css')}}" rel="stylesheet" />
</head>

<body>

		<nav class="navbar navbar-expand-lg bg-white shadow-lg noselect">
			<div class="container">
				<div class="row"></div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
					aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<a class="navbar-brand" href="/home">
					<img class="my-logo" src="assets/images/logo/mahorat3-80-2.png">
				</a>

				<div class="d-lg-none">
					<button type="button" class="custom-btn btn btn-success me-5" data-bs-toggle="modal" data-bs-target="#BookingModal">{{ __('messages.menu-apply') }}</button>
					<div class="d-none d-lg-block">
						<select class="form-control changeLang">
							<option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}><i class="flag flag-andorra"></i> {{ __('messages.lang-english') }}</option>
							<option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>{{ __('messages.lang-russian') }}</option>
							<option value="uz-Cyrl" {{ session()->get('locale') == 'uz-Cyrl' ? 'selected' : '' }}>{{ __('messages.lang-uzbek-cyrillic') }}</option>
							<option value="uz-Latn" {{ session()->get('locale') == 'uz-Latn' ? 'selected' : '' }}>{{ __('messages.lang-uzbek-latin') }}</option>
						</select>
					</div>
				</div>

				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item"><a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="/home">{{ __('messages.menu-home') }}</a></li>
						<li class="nav-item"><a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">{{ __('messages.menu-about') }}</a></li>
						<li class="nav-item"><a class="nav-link {{ request()->is('services') ? 'active' : '' }}" href="/services">{{ __('messages.menu-services') }}</a></li>
						<li class="nav-item"><a class="nav-link {{ request()->is('projects') ? 'active' : '' }}" href="/projects">{{ __('messages.menu-projects') }}</a></li>
						<li class="nav-item"><a class="nav-link {{ request()->is('experts') ? 'active' : '' }}" href="/experts">{{ __('messages.menu-experts') }}</a></li>
						<li class="nav-item"><a class="nav-link {{ request()->is('journal') ? 'active' : '' }}" href="https://raled.org/index.php/conferences">{{ __('messages.menu-journal') }}</a></li>
						<li class="nav-item"><a class="nav-link {{ request()->is('contacts') ? 'active' : '' }}" href="/contacts">{{ __('messages.menu-contact') }}</a></li>
					</ul>
				</div>

				<div class="d-none d-lg-block">
					<button type="button" class="custom-btn btn btn-success me-5" data-bs-toggle="modal" data-bs-target="#BookingModal">{{ __('messages.menu-apply') }}</button>
				</div>

				<script>
				$(function(){
					$('.selectpicker').selectpicker();
				});
				</script>
				{{-- <i class="flag flag-andorra"></i> --}}

				<div class="d-none d-lg-block">
					<select class="form-control changeLang">
						<option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}><i class="flag flag-andorra"></i> {{ __('messages.lang-english') }}</option>
						<option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>{{ __('messages.lang-russian') }}</option>
						<option value="uz-Cyrl" {{ session()->get('locale') == 'uz-Cyrl' ? 'selected' : '' }}>{{ __('messages.lang-uzbek-cyrillic') }}</option>
						<option value="uz-Latn" {{ session()->get('locale') == 'uz-Latn' ? 'selected' : '' }}>{{ __('messages.lang-uzbek-latin') }}</option>
					</select>
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
						<h6 class="text-white mb-lg-4 mb-3">{{ __('messages.footer-location') }}</h6>
						<p>{{ __('messages.footer-location-1') }}</p>
						<p>{{ __('messages.footer-location-2') }}</p>
						<a href="https://yandex.uz/maps/-/CCU6F8VfhA" target="_blank" class="custom-btn btn btn-dark mt-2">{{ __('messages.footer-direction') }}</a>
					</div>
					<div class="col-lg-4 col-md-5 col-xs-12 tooplate-mt30">
						<h6 class="text-white mb-lg-4 mb-3">{{ __('messages.opening-hours') }}</h6>
						<p class="mb-2">{{ __('messages.opening-hours-1') }}</p>
						<p>{{ __('messages.opening-hours-2') }}</p>
						<p>{{ __('messages.opening-hours-3') }} <a href="tel: +99895 195-00-55" class="tel-link">+998 95 195-00-55</a></p>
					</div>
					<div class="col-lg-4 col-md-6 col-xs-12 tooplate-mt30">
						<h6 class="text-white mb-lg-4 mb-3">{{ __('messages.footer-social') }}</h6>
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
	<style>
		/* border: 1px solid #ced4da; */
	</style>
	<div class="modal fade" id="BookingModal" tabindex="-1" aria-labelledby="BookingModal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="mb-0">Join us</h3>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body d-flex flex-column justify-content-center">
					<p class="my-p">Please fill out the application form to join our Experts team.</p>
					<div class="booking">
						<form class="booking-form row" role="form" action="#" method="post">
							
							<div class="col-12">
								<label for="name" class="form-label">Title</label>
								<select class="form-select form-control applySelectedStyle"><option>Choose</option><option value="5">Dr.</option><option value="6">Professor</option><option value="7">Expert</option><option value="4">Mr.</option><option value="3">Miss.</option><option value="2">Mrs.</option><option value="8">gdfgsdfg</option><option value="9">Title 74</option></select>
							</div>
							<div class="col-lg-6 col-12">
								<label for="name" class="form-label">First Name</label>
								<input type="text" name="name" id="name" class="form-control"
									placeholder="Your Name" required>
							</div>
							<div class="col-lg-6 col-12">
								<label for="name" class="form-label">Last Name</label>
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

							<div class="col-6">
								<label for="name" class="form-label">Sector</label>
								<select class="form-select form-control applySelectedStyle"><option>Choose</option><option value="2">Sector 1</option><option value="3">Sector 2</option><option value="4">Sector 777</option></select>
							</div>

							<div class="col-6">
								<label for="name" class="form-label">Work experience since</label>
								<select class="form-select form-control applySelectedStyle"><option>Choose</option><option value="2">Less than 1 year</option><option value="3">More than 1 years</option><option value="4">More than 5 years</option><option value="5">Less than 5 years</option></select>
							</div>

							<div class="col-6">
								<label for="name" class="form-label">Spoken language(s)</label>
								<select class="form-select form-control form-control applySelectedStyle"><option>Choose</option><option value="english">English</option><option value="russian">Russian</option><option value="uzbek">Uzbek</option></select>
							</div>

							<div class="col-6">
								<label for="name" class="form-label">Citizenship</label>
								<select class="form-select form-control applySelectedStyle"><option>Choose</option><option value="afghan">Afghan</option><option value="albanian">Albanian</option><option value="algerian">Algerian</option><option value="american">American</option><option value="andorran">Andorran</option><option value="angolan">Angolan</option><option value="antiguans">Antiguans</option><option value="argentinean">Argentinean</option><option value="armenian">Armenian</option><option value="australian">Australian</option><option value="austrian">Austrian</option><option value="azerbaijani">Azerbaijani</option><option value="bahamian">Bahamian</option><option value="bahraini">Bahraini</option><option value="bangladeshi">Bangladeshi</option><option value="barbadian">Barbadian</option><option value="barbudans">Barbudans</option><option value="batswana">Batswana</option><option value="belarusian">Belarusian</option><option value="belgian">Belgian</option><option value="belizean">Belizean</option><option value="beninese">Beninese</option><option value="bhutanese">Bhutanese</option><option value="bolivian">Bolivian</option><option value="bosnian">Bosnian</option><option value="brazilian">Brazilian</option><option value="british">British</option><option value="bruneian">Bruneian</option><option value="bulgarian">Bulgarian</option><option value="burkinabe">Burkinabe</option><option value="burmese">Burmese</option><option value="burundian">Burundian</option><option value="cambodian">Cambodian</option><option value="cameroonian">Cameroonian</option><option value="canadian">Canadian</option><option value="cape verdean">Cae Verdean</option><option value="central african">Central African</option><option value="chadian">Chadian</option><option value="chilean">Chilean</option><option value="chinese">Chinese</option><option value="colombian">Colombian</option><option value="comoran">Comoran</option><option value="congolese">Congolese</option><option value="costa rican">Costa Rican</option><option value="croatian">Croatian</option><option value="cuban">Cuban</option><option value="cypriot">Cypriot</option><option value="czech">Czech</option><option value="danish">Danish</option><option value="djibouti">Djibouti</option><option value="dominican">Dominican</option><option value="dutch">Dutch</option><option value="east timorese">East Timorese</option><option value="ecuadorean">Ecuadorean</option><option value="egyptian">Egyptian</option><option value="emirian">Emirian</option><option value="equatorial guinean">Equatorial Guinean</option><option value="eritrean">Eritrean</option><option value="estonian">Estonian</option><option value="ethiopian">Ethiopian</option><option value="fijian">Fijian</option><option value="filipino">Filipino</option><option value="finnish">Finnish</option><option value="french">French</option><option value="gabonese">Gabonese</option><option value="gambian">Gambian</option><option value="georgian">Georgian</option><option value="german">German</option><option value="ghanaian">Ghanaian</option><option value="greek">Greek</option><option value="grenadian">Grenadian</option><option value="guatemalan">Guatemalan</option><option value="guinea-bissauan">Guinea-Bissauan</option><option value="guinean">Guinean</option><option value="guyanese">Guyanese</option><option value="haitian">Haitian</option><option value="herzegovinian">Herzegovinian</option><option value="honduran">Honduran</option><option value="hungarian">Hungarian</option><option value="i-kiribati">I-Kiribati</option><option value="icelander">Icelander</option><option value="indian">Indian</option><option value="indonesian">Indonesian</option><option value="iranian">Iranian</option><option value="iraqi">Iraqi</option><option value="irish">Irish</option><option value="israeli">Israeli</option><option value="italian">Italian</option><option value="ivorian">Ivorian</option><option value="jamaican">Jamaican</option><option value="japanese">Japanese</option><option value="jordanian">Jordanian</option><option value="kazakhstani">Kazakhstani</option><option value="kenyan">Kenyan</option><option value="kittian and nevisian">Kittian and Nevisian</option><option value="kuwaiti">Kuwaiti</option><option value="kyrgyz">Kyrgyz</option><option value="laotian">Laotian</option><option value="latvian">Latvian</option><option value="lebanese">Lebanese</option><option value="liberian">Liberian</option><option value="libyan">Libyan</option><option value="liechtensteiner">Liechtensteiner</option><option value="lithuanian">Lithuanian</option><option value="luxembourger">Luxembourger</option><option value="macedonian">Macedonian</option><option value="malagasy">Malagasy</option><option value="malawian">Malawian</option><option value="malaysian">Malaysian</option><option value="maldivan">Maldivan</option><option value="malian">Malian</option><option value="maltese">Maltese</option><option value="marshallese">Marshallese</option><option value="mauritanian">Mauritanian</option><option value="mauritian">Mauritian</option><option value="mexican">Mexican</option><option value="micronesian">Micronesian</option><option value="moldovan">Moldovan</option><option value="monacan">Monacan</option><option value="mongolian">Mongolian</option><option value="moroccan">Moroccan</option><option value="mosotho">Mosotho</option><option value="motswana">Motswana</option><option value="mozambican">Mozambican</option><option value="namibian">Namibian</option><option value="nauruan">Nauruan</option><option value="nepalese">Nepalese</option><option value="new zealander">New Zealander</option><option value="nicaraguan">Nicaraguan</option><option value="nigerian">Nigerian</option><option value="nigerien">Nigerien</option><option value="north korean">North Korean</option><option value="northern irish">Northern Irish</option><option value="norwegian">Norwegian</option><option value="omani">Omani</option><option value="pakistani">Pakistani</option><option value="palauan">Palauan</option><option value="panamanian">Panamanian</option><option value="papua new guinean">Papua New Guinean</option><option value="paraguayan">Paraguayan</option><option value="peruvian">Peruvian</option><option value="polish">Polish</option><option value="portuguese">Portuguese</option><option value="qatari">Qatari</option><option value="romanian">Romanian</option><option value="russian">Russian</option><option value="rwandan">Rwandan</option><option value="saint lucian">Saint Lucian</option><option value="salvadoran">Salvadoran</option><option value="samoan">Samoan</option><option value="san marinese">San Marinese</option><option value="sao tomean">Sao Tomean</option><option value="saudi">Saudi</option><option value="scottish">Scottish</option><option value="senegalese">Senegalese</option><option value="serbian">Serbian</option><option value="seychellois">Seychellois</option><option value="sierra leonean">Sierra Leonean</option><option value="singaporean">Singaporean</option><option value="slovakian">Slovakian</option><option value="slovenian">Slovenian</option><option value="solomon islander">Solomon Islander</option><option value="somali">Somali</option><option value="south african">South African</option><option value="south korean">South Korean</option><option value="spanish">Spanish</option><option value="sri lankan">Sri Lankan</option><option value="sudanese">Sudanese</option><option value="surinamer">Surinamer</option><option value="swazi">Swazi</option><option value="swedish">Swedish</option><option value="swiss">Swiss</option><option value="syrian">Syrian</option><option value="taiwanese">Taiwanese</option><option value="tajik">Tajik</option><option value="tanzanian">Tanzanian</option><option value="thai">Thai</option><option value="togolese">Togolese</option><option value="tongan">Tongan</option><option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option><option value="tunisian">Tunisian</option><option value="turkish">Turkish</option><option value="tuvaluan">Tuvaluan</option><option value="ugandan">Ugandan</option><option value="ukrainian">Ukrainian</option><option value="uruguayan">Uruguayan</option><option value="uzbekistani">Uzbekistani</option><option value="venezuelan">Venezuelan</option><option value="vietnamese">Vietnamese</option><option value="welsh">Welsh</option><option value="yemenite">Yemenite</option><option value="zambian">Zambian</option><option value="zimbabwean">Zimbabwean</option></select>
							</div>

							<div class="col-6">
								<label for="name" class="form-label">Preffered project duration</label>
								<div class="form-check form-check-inline applyRadioStyle"><input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Short term"><label class="form-check-label" for="inlineRadio1">Short term </label></div>
								<div class="form-check form-check-inline applyRadioStyle"><input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Long term"><label class="form-check-label" name="inlineRadioOptions" id="inlineRadio1" value="option1" for="inlineRadio2">Long term</label></div></div>
							</div>

							<div class="col-12">
								<label for="message" class="form-label mt-2">Special Request</label>
								<textarea class="form-control" rows="4" id="message" name="message"
									placeholder=""></textarea>
							</div>
							<div class="col-lg-4 col-12 ms-auto">
								<button type="submit" class="form-control mt-1">Submit</button>
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