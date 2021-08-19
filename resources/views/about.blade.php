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
        <div class="container">
            <div class="row justify-content-center">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="{{asset('images/Rima.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{!! trans('about.rima') !!}</h5>
                        <p class="card-text"> {!! trans('about.rima_description') !!}</p>
                    </div>
                </div>
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="{{asset('images/Ani.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{!! trans('about.ani') !!}</h5>
                        <p class="card-text">{!! trans('about.info') !!}</p>
                    </div>
                </div>
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="{{asset('images/Armine.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{!! trans('about.armine') !!}</h5>
                        <p class="card-text"> {!! trans('about.info') !!}</p>
                    </div>
                </div>
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="{{asset('images/Marta.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{!! trans('about.marta') !!}</h5>
                        <p class="card-text">{!! trans('about.info') !!}</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="{{asset('images/Sharmagh.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{!! trans('about.sharmagh') !!}</h5>
                        <p class="card-text"> {!! trans('about.info') !!}</p>
                    </div>
                </div>
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="{{asset('images/Tatev.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{!! trans('about.tatevik') !!}</h5>
                        <p class="card-text">{!! trans('about.info') !!}</p>
                    </div>
                </div>
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="{{asset('images/Vahag.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{!! trans('about.vahagn') !!}</h5>
                        <p class="card-text"> {!! trans('about.info') !!}</p>
                    </div>
                </div>
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="{{asset('images/Sargis.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{!! trans('about.sargis') !!}</h5>
                        <p class="card-text">{!! trans('about.sargis_position') !!}</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="{{asset('images/Amalya.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{!! trans('about.amalya') !!}</h5>
                        <p class="card-text"> {!! trans('about.pharmacist') !!}</p>
                    </div>
                </div>
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="{{asset('images/Magda.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{!! trans('about.magda') !!}</h5>
                        <p class="card-text">{!! trans('about.pharmacist') !!}</p>
                    </div>
                </div>
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="{{asset('images/Mariam.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{!! trans('about.mariam') !!}</h5>
                        <p class="card-text"> {!! trans('about.lawyer') !!}</p>
                    </div>
                </div>
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="{{asset('images/Ruzanna.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{!! trans('about.ruzanna') !!}</h5>
                        <p class="card-text">{!! trans('about.dermatologist') !!}</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="{{asset('images/Stella.png')}}" alt="stella">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{!! trans('about.stella') !!}</h5>
                        <p class="card-text"> {!! trans('about.pharmacist') !!}</p>
                    </div>
                </div>
                <div style="width: 14rem;">
                </div>
                <div style="width: 14rem;">
                </div>
                <div style="width: 14rem;">
                </div>
                <div style="width: 14rem;">
                </div>
            </div>
        </div>
    </div>
@endsection
