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
        <form action="{{ route("report." . (!empty($report) ? "update" : "store"),  !empty($report) ? $report->id : null) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(!empty($report))
                @method("PUT")
            @else
                @method("POST")
            @endif
            <div class="custom-file">
                <label class="custom-file-label" for="validatedCustomFile">{!! !empty($member) ? $member->image : "Choose pdf file" !!}</label>
                <input
                    name="file"
                    type="file"
                    accept="application/pdf"
                    class="custom-file-input"
                    id="validatedCustomFile"
                    {!! empty($member) ? "required" : "" !!}>
            </div>
            <h5 class="text-center p-3" >Armenian</h5>
            <textarea class="p-3" name="title_hy" id="title_hy" required>{{ (!empty($report)) ? $report->text_hy : old("title_hy")}}</textarea>
            <h5 class="text-center p-3" >English</h5>
            <textarea name="title_en" id="title_en" required>{{ (!empty($report)) ? $report->text_en : old("title_en")}}</textarea>
            <h5 class="text-center p-3" >Russian</h5>
            <textarea name="title_ru" id="title_ru" required>{{ (!empty($report)) ? $report->text_ru : old("title_ru")}}</textarea>
            <button class="btn btn-success mt-2" type="submit">Submit</button>
        </form>
    </div>
@endsection
@section("script")
<script>
    CKEDITOR.replace("title_hy")
    CKEDITOR.replace("title_en")
    CKEDITOR.replace("title_ru")
</script>
@endsection
