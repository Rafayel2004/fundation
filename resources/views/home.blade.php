@extends('layouts.app')

@section('title')
    <title>{!! trans('home.meta_title') !!}</title>
    <meta property="og:title" content="{!! trans('home.meta_title') !!}">
@endsection
@php $locale = session()->get('locale'); @endphp
@section('content')
    <div class="home-container">
        <div class="person-image"></div>
        <div class="personal-description">
            <div class="mash-container">
                <div class="box">
                    {!! trans('home.foundation_mission') !!}
                </div>
                <div class="description-container">
                    <div class="personal-left-section">
                       <div class="title">
                           <a href="{{'/files/hy-kanonadrutyun.pdf' }}" target="_blank">
                               {!! trans('home.foundation_title') !!}
                           </a>
                       </div>
                        <div class="description-title">{!! trans('home.foundation_sub_title') !!}</div>
                        <div class="work-skills">
                           {!! $data->{'goal_content_' . Config::get('app.locale')} !!}
                        </div>
                    </div>
                    <div class="personal-right-section">
                        <div class="personal-avatar">
                            <img class="w-100 h-100" src="http://127.0.0.1:8000/storage/photos/{{$data->image}}" alt="">
                        </div>
                        <div class="about">
                            <div class="person-name">
                                {!! trans('home.person_name') !!}
                            </div>
                            <div class="description">
                               {!!  $data->{'about_' . Config::get('app.locale')} !!}
                            </div>
                            <div class="more-button">
                                <a type="button" target="_blank" class="btn" href={{'/files/'. $locale.'-about.pdf' }}>
                                    {!! trans('home.more_button') !!}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
