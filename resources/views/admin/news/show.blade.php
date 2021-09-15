@extends("admin.layouts.app")
@section("content")
    <div class="container-fluid show">
        <div class="location bg-white mt-5 p-2">
            <p class="ps-2 h4 font-weight-bold"> <span class="text-secondary">News <i class="fas fa-caret-right"></i></span> Show</p>
        </div>
        <div class="d-flex mt-5">
           <div class="show-image p-1 bg-white">
               <img src="http://127.0.0.1:8000/storage/photos/{{$news->image}}" alt="">
           </div>
            <div class="info ms-5 ps-5 pe-5 bg-white border">
                <ul class="nav nav-pills mb-3  mt-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Armenian</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Russian</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">English</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active bg-white" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="tab-pane fade show active bg-white" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <h5>Ընդհանուր Ինֆոմացիա</h5>
                            <div class="bg-light p-2">{!! $news->content_hy !!}</div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="tab-pane fade show active bg-white" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <h5 class="mb-3">Общая информация</h5>
                            <div class="bg-light p-2">{!! $news->content_ru !!}</div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="tab-pane fade show active bg-white" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <h5 class="mb-3">General Information</h5>
                            <div class="bg-light p-2">{!! $news->content_en !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
