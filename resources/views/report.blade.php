@extends('layouts.app')

@section('title')
    <title>{!! trans('donate.meta_title') !!}</title>
    <meta property="og:title" content="{!! trans('donate.meta_title') !!}">
@endsection
@php $locale = session()->get('locale'); @endphp
@section('content')
    <div class="news-container">
        <div class="container mt-5 mb-5">
            @foreach($reports as $report)
                <div class="border-bottom border-dark">
                    <div class="report-box d-flex mb-1 p-2">
                        <div class="time text-center">
                            <p class="h3 text-white">{{ \Carbon\Carbon::parse($report->created_at )->format("d") }}</p>
                            <p class="h3">{{ \Carbon\Carbon::parse($report->created_at )->format("M") }}</p>
                            <p class="h3">{{ \Carbon\Carbon::parse($report->created_at )->format("Y") }}</p>
                        </div>
                        <div class="report_title">
                            {!! $report->{'text_' . Config::get('app.locale')}  !!}
                        </div>
                        <div class="download text-center">
                            <a href="/files/{{ $report->file }}" download="{{ $report->file }}"><i class="fas fa-download fa-3x	mt-3"></i></a>
                            <h3>Ներբեռնել</h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
