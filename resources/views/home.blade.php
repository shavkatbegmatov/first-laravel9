@extends('layouts.main')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
    {{-- <p>This is appended to the master sidebar.</p> --}}
@endsection
 
@section('content')

<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-12 m-auto">
                <div class="heroText">
                    <h1 class="text-white mb-lg-5 mb-3 my-font">{{ __('messages.home-slider') }}</h1>
                </div>
            </div>
            <div class="col-lg-7 col-12">
                <div id="carouselExampleCaptions" class="carousel carousel-fade hero-carousel slide"
                    data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-image-wrap">
                                <img src="assets/images/slide/slider-torino5.jpg" class="img-fluid carousel-image" alt="">
                            </div>
                            <div class="carousel-caption">
                                <h4 class="hero-text my-font">ETF ‘Torino Process’ project</h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-image-wrap">
                                <img src="assets/images/slide/slider-adult-learning3.jpg"
                                    class="img-fluid carousel-image" alt="">
                            </div>
                            <div class="carousel-caption">
                                <h4 class="hero-text my-font">Journal Research in Adult Learning
                                    and Education (RALED)</h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-image-wrap">
                                <img src="assets/images/slide/training-system.jpg" class="img-fluid carousel-image"
                                    alt="">
                            </div>
                            <div class="carousel-caption">
                                <h4 class="hero-text my-font">Creating a regulatory framework of
                                    dual training system</h4>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button"
                        data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden my-font">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button"
                        data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden my-font">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="video-wrap">
        <video autoplay="" loop="" muted="" class="custom-video" poster="">
            <source src="assets/video/laptop2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="overlay"></div>
</section>

<section class="menu section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mb-lg-5 mb-4 my-font">We strive to advance human capital</h2>
                <p class="my-p">The name ‘Mahorat’ means Master. The organization's building the
                    international Masters -
                    Experts in reaching the organization’s aim HRD-Human Resource Development by
                    research-based evidence. We embrace
                    the changes toward innovations and constructive dialogue in HRD.</p>
            </div>
            <div class="section-wrapper">
                <img class="section-imgage-style" src="assets/images/section-img-grey.jpg" />
            </div>
        </div>
</section>

<section class="news section-padding">
    <div class="container">
        <h2 class="text-center mb-lg-5 mb-4 my-font">OUR PROJECTS</h2>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="news-thumb mb-4">
                    <a href="#">
                        <img src="assets/images/section-torino.jpg" class="img-fluid news-image" alt="">
                    </a>

                    <div class="news-text-info news-text-info-large">
                        <span class="category-tag bg-success my-font">Projects</span>

                        <h5 class="news-title mt-2">
                            <a href="#" class="news-title-link my-font">ETF ‘Torino Process’
                                project</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <h4>ETF ‘Torino Process’ project</h4>
                <p class="my-p">
                    Mahorat & Management has been cooperating with the
                    European Education Foundation since May 2019 within the
                    framework of the Torino Process project. It is known that
                    Uzbekistan has been participating in the Torino Process since
                    2010 at the initiative of the European Training Foundation.
                    The Torino process monitors political progress every two
                    years, allowing partner countries to coordinate and assess
                    their progress in vocational education and training reforms.
                </p>

            </div>
        </div>
        <hr class="my-hr" />
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <h4>Journal Research in Adult Learning
                    and Education (RALED)</h4>
                <p class="my-p">
                    The Adult Education and Research (RALED) journal encompasses lifelong learning, quality
                    assurance and adult learning, in
                    accordance with labor market requirements. This includes forms of education and
                    upbringing aimed at ensuring the
                    participation of adults in society. This journal of research and education is published
                    by practitioners and researchers
                    in Uzbekistan and can be a resource for adult learning and education management with the
                    best practice in the world.
                    RALED aims to provide a medium for informed discussion about the principles and practice
                    which determine the methods of
                    social capital in society. It also provides a forum for the exchange of information and
                    ideas among practitioners and
                    researchers worldwide.
                </p>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="news-thumb mb-4">
                    <a href="#">
                        <img src="assets/images/section-adult-learning3.jpg" class="img-fluid news-image" alt="">
                    </a>

                    <div class="news-text-info news-text-info-large">
                        <span class="category-tag bg-success">Projects</span>

                        <h5 class="news-title mt-2">
                            <a href="#" class="news-title-link">Journal Research in Adult
                                Learning
                                and Education (RALED)</a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-hr" />
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="news-thumb mb-4">
                    <a href="#">
                        <img src="assets/images/section-system2.jpg" class="img-fluid news-image" alt="">
                    </a>

                    <div class="news-text-info news-text-info-large">
                        <span class="category-tag bg-success">Projects</span>

                        <h5 class="news-title mt-2">
                            <a href="#" class="news-title-link">Creating a regulatory framework of
                                dual training system</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <h4>Creating a regulatory framework of
                    dual training system</h4>
                <p class="my-p">
                    The project ‘Creating an educational and regulatory framework and methodological support
                    for the introduction of a dual
                    training system in the system of vocational education’ financed by grant funds from the
                    government, which is implemented
                    in partnership with Uzbekistan Teachers of English Association (UzTEA),
                    Mahorat&Management and the Ministry of Higher
                    and Secondary Specialized Education is an ongoing project.
                </p>

            </div>
        </div>
    </div>
