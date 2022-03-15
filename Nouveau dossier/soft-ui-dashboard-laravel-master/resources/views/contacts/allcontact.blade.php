




@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Leaves List</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center justify-content-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Full Name</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Photo</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Position</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">E-mail</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($allContacts as $contacts )

                                    <td>{{ $contacts->full_name }}</td>
                                    <td hidden class="fileupload">{{ $rooms->fileupload }}</td>

                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm mr-2">
                                                <img class="avatar-img rounded-circle" src="{{ URL::to('/assets/upload/'.$contacts->fileupload) }}" alt="{{ $contacts->fileupload }}">
                                            </a>
                                            <a href="profile.html">{{ $contacts->name }}</a>
                                        </h2>
                                    </td>
                                    <td>

                                    <td>{{ $contacts->position }}</td>
                                    <td>{{ $contacts->email }}</td>




                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v ellipse_color"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ url('contact/edit/'.$contacts->id) }}">
                                                    <i class="fas fa-pencil-alt m-r-5"></i> Edit
                                                </a>
                                                <a class="dropdown-item delete_asset" href="#" data-toggle="modal" data-target="#delete_asset">
                                                    <i class="fas fa-trash-alt m-r-5"></i> Delete
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- delete model --}}
    <div id="delete_asset" class="modal fade delete-modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <form action="{{ route('contact/delete') }}" method="POST">
                        @csrf
                        <img src="{{ URL::to('assets/img/sent.png') }}" alt="" width="50" height="46">
                        <h3 class="delete_class">Are you sure want to delete this Asset?</h3>
                        <div class="m-t-20">
                            <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                            <input class="form-control" type="hidden" id="e_id" name="id" value="">
                            <input class="form-control" type="hidden" id="e_fileupload" name="fileupload" value="">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end delete model --}}
    </div>
@section('script')
    {{-- delete model --}}
    <script>
        $(document).on('click','.delete_asset',function()
        {
            var _this = $(this).parents('tr');
            $('#e_id').val(_this.find('.id').text());
            $('#e_fileupload').val(_this.find('.fileupload').text());
        });
    </script>

@endsection
