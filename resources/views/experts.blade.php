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
				<h1 class="text-white my-font">{{ __('experts.header') }}</h1>
				<strong class="text-white my-font">{{ __('experts.sub-header') }}</strong>
			</div>

		</div>
	</div>

	<div class="overlay"></div>
</header>



<section class="about section-padding bg-white">
	<div class="container">
		<div class="row my-header-row">
			<div class="col">
				<h2 class="text-center my-header">{{ __('experts.our-experts') }}</h2>
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
					<div class="sch-our-team">
						<div class="sch-images">
							<div class="sch-effect-img"><img src="assets/images/team/mahorat_team/Khudoynazar.jpg"></div>
						</div>
						<div class="sch-info">
							<div class="sch-name">
								{{ __('experts.khudaynazar-kurbanov-1') }} <br /> {{ __('experts.khudaynazar-kurbanov-2') }}
							</div>
							<div class="sch-job">
								{{ __('experts.khudaynazar-kurbanov-work-1') }} <br /> {{ __('experts.khudaynazar-kurbanov-work-2') }}
							</div>
							<div class="sch-description">
								<p class="my-p myp-fs-1r">{{ __('experts.khudaynazar-kurbanov-more') }}</p>
							</div>
							<div class="sch-social">
								<a href="" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
								<a href="https://www.linkedin.com/in/khudaynazar-kurbanov-70950723b" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
								{{-- <i class="fa-brands fa-twitter"></i> --}}
								<a href="" target="_blank"><i class="fa-regular fa-envelope"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="sch-our-team">
						<div class="sch-images">
							<div class="sch-effect-img"><img src="assets/images/team/mahorat_team/Feruza.jpg"></div>
						</div>
						<div class="sch-info">
							<div class="sch-name">
								{{ __('experts.feruza-rashidova-1') }} <br /> {{ __('experts.feruza-rashidova-2') }}
							</div>
							<div class="sch-job">
								{{ __('experts.feruza-rashidova-work-1') }} <br /> {{ __('experts.feruza-rashidova-work-2') }}
							</div>
							<div class="sch-description">
								<p class="my-p myp-fs-1r">{{ __('experts.feruza-rashidova-more') }}</p>
							</div>
							<div class="sch-social">
								<a href="" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
								<a href="https://www.linkedin.com/in/dr-feruza-rashidova-01438326" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
								{{-- <i class="fa-brands fa-twitter"></i> --}}
								<a href="" target="_blank"><i class="fa-regular fa-envelope"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="sch-our-team">
						<div class="sch-images">
							<div class="sch-effect-img"><img src="assets/images/team/mahorat_team/Shuhratxoja.jpg"></div>
						</div>
						<div class="sch-info">
							<div class="sch-name">
								{{ __('experts.shuhratxoja-amanov-1') }} <br /> {{ __('experts.shuhratxoja-amanov-2') }}
							</div>
							<div class="sch-job">
								{{ __('experts.shuhratxoja-amanov-work-1') }} <br /> {{ __('experts.shuhratxoja-amanov-work-2') }}
							</div>
							<div class="sch-description">
								<p class="my-p myp-fs-1r">{{ __('experts.shuhratxoja-amanov-more') }}</p>
							</div>
							<div class="sch-social">
								<a href="" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
								<a href="https://www.linkedin.com/in/shukhrathoja-amanov-mba-916a3513/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
								{{-- <i class="fa-brands fa-twitter"></i> --}}
								<a href="" target="_blank"><i class="fa-regular fa-envelope"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="sch-our-team">
						<div class="sch-images">
							<div class="sch-effect-img"><img src="assets/images/team/mahorat_team/Farhod.jpg"></div>
						</div>
						<div class="sch-info">
							<div class="sch-name">
								{{ __('experts.farhod-furkatov-1') }} <br /> {{ __('experts.farhod-furkatov-2') }}
							</div>
							<div class="sch-job">
								{{ __('experts.farhod-furkatov-work-1') }} <br /> {{ __('experts.farhod-furkatov-work-2') }}
							</div>
							<div class="sch-description">
								<p class="my-p myp-fs-1r">{{ __('experts.farhod-furkatov-more') }}</p>
							</div>
							<div class="sch-social">
								<a href="" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
								<a href="https://www.linkedin.com/in/farhodf/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
								{{-- <i class="fa-brands fa-twitter"></i> --}}
								<a href="" target="_blank"><i class="fa-regular fa-envelope"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="sch-our-team">
						<div class="sch-images">
							<div class="sch-effect-img"><img src="assets/images/team/mahorat_team/Sultanmurad.jpg"></div>
						</div>
						<div class="sch-info">
							<div class="sch-name">
								{{ __('experts.sultanmurad-hamroev-1') }} <br /> {{ __('experts.sultanmurad-hamroev-2') }}
							</div>
							<div class="sch-job">
								{{ __('experts.sultanmurad-hamroev-work-1') }} <br /> {{ __('experts.sultanmurad-hamroev-work-2') }}
							</div>
							<div class="sch-description">
								<p class="my-p myp-fs-1r">{{ __('experts.sultanmurad-hamroev-more') }}</p>
							</div>
							<div class="sch-social">
								<a href="" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
								<a href="" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
								{{-- <i class="fa-brands fa-twitter"></i> --}}
								<a href="" target="_blank"><i class="fa-regular fa-envelope"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="sch-our-team">
						<div class="sch-images">
							<div class="sch-effect-img"><img src="assets/images/team/mahorat_team/Alisher.jpg"></div>
						</div>
						<div class="sch-info">
							<div class="sch-name">
								{{ __('experts.alisher-akmaljonov-1') }} <br /> {{ __('experts.alisher-akmaljonov-2') }}
							</div>
							<div class="sch-job">
								{{ __('experts.alisher-akmaljonov-work-1') }} <br /> {{ __('experts.alisher-akmaljonov-work-2') }}
							</div>
							<div class="sch-description">
								<p class="my-p myp-fs-1r">{{ __('experts.alisher-akmaljonov-more') }}</p>
							</div>
							<div class="sch-social">
								<a href="" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
								<a href="https://www.linkedin.com/in/alisher-akmaljonov-447125233/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
								{{-- <i class="fa-brands fa-twitter"></i> --}}
								<a href="" target="_blank"><i class="fa-regular fa-envelope"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="sch-our-team">
						<div class="sch-images">
							<div class="sch-effect-img"><img src="assets/images/team/mahorat_team/Sadokat.jpg"></div>
						</div>
						<div class="sch-info">
							<div class="sch-name">
								{{ __('experts.sadokat-kaziyeva-1') }} <br /> {{ __('experts.sadokat-kaziyeva-2') }}
							</div>
							<div class="sch-job">
								{{ __('experts.sadokat-kaziyeva-work-1') }} <br /> {{ __('experts.sadokat-kaziyeva-work-2') }}
							</div>
							<div class="sch-description">
								<p class="my-p myp-fs-1r">{{ __('experts.sadokat-kaziyeva-more') }}</p>
							</div>
							<div class="sch-social">
								<a href="" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
								<a href="https://www.linkedin.com/in/sadokat/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
								{{-- <i class="fa-brands fa-twitter"></i> --}}
								<a href="" target="_blank"><i class="fa-regular fa-envelope"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="sch-our-team">
						<div class="sch-images">
							<div class="sch-effect-img"><img src="assets/images/team/mahorat_team/Sirojiddin.jpg"></div>
						</div>
						<div class="sch-info">
							<div class="sch-name">
								{{ __('experts.sirojiddin-olimov-1') }} <br /> {{ __('experts.sirojiddin-olimov-2') }}
							</div>
							<div class="sch-job">
								{{ __('experts.sirojiddin-olimov-work-1') }} <br /> {{ __('experts.sirojiddin-olimov-work-2') }}
							</div>
							<div class="sch-description">
								<p class="my-p myp-fs-1r">{{ __('experts.sirojiddin-olimov-more') }}</p>
							</div>
							<div class="sch-social">
								<a href="" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
								<a href="https://www.linkedin.com/in/sirojiddinolimov/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
								{{-- <i class="fa-brands fa-twitter"></i> --}}
								<a href="" target="_blank"><i class="fa-regular fa-envelope"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="sch-our-team">
						<div class="sch-images">
							<div class="sch-effect-img"><img src="assets/images/team/mahorat_team/Nodir.jpg"></div>
						</div>
						<div class="sch-info">
							<div class="sch-name">
								{{ __('experts.nodir-ergashev-1') }} <br /> {{ __('experts.nodir-ergashev-2') }}
							</div>
							<div class="sch-job">
								{{ __('experts.nodir-ergashev-work-1') }} <br /> {{ __('experts.nodir-ergashev-work-2') }}
							</div>
							<div class="sch-description">
								<p class="my-p myp-fs-1r">{{ __('experts.nodir-ergashev-more') }}</p>
							</div>
							<div class="sch-social">
								<a href=""><i class="fa-brands fa-facebook-f"></i></a>
								<a href=""><i class="fa-brands fa-linkedin-in"></i></a>
								{{-- <i class="fa-brands fa-twitter"></i> --}}
								<a href=""><i class="fa-regular fa-envelope"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="sch-our-team">
						<div class="sch-images">
							<div class="sch-effect-img"><img src="assets/images/team/mahorat_team/Sabrina.jpg"></div>
						</div>
						<div class="sch-info">
							<div class="sch-name">
								{{ __('experts.sabrina-bakhtiyorova-1') }} <br /> {{ __('experts.sabrina-bakhtiyorova-2') }}
							</div>
							<div class="sch-job">
								{{ __('experts.sabrina-bakhtiyorova-work-1') }} <br /> {{ __('experts.sabrina-bakhtiyorova-work-2') }}
							</div>
							<div class="sch-description">
								<p class="my-p myp-fs-1r">{{ __('experts.sabrina-bakhtiyorova-more') }}</p>
							</div>
							<div class="sch-social">
								<a href="" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
								<a href="https://www.linkedin.com/in/sabrina-bakhtiyorova-201694207/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
								{{-- <i class="fa-brands fa-twitter"></i> --}}
								<a href="" target="_blank"><i class="fa-regular fa-envelope"></i></a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

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