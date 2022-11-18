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
				<p class="my-p">{{ __('projects.our-projects-text') }}</p>
			</div>
		</div>


		<div class="accordion" id="accordionPanelsStayOpenExample">
			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading-01">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-01" aria-expanded="true" aria-controls="panelsStayOpen-collapse-01">
						<div style="display:flex">
							<div>
								<img class="my-accordion-img" src="assets/images/projects/projects-group.svg" alt="">
							</div>
							<div style="margin-left: 1rem">
								<h4>Retraining and advanced training courses for adults</h4>
							</div>
						</div>
					</button>
				</h2>
				<div id="panelsStayOpen-collapse-01" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-01">
					<div class="accordion-body">
						<p class="my-p"> Today, the number of participants in the program exceeds 600 people, for whom online trainings are regularly organized with the participation of qualified teachers and psychologists. To improve the professional competency of managers and teachers in the field of education (teachers of all categories, methodologists, assessors, trainers, researchers and specialists) in accordance with the levels of International Standard Classification of Education since 2018 Mahorat & Management implementing a Program “Continuing Professional Development Program for Educators” that serves as a "road map" for managers and teachers to improve their professional skills from primary level to international expert level.
							The CPD "Road map" includes: Based on this Program managers / teachers improve their skills on the basis of the principle of lifelong learning at 4 levels:
						</p>
						<ul class="list-unstyled my-p">
							<li><i class="fa-solid fa-check"></i> Foundation level</li>
							<li><i class="fa-solid fa-check"></i> Developing level</li>
							<li><i class="fa-solid fa-check"></i> Expert level </li>
							<li><i class="fa-solid fa-check"></i> National Expert at International Level</li>
						</ul>
						<p class="my-p">
							Each level consists of 5 modules which equals a total of 180 hours of trainings. The total volume of practical and theoretical training on 4 qualification levels is 720 hours. An individual (pedagogues, managers) who successfully passes each level is awarded a Certificate of Achievement, which indicates their level of qualification in their working sphere.
						</p>
					</div>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading-02">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-02" aria-expanded="true" aria-controls="panelsStayOpen-collapse-02">
						<div style="display:flex">
							<div>
								<img class="my-accordion-img" src="assets/images/projects/projects-group.svg" alt="">
							</div>
							<div style="margin-left: 1rem">
								<h4>Retraining and advanced training courses for adults</h4>
							</div>
						</div>
					</button>
				</h2>
				<div id="panelsStayOpen-collapse-02" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-02">
					<div class="accordion-body">
						<p class="my-p"> Today, the number of participants in the program exceeds 600 people, for whom online trainings are regularly organized with the participation of qualified teachers and psychologists. To improve the professional competency of managers and teachers in the field of education (teachers of all categories, methodologists, assessors, trainers, researchers and specialists) in accordance with the levels of International Standard Classification of Education since 2018 Mahorat & Management implementing a Program “Continuing Professional Development Program for Educators” that serves as a "road map" for managers and teachers to improve their professional skills from primary level to international expert level.
							The CPD "Road map" includes: Based on this Program managers / teachers improve their skills on the basis of the principle of lifelong learning at 4 levels:
						</p>
						<ul class="list-unstyled my-p">
							<li><i class="fa-solid fa-check"></i> Foundation level</li>
							<li><i class="fa-solid fa-check"></i> Developing level</li>
							<li><i class="fa-solid fa-check"></i> Expert level </li>
							<li><i class="fa-solid fa-check"></i> National Expert at International Level</li>
						</ul>
						<p class="my-p">
							Each level consists of 5 modules which equals a total of 180 hours of trainings. The total volume of practical and theoretical training on 4 qualification levels is 720 hours. An individual (pedagogues, managers) who successfully passes each level is awarded a Certificate of Achievement, which indicates their level of qualification in their working sphere.
						</p>
					</div>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading-03">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-03" aria-expanded="true" aria-controls="panelsStayOpen-collapse-03">
						<div style="display:flex">
							<div>
								<img class="my-accordion-img" src="assets/images/projects/projects-group.svg" alt="">
							</div>
							<div style="margin-left: 1rem">
								<h4>Retraining and advanced training courses for adults</h4>
							</div>
						</div>
					</button>
				</h2>
				<div id="panelsStayOpen-collapse-03" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-03">
					<div class="accordion-body">
						<p class="my-p"> Today, the number of participants in the program exceeds 600 people, for whom online trainings are regularly organized with the participation of qualified teachers and psychologists. To improve the professional competency of managers and teachers in the field of education (teachers of all categories, methodologists, assessors, trainers, researchers and specialists) in accordance with the levels of International Standard Classification of Education since 2018 Mahorat & Management implementing a Program “Continuing Professional Development Program for Educators” that serves as a "road map" for managers and teachers to improve their professional skills from primary level to international expert level.
							The CPD "Road map" includes: Based on this Program managers / teachers improve their skills on the basis of the principle of lifelong learning at 4 levels:
						</p>
						<ul class="list-unstyled my-p">
							<li><i class="fa-solid fa-check"></i> Foundation level</li>
							<li><i class="fa-solid fa-check"></i> Developing level</li>
							<li><i class="fa-solid fa-check"></i> Expert level </li>
							<li><i class="fa-solid fa-check"></i> National Expert at International Level</li>
						</ul>
						<p class="my-p">
							Each level consists of 5 modules which equals a total of 180 hours of trainings. The total volume of practical and theoretical training on 4 qualification levels is 720 hours. An individual (pedagogues, managers) who successfully passes each level is awarded a Certificate of Achievement, which indicates their level of qualification in their working sphere.
						</p>
					</div>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading-04">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-04" aria-expanded="true" aria-controls="panelsStayOpen-collapse-04">
						<div style="display:flex">
							<div>
								<img class="my-accordion-img" src="assets/images/projects/projects-group.svg" alt="">
							</div>
							<div style="margin-left: 1rem">
								<h4>Retraining and advanced training courses for adults</h4>
							</div>
						</div>
					</button>
				</h2>
				<div id="panelsStayOpen-collapse-04" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-04">
					<div class="accordion-body">
						<p class="my-p"> Today, the number of participants in the program exceeds 600 people, for whom online trainings are regularly organized with the participation of qualified teachers and psychologists. To improve the professional competency of managers and teachers in the field of education (teachers of all categories, methodologists, assessors, trainers, researchers and specialists) in accordance with the levels of International Standard Classification of Education since 2018 Mahorat & Management implementing a Program “Continuing Professional Development Program for Educators” that serves as a "road map" for managers and teachers to improve their professional skills from primary level to international expert level.
							The CPD "Road map" includes: Based on this Program managers / teachers improve their skills on the basis of the principle of lifelong learning at 4 levels:
						</p>
						<ul class="list-unstyled my-p">
							<li><i class="fa-solid fa-check"></i> Foundation level</li>
							<li><i class="fa-solid fa-check"></i> Developing level</li>
							<li><i class="fa-solid fa-check"></i> Expert level </li>
							<li><i class="fa-solid fa-check"></i> National Expert at International Level</li>
						</ul>
						<p class="my-p">
							Each level consists of 5 modules which equals a total of 180 hours of trainings. The total volume of practical and theoretical training on 4 qualification levels is 720 hours. An individual (pedagogues, managers) who successfully passes each level is awarded a Certificate of Achievement, which indicates their level of qualification in their working sphere.
						</p>
					</div>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading-05">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-05" aria-expanded="true" aria-controls="panelsStayOpen-collapse-05">
						<div style="display:flex">
							<div>
								<img class="my-accordion-img" src="assets/images/projects/projects-group.svg" alt="">
							</div>
							<div style="margin-left: 1rem">
								<h4>Retraining and advanced training courses for adults</h4>
							</div>
						</div>
					</button>
				</h2>
				<div id="panelsStayOpen-collapse-05" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-05">
					<div class="accordion-body">
						<p class="my-p"> Today, the number of participants in the program exceeds 600 people, for whom online trainings are regularly organized with the participation of qualified teachers and psychologists. To improve the professional competency of managers and teachers in the field of education (teachers of all categories, methodologists, assessors, trainers, researchers and specialists) in accordance with the levels of International Standard Classification of Education since 2018 Mahorat & Management implementing a Program “Continuing Professional Development Program for Educators” that serves as a "road map" for managers and teachers to improve their professional skills from primary level to international expert level.
							The CPD "Road map" includes: Based on this Program managers / teachers improve their skills on the basis of the principle of lifelong learning at 4 levels:
						</p>
						<ul class="list-unstyled my-p">
							<li><i class="fa-solid fa-check"></i> Foundation level</li>
							<li><i class="fa-solid fa-check"></i> Developing level</li>
							<li><i class="fa-solid fa-check"></i> Expert level </li>
							<li><i class="fa-solid fa-check"></i> National Expert at International Level</li>
						</ul>
						<p class="my-p">
							Each level consists of 5 modules which equals a total of 180 hours of trainings. The total volume of practical and theoretical training on 4 qualification levels is 720 hours. An individual (pedagogues, managers) who successfully passes each level is awarded a Certificate of Achievement, which indicates their level of qualification in their working sphere.
						</p>
					</div>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading-06">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-06" aria-expanded="true" aria-controls="panelsStayOpen-collapse-06">
						<div style="display:flex">
							<div>
								<img class="my-accordion-img" src="assets/images/projects/projects-group.svg" alt="">
							</div>
							<div style="margin-left: 1rem">
								<h4>Retraining and advanced training courses for adults</h4>
							</div>
						</div>
					</button>
				</h2>
				<div id="panelsStayOpen-collapse-06" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-06">
					<div class="accordion-body">
						<p class="my-p"> Today, the number of participants in the program exceeds 600 people, for whom online trainings are regularly organized with the participation of qualified teachers and psychologists. To improve the professional competency of managers and teachers in the field of education (teachers of all categories, methodologists, assessors, trainers, researchers and specialists) in accordance with the levels of International Standard Classification of Education since 2018 Mahorat & Management implementing a Program “Continuing Professional Development Program for Educators” that serves as a "road map" for managers and teachers to improve their professional skills from primary level to international expert level.
							The CPD "Road map" includes: Based on this Program managers / teachers improve their skills on the basis of the principle of lifelong learning at 4 levels:
						</p>
						<ul class="list-unstyled my-p">
							<li><i class="fa-solid fa-check"></i> Foundation level</li>
							<li><i class="fa-solid fa-check"></i> Developing level</li>
							<li><i class="fa-solid fa-check"></i> Expert level </li>
							<li><i class="fa-solid fa-check"></i> National Expert at International Level</li>
						</ul>
						<p class="my-p">
							Each level consists of 5 modules which equals a total of 180 hours of trainings. The total volume of practical and theoretical training on 4 qualification levels is 720 hours. An individual (pedagogues, managers) who successfully passes each level is awarded a Certificate of Achievement, which indicates their level of qualification in their working sphere.
						</p>
					</div>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading-07">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-07" aria-expanded="true" aria-controls="panelsStayOpen-collapse-07">
						<div style="display:flex">
							<div>
								<img class="my-accordion-img" src="assets/images/projects/projects-group.svg" alt="">
							</div>
							<div style="margin-left: 1rem">
								<h4>Retraining and advanced training courses for adults</h4>
							</div>
						</div>
					</button>
				</h2>
				<div id="panelsStayOpen-collapse-07" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-07">
					<div class="accordion-body">
						<p class="my-p"> Today, the number of participants in the program exceeds 600 people, for whom online trainings are regularly organized with the participation of qualified teachers and psychologists. To improve the professional competency of managers and teachers in the field of education (teachers of all categories, methodologists, assessors, trainers, researchers and specialists) in accordance with the levels of International Standard Classification of Education since 2018 Mahorat & Management implementing a Program “Continuing Professional Development Program for Educators” that serves as a "road map" for managers and teachers to improve their professional skills from primary level to international expert level.
							The CPD "Road map" includes: Based on this Program managers / teachers improve their skills on the basis of the principle of lifelong learning at 4 levels:
						</p>
						<ul class="list-unstyled my-p">
							<li><i class="fa-solid fa-check"></i> Foundation level</li>
							<li><i class="fa-solid fa-check"></i> Developing level</li>
							<li><i class="fa-solid fa-check"></i> Expert level </li>
							<li><i class="fa-solid fa-check"></i> National Expert at International Level</li>
						</ul>
						<p class="my-p">
							Each level consists of 5 modules which equals a total of 180 hours of trainings. The total volume of practical and theoretical training on 4 qualification levels is 720 hours. An individual (pedagogues, managers) who successfully passes each level is awarded a Certificate of Achievement, which indicates their level of qualification in their working sphere.
						</p>
					</div>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading-08">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-08" aria-expanded="true" aria-controls="panelsStayOpen-collapse-08">
						<div style="display:flex">
							<div>
								<img class="my-accordion-img" src="assets/images/projects/projects-group.svg" alt="">
							</div>
							<div style="margin-left: 1rem">
								<h4>Retraining and advanced training courses for adults</h4>
							</div>
						</div>
					</button>
				</h2>
				<div id="panelsStayOpen-collapse-08" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-08">
					<div class="accordion-body">
						<p class="my-p"> Today, the number of participants in the program exceeds 600 people, for whom online trainings are regularly organized with the participation of qualified teachers and psychologists. To improve the professional competency of managers and teachers in the field of education (teachers of all categories, methodologists, assessors, trainers, researchers and specialists) in accordance with the levels of International Standard Classification of Education since 2018 Mahorat & Management implementing a Program “Continuing Professional Development Program for Educators” that serves as a "road map" for managers and teachers to improve their professional skills from primary level to international expert level.
							The CPD "Road map" includes: Based on this Program managers / teachers improve their skills on the basis of the principle of lifelong learning at 4 levels:
						</p>
						<ul class="list-unstyled my-p">
							<li><i class="fa-solid fa-check"></i> Foundation level</li>
							<li><i class="fa-solid fa-check"></i> Developing level</li>
							<li><i class="fa-solid fa-check"></i> Expert level </li>
							<li><i class="fa-solid fa-check"></i> National Expert at International Level</li>
						</ul>
						<p class="my-p">
							Each level consists of 5 modules which equals a total of 180 hours of trainings. The total volume of practical and theoretical training on 4 qualification levels is 720 hours. An individual (pedagogues, managers) who successfully passes each level is awarded a Certificate of Achievement, which indicates their level of qualification in their working sphere.
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