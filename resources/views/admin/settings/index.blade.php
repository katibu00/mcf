@extends('admin.layout.app')

@section('pageTitle', 'Settings')

@section('content')
<div class="main-content">
    <div class="page-content">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Settings</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Settings</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title">General Settings</h5>
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
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form id="settingsForm" action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="logo" class="form-label">Logo</label>
                                <div class="mb-2">
                                    @if ($settings && $settings->logo)
                                        <img src="{{ asset($settings->logo) }}" alt="Current Logo"
                                            class="img-fluid" id="currentLogo" style="max-height: 100px">
                                    @else
                                        <img src="{{ asset('no-image.jpeg') }}" alt="Default Logo"
                                            class="img-fluid" id="currentLogo" style="max-height: 100px">
                                    @endif
                                </div>
                                <input type="file" class="form-control" id="logo" name="logo"
                                    onchange="readURL(this);">
                                <!-- You can handle file upload accordingly in the backend -->
                            </div>
                            <div class="mb-3">
                                <label for="phoneNumber" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phoneNumber" name="phone_number"
                                    value="{{ $settings->phone_number ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $settings->email ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="facebookLink" class="form-label">Facebook Link</label>
                                <input type="text" class="form-control" id="facebookLink" name="facebook_link"
                                    value="{{ $settings->facebook_link ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="twitterLink" class="form-label">Twitter Link</label>
                                <input type="text" class="form-control" id="twitterLink" name="twitter_link"
                                    value="{{ $settings->twitter_link ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="instagramLink" class="form-label">Instagram Link</label>
                                <input type="text" class="form-control" id="instagramLink" name="instagram_link"
                                    value="{{ $settings->instagram_link ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" name="address"
                                    rows="3">{{ $settings->address ?? '' }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection

@section('js')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#currentLogo').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
