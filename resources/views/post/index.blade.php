@extends('layouts.user')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Our Blog</h1>
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
                        @forelse ($posts as $item)
                            <div class="post">
                                <div class="post-media post-image"><img width="750" height="465"
                                        src="{{ asset('assets/posts/' . $item->image) }}"
                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="">
                                </div>
                                <div class="post-body clearfix">
                                    <div class="post-content-right">
                                        <div class="entry-header">
                                            <div class="post-meta"><span class="meta-categories post-cat"> <i
                                                        class="icon icon-folder"></i> <a href="#"
                                                        rel="category tag">{{ $item->topic->name }}</a>
                                                </span></div>
                                            <h2 class="entry-title"><a
                                                    href="{{ route('single', $item) }}">{{ $item->title }}</a></h2>
                                            <div class="entry-content">
                                                {!! $item->short() !!}
                                            </div>
                                            <div class="post-footer text-right"><a href="{{ route('single', $item) }}"
                                                    class="btn btn-primary">Read More...</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h1>No Post</h1>
                        @endforelse
                    </div>
                </div>
                <div class="col-md-4 pt-lg-5">
                    <div class="row g-5 p-5 mt-lg-4">
                        <div id="search-2" class="widget widget_search">
                            <div class="search-widget input-group">
                                <form method="get" action="#" id="search">
                                    <input type="text" name="s" class="form-control" placeholder="Search.."
                                        value="">
                                </form>
                            </div>
                        </div>
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
