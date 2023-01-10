@extends('layouts.main')
 
@section('title', 'Mahorat & Management - Services')
 
@section('sidebar')
    @parent
 
    {{-- <p>This is appended to the master sidebar.</p> --}}
@endsection
 
@section('content')

<header class="site-header site-services-header">
	<div class="container">
		<div class="row">

			<div class="col-lg-10 col-12 mx-auto">
				<h1 class="text-white my-font">{{ __('services.header') }}</h1>
				<strong class="text-white my-font">{{ __('services.sub-header') }}</strong>
			</div>

		</div>
	</div>

	<div class="overlay"></div>
</header>



<section class="about section-padding bg-white">
	<div class="container">
		<div class="row my-header-row">
			<div class="col">
				<h1 class="text-center my-header">{{ __('services.our-services') }}</h1>
			</div>
		</div>

		<div class="row mb-2">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 col-xxl-6">
				{{-- <div class="card flex-md-row mb-4 box-shadow h-md-350"> --}}
					<div class="my-card-parent">
						<div class="my-card-left">
							<img src="assets/images/services/4-services/services-research.jpg" alt="" width="130px">
						</div>
						<div class="my-card-right">
							<div class="my-card-header">
								<h4>{{ __('services.research') }}</h4>
							</div>
							<div class="my-card-text">
								<p class="my-p">{{ __('services.research-text') }}</p>
							</div>
						</div>
					</div>
				{{-- </div> --}}
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 col-xxl-6">
				{{-- <div class="card flex-md-row mb-4 box-shadow h-md-350"> --}}
					<div class="my-card-parent">
						<div class="my-card-left">
							<img src="assets/images/services/4-services/services-learning.jpg" alt="" width="130px">
						</div>
						<div class="my-card-right">
							<div class="my-card-header">
								<h4>{{ __('services.learning') }}</h4>
							</div>
							<div class="my-card-text">
								<p class="my-p">{{ __('services.learning-text') }}</p>
							</div>
						</div>
					</div>
				{{-- </div> --}}
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 col-xxl-6">
				{{-- <div class="card flex-md-row mb-4 box-shadow h-md-350"> --}}
					<div class="my-card-parent">
						<div class="my-card-left">
							<img src="assets/images/services/4-services/services-translating.jpg" alt="" width="130px">
						</div>
						<div class="my-card-right">
							<div class="my-card-header">
								<h4>{{ __('services.translation-services') }}</h4>
							</div>
							<div class="my-card-text">
								<p class="my-p">{{ __('services.translation-services-text') }}</p>
							</div>
						</div>
					</div>
				{{-- </div> --}}
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 col-xxl-6">
				{{-- <div class="card flex-md-row mb-4 box-shadow h-md-350"> --}}
					<div class="my-card-parent">
						<div class="my-card-left">
							<img src="assets/images/services/4-services/services-organizer.jpg" alt="" width="130px">
						</div>
						<div class="my-card-right">
							<div class="my-card-header">
								<h4>{{ __('services.event-management') }}</h4>
							</div>
							<div class="my-card-text">
								<p class="my-p">{{ __('services.event-management-text') }}</p>
							</div>
						</div>
					</div>
				{{-- </div> --}}
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 col-xxl-6">
				{{-- <div class="card flex-md-row mb-4 box-shadow h-md-350"> --}}
					<div class="my-card-parent">
						<div class="my-card-left">
							<img src="assets/images/services/4-services/services-group.jpg" alt="" width="130px">
						</div>
						<div class="my-card-right">
							<div class="my-card-header">
								<h4>{{ __('services.logistics') }}</h4>
							</div>
							<div class="my-card-text">
								<p class="my-p">{{ __('services.logistics-text') }}</p>
							</div>
						</div>
					</div>
				{{-- </div> --}}
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 col-xxl-6">
				{{-- <div class="card flex-md-row mb-4 box-shadow h-md-350"> --}}
					<div class="my-card-parent">
						<div class="my-card-left">
							<img src="assets/images/services/4-services/services-research.jpg" alt="" width="130px">
						</div>
						<div class="my-card-right">
							<div class="my-card-header">
								<h4>{{ __('services.outsourcing') }}</h4>
							</div>
							<div class="my-card-text">
								<p class="my-p">{{ __('services.outsourcing-text') }}</p>
							</div>
						</div>
					</div>
				{{-- </div> --}}
			</div>
		</div>
	</div>
</section>

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

            


@endsection