@extends("admin.layouts.app")
@section("content")
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        <form action="{{ route("news." . '' .  $type, !empty($currentNews) ? $currentNews->id : null)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(!empty($currentNews))
            @method("PUT")
        @else
            @method("POST")
        @endif
            <div class="custom-file">
                <label class="custom-file-label" for="validatedCustomFile">{!! !empty($currentNews) ? $currentNews->image : "Choose file..." !!}</label>
                <input
                    name="image"
                    type="file"
                    accept="image/x-png,image/gif,image/jpeg"
                    class="custom-file-input" id="validatedCustomFile"
                    {!! empty($currentNews) ? "required" : "" !!} >
            </div>
            <div class="form-group">
                <label for="NewsArmFormControlTextarea">Content (Arm)</label>
                <textarea
                    class="form-control"
                    name="ContentArm"
                    id="contentHy"
                    rows="5"
                    {!! empty($currentNews) ? "required" : "" !!}>
                        {!! !empty($currentNews) ? $currentNews->content_hy : old("ContentArm") !!}
                </textarea>
            </div>

            <div class="form-group">
                <label for="NewsArmFormControlTextarea">Content (Eng)</label>
                <textarea
                    id="contentEn"
                    class="form-control"
                    name="ContentEng"
                    rows="5"  {!! empty($currentNews) ? "required" : "" !!}>
                    {!! !empty($currentNews) ? $currentNews->content_en : old("ContentEng") !!}
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
                    {!! empty($currentNews) ? "required" : "" !!}>
                    {!! !empty($currentNews) ? $currentNews->content_ru : old("ContentRu") !!}
                </textarea>
            </div>
            <button type="submit" class="btn-success btn">{!! $type == "store" ? "Create" : "Update" !!}</button>
        </form>
    </div>
@endsection
@section("script")
    <script>
      const token =   $('meta[name="csrf-token"]').attr('content');
        // var options = {
        //     filebrowserImageBrowseUrl: '/filemanager?type=Images',
        //     filebrowserImageUploadUrl: `/laravel-filemanager/upload?type=Images&_token=${token}`,
        //     filebrowserBrowseUrl: '/filemanager?type=Files',
        //     filebrowserUploadUrl: `/laravel-filemanager/upload?type=Files&_token=${token}`
        // };
        // CKEDITOR.replace('editor', options);
        CKEDITOR.replace("contentRu")
        CKEDITOR.replace("contentEn")
        CKEDITOR.replace("contentHy")
    </script>
@endsection

