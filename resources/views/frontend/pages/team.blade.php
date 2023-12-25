@extends('frontend.layouts.app')
@section('pageTitle','Our Team Members')
@section('content')
<section class="page-title-area" style="background-image:url('/frontend/banner1.jpeg')">
    <div class="container">
      <div class="title-area-data">
        <h2>Our Team Members</h2>
      </div>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ route('homepage') }}">Home</a>
        </li>
          <li class="breadcrumb-item active" aria-current="page">Our Team</li>
          <li class="breadcrumb-item active" aria-current="page">Our Team</li>
      </ol>
    </div>
  </section>


  <section class="want-to-Join gap">
    <div class="container">
      <div class="row pb-80">
        <div class="col-lg-6">
          <div class="heading two">
            <h2 class="p-0 w-90">Team Members</h2>
            <p>Our Proud Team Members</p>
          </div>
        </div>

      </div>
      <div class="row">
        @foreach ($teamMembers as $team)
        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="team-join">
            <img alt="img" src="{{ asset($team->profile_image) }}">
            <div class="team-join-data">
              <a href="#"><h5>{{ $team->name }}</h5></a>
              <span>{{ $team->position }}</span>
              <div class="team-hover">
                <h6><i class="fa-solid fa-phone pe-3"></i> <a href="collto:+12345678901">{{ $team->phone }}</a></h6>
                <ul class="social-media-icon">
                    <li>
                      <a href="#">
                        <i class="fab fa-facebook-f icon"></i>    </a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-twitter icon"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-google-plus-g icon"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>


@endsection