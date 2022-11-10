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
                        <div class="position-relative col-lg-4 col-12 mb-2" style="background-image: url(./assets/images/human-resource-development.jpg); background-size: cover;min-height: 30rem">
							{{-- <img width = 100% src="./assets/images/human-resource-development.jpg" /> --}}
                            {{-- <h4 class="mb-3">Human Resource Development</h4> --}}
							<div class="position-absolute bottom-0 end-0" style="margin: 1rem">
								{{-- <a href="news.html" class="custom-btn btn btn-dark mt-3">Check out News</a> --}}
								<a href="contact.html" class="custom-btn btn btn-success danger mt-3 ms-3">Say Hi</a>
							</div>
                        </div>

                        <div class="col-lg-8 col-12">
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

                        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-8 col-xxl-8" style="background-color: rgba(0, 0, 0, 0.5);padding:3rem;">
                            <p class="my-p" style="font-weight: 900; color:aliceblue">Our mission is to unite and build the capacity of experts in order to improve the mechanisms and systems of vocational education, based on international quality indicators and the requirements of the international labor market.</p>
                        </div>

                    </div>
                </div>
            </section>

            <section class="about section-padding bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                        	<p class="my-p">We aim towards realizing the following key components:</p>
							<div class="color-box">
                    			<div class="shadow">
                        			<div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        			<div class="note-box">
                            			<p><strong>educational</strong> - to develop high-quality education, to assist the professional development of managers and teachers,
professional development and retraining of highly qualified specialists based on the principle of LLL;</p>
                        			</div>
                    			</div>
                			</div>
                        </div>
                        <div class="position-relative col-lg-4 col-12 mb-2" style="background-image: url(./assets/images/human-resource-development.jpg); background-size: cover;min-height: 30rem">
							<div class="position-absolute bottom-0 end-0" style="margin: 1rem">
								<a href="contact.html" class="custom-btn btn btn-success danger mt-3 ms-3">Say Hi</a>
							</div>
                        </div>
                    </div>
                </div>
            </section>




            <section class="about section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-5">Team Members</h2>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="team-thumb">
                                <img src="images/team/matthew-hamilton-tNCH0sKSZbA-unsplash.jpg" class="img-fluid team-image" alt="">
                                
                                <div class="team-info">
                                    <h4 class="mt-3 mb-0">Sophia</h4>

                                    <p>CEO &amp; Founder</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 my-lg-0 my-4">
                            <div class="team-thumb">
                                <img src="images/team/nicolas-horn-MTZTGvDsHFY-unsplash.jpg" class="img-fluid team-image" alt="">

                                <h4 class="mt-3 mb-0">Benjamin W.</h4>

                                <p>Restaurant Manager</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="team-thumb">
                                <img src="images/team/rc-cf-FMh5o5m5N9E-unsplash.jpg" class="img-fluid team-image" alt="">
                                
                                <h4 class="mt-3 mb-0">Muchen Jack</h4>

                                <p>Senior Chef</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            
            <section class="newsletter section-padding bg-white">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <img src="images/charles-deluvio-FdDkfYFHqe4-unsplash.jpg" class="img-fluid newsletter-image" alt="">
                        </div>

                        <div class="col-lg-6 col-12 d-flex align-items-center mt-5 mt-lg-0 mx-auto">
                            <div class="subscribe-form-wrap">
                                <h4 class="mb-0">Our Newsletter</h4>

                                <p>The food news every day</p>

                                <form class="custom-form subscribe-form mt-4" role="form">
                                    <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Your email address" required="">

                                    <button type="submit" class="form-control mb-3" id="subscribe">Subscribe</button>

                                    <small>By signing up, you agree to our Privacy Notice and the data policy</small>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

@endsection