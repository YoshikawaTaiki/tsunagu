<?php $parser = new \App\Services\PostParser(); ?>
@extends('app')

@section('content')



    <div class="container home">
        <div class="col-xs-4">
            <div class="side-container">
                <div class="top">
                    <div class="row">
                        <a href="/{{ Auth::user()->name }}">
                            <img class="home-profile" src="{{ asset(Auth::user()->profileImage('large')) }}"/>
                        </a>
                    </div>
                    <div class="row bottom home-name">
                        <a href="/{{ Auth::user()->name }}">
                            <span class="font-black">{{ Auth::user()->display_name }}</span>
                            <span class="medium">{{ '@' . Auth::user()->name }}</span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <a href="{{ Auth::user()->name }}">
                        <span class="caps small">Posts</span>
                        <p class="no-top">
                            <span class="big-link post-count">{{ $postCount }}</span>
                        </p>
                    </a>
                </div>
                <div class="row">
                    <a href="{{ Auth::user()->name }}/following">
                        <span class="caps small">Following</span>
                        <p class="no-top">
                            <span class="big-link">{{ count(Auth::user()->following) }}</span>
                        </p>
                    </a>
                </div>
                <div class="row">
                    <a href="{{ Auth::user()->name }}/followers">
                        <span class="caps small">Followers</span>
                        <p class="no-top">
                            <span class="big-link">{{ count(Auth::user()->followers) }}</span>
                        </p>
                    </a>
                </div>
            </div>
            <div class="trending">
                <p><span class="big font-black">Trending</span></p>
                @foreach ($trending as $key => $value)
                    <p>#<a href="hashtag/{{ $key }}">{{ $key }}</a></p>
                @endforeach
            </div>
        </div>

        <div class="col-xs-8">

            <div class="posts">
                <div class="post-create">
                    <div>
                        <div class="post-editable" data-ph="What's on you mind?" contenteditable="true"></div>
                        <div>
                            <span class="create-post-count-down">140</span>
                            <button type="button" class="btn btn-primary submit-post"><i class="fa fa-pencil"></i> Post</button>
                        </div>
                    </div>
                </div>

                @include('postlist')
            </div>

        </div>
    </div>
@endsection
