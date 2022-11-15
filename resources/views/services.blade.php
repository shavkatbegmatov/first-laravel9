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
				<h1 class="text-white my-font">{{ __('services.header-services') }}</h1>
				<strong class="text-white my-font">{{ __('services.sub-header-services') }}</strong>
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
							1
						</div>
						<div class="my-card-right">
							<div class="my-cart-header">
								2
							</div>
							<div class="my-cart-text">
								3
							</div>
						</div>
					</div>
				{{-- </div> --}}
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