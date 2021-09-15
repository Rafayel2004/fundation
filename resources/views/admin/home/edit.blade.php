@extends("admin.layouts.app")
@section("content")
    <div class="container-fluid">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route("home.update", $data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="custom-file">
                <label class="custom-file-label" for="validatedCustomFile">{!!$data->image !!}</label>
                <input
                    name="image"
                    type="file"
                    accept="image/x-png,image/gif,image/jpeg"
                    class="custom-file-input" id="validatedCustomFile"
                   required >
            </div>
            <div class="main d-flex justify-content-around mt-3">
                <div class="goal p-3 border">
                    <div class="form-group">
                        <label for="NewsArmFormControlTextarea">Content (Hy)</label>
                        <textarea
                            class="form-control"
                            name="ContentArm"
                            id="contentHy"
                            rows="5"
                            required>
                            {!! $data->goal_content_hy !!}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="NewsArmFormControlTextarea">Content (Eng)</label>
                        <textarea
                            id="contentEn"
                            class="form-control"
                            name="ContentEng"
                            rows="5"
                            required>
                          {!! $data->goal_content_en !!}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="NewsArmFormControlTextarea">Content (Ru)</label>
                        <textarea
                            wrap="phy"
                            class="editor form-control"
                            name="ContentRu"
                            id="contentRu"
                            rows="5"
                           required>
                           {!! $data->goal_content_ru !!}
                        </textarea>
                    </div>
                </div>
                <div class="about p-3 border">
                    <div class="form-group">
                        <label for="NewsArmFormControlTextarea">About (Hy)</label>
                        <textarea
                            class="form-control"
                            name="AboutHy"
                            id="aboutHy"
                            rows="5"
                            required>
                            {!! $data->about_hy !!}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="NewsArmFormControlTextarea">About (En)</label>
                        <textarea
                            class="form-control"
                            name="AboutEn"
                            id="aboutEn"
                            rows="5"
                            required>
                            {!! $data->about_en !!}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="NewsArmFormControlTextarea">About (Ru)</label>
                        <textarea
                            class="form-control"
                            name="AboutRu"
                            id="aboutRu"
                            rows="5"
                            required>
                           {!! $data->about_ru !!}
                        </textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn-success btn ml-5 mt-5">Update</button>
        </form>
    </div>
@endsection
@section("script")
    <script>
        const token =   $('meta[name="csrf-token"]').attr('content');
        var options = {
            filebrowserImageBrowseUrl: '/filemanager?type=Images',
            filebrowserImageUploadUrl: `/laravel-filemanager/upload?type=Images&_token=${token}`,
            filebrowserBrowseUrl: '/filemanager?type=Files',
            filebrowserUploadUrl: `/laravel-filemanager/upload?type=Files&_token=${token}`
        };
        // CKEDITOR.replace('editor', options);
        CKEDITOR.replace("contentRu", options)
        CKEDITOR.replace("contentEn", options)
        CKEDITOR.replace("contentHy", options)
        CKEDITOR.replace("aboutHy", options)
        CKEDITOR.replace("aboutEn", options)
        CKEDITOR.replace("aboutRu", options)
    </script>
@endsection

