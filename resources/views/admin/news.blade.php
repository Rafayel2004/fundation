@extends("admin/layouts/app")
@section("content")
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Short Content</th>
                    <th>Content</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($news as $new)
                    <tr>
                        <td></td>
                        <td>{{$new->short_content}}</td>
                        <td>{{$new->content}}</td>
                        <td>{{$new->created_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
