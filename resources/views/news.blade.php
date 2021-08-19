@extends('layouts.app')

@section('title')
    <title>{!! trans('news.meta_title') !!}</title>
    <meta property="og:title" content="{!! trans('news.meta_title') !!}">
@endsection

@section('content')
    <div class="news-container">
        <div class="container mt-5 mb-5">
            <h1 class="title text-center mb-3">{!! trans('news.title') !!}</h1>

            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="d-flex flex-row"></div>
                    <div class="row news-card p-3">
                        <div class="col-md-4 ">
                            <div class="feed-image"><img class="news-feed-image rounded img-fluid img-responsive" src="{{asset('images/news1.jpg')}}""></div>
                        </div>
                        <div class="col-md-8 d-flex flex-column">
                            <div class="news-feed-text">
                                <span>{!! trans('news.news_text_1') !!}<br></span>
                            </div>
                            <div class="d-flex flex-column mt-auto text-right">
                                <span class="date">29.04.2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-2">
                <div class="col-md-8">
                    <div class="d-flex flex-row"></div>
                    <div class="row news-card p-3">
                        <div class="col-md-4 ">
                            <div class="feed-image"><img class="news-feed-image rounded img-fluid img-responsive" src="{{asset('images/news.png')}}""></div>
                        </div>
                        <div class="col-md-8 d-flex flex-column">
                            <div class="news-feed-text">
                                <span>{!! trans('news.news_text') !!}<br></span>
                            </div>
                            <div class="d-flex flex-column mt-auto text-right">
                                <span class="date">04.04.2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div
    </div>
@endsection
