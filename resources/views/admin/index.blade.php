@extends("admin.layouts.app")
@section("content")
    <div class="container-fluid ps-5 pe-5">
        <div class="d-flex justify-content-between mb-3 mt-3">
            <h3>Home Info</h3>
        </div>
        <table class="table">
            <thead>
            <tr class="text-center bg-info text-white h5">
                <th>Image</th>
                <th>Goal Content (Hy)</th>
                <th>Goal Content (Ru)</th>
                <th>Goal Content (En)</th>
                <th>About (En)</th>
                <th>About (Ru)</th>
                <th>About (Hy)</th>
                <th colspan="4">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $home)
                <td><img style="width: 100px" src="http://127.0.0.1:8000/storage/photos/{{$home->image }}" alt=""></td>
                <td>{!! \Illuminate\Support\Str::words($home->goal_content_en,10) !!}</td>
                <td>{!! \Illuminate\Support\Str::words($home->goal_content_ru,10) !!}</td>
                <td>{!! \Illuminate\Support\Str::words($home->goal_content_hy,10) !!}</td>
                <td>{!! \Illuminate\Support\Str::words($home->about_en,35) !!}</td>
                <td>{!! \Illuminate\Support\Str::words($home->about_ru,35) !!}</td>
                <td>{!! \Illuminate\Support\Str::words($home->about_hy,35) !!}</td>
                <td><a href="{{ route('home.edit', $home->id) }}"><button class="action-edit"><i class="fas fa-edit"></i></button></a></td>
{{--                <td><button class="action-delete" data-toggle="modal" data-target="#exampleModalLong-{{$home->id}}"><i class="fas fa-trash-alt"></i></button></td>--}}
                <td><a href=" {{ route('home.show', $home->id) }}"><i class="far fa-eye"></i></a></td>
                    <td>
                        <div class="modal fade" id="exampleModalLong-{{$home->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong-{{$home->id}}" aria-hidden="false">
                            <div class="modal-dialog" role="document">
                                <form action="{{ route('home.destroy', $home->id) }}" method="POST">
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

