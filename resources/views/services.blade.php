@extends('layouts.main')
 
@section('title', 'Mahorat & Management - Services')
 
@section('sidebar')
    @parent
 
    {{-- <p>This is appended to the master sidebar.</p> --}}
@endsection
 
@section('content')

<header class="site-header site-about-header">
	<div class="container">
		<div class="row">

			<div class="col-lg-10 col-12 mx-auto">
				<h1 class="text-white my-font">{{ __('messages.header-who-we-are') }}</h1>

				<strong class="text-white my-font">{{ __('messages.sub-header-we-are') }}</strong>
			</div>

		</div>
	</div>

	<div class="overlay"></div>
</header>

<section class="about section-padding bg-white">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="text-center my-header" style="text-transform: uppercase;">{{ __('messages.header-who-we-are') }}</h1>
			</div>
		</div>
		<div class="row">
			<div class="position-relative col-lg-6 col-12 mb-2" style="background-image: url(./assets/images/human-resource-development.jpg); background-size: cover;min-height: 30rem">
				{{-- <img width = 100% src="./assets/images/human-resource-development.jpg" /> --}}
				{{-- <h4 class="mb-3">Human Resource Development</h4> --}}
				<div class="position-absolute bottom-0 end-0" style="margin: 1rem">
					{{-- <a href="news.html" class="custom-btn btn btn-dark mt-3">Check out News</a> --}}
					<a href="contact.html" class="custom-btn btn btn-success danger mt-3 ms-3">Say Hi</a>
				</div>
			</div>

			<div class="col-lg-6 col-12">
				<p class="my-p">{{ __('messages.section-who-we-are-1') }}</p>
				<p class="my-p">{{ __('messages.section-who-we-are-2') }}</p>
				<p class="my-p">{{ __('messages.section-who-we-are-3') }}</p>
			</div>
		</div>
	</div>
</section>

<section class="about mission section-padding">
	<div class="container">
		<div class="row">

			<div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 col-xxl-8" style="background-color: rgba(0, 0, 0, 0.5);padding:5rem;">
				<p class="my-p" style="font-size: 1.8rem; font-weight: 900; color:aliceblue">{{ __('messages.section-about-mission') }}</p>
			</div>

		</div>
	</div>
</section>

<section class="about section-padding bg-white">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-12">
				<h4 class="my-font">{{ __('messages.aim-towards') }}</h4>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box">
							<p class="my-p"><strong class="upper my-font">{{ __('messages.aim-educational-1') }}</strong> - {{ __('messages.aim-educational-2') }};</p>
						</div>
					</div>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box">
							<p class="my-p"><strong class="upper my-font">{{ __('messages.aim-cultural-1') }}</strong> - {{ __('messages.aim-cultural-2') }};</p>
						</div>
					</div>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box">
							<p class="my-p"><strong class="upper my-font">{{ __('messages.aim-innovative-1') }}</strong> - {{ __('messages.aim-innovative-2') }};</p>
						</div>
					</div>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box">
							<p class="my-p"><strong class="upper my-font">{{ __('messages.aim-constructive-1') }}</strong> - {{ __('messages.aim-constructive-2') }}.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="position-relative col-lg-4 col-12 mb-2" style="background-image: url(./assets/images/about-key-components-2.jpg); background-size: cover;min-height: 30rem; background-position: center;">
				<div class="position-absolute bottom-0 end-0" style="margin: 1rem">
					<a href="contact.html" class="custom-btn btn btn-success danger mt-3 ms-3">Say Hi</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about section-padding bg-white">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="text-center my-header">{{ __('messages.how-we-work') }}</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<p class="my-p" style="padding-top: 3rem; font-size: 1.5rem">{{ __('messages.our-strategy') }}</p>
			</div>
		</div>
		<div class="row mb-2">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 col-xxl-6">
				<div class="card flex-md-row mb-4 box-shadow h-md-350">
					<div class="card-body d-flex flex-column align-items-start">
						{{-- <strong class="d-inline-block mb-2 text-primary">World</strong> --}}
						<h5 class="mb-0"><a class="text-dark my-font" href="">{{ __('messages.participation-in-tenders-1') }}</a></h5>
						<p style="margin-bottom: 0 !important;" class="card-text mb-auto">{{ __('messages.participation-in-tenders-2') }}</p>
						<ul class="check-list">
							<li class="my-font">{{ __('messages.participation-in-tenders-3') }}</li>
							<li class="my-list">{{ __('messages.participation-in-tenders-4') }}</li>
							<li class="my-list">{{ __('messages.participation-in-tenders-5') }}</li>
						</ul>
						{{-- <a href="#">Continue reading</a> --}}
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 col-xxl-6">
				<div class="card flex-md-row mb-4 box-shadow h-md-350">
					<div class="card-body d-flex flex-column align-items-start my-font">
						{{-- <strong class="d-inline-block mb-2 text-primary">World</strong> --}}
						<h5 class="mb-0"><a class="text-dark my-font" href="#">{{ __('messages.outsourcing-services-1') }}</a></h5>
						<p class="card-text mb-auto">{{ __('messages.outsourcing-services-2') }}</p>
						{{-- <a href="#">Continue reading</a> --}}
						<div class="my-card-img my-card-img-1">&nbsp;</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 col-xxl-6">
				<div class="card flex-md-row mb-4 box-shadow h-md-350">
					<div class="card-body d-flex flex-column align-items-start">
						{{-- <strong class="d-inline-block mb-2 text-primary">World</strong> --}}
						<h5 class="mb-0"><a class="text-dark my-font" href="#">{{ __('messages.exchange-programs-1') }}</a></h5>
						<p class="card-text mb-auto">{{ __('messages.exchange-programs-2') }}</p>
						{{-- <a href="#">Continue reading</a> --}}
						<div class="my-card-img my-card-img-2">&nbsp;</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 col-xxl-6">
				<div class="card flex-md-row mb-4 box-shadow h-md-350">
					<div class="card-body d-flex flex-column align-items-start">
						{{-- <strong class="d-inline-block mb-2 text-primary">World</strong> --}}
						<h5 class="mb-0"><a class="text-dark my-font" href="#">{{ __('messages.support-for-youth-initiatives-1') }}</a></h5>
						<p class="card-text mb-auto">{{ __('messages.support-for-youth-initiatives-2') }}</p>
						{{-- <a href="#">Continue reading</a> --}}
						<div class="my-card-img my-card-img-3">&nbsp;</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section section-default mt-none mb-none">
    <div class="container">
        <h2 class="text-center mb-lg-5 mb-4">{{ __('messages.our-partners') }}</h2>
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

            


@endsection