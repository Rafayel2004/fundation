@php
    $locale = session()->get('locale');
@endphp

@extends('layouts.app')

@section('title')
    <title>Ավելին</title>
    <meta property="og:title" content="{!! trans('home.meta_title') !!}">
@endsection

@section('content')
    <div class="news-container">
        <div class="container mt-5 mb-5">
            <h1 class="title text-center mb-3">{!! trans('news.title') !!}</h1>
            <div class="row d-flex justify-content-center mt-2">
                <div class="col-md-6">
                    <div class="row news-card p-3">
                        <div class="more">
                            <div class="feed-image"><img class="news-feed-image rounded img-fluid img-responsive" src="http://127.0.0.1:8000/storage/photos/{{$news->image}}"></div>
                        </div>
                        <div>
                            <div class="news-feed-text">
                                <span>{!! $news->{'content_' . Config::get('app.locale')} !!}<br></span>
                            </div>
                            <div class="d-flex justify-content-between text-right">
                                <span class="date">{{ \Carbon\Carbon::parse($news->created_at )->format("Y-m-d")}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
