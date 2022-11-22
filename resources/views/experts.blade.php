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
								Khudaynazar <br /> Kurbanov
							</div>
							<div class="sch-job">
								Founder/CEO <br /> Mahorat & Management
							</div>
							<div class="sch-description">
								<p class="my-p myp-fs-1r">Researcher (in the field of vocational education). Specialist with international experience in the fields of NQF, ISCED (UNESCO), Quality Assurance in Education. Content developer. Project manager. Co-founder of “Management & Management” organization. Has 18+ years of consulting experience in international and national projects.</p>
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
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="sch-our-team">
						<div class="sch-images">
							<div class="sch-effect-img"><img src="assets/images/team/mahorat_team/Feruza.jpg"></div>
						</div>
						<div class="sch-info">
							<div class="sch-name">
								Feruza <br /> Rashidova
							</div>
							<div class="sch-job">
								QA Expert in Education system <br /> PhD in Pedagogy
							</div>
							<div class="sch-description">
								<p class="my-p myp-fs-1r">Doctor of Science in Pedagogy. An expert on the quality of education system for more than 20 years. Expert and trainer in ensuring the quality of educational programs and systems for more than 10 years. Content developer. Project manager. Leading expert of “Management & Management” organization as with the rich experience in consulting, developing the international projects on enhancement of HRD as systematic approach on Quality Assurance establishment in management, establishing the standards of qualifications of the teachers and personnel in education systems for sustainable development of local educational providers.</p>
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
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="sch-our-team">
						<div class="sch-images">
							<div class="sch-effect-img"><img src="assets/images/team/mahorat_team/Shuhratxoja.jpg"></div>
						</div>
						<div class="sch-info">
							<div class="sch-name">
								Shuhratxo‘ja <br /> Amanov
							</div>
							<div class="sch-job">
								Skills & Employment expert <br /> Education
							</div>
							<div class="sch-description">
								<p class="my-p myp-fs-1r">Holds an MBA degree in . 20+ years working experience for the International Organizations in the areas of Business Development, Education, Skills and Human Capital Development. Several years' experience in management of and consultancy to donor and international lending agency funded projects in Armenia, Georgia, Kazakhstan, Tajikistan, Turkmenistan and Uzbekistan.</p>
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
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="sch-our-team">
						<div class="sch-images">
							<div class="sch-effect-img"><img src="assets/images/team/mahorat_team/Farhod.jpg"></div>
						</div>
						<div class="sch-info">
							<div class="sch-name">
								Farhod <br /> Furkatov
							</div>
							<div class="sch-job">
								Data Scientist <br /> CEO - Goodly Wellness
							</div>
							<div class="sch-description">
								<p class="my-p myp-fs-1r">National Expert of “Management & Management” organization. He has over 10 years of experience building and implementing digital products. His journey to the Tech world started with an introduction to the Data world in California, Silicon Valley. He is a tech entrepreneur with a passion to deliver quality tech solutions for businesses and people.</p>
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
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="sch-our-team">
						<div class="sch-images">
							<div class="sch-effect-img"><img src="assets/images/team/mahorat_team/Sultanmurad.jpg"></div>
						</div>
						<div class="sch-info">
							<div class="sch-name">
								Sultanmurad <br /> Hamroev
							</div>
							<div class="sch-job">
								Business Analyst <br /> Project Coordinator - TVET
							</div>
							<div class="sch-description">
								<p class="my-p myp-fs-1r">Expert on the quality of professional education. National expert in Mahorat & Management. Head of Young analytics development project (YADP).</p>
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
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="sch-our-team">
						<div class="sch-images">
							<div class="sch-effect-img"><img src="assets/images/team/mahorat_team/Alisher.jpg"></div>
						</div>
						<div class="sch-info">
							<div class="sch-name">
								Alisher <br /> Akmaljonov
							</div>
							<div class="sch-job">
								Entrepreneur/Founder of <br /> “Event Entertainment” LLC
							</div>
							<div class="sch-description">
								<p class="my-p myp-fs-1r">Entrepreneur.Founder and director of the “Event Entertainment” LLC. Member of Central Asian Youth Leadership Academy (CAYLA).</p>
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
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="sch-our-team">
						<div class="sch-images">
							<div class="sch-effect-img"><img src="assets/images/team/mahorat_team/Sadokat.jpg"></div>
						</div>
						<div class="sch-info">
							<div class="sch-name">
								Sadokat <br /> Kaziyeva
							</div>
							<div class="sch-job">
								Product Designer <br /> User Experience specialist
							</div>
							<div class="sch-description">
								<p class="my-p myp-fs-1r">Sadokat made a transition into UI/UX Design field after many years in Human Resources and Recruiting. Enthusiastic about helping people solve their problems ensuring the best possible outcome. She has a work experience with one of the leading companies in the world - Apple. She aspires to help people transform their ideas into products that are simple, appealing, and harmonious.</p>
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
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="sch-our-team">
						<div class="sch-images">
							<div class="sch-effect-img"><img src="assets/images/team/mahorat_team/Sirojiddin.jpg"></div>
						</div>
						<div class="sch-info">
							<div class="sch-name">
								Sirojiddin <br /> Olimov
							</div>
							<div class="sch-job">
								Member of Central Asian <br /> Youth Leadership Academy (CAYLA)
							</div>
							<div class="sch-description">
								<p class="my-p myp-fs-1r">Member of Central Asian Youth Leadership Academy (CAYLA). Master Program student of Edinburgh University</p>
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
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="sch-our-team">
						<div class="sch-images">
							<div class="sch-effect-img"><img src="assets/images/team/mahorat_team/Nodir.jpg"></div>
						</div>
						<div class="sch-info">
							<div class="sch-name">
								Nodir <br /> Ergashev
							</div>
							<div class="sch-job">
								UzTEA expert
							</div>
							<div class="sch-description">
								<p class="my-p myp-fs-1r">UzTEA expert. Member of the Management Board of UzTEA.Content developer and trainer.</p>
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
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="sch-our-team">
						<div class="sch-images">
							<div class="sch-effect-img"><img src="assets/images/team/mahorat_team/Sirojiddin.jpg"></div>
						</div>
						<div class="sch-info">
							<div class="sch-name">
								Sabrina <br /> Bakhtiyorova
							</div>
							<div class="sch-job">
								Project development <br /> coordinator
							</div>
							<div class="sch-description">
								<p class="my-p myp-fs-1r">Young analytics development project activist. Bachelor of Business and Financial Management (MDIST). Methodist.</p>
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