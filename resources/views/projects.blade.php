@extends('layouts.main')
 
@section('title', 'Mahorat & Management - Services')
 
@section('sidebar')
    @parent
 
    {{-- <p>This is appended to the master sidebar.</p> --}}
@endsection
 
@section('content')

<header class="site-header site-projects-header">
	<div class="container">
		<div class="row">

			<div class="col-lg-10 col-12 mx-auto">
				<h1 class="text-white my-font">{{ __('projects.header') }}</h1>
				<strong class="text-white my-font">{{ __('projects.sub-header') }}</strong>
			</div>

		</div>
	</div>

	<div class="overlay"></div>
</header>



<section class="about section-padding bg-white">
	<div class="container">
		<div class="row my-header-row">
			<div class="col">
				<h2 class="text-center my-header">{{ __('projects.our-projects') }}</h2>
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-6">
						<p class="my-p">{{ __('projects.our-projects-text-01') }}</p>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-6">
						<p class="my-p">{{ __('projects.our-projects-text-02') }}</p>
						<p class="my-p">{{ __('projects.our-projects-text-03') }}</p>
					</div>
				</div>
			</div>
		</div>


		<div class="accordion" id="accordionPanelsStayOpenExample">

			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading-01">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-01" aria-expanded="true" aria-controls="panelsStayOpen-collapse-01">
						<div style="display:flex">
							<div>
								<img class="my-accordion-img" src="assets/images/projects/icons/projects-retraining.svg" alt="">
							</div>
							<div style="margin-left: 1rem">
								<h4 class="my-h4-projects">{{ __('projects.proj-01-retraining-title') }}</h4>
							</div>
						</div>
					</button>
				</h2>
				<div id="panelsStayOpen-collapse-01" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-01">
					<div class="accordion-body">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-6">
								<img style="width: 100%;" src="assets/images/projects/projects-retraining.jpg" alt="">
							</div>
							<div class="col-sm-12 col-md-12 col-lg-6">
								<p class="my-p">
									{{ __('projects.proj-01-retraining-01') }}
								</p>
							</div>
						</div>
						<p class="my-p">
							{{ __('projects.proj-01-retraining-02') }}
						</p>
						<ul class="list-unstyled my-p">
							<li><i class="fa-solid fa-check"></i> {!! __('projects.proj-01-retraining-03') !!}</li>
							<li><i class="fa-solid fa-check"></i> {{ __('projects.proj-01-retraining-04') }}</li>
							<li><i class="fa-solid fa-check"></i> {{ __('projects.proj-01-retraining-05') }}</li>
							<li><i class="fa-solid fa-check"></i> {{ __('projects.proj-01-retraining-06') }}</li>
						</ul>
						<p class="my-p">
							{{ __('projects.proj-01-retraining-07') }}
						</p>
					</div>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading-02">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-02" aria-expanded="true" aria-controls="panelsStayOpen-collapse-02">
						<div style="display:flex">
							<div>
								<img class="my-accordion-img" src="assets/images/projects/icons/projects-journal.svg" alt="">
							</div>
							<div style="margin-left: 1rem">
								<h4 class="my-h4-projects">{{ __('projects.proj-02-journal-title') }}</h4>
							</div>
						</div>
					</button>
				</h2>
				<div id="panelsStayOpen-collapse-02" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-02">
					<div class="accordion-body">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-6">
								<img style="width: 100%;" src="assets/images/projects/projects-journal.jpg" alt="">
							</div>
							<div class="col-sm-12 col-md-12 col-lg-6">
								<p class="my-p">
									{{ __('projects.proj-02-journal-01') }}
								</p>
							</div>
						</div>
						<p class="my-p">
							{{ __('projects.proj-02-journal-02') }}
						</p>
						<ul class="list-unstyled my-p">
							<li><i class="fa-solid fa-check"></i> {{ __('projects.proj-02-journal-03') }}</li>
							<li><i class="fa-solid fa-check"></i> {{ __('projects.proj-02-journal-04') }}</li>
							<li><i class="fa-solid fa-check"></i> {{ __('projects.proj-02-journal-05') }}</li>
							<li><i class="fa-solid fa-check"></i> {{ __('projects.proj-02-journal-06') }}</li>
							<li><i class="fa-solid fa-check"></i> {{ __('projects.proj-02-journal-07') }}</li>
							<li><i class="fa-solid fa-check"></i> {{ __('projects.proj-02-journal-08') }}</li>
						</ul>
						<p class="my-p">
							{{ __('projects.proj-02-journal-09') }}
						</p>
					</div>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading-03">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-03" aria-expanded="true" aria-controls="panelsStayOpen-collapse-03">
						<div style="display:flex">
							<div>
								<img class="my-accordion-img" src="assets/images/projects/icons/projects-senior.svg" alt="">
							</div>
							<div style="margin-left: 1rem">
								<h4 class="my-h4-projects">{{ __('projects.proj-03-senior-title') }}</h4>
							</div>
						</div>
					</button>
				</h2>
				<div id="panelsStayOpen-collapse-03" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-03">
					<div class="accordion-body">
						<p class="my-p">
							{{ __('projects.proj-03-senior-01') }}
						</p>
					</div>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading-04">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-04" aria-expanded="true" aria-controls="panelsStayOpen-collapse-04">
						<div style="display:flex">
							<div>
								<img class="my-accordion-img" src="assets/images/projects/icons/projects-vet-reforms.svg" alt="">
							</div>
							<div style="margin-left: 1rem">
								<h4 class="my-h4-projects">{{ __('projects.proj-04-vet-reforms-title') }}</h4>
							</div>
						</div>
					</button>
				</h2>
				<div id="panelsStayOpen-collapse-04" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-04">
					<div class="accordion-body">
						<p class="my-p">
							{{ __('projects.proj-04-vet-reforms-01') }}
						</p>
						<p class="my-p">
							{{ __('projects.proj-04-vet-reforms-02') }}
						</p>
					</div>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading-05">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-05" aria-expanded="true" aria-controls="panelsStayOpen-collapse-05">
						<div style="display:flex">
							<div>
								<img class="my-accordion-img" src="assets/images/projects/icons/projects-etf-civil.svg" alt="">
							</div>
							<div style="margin-left: 1rem">
								<h4 class="my-h4-projects">{{ __('projects.proj-05-etf-civil-title') }}</h4>
							</div>
						</div>
					</button>
				</h2>
				<div id="panelsStayOpen-collapse-05" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-05">
					<div class="accordion-body">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-6">
								<img style="width: 100%;" src="assets/images/projects/projects-etf-civil.jpg" alt="">
							</div>
							<div class="col-sm-12 col-md-12 col-lg-6">
								<p class="my-p">
									{{ __('projects.proj-05-etf-civil-01') }}
								</p>
							</div>
						</div>
						<p class="my-p">
							{{ __('projects.proj-05-etf-civil-02') }}
						</p>
						<ul class="list-unstyled my-p">
							<li><i class="fa-solid fa-check"></i> {{ __('projects.proj-05-etf-civil-03') }}</li>
							<li><i class="fa-solid fa-check"></i> {{ __('projects.proj-05-etf-civil-04') }}</li>
							<li><i class="fa-solid fa-check"></i> {{ __('projects.proj-05-etf-civil-05') }}</li>
						</ul>
						<p class="my-p">
							{{ __('projects.proj-05-etf-civil-06') }}
						</p>
					</div>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading-06">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-06" aria-expanded="true" aria-controls="panelsStayOpen-collapse-06">
						<div style="display:flex">
							<div>
								<img class="my-accordion-img" src="assets/images/projects/icons/projects-etf-torino.svg" alt="">
							</div>
							<div style="margin-left: 1rem">
								<h4 class="my-h4-projects">{{ __('projects.proj-06-etf-torino-title') }}</h4>
							</div>
						</div>
					</button>
				</h2>
				<div id="panelsStayOpen-collapse-06" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-06">
					<div class="accordion-body">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-6">
								<img style="width: 100%;" src="assets/images/projects/projects-etf-torino2.jpg" alt="">
							</div>
							<div class="col-sm-12 col-md-12 col-lg-6">
								<p class="my-p">
									{{ __('projects.proj-06-etf-torino-01') }}
								</p>
							</div>
						</div>
						<p class="my-p">
							{{ __('projects.proj-06-etf-torino-02') }}
						</p>
					</div>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading-07">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-07" aria-expanded="true" aria-controls="panelsStayOpen-collapse-07">
						<div style="display:flex">
							<div>
								<img class="my-accordion-img" src="assets/images/projects/icons/projects-etf-darya.svg" alt="">
							</div>
							<div style="margin-left: 1rem">
								<h4 class="my-h4-projects">{{ __('projects.proj-07-etf-darya-title') }}</h4>
							</div>
						</div>
					</button>
				</h2>
				<div id="panelsStayOpen-collapse-07" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-07">
					<div class="accordion-body">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-3">
								<img style="width: 100%;" src="assets/images/projects/projects-etf-darya.jpg" alt="">
							</div>
							<div class="col-sm-12 col-md-12 col-lg-9">
								<p class="my-p">
									{{ __('projects.proj-07-etf-darya-01') }}
								</p>
							</div>
						</div>
						<p class="my-p">
							{{ __('projects.proj-07-etf-darya-02') }}
						</p>
					</div>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading-08">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-08" aria-expanded="true" aria-controls="panelsStayOpen-collapse-08">
						<div style="display:flex">
							<div>
								<img class="my-accordion-img" src="assets/images/projects/icons/projects-uztea.svg" alt="">
							</div>
							<div style="margin-left: 1rem">
								<h4 class="my-h4-projects">{{ __('projects.proj-08-uztea-title') }}</h4>
							</div>
						</div>
					</button>
				</h2>
				<div id="panelsStayOpen-collapse-08" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-08">
					<div class="accordion-body">
						<blockquote>
							<p class="my-p">
								{{ __('projects.proj-08-uztea-01') }}
							</p>
							{{-- <footer>— <cite>Coco Chanel</cite></footer> --}}
						</blockquote>
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-3">
								<img style="width: 100%;" src="assets/images/projects/projects-uztea.jpg" alt="">
							</div>
							<div class="col-sm-12 col-md-12 col-lg-9">
								<p class="my-p">
									{{ __('projects.proj-08-uztea-02') }}
								</p>
							</div>
						</div>
						<p class="my-p">
							{{ __('projects.proj-08-uztea-03') }}
						</p>
						<blockquote>
							<p class="my-p">{{ __('projects.proj-08-uztea-04') }}</p>
							{{-- <footer>— <cite>Coco Chanel</cite></footer> --}}
						</blockquote>
						<p class="my-p">
							{{ __('projects.proj-08-uztea-05') }}
						</p>
						<p class="my-p">
							{{ __('projects.proj-08-uztea-06') }}
						</p>
					</div>
				</div>
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