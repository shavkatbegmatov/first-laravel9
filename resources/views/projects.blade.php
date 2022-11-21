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
								<h4>Journal Research in Adult Learning and Education (RALED)</h4>
							</div>
						</div>
					</button>
				</h2>
				<div id="panelsStayOpen-collapse-02" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-02">
					<div class="accordion-body">
						<p class="my-p"> 
							One of the latest projects of Mahorat & Management is the journal ‘Research in Adult Learning and Education’. The Research in Adult Learning and Education (RALED) journal is a publication for Uzbek and world practitioners and researchers involved in issues of life-long learning, quality assurance in education, and adult learning, taking into account the requirements of the labour market. This includes all forms of education and training aimed at ensuring adult participation in society and work: formal, non-formal and informal.
						</p>
						<p class="my-p">
							It covers, but is not limited to, these related areas:
						</p>
						<ul class="list-unstyled my-p">
							<li><i class="fa-solid fa-check"></i> pedagogy and psychology of vocational and professional training</li>
							<li><i class="fa-solid fa-check"></i> social partnership development</li>
							<li><i class="fa-solid fa-check"></i> advanced training and retraining of teaching and management staff</li>
							<li><i class="fa-solid fa-check"></i> adult education</li>
							<li><i class="fa-solid fa-check"></i> workplace training</li>
							<li><i class="fa-solid fa-check"></i> professional development</li>
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
								<h4>Senior Experts Service (SES)</h4>
							</div>
						</div>
					</button>
				</h2>
				<div id="panelsStayOpen-collapse-03" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-03">
					<div class="accordion-body">
						<p class="my-p">
							Since June 2019, Mahorat & Management actively cooperates with an expert organization in Germany, which brings together more than 12,500 retired professionals and executives providing advisory services on a voluntary basis. Within the framework of the agreement signed between the Mahorat & Management and SES, with the participation of the SES expert on information technologies Sh.Behjad, work has begun on the implementation of an information system for education management in the Academic Lyceum of UzSWLU.
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
								<h4>VET Reforms Project (SVRP) in Uzbekistan</h4>
							</div>
						</div>
					</button>
				</h2>
				<div id="panelsStayOpen-collapse-04" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-04">
					<div class="accordion-body">
						<p class="my-p">
							Assistance to ‘Support to VET Reforms Project (SVRP) in Uzbekistan’ for conducting Governance Survey. Mahorat & Management is supporting the SVRP to conduct during April-July, 2022 a survey into the quality of VET governance in Uzbekistan. The survey aims to evaluate VET governance according to key functions of the VET system. The results from this study can be used to recommend changes to specific dimensions of governance. The survey will be digitally managed by SVRP partner CEMETS in Switzerland, but it needs preparation and follow-up on the ground in Uzbekistan.
						</p>
						<p class="my-p">
							It is expected that the total number of survey participants exceeds 2,500 from the system of ministries of higher and secondary specialized education, employment and labor relations, the chamber of commerce and industry and other VET stakeholders.
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
								<h4>ETF ‘Civil Society Organizations and Human Capital Development’</h4>
							</div>
						</div>
					</button>
				</h2>
				<div id="panelsStayOpen-collapse-05" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-05">
					<div class="accordion-body">
						<p class="my-p">
							Conducting the “Survey on contribution of civil society organizations to the lifelong development of human capital” by request of the European Training Foundation (ETF) By request of the European Training Foundation, during August – December 2020 ‘Mahorat & Management’ conducted a survey among civil society organizations (SCOs) in Uzbekistan. The aim of this study is learning to what extent SCOs contribute to the formation of skills, competencies, knowledge and attitudes that contribute to the employment of people and the realization of their potential i.e. human capital development (HCD).
						</p>
						<p class="my-p">
							We provided a questionnaire that contained four sections:
						</p>
						<ul class="list-unstyled my-p">
							<li><i class="fa-solid fa-check"></i> organization profile</li>
							<li><i class="fa-solid fa-check"></i> CSOs response to the COVID-19 pandemic effects</li>
							<li><i class="fa-solid fa-check"></i> stakeholders/policy dialogue and potential of their organization in the HCD sector.</li>
						</ul>
						<p class="my-p">
							This survey is conducted among selected 25 CSOs across the Republic of Uzbekistan which highly promoted informal and non-formal learning during a pandemic period for youth, women, and employment.
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
								<h4>ETF ‘Torino Process’ project - 5th round (2018-2020)</h4>
							</div>
						</div>
					</button>
				</h2>
				<div id="panelsStayOpen-collapse-06" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-06">
					<div class="accordion-body">
						<p class="my-p">
							Mahorat & Management has been cooperating with the European Education Foundation since May 2019 within the framework of the Turin Process project, round 5. The Torino process monitors political progress every two years, allowing partner countries to coordinate and assess their progress in vocational education and training reforms. In the fifth phase of the project from 2019 to 2020, Mahorat & Management together with the Ministry of Higher and Secondary Special Education, other VET stakeholders actively supported the implementation of the Torino process, including the establishment of focus groups, conducting launch event, discussing the policy analysis.
						</p>
						<p class="my-p">
							During the implementation of this project the preparatory meetings in Tashkent, Andijan and Syrdarya regions were held, as well as meetings at the Ministry of Higher and Secondary Specialized Education with the participation of a group of experts from the Torino Process, in other interested ministries were held. The launch event was held on June 14, 2019 at the Radisson Blue Hotel. Experts have prepared a draft National Report and is in the process of discussion with practitioners, representatives of educational institutions, professional associations, government and non-governmental organizations throughout our republic.
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
								<h4>ETF ‘Mission and consultations including DARYA Action’</h4>
							</div>
						</div>
					</button>
				</h2>
				<div id="panelsStayOpen-collapse-07" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-07">
					<div class="accordion-body">
						<p class="my-p">
							Assistance to organizing ETF Mission and consultations including DARYA Action. As a long-term partner for the ETF “Mahorat & Management” team has assisted to organise an ETF Team Mission to Tashkent in order to present the activities in Uzbekistan in the ETF 2021-2027 work programme and in particular cooperation in the forthcoming EU Regional Action DARYA, which ETF is planning to implement on behalf of the European Union.
						</p>
						<p class="my-p">
							The ETF Mission was organized within the Co-operation in Vocational Education and Training, Labour Market and Skills Development, Lifelong Learning between the European Training Foundation and Government Institutions of Uzbekistan. Our support consisted in planning and organizing meetings, round tables, as well as logistical support in organizing the visit, translation services and meetings of ETF team comprising of senior specialist ETF Darya team members led by the ETF Country Liaison for Uzbekistan – Mr.Ian Cumming, and Focal point for Central Asia Ms. Christine Hemschemeier (ETF) during their visit to Tashkent from 27 June to 6 July 2022.
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
								<h4>Conducting events (conferences/workshops/webinars)</h4>
							</div>
						</div>
					</button>
				</h2>
				<div id="panelsStayOpen-collapse-08" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-08">
					<div class="accordion-body">
						<blockquote>
							<p class="my-p">
								By request of Uzbekistan Teachers of English Association which has implemented the US funded Project “Core Values Standard of the Teacher Training based on LMS Technology for pre-school education Teachers” during December, 2021 – March, 2022 “Mahorat & Management” assisted in holding an online conference and 8 online webinars.
							</p>
							{{-- <footer>— <cite>Coco Chanel</cite></footer> --}}
						</blockquote>
						<p class="my-p">
							The project team prepared 8 curriculum modules based on Core Professional Standard for Teachers for Uzbekistan. The TOT group, for which the delivery of the curriculum modules was planned, were identified among the teachers of preschool education. The developed modules are gradually delivered to TOT groups starting from January 21, 2022 until February 28, 2022 using Zoom platform. The average number of participants in each of these online webinars is 80-85 people.
						</p>
						<p class="my-p">
							On March 4, 2022 an international conference of participants was conducted. The conference was held in English with simultaneous translation into Uzbek and Russian. The conference was attended by teachers and university students. Students enrolled in the Master of Arts in Education and Innovation (MAEDIN) at Webster University also attended the conference. As guests, the conference was attended by representatives of the Ministry of Preschool Education, the European Training Foundation and other non-governmental organizations.
						</p>
						<blockquote>
							<p class="my-p">Mahorat & Management team is actively involved in organizing TOT, webinars and workshops within the Project ‘Creating an educational and regulatory framework and methodological support for the introduction of a dual training system in the system of vocational education’.</p>
							{{-- <footer>— <cite>Coco Chanel</cite></footer> --}}
						</blockquote>
						<p class="my-p">
							This project is being implemented by Uzbekistan Teachers of English Association (UzTEA) in cooperation the Ministry of Higher and Secondary Specialized Education starting from September, 2021 that is financed by the Public Fund for Support of Non-Governmental Organizations and Other Institutions of Civil Society under the Oliy Majlis (Parliament) of the Republic of Uzbekistan.
						</p>
						<p class="my-p">
							The project provides for the development of 10 professional standards in priority areas, the development of a methodological manual for the development of dual education programs, curricula (modules) for 10 selected professions for the introduction of dual education, a procedure for assessing the qualifications of graduates of the dual education program, as well as organization of 10 seminars and short-term trainings on the introduction of dual education for more than 3,000 managers and teachers working in the vocational education system.
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