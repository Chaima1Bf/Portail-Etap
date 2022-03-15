@section('content')
<style>
    .avatar {
        background-color: #aaa;
        border-radius: 50%;
        color: #fff;
        display: inline-block;
        font-weight: 500;
        height: 38px;
        line-height: 38px;
        margin: -38px 10px 0 0;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        vertical-align: middle;
        width: 38px;
        position: relative;
        white-space: nowrap;
        z-index: 2;
    }
</style>
{{-- message --}}
{!! Toastr::message() !!}
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title mt-5">Edit Contact</h3> 
                </div>
            </div>
        </div>
        <form action="{{ route('contact/update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="row formtype">
                        <input class="form-control" type="hidden" name="id" value="{{ $contactEdit->id }}" readonly>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input class="form-control" type="text" name="full_name" value="{{ $contactEdit->full_name }}" readonly>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Position</label>
                                <input class="form-control" type="text" name="position" value="{{ $contactEdit->position }}" readonly>
                            </div>
                        </div>

                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="rent" value="{{$contactEdit->email}}">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label>File Upload</label>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="customFile" name="fileupload">
                                    <input type="hidden" class="form-control" name="hidden_fileupload" value="{{ $contactEdit->fileupload }}">
                                    <a href="profile.html" class="avatar avatar-sm mr-2">
                                        <img class="avatar-img rounded-circle" src="{{ URL::to('/assets/upload/'.$contactEdit->fileupload) }}" alt="{{ $contactEdit->fileupload }}">
                                    </a>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary buttonedit">Update</button>
        </form>
    </div>
</div>
@section('script')
<script>
    $(function() {
        $('#datetimepicker3').datetimepicker({
            format: 'LT'
        });
    });
    </script>
@endsection
@endsection