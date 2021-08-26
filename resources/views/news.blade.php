@php
    use Carbon\Carbon;
    use Illuminate\Http\Request;
@endphp
@extends('layouts.app')

@section('title')
    <title>{!! trans('news.meta_title') !!}</title>
    <meta property="og:title" content="{!! trans('news.meta_title') !!}">
@endsection

@section('content')
    <div class="news-container">
        <div class="container mt-5 mb-5">
            <h1 class="title text-center mb-3">{!! trans('news.title') !!}</h1>
            @foreach($news as $new)
                <div class="row d-flex justify-content-center mt-2">
                    <div class="col-md-8">
                        <div class="d-flex flex-row"></div>
                        <div class="row news-card p-3">
                            <div class="col-md-4 ">
                                <div class="feed-image"><img class="news-feed-image rounded img-fluid img-responsive" src="http://foundation.loc/storage/image/{{$new->image}}"></div>
                            </div>
                            <div class="col-md-8 d-flex flex-column">
                                <div class="news-feed-text">
                                    <span>{{ $new->{'short_content_' . Config::get('app.locale')} }}<br></span>
                                </div>
                                <div class="d-flex flex-column mt-auto text-right">
                                    <span class="date">{{ \Carbon\Carbon::parse($new->created_at )->format("Y-m-d")}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
        {{ $news->links() }}
        </div>
    </div>
@endsection
