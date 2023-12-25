@extends('admin.layout.app')

@section('pageTitle', 'Edit Team Member')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">Edit Team Member</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('team-members.index') }}">Team Members</a></li>
                                <li class="breadcrumb-item active">Edit Team Member</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Edit Team Member</h5>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('team-members.update', $teamMember->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="profile_image">Team Member Image</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            @if($teamMember->profile_image)
                                                <img src="{{ asset($teamMember->profile_image) }}" width="100" height="100" alt="Profile Image" class="img-thumbnail">
                                            @else
                                                No Image
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <input type="file" name="profile_image" id="profile_image" class="form-control-file">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $teamMember->name) }}">
                                </div>

                                <div class="form-group">
                                    <label for="position">Position</label>
                                    <input type="text" name="position" id="position" class="form-control" value="{{ old('position', $teamMember->position) }}">
                                </div>

                                <div class="form-group">
                                    <label for="facebook_link">Facebook Link</label>
                                    <input type="text" name="facebook_link" id="facebook_link" class="form-control" value="{{ old('facebook_link', $teamMember->facebook_link) }}">
                                </div>

                                <div class="form-group">
                                    <label for="twitter_link">Twitter Link</label>
                                    <input type="text" name="twitter_link" id="twitter_link" class="form-control" value="{{ old('twitter_link', $teamMember->twitter_link) }}">
                                </div>

                                <div class="form-group">
                                    <label for="serial_number">Serial Number</label>
                                    <input type="text" name="serial_number" id="serial_number" class="form-control" value="{{ old('serial_number', $teamMember->serial_number) }}">
                                </div>

                                <button type="submit" class="btn btn-primary mt-2">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