</section>

<section class="BgImage"></section>

<section class="news section-padding">
    <div class="container">
        <div class="row">

            <h2 class="text-center mb-lg-5 mb-4">News &amp; Events</h2>

            <div class="col-lg-6 col-md-6 col-12">
                <div class="news-thumb mb-4">
                    <a href="news-detail.html">
                        <img src="assets/images/news/news-2021-09-17.jpg"
                            class="img-fluid news-image" alt="">
                    </a>

                    <div class="news-text-info news-text-info-large">
                        <span class="category-tag bg-danger">News</span>
                        <strong style="background-color: aliceblue;">17 September 2021</strong>
                        <h5 class="news-title mt-2">
                            <a href="news-detail.html" class="news-title-link">We invite you to the IELTS WORKSHOP!</a>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <div class="news-thumb mb-4">
                    <a href="news-detail.html">
                        <img src="assets/images/news/news-2021-06-03.jpg"
                            class="img-fluid news-image" alt="">
                    </a>

                    <div class="news-text-info news-text-info-large">
                        <span class="category-tag bg-danger">News</span>
                        <strong style="background-color: aliceblue;">03 June 2021</strong>

                        <h5 class="news-title mt-2">
                            <a href="news-detail.html" class="news-title-link">English Language Instructor CELI</a>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="news-thumb mb-lg-0 mb-lg-4 mb-0">
                    <a href="news-detail.html">
                        <img src="assets/images/news/news-2021-04-30.jpg"
                            class="img-fluid news-image" alt="">
                    </a>

                    <div class="news-text-info">
                        <span class="category-tag me-3 bg-info">Video</span>

                        <strong>30 April 2021</strong>

                        <h5 class="news-title mt-2">
                            <a href="news-detail.html" class="news-title-link">The Role of Social Civil Organizations in Human Development Capital</a>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="news-thumb mb-lg-0 mb-lg-4 mb-2">
                    <a href="news-detail.html">
                        <img src="assets/images/news/news-2021-03-23.jpg"
                            class="img-fluid news-image" alt="">
                    </a>

                    <div class="news-text-info">
                        <span class="category-tag">Announcement</span>
                        <strong>23 March 2021</strong>

                        <h5 class="news-title mt-2">
                            <a href="news-detail.html" class="news-title-link">Dear friends, today there was a great running exercise in the Botanical Garden.</a>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="news-thumb mb-4">
                    <a href="news-detail.html">
                        <img src="assets/images/news/news-2021-09-02.jpg"
                            class="img-fluid news-image" alt="">
                    </a>

                    <div class="news-text-info">
                        <span class="category-tag me-3 bg-info">Meeting</span>

                        <strong>02 September 2021</strong>

                        <h5 class="news-title mt-2">
                            <a href="news-detail.html" class="news-title-link">UzTEA invites you to a scheduled meeting: Zoom.</a>
                        </h5>
                    </div>
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