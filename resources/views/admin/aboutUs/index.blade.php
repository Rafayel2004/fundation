@extends("admin.layouts.app")
@section("content")
    <div class="container-fluid show ps-5 pe-5">
      <div class="header d-flex justify-content-between mt-3">
          <h3>Teams Members</h3>
          <button class="btn btn-success"><a href="{{ route("about.create") }}" class="text-white">Add Member</a></button>
      </div>
        <div class="main mt-3">
            <div>
                <table class="table text-center">
                    <thead>
                        <tr class="bg-white">
                            <th>Image</th>
                            <th>Full Name En</th>
                            <th>Profession En</th>
                            <th>Full Name Ru</th>
                            <th>Profession Ru</th>
                            <th>Full Name Arm</th>
                            <th>Profession Arm</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($members as $member)
                        <tr class="admin-about-table">
                            <td class="p-1"><img src="http://foundation.loc/storage/image/{{$member->image}}" alt=""></td>
                            <td>{{$member->full_name_en}}</td>
                            <td>{{$member->profession_en}}</td>
                            <td>{{$member->full_name_ru}}</td>
                            <td>{{$member->profession_ru}}</td>
                            <td>{{$member->full_name_hy}}</td>
                            <td>{{$member->profession_hy}}</td>
                            <td><a href="{{ route('about.edit',$member->id) }}"><button class="action-edit show"><i class="fas fa-edit"></i></button></a></td>
                            <td><button class="action-delete show" data-toggle="modal" data-target="#exampleModalLong-{{$member->id}}"><i class="fas fa-trash-alt"></i></button></td>
                            <td>
                                <div class="modal fade" id="exampleModalLong-{{$member->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong-{{$member->id}}" aria-hidden="false">
                                    <div class="modal-dialog" role="document">
                                        <form action="{{ route('about.destroy', $member->id) }}" method="POST">
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
                {{ $members->links() }}
            </div>
        </div>
    </div>
@endsection
