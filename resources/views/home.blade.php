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
                            <ul>
                                <li>{!! trans('home.foundation_work_skills_1') !!}</li>
                                <li>{!! trans('home.foundation_work_skills_2') !!}</li>
                                <li>{!! trans('home.foundation_work_skills_3') !!}</li>
                                <li>{!! trans('home.foundation_work_skills_4') !!}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="personal-right-section">
                        <div class="personal-avatar"></div>
                        <div class="about">
                            <div class="person-name">
                                {!! trans('home.person_name') !!}
                            </div>
                            <div class="description">
                                <p>{!! trans('home.person_description') !!}</p>
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
