@extends('admin.layout.app')

@section('pageTitle', 'Create Team Member')
@section('css')
    <style>
        .profile-image-preview {
            display: none;
            width: 200px;
            height: 200px;
            object-fit: cover;
        }

        .profile-image-placeholder {
            width: 200px;
            height: 200px;
            background-color: #f1f1f1;
            text-align: center;
            line-height: 100px;
            font-size: 20px;
            color: #999;
        }
    </style>
@endsection

@section('content')

<div class="main-content">
    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Create Team Member</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('team-members.index') }}">Team Members</a></li>
                            <li class="breadcrumb-item active">Create New Team Member</li>
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
                        <h5 class="card-title">Create a New Team Member</h5>
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
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('team-members.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="profile_image">Member Image</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img id="profile_image_preview" class="profile-image-preview" src="#" alt="Profile Image Preview">
                                        <div id="profile_image_placeholder" class="profile-image-placeholder">No Image Selected</div>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="file" name="profile_image" id="profile_image" class="form-control-file" onchange="previewProfileImage(event)">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="position">Position</label>
                                <input type="text" name="position" id="position" class="form-control" value="{{ old('position') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="facebook_link">Facebook Link</label>
                                <input type="text" name="facebook_link" id="facebook_link" class="form-control" value="{{ old('facebook_link') }}">
                            </div>

                            <div class="form-group">
                                <label for="twitter_link">Twitter Link</label>
                                <input type="text" name="twitter_link" id="twitter_link" class="form-control" value="{{ old('twitter_link') }}">
                            </div>

                            <div class="form-group">
                                <label for="serial_number">Serial Number</label>
                                <input type="number" name="serial_number" id="serial_number" class="form-control" value="{{ old('serial_number') }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary mt-2">Create Team Member</button>
                        </form>

                    </div>
                </div>
            </div>
    </div>
</div>

@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        function previewProfileImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var preview = document.getElementById('profile_image_preview');
                var placeholder = document.getElementById('profile_image_placeholder');

                preview.src = reader.result;
                preview.style.display = 'block';
                placeholder.style.display = 'none';
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
