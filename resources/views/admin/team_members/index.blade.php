@extends('admin.layout.app')

@section('pageTitle', 'Team Members')

@section('content')



<div class="main-content">

    <div class="page-content">

          <!-- start page title -->
      <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Team Members</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Team Member</li>
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
                            <h5 class="card-title">Team Members</h5>
                            <a href="{{ route('team-members.create') }}" class="btn btn-primary">Create Team Member</a>
                        </div>
                        
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if($teamMembers->isEmpty()) <!-- Check if events are empty -->
                                <p>No Team Member found.</p>
                            @else
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Image</th>
                                            <th>Facebook Link</th>
                                            <th>Twitter Link</th>
                                            <th>Serial Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($teamMembers as $key => $teamMember)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $teamMember->name }}</td>
                                                <td>{{ $teamMember->position }}</td>
                                                <td>
                                                    @if($teamMember->profile_image)
                                                        <img src="{{ asset($teamMember->profile_image) }}" width="60" height="50" alt="Profile Image" class="img-thumbnail">
                                                    @else
                                                        No Image
                                                    @endif
                                                </td>
                                                <td>{{ $teamMember->facebook_link ?? 'N/A' }}</td>
                                                <td>{{ $teamMember->twitter_link ?? 'N/A' }}</td>
                                                <td>{{ $teamMember->serial_number }}</td>
                                                <td>
                                                    <a href="{{ route('team-members.edit', $teamMember->id) }}" class="btn btn-secondary">Edit</a>
                                                    <form action="{{ route('team-members.destroy', $teamMember->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Team Member?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
@endsection

