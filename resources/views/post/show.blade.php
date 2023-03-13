@extends('layouts.user')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">{{ $post->title }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Our Blog</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid mt-0 mb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-8 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <article id="post-1205"
                            class="post-content post-single post-1205 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-funds tag-insurance">
                            <div class="entry-thumbnail post-media post-image">
                                <img width="750" height="465"
                                    src="{{ asset('assets/posts/'.$post->image) }}"
                                    class="attachment-post-thumbnails size-post-thumbnails wp-post-image"
                                    alt="">
                            </div>
                            <div class="post-body clearfix">

                                <header class="entry-header clearfix">
                                    <h2 class="entry-title">{{ $post->title }}</h2>
                                </header>

                                <div class="entry-content">
                                    {!! $post->description !!}
                                </div>
                                
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-md-4 pt-lg-5">
                    <div class="row g-5 p-5 mt-lg-4">
                        <div id="recent-posts-2" class="widget widget_recent_entries">
                            <h3 class="widget-title">Recent Post</h3>
                            <ul>
                                @foreach ($blog as $item)
                                    <li>
                                        <a href="{{ route('single', $item) }}">{{ $item->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div id="categories-2" class="widget widget_categories">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                @foreach ($topics as $item)
                                    <li class="cat-item cat-item-8"><a href="#">{{ $item->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
