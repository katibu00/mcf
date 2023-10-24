

@extends('frontend.layouts.app')
@section('pageTitle', 'Projects')
@section('content')

<section class="gap no-bottom mb-5">
    <div class="container">
      <div class="heading">
        <h2>Our Recent Work</h2>
      </div>
      <div class="row">
        @foreach ($projects as $project)
        <div class="col-xl-4 col-md-6 ">
          <div class="news-article-one">
            <img alt="news article img" src="{{ $project->featured_image }}" width="410" height="280">
            <a href="{{ route('projects.show', ['slug' => $project->slug]) }}"><h3>{{ $project->title }}</h3></a>
          </div>
          <p>{!! Illuminate\Support\Str::limit($project->body, 100, '...') !!}</p>
          <div class="cause-btn">
              <a class="btn" href="{{ route('projects.show', ['slug' => $project->slug]) }}">Read More</a>
          </div>
        </div>
      @endforeach
      </div>
    </div>
  </section>
    @endsection