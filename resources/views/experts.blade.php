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
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="sch-our-team">
						<div class="sch-images">
							<div class="sch-effect-img"><img src="assets/images/team/Khudoynazar.jpg"></div>
						</div>
						<div class="sch-info">
							<div class="sch-name">
								Khudaynazar Kurbanov
							</div>
							<div class="sch-job">
								Founder/CEO Mahorat & Management
							</div>
							<div class="sch-description">
								<p class="my-p">Researcher (in the field of vocational education). Specialist with international experience in the fields of NQF, ISCED (UNESCO), Quality Assurance in Education. Content developer. Project manager. Co-founder of “Management & Management” organization. Has 18+ years of consulting experience in international and national projects.</p>
							</div>
							<div class="sch-social">
								<i class="fa-brands fa-facebook-f"></i>
								<i class="fa-brands fa-linkedin-in"></i>
								<i class="fa-brands fa-twitter"></i>
								<i class="fa-regular fa-envelope"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="sch-our-team">
						<div class="sch-images">
							<div class="sch-effect-img"><img src="assets/images/team/Khudoynazar.jpg"></div>
						</div>
						<div class="sch-info">
							<div class="sch-name">
								Khudaynazar Kurbanov
							</div>
							<div class="sch-job">
								Founder/CEO Mahorat & Management
							</div>
							<div class="sch-description">
								<p class="my-p">Researcher (in the field of vocational education). Specialist with international experience in the fields of NQF, ISCED (UNESCO), Quality Assurance in Education. Content developer. Project manager. Co-founder of “Management & Management” organization. Has 18+ years of consulting experience in international and national projects.</p>
							</div>
							<div class="sch-social">
								<i class="fa-brands fa-facebook-f"></i>
								<i class="fa-brands fa-linkedin-in"></i>
								<i class="fa-brands fa-twitter"></i>
								<i class="fa-regular fa-envelope"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="sch-our-team">
						<div class="sch-images">
							<div class="sch-effect-img"><img src="assets/images/team/team2.jpg"></div>
						</div>
						<div class="sch-info">
							<div class="sch-name">
								James Niki
							</div>
							<div class="sch-job">
								Front-End Developer
							</div>
							<div class="sch-description">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fermentum ullamcorper
							</div>
							<div class="sch-social">
								<i class="fa fa-google-plus"></i>
								<i class="fa fa-facebook"></i>
								<i class="fa fa-twitter"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="sch-our-team">
						<div class="sch-images">
							<div class="sch-effect-img"><img src="assets/images/team/team3.jpg"></div>
						</div>
						<div class="sch-info">
							<div class="sch-name">
								James Niki
							</div>
							<div class="sch-job">
								Front-End Developer
							</div>
							<div class="sch-description">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fermentum ullamcorper
							</div>
							<div class="sch-social">
								<i class="fa fa-google-plus"></i>
								<i class="fa fa-facebook"></i>
								<i class="fa fa-twitter"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="sch-our-team">
						<div class="sch-images">
							<div class="sch-effect-img"><img src="assets/images/team/team4.jpg"></div>
						</div>
						<div class="sch-info">
							<div class="sch-name">
								James Niki
							</div>
							<div class="sch-job">
								Front-End Developer
							</div>
							<div class="sch-description">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fermentum ullamcorper
							</div>
							<div class="sch-social">
								<i class="fa fa-google-plus"></i>
								<i class="fa fa-facebook"></i>
								<i class="fa fa-twitter"></i>
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