@extends('layouts.app')

@section('title')
    <title>{!! trans('contact.meta_title') !!}</title>
    <meta property="og:title" content="{!! trans('contact.meta_title') !!}">
@endsection

@section('content')
    <div class="contact-container">
        <div class="contact-box">
            <h1 class="title">{!! trans('contact.title') !!}</h1>
            <div class="contact-address">{!! trans('contact.address') !!}</div>
            <div class="contact-email"><a data-auto-recognition="true" href="mailto:vahe@meliksetyan.org">vahe@meliksetyan.org</a></div>
            <div class="phone-box">
                <div class="phone">{!! trans('contact.phone_title') !!}</div>
                <div class="phone-numbers">
                    <div>+37455337099</div>
                    <div>+37477337099</div>
                </div>
            </div>
        </div>
    </div>
@endsection
