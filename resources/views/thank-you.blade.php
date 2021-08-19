@extends('layouts.app')

@section('title')
<title>{!! trans('donate.meta_title') !!}</title>
<meta property="og:title" content="{!! trans('donate.meta_title') !!}">
@endsection

@section('content')
<div class="thank-you">
    <img src="/images/check-mark-ok-png-10.png" alt="mark-ok-png">
    <h2>{!! trans('donate.thank_you_donation') !!} </h2>
</div>
@endsection
