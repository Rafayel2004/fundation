@extends("admin/layouts/app")
@section("content")

    <div class="container-fluid ps-5 pe-5">
        <div class="d-flex justify-content-between mb-3 mt-3">
            <h3>News Table</h3>
            <button type="submit" class="btn btn-success"><a href="{{ route("news.create") }}">Create News</a></button>
        </div>
        <table class="table">
            <thead>
                <tr class="text-center bg-info text-white h5">
                    <th>Image</th>
                    <th>Short Content En</th>
                    <th>Content En</th>
                    <th>Short Content Ru</th>
                    <th>Content Ru</th>
                    <th>Short Content Arm</th>
                    <th>Content Arm</th>
                    <th>Created At</th>
                    <th colspan="4">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($news as $new)
                    <tr class="admin-news-table" data-id="{{$new->id}}">
                        <td><img style="width: 100px" src="http://foundation.loc/storage/image/{{$new->image }}" alt=""></td>
                        <td>{{\Illuminate\Support\Str::words($new->short_content_en,15)}}</td>
                        <td>{{\Illuminate\Support\Str::words($new->content_en,35)}}</td>
                        <td>{{\Illuminate\Support\Str::words($new->short_content_ru,15)}}</td>
                        <td>{{\Illuminate\Support\Str::words($new->content_ru,35)}}</td>
                        <td>{{\Illuminate\Support\Str::words($new->short_content_hy,15)}}</td>
                        <td>{{\Illuminate\Support\Str::words($new->content_hy,35)}}</td>
                        <td nowrap="nowrap">{{\Illuminate\Support\Str::limit($new->created_at,10,$end = "")}}</td>
                        <td><a href="{{ route('news.edit', $new->id) }}"><button class="action-edit"><i class="fas fa-edit"></i></button></a></td>
                        <td><button class="action-delete" data-toggle="modal" data-target="#exampleModalLong-{{$new->id}}"><i class="fas fa-trash-alt"></i></button></td>
                        <td><a href=" {{ route('news.show', $new->id) }}"><i class="far fa-eye"></i></a></td>
                        <td>
                            <div class="modal fade" id="exampleModalLong-{{$new->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong-{{$new->id}}" aria-hidden="false">
                                <div class="modal-dialog" role="document">
                                    <form action="{{ route('news.destroy', $new->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this news
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
