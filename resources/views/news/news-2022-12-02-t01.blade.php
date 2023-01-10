@extends('layouts.main')
 
@section('title', 'Mahorat & Management - Services')
 
@section('sidebar')
    @parent
 
    {{-- <p>This is appended to the master sidebar.</p> --}}
@endsection
 
@section('content')

<header class="site-header site-news-2022-12-02-t01-header">
	<div class="container">
		<div class="row">

			<div class="col-lg-10 col-12 mx-auto">
				{{-- <h1 class="text-white my-font">{{ __('news.news') }}</h1>
				<strong style="background-color: aliceblue;">{{ __('news.date-2022-12-02') }}</strong>
				<strong class="text-white my-font">{{ __('news.news-2022-12-02-t01-header') }}</strong> --}}
				<span class="category-tag bg-danger">{{ __('messages.news') }}</span>
				<strong style="background-color: aliceblue;padding: 12px;">{{ __('news.date-2022-12-02') }}</strong>
				<h5 class="text-white my-font">{{ __('news.news-2022-12-02-t01-header') }}</h5>
			</div>

		</div>
	</div>

	<div class="overlay"></div>
</header>

<section class="about section-padding bg-white">
	<div class="container">
		<div class="row my-header-row">
			<div class="col">
				<h2 class="text-center my-header">{{ __('news.news-2022-12-02-t01-header') }}</h2>
			</div>
		</div>

		<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
				<img src="assets/images/news/news-2022-12-02-2.jpg" class="img-fluid" alt="" width=100% style="margin:10px;">
				<img src="assets/images/news/news-2022-12-02-3.jpg" class="img-fluid" alt="" width=100% style="margin:10px;">
			</div>
			<div class="col-sm-12 col-md-12 col-lg-6">
				<p class="my-p">{{ __('news.news-2022-12-02-t01-body') }}</p>
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

            


@endsection