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
                                <h4 class="hero-text my-font">{{ __('messages.home-carousel-hero-etf') }}</h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-image-wrap">
                                <img src="assets/images/slide/slider-adult-learning3.jpg"
                                    class="img-fluid carousel-image" alt="">
                            </div>
                            <div class="carousel-caption">
                                <h4 class="hero-text my-font">{{ __('messages.home-carousel-hero-raled') }}</h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-image-wrap">
                                <img src="assets/images/slide/training-system.jpg" class="img-fluid carousel-image"
                                    alt="">
                            </div>
                            <div class="carousel-caption">
                                <h4 class="hero-text my-font">{{ __('messages.home-carousel-hero-dual') }}</h4>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button"
                        data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden my-font">{{ __('messages.previous') }}</span>
                    </button>
                    <button class="carousel-control-next" type="button"
                        data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden my-font">{{ __('messages.next') }}</span>
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
                <h2 class="text-center mb-lg-5 mb-4 my-font my-header">{{ __('messages.home-we-strive') }}</h2>
                <p class="my-p">{{ __('messages.home-the-name-mahorat') }}</p>
            </div>
            <div class="section-wrapper">
                <img class="section-imgage-style" src="assets/images/section-img-grey.jpg" />
            </div>
        </div>
</section>

<section class="news section-padding">
    <div class="container">
        <h2 class="text-center mb-lg-5 mb-4 my-font my-header">{{ __('messages.our-projects') }}</h2>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="news-thumb mb-4">
                    <a href="#">
                        <img src="assets/images/section-torino.jpg" class="img-fluid news-image" alt="">
                    </a>

                    <div class="news-text-info news-text-info-large">
                        <span class="category-tag bg-success my-font">{{ __('messages.projects') }}</span>

                        <h5 class="news-title mt-2">
                            <a href="#" class="news-title-link my-font">{{ __('messages.home-carousel-hero-etf') }}</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <h4>{{ __('messages.home-carousel-hero-etf') }}</h4>
                <p class="my-p">{{ __('messages.home-carousel-hero-etf-text') }}</p>

            </div>
        </div>
        <hr class="my-hr" />
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <h4>{{ __('messages.home-carousel-hero-raled') }}</h4>
                <p class="my-p">{{ __('messages.home-carousel-hero-raled-text') }}</p>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="news-thumb mb-4">
                    <a href="#">
                        <img src="assets/images/section-adult-learning3.jpg" class="img-fluid news-image" alt="">
                    </a>

                    <div class="news-text-info news-text-info-large">
                        <span class="category-tag bg-success">{{ __('messages.projects') }}</span>

                        <h5 class="news-title mt-2">
                            <a href="#" class="news-title-link">{{ __('messages.home-carousel-hero-raled') }}</a>
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
                        <span class="category-tag bg-success">{{ __('messages.projects') }}</span>

                        <h5 class="news-title mt-2">
                            <a href="#" class="news-title-link">{{ __('messages.home-carousel-hero-dual') }}</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <h4>{{ __('messages.home-carousel-hero-dual') }}</h4>
                <p class="my-p">{{ __('messages.home-carousel-hero-dual-text') }}</p>

            </div>
        </div>
    </div>
</section>

<section class="BgImage"></section>

<section class="news section-padding">
    <div class="container">
        <div class="row">

            <h2 class="text-center mb-lg-5 mb-4 my-header">{{ __('messages.news-and-events') }}</h2>

            <div class="col-lg-6 col-md-6 col-12">
                <div class="news-thumb mb-4">
                    <a href="news-detail.html">
                        <img src="assets/images/news/news-2021-09-17.jpg"
                            class="img-fluid news-image" alt="">
                    </a>

                    <div class="news-text-info news-text-info-large">
                        <span class="category-tag bg-danger">{{ __('messages.news') }}</span>
                        <strong style="background-color: aliceblue;">{{ __('messages.17-09-2021') }}</strong>
                        <h5 class="news-title mt-2">
                            <a href="news-detail.html" class="news-title-link">{{ __('messages.we-invite') }}</a>
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
                        <span class="category-tag bg-danger">{{ __('messages.news') }}</span>
                        <strong style="background-color: aliceblue;">{{ __('messages.03-06-2021') }}</strong>

                        <h5 class="news-title mt-2">
                            <a href="news-detail.html" class="news-title-link">{{ __('messages.instructor-celi') }}</a>
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
                        <span class="category-tag me-3 bg-info">{{ __('messages.video') }}</span>

                        <strong>{{ __('messages.30-04-2021') }}</strong>

                        <h5 class="news-title mt-2">
                            <a href="news-detail.html" class="news-title-link">{{ __('messages.the-role-of-social-civil') }}</a>
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
                        <span class="category-tag">{{ __('messages.announcement') }}</span>
                        <strong>{{ __('messages.23-03-2021') }}</strong>

                        <h5 class="news-title mt-2">
                            <a href="news-detail.html" class="news-title-link">{{ __('messages.botanical-garden') }}</a>
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
                        <span class="category-tag me-3 bg-info">{{ __('messages.meeting') }}</span>

                        <strong>{{ __('messages.02-09-2021') }}</strong>

                        <h5 class="news-title mt-2">
                            <a href="news-detail.html" class="news-title-link">{{ __('messages.uztea-invites-zoom') }}</a>
                        </h5>
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