@extends("admin.layouts.app")
@section("content")
    <div class="container-fluid">
        <button class="btn btn-success m-2"><a href="{{ route("report.create")  }}" class="text-white">Add New Report</a></button>
        <table class="table">
            <thead class="text-center">
            <tr>
                <th>Title (Hy)</th>
                <th>Title (En)</th>
                <th>Title (Ru)</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody class="text-center">
                @foreach($reports as $report)
                <tr>
                    <td>{!! $report->text_hy !!}</td>
                    <td>{!! $report->text_en !!}</td>
                    <td>{!! $report->text_ru !!}</td>
                    <td>
                        <button class="action-delete btn-danger btn" data-toggle="modal" data-target="#exampleModalLong-{{$report->id}}"><i class="fas fa-trash-alt"></i></button>
                        <button class="btn-info btn"><a href="{{ route("report.edit" , $report->id) }}" class="text-white"><i class="fas fa-edit"></i></a></button>
                        <div class="modal fade" id="exampleModalLong-{{$report->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong-{{$report->id}}" aria-hidden="false">
                            <div class="modal-dialog" role="document">
                                <form action="{{ route('report.destroy',$report->id) }}" method="POST">
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
                                            Are you sure you want to delete this report
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
