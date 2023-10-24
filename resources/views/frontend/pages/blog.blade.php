@extends('frontend.layouts.app')
@section('pageTitle', $blog->title)
@section('content')

<section class="page-title-area" style="background-image:url('/frontend/banner1.jpeg')">
    <div class="container">
      <div class="title-area-data">
        <h2>Blog Details</h2>
        <p>{{ $blog->title }}</p>
      </div>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ route('homepage') }}">Home</a>
        </li>
          <li class="breadcrumb-item active" aria-current="page">News</li>
          <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
      </ol>
    </div>
  </section>
  <section class="gap">
    <div class="container">
      <div class="row">
        <div class="col-xl-8">
          <div class="blog-details-text hoverimg">
            <figure>
              <img alt="img" class="w-100" src="{{ '/'.$blog->featured_image }}" width="856" height="423">
            </figure>
            <div class="article">
              <h4>{{ $blog->created_at->format('d') }}<span>{{ $blog->created_at->format('d, Y') }}</span></h4>
            </div>
            <h2>{{ $blog->title }}</h2>
            <div class="meta-info">
              <ul>
                <li><img alt="img" src="https://via.placeholder.com/60x60"><p>Posted by Admin</p></li>
                {{-- <li><i class="fa-solid fa-eye"></i><h6>50K</h6>
                <li><i class="fa-solid fa-message"></i><h6>50K</h6> --}}
              </ul>
            </div>
            <p class="pt-4">  {!! $blog->body !!}</p>

              <div class="post-tags">
                <h6>Post Tags:</h6>
                <ul>
                  <li><a href="#">Bauchi</a></li>
                  <li><a href="#">Foundation</a></li>
                  <li><a href="#">Charity</a></li>
                </ul>
              </div>
              

              <div class="comment">
                <h3>Leave a Comment</h3>
                <form class="leave-comment">
                  <div class="row">
                    <div class="col-lg-6">
                      <input type="text" name="name" placeholder="Full Name">
                    </div>
                    <div class="col-lg-6">
                      <input type="text" name="Email" placeholder="Email Id">
                    </div>
                  </div>
                  <input type="text" name="Subject" placeholder="Subject">
                  <textarea placeholder="Your Message"></textarea>
                  <button class="btn">
                    <span>Post Comment</span>
                  </button>
                </form>
              </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="sidebar">
            <div class="posts recent-posts">
              <h3>Recent Posts</h3>
              <ul>
                @foreach ($recents as $recent) 
                <li>
                  <img alt="img" src="{{ '/'.$recent->featured_image }}" width="100" height="90">
                  <div>
                    <a href="{{ route('blogs.show', ['slug' => $recent->slug]) }}">{{ $blog->created_at->format('M d, Y') }}</a>
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