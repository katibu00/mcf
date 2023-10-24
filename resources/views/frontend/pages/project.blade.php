@extends('frontend.layouts.app')
@section('pageTitle', $project->title)
@section('content')

<section class="page-title-area" style="background-image:url('/frontend/banner1.jpeg')">
    <div class="container">
      <div class="title-area-data">
        <h2>{{ $project->title }}</h2>
        {{-- <p>{{ $project->title }}</p> --}}
      </div>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ route('homepage') }}">Home</a>
        </li>
          <li class="breadcrumb-item active" aria-current="page">Our Works</li>
          <li class="breadcrumb-item active" aria-current="page">{{ $project->title }}</li>
      </ol>
    </div>
  </section>
  <section class="gap">
    <div class="container">
      <div class="row">
        <div class="col-xl-8">
          <div class="blog-details-text hoverimg">
            <figure>
              <img alt="img" class="w-100" src="{{ '/'.$project->featured_image }}" width="856" height="423">
            </figure>

            <h2>{{ $project->title }}</h2>
           
            <p class="pt-4">  {!! $project->body !!}</p>

            
          </div>
        </div>
        <div class="col-xl-4">
          <div class="sidebar">
            <div class="posts recent-posts">
              <h3>Recent Works</h3>
              <ul>
                @foreach ($recents as $recent) 
                <li>
                  <img alt="img" src="{{ '/'.$recent->featured_image }}" width="100" height="90">
                  <div>
                    <h6><a href="{{ route('blogs.show', ['slug' => $recent->slug]) }}">{{ $recent->title }}</a></h6>
                  </div>
                </li>
               @endforeach
              </ul>
            </div>
           
           
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection