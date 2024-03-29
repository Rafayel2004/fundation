<div class="navBar-container">
    <nav class="navbar navbar-expand-lg navbar-light">
        @php $locale = session()->get('locale'); @endphp
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse d-flex justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item{{ Request::path() === "$locale" ? 'active' : ''}}">
                    <a class="nav-link" href="{{url("$locale/")}}">{!! trans('navigation.home') !!}</a>
                </li>
                <li class="nav-item {{ Request::path() === "$locale/about" ? 'active' : ''}}">
                    <a class="nav-link"  href="{{url("$locale/about/")}}">{!! trans('navigation.about_us') !!}</a>
                </li>
                <li class="nav-item {{ Request::path() === "$locale/news" ? 'active' : ''}}">
                    <a class="nav-link"  href="{{url("$locale/news/")}}">{!! trans('navigation.news') !!}</a>
                </li>
                <li class="nav-item {{ Request::path() === "$locale/report" ? 'active' : ''}}">
                    <a class="nav-link"  href="{{url("$locale/report/")}}">{!! trans('navigation.report') !!}</a>
                </li>
            </ul>
            <div class="right ml-auto">
                <button class="nav-item btn mt-2{{ Request::path() === "$locale/donate" ? 'active' : ''}}">
                    <a class="nav-link text-dark bg-white rounded-pill"  href="{{url("$locale/donate/")}}">{!! trans('navigation.donate') !!}</a>
                </button>
            </div>
        </div>
    </nav>
</div>
