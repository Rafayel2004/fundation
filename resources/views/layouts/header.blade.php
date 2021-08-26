<div class="head">
    <div class="head-container">
        <a class="logo" href="/"></a>
        <div class="language-box">
            @php $locale = session()->get('locale'); @endphp
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   @switch($locale)
                        @case('en') <img src="{{asset('images/USA.svg')}}" alt="USA"> @break
                        @case('ru') <img src="{{asset('images/RUS.svg')}}" alt="RU"> @break
                        @case('hy') <img src="{{asset('images/ARM.svg')}}" alt="ARM"> @break
                   @endswitch
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @php $path = Request::segment(2); @endphp
                    @switch($locale)
                        @case($locale == 'en')
                            <a href="{!! url("ru/$path") !!}"><img src="{{asset('images/RUS.svg')}}" alt="RUS"></a>
                            <a href="{!! url("hy/$path") !!}"><img src="{{asset('images/ARM.svg')}}" alt="ARM"></a>
                        @break
                        @case($locale == 'ru')
                            <a href="{!! url("en/$path") !!}"><img src="{{asset('images/USA.svg')}}" alt="USA"></a>
                            <a href="{!! url("hy/$path") !!}"><img src="{{asset('images/ARM.svg')}}" alt="ARM"></a>
                        @break
                        @case($locale == 'hy')
                            <a href="{!! url("en/$path") !!}"><img src="{{asset('images/USA.svg')}}" alt="USA"></a>
                            <a href="{!! url("ru/$path") !!}"><img src="{{asset('images/RUS.svg')}}" alt="RUS"></a>
                        @break
                    @endswitch
                </div>
            </div>
        </div>
    </div>
</div>
