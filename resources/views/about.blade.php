@extends('layouts.app')

@section('title')
    <title>{!! trans('about.meta_title') !!}</title>
    <meta property="og:title" content="{!! trans('about.meta_title') !!}">
@endsection

@section('content')
    <div class="about-container">
        <div class="about-description-box">
            <h1 class="title">{!! trans('about.title') !!}</h1>
            <div class="about-description">
                {!! trans('about.description') !!}
            </div>
        </div>
        <h2 class="title text-center"> {!! trans('about.team_text') !!}
        </h2>
        <div class="container members">
            <div class="d-flex member mb-5 g-3 flex-wrap">
                @foreach($members as $member)
                    <div class="col-3 mb-3 ms-2">
                        <div class="card member-card" style="width: 14rem;">
                            <img class="card-img-top" src="http://foundation.loc/storage/image/{{$member->image}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">{{$member->{'full_name_' . Config::get('app.locale')} }}</h5>
                                <p class="card-text">{{$member->{'profession_' . Config::get('app.locale')} }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
