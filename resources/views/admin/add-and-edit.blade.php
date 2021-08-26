@extends("admin.layouts.app")
@section("content")
    <textarea name="editor" id="editor">sdfsd</textarea>
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
                <label for="newsShortContent">Short Content (Arm)</label>
                <input
                    type="text"
                    name="shortContentArm"
                    class="form-control" id="newsShortContent"
                    value="{!! !empty($currentNews) ? $currentNews->short_content_hy : old("shortContentArm") !!}"
                    {!! empty($currentNews) ? "required" : "" !!}>
            </div>
            <div class="form-group">
                <label for="NewsArmFormControlTextarea">Content (Arm)</label>
                <textarea
                    class="form-control"
                    name="ContentArm"
                    id="NewsArmFormControlTextarea"
                    rows="5"
                    {!! empty($currentNews) ? "required" : "" !!}>
                        {!! !empty($currentNews) ? $currentNews->content_hy : old("ContentArm") !!}
                </textarea>
            </div>
            <div class="form-group">
                <label for="newsShortContent">Short Content (Eng)</label>
                <input
                    type="text"
                    id="newsShortContent"
                    class="form-control"
                    name="shortContentEng"
                    value="{!! !empty($currentNews) ? $currentNews->short_content_en : old("shortContentEng") !!}"
                    {!! empty($currentNews) ? "required" : "" !!}>
            </div>
            <div class="form-group">
                <label for="NewsArmFormControlTextarea">Content (Eng)</label>
                <textarea
                    id="NewsArmFormControlTextarea"
                    class="form-control"
                    name="ContentEng"
                    rows="5"  {!! empty($currentNews) ? "required" : "" !!}>
                    {!! !empty($currentNews) ? $currentNews->content_en : old("ContentEng") !!}
                </textarea>
            </div>
            <div class="form-group">
                <label for="newsShortContent">Short Content (Ru)</label>
                <input
                    id="newsShortContent"
                    type="text"
                    class="form-control"
                    name="shortContentRu"
                    value="{!! !empty($currentNews) ? $currentNews->short_content_ru : old("shortContentRu") !!}"
                    {!! empty($currentNews) ? "required" : "" !!}>
            </div>
            <div class="form-group">
                <label for="NewsArmFormControlTextarea">Content (Ru)</label>
                <textarea
                    wrap="phy"
                    class="form-control"
                    name="ContentRu"
                    id="NewsArmFormControlTextarea"
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
        var options = {
            filebrowserImageBrowseUrl: '/filemanager?type=Images',
            filebrowserImageUploadUrl: `/laravel-filemanager/upload?type=Images&_token=${token}`,
            filebrowserBrowseUrl: '/filemanager?type=Files',
            filebrowserUploadUrl: `/laravel-filemanager/upload?type=Files&_token=${token}`
        };
        CKEDITOR.replace('editor', options);
    </script>
@endsection

