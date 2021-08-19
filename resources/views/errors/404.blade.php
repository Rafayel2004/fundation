@extends('layouts.app')

@section('title')
<title>{!! trans('about.meta_title') !!}</title>
<meta property="og:title" content="{!! trans('about.meta_title') !!}">
@endsection

@section('content')
<div class="page-not-found">
    <h1> <span>Oops!</span> Page not found</h1>
</div>
@endsection
