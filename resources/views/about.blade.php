@extends('layouts.main')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
    {{-- <p>This is appended to the master sidebar.</p> --}}
@endsection
 
@section('content')

<header class="site-header site-about-header">
	<div class="container">
		<div class="row">

			<div class="col-lg-10 col-12 mx-auto">
				<h1 class="text-white">{{ __('messages.header-who-we-are') }}</h1>

				<strong class="text-white">{{ __('messages.sub-header-we-are') }}</strong>
			</div>

		</div>
	</div>

	<div class="overlay"></div>
</header>

<section class="about section-padding bg-white">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="text-center my-header">WHO WE ARE</h1>
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
				<p class="my-p">Mahorat & Management was founded by a group of expert-initiators on professional education as an independent research and training center to support HRD - Human Resource Development.</p>
				<p class="my-p">We are non-governmental educational organization that has been operating since 2015 in the field of adults training, ensuring the quality of education and introducing international standards to local educational process, including the introduction of advanced forms of training and retraining using information technologies, improving curriculum and materials based on the widespread use of modern teaching methods.</p>
				<p class="my-p">Mahorat & Management actively cooperates with governmental and non-governmental organizations, and implements short and long term educational projects.</p>
			</div>
		</div>
	</div>
</section>

<section class="about mission section-padding">
	<div class="container">
		<div class="row">

			<div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 col-xxl-8" style="background-color: rgba(0, 0, 0, 0.5);padding:5rem;">
				<p class="my-p" style="font-size: 1.8rem; font-weight: 900; color:aliceblue">Our mission is to unite and build the capacity of experts in order to improve the mechanisms and systems of vocational education, based on international quality indicators and the requirements of the international labor market.</p>
			</div>

		</div>
	</div>
</section>

<section class="about section-padding bg-white">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-12">
				<h4 >We aim towards realizing the following key components:</h4>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box">
							<p class="my-p"><strong class="upper">educational</strong> - to develop high-quality education, to assist the professional development of managers and teachers, professional development and retraining of highly qualified specialists based on the principle of LLL;</p>
						</div>
					</div>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box">
							<p class="my-p"><strong class="upper">cultural</strong> - to be a cultural educational center, contributing to a change in the social environment, creating a certain spiritual atmosphere, teaching intelligent and constructive problem solving;</p>
						</div>
					</div>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box">
							<p class="my-p"><strong class="upper">innovative</strong> - to provide quality education in accordance with the UNESCO Concept "Education - 2030" and SDG 4 "Quality Education" with the use of new methods and technologies in retraining and advanced training of specialists, developing innovative thinking for people over 18 years old;</p>
						</div>
					</div>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box">
							<p class="my-p"><strong class="upper">constructive</strong> - we build a constructive partnership with the local governmental and nongovernmental organizations and individuals according to their interest in a partnership in HRD.</p>
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
				<h1 class="text-center my-header">HOW WE WORK</h1>
			</div>
		</div>
		<div class="row mb-2">
			<div class="col-md-6">
				<div class="card flex-md-row mb-4 box-shadow h-md-250">
					<div class="card-body d-flex flex-column align-items-start">
						<strong class="d-inline-block mb-2 text-primary">World</strong>
						<h3 class="mb-0"><a class="text-dark" href="#">Featured post</a></h3>
						<div class="mb-1 text-muted">Nov 12</div>
						<p class="card-text mb-auto">Participation in tenders for social order to improve the systems of vocational education and training at all levels (ISCED and ISCO):
							Management of the educational process
							Recognition of prior learning (RPL)
							Systematization, automation and launching of educational processes and systems.</p>
						<a href="#">Continue reading</a>
					</div>
					<img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
				</div>
			</div>
			<div class="col-md-6">
				<div class="card flex-md-row mb-4 box-shadow h-md-250">
					<div class="card-body d-flex flex-column align-items-start">
						<strong class="d-inline-block mb-2 text-primary">World</strong>
						<h3 class="mb-0"><a class="text-dark" href="#">Featured post</a></h3>
						<div class="mb-1 text-muted">Nov 12</div>
						<p class="card-text mb-auto">Outsourcing services in certain areas of vocational education and training (VET) and professional development and retraining (CPD-Continuing professional development). RPL - Recognition of Prior Learning.</p>
						<a href="#">Continue reading</a>
					</div>
					<img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
				</div>
			</div>
						<div class="col-md-6">
				<div class="card flex-md-row mb-4 box-shadow h-md-250">
					<div class="card-body d-flex flex-column align-items-start">
						<strong class="d-inline-block mb-2 text-primary">World</strong>
						<h3 class="mb-0"><a class="text-dark" href="#">Featured post</a></h3>
						<div class="mb-1 text-muted">Nov 12</div>
						<p class="card-text mb-auto">Participation in tenders for social order to improve the systems of vocational education and training at all levels (ISCED and ISCO):
							Management of the educational process
							Recognition of prior learning (RPL)
							Systematization, automation and launching of educational processes and systems.</p>
						<a href="#">Continue reading</a>
					</div>
					<img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
				</div>
			</div>
			<div class="col-md-6">
				<div class="card flex-md-row mb-4 box-shadow h-md-250">
					<div class="card-body d-flex flex-column align-items-start">
						<strong class="d-inline-block mb-2 text-primary">World</strong>
						<h3 class="mb-0"><a class="text-dark" href="#">Featured post</a></h3>
						<div class="mb-1 text-muted">Nov 12</div>
						<p class="card-text mb-auto">Outsourcing services in certain areas of vocational education and training (VET) and professional development and retraining (CPD-Continuing professional development). RPL - Recognition of Prior Learning.</p>
						<a href="#">Continue reading</a>
					</div>
					<img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section section-default mt-none mb-none">
    <div class="container">
        <h2 class="text-center mb-lg-5 mb-4">Our <strong>Partners</strong></h2>
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