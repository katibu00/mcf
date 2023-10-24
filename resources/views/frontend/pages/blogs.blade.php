@extends('frontend.layouts.app')
@section('pageTitle', 'Blogs')
@section('content')


<section class="gap no-bottom mb-5">
    <div class="container">
      <div class="heading">
        <h2>News & Articles</h2>
      </div>
      <div class="row">
        @foreach ($blogs as $blog)
        <div class="col-xl-4 col-md-6 ">
          <div class="news-article-one">
            <img alt="news article img" src="{{ $blog->featured_image }}" width="410" height="280">
            <a href="{{ route('blogs.show', ['slug' => $blog->slug]) }}"><h6>{{ $blog->created_at->format('M d, Y') }}</h6></a>
            <div class="d-flex align-items-center pt-4"><span >By Admin </span><div class="mx-3 boder"></div><span>0 Comments</span></div>
            <a href="{{ route('blogs.show', ['slug' => $blog->slug]) }}"><h3>{{ $blog->title }}</h3></a>
          </div>
        </div>
      @endforeach
      </div>
    </div>
  </section>
@endsection