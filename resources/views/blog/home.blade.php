@extends('layout.blog')
@section('title', 'Home')
@section('content')
    @forelse($posts as $post)
        <h2>{{ $post->title }}</h2>
        <small>Published at: {{ $post->created_at->diffForHumans() }}</small><br>
        <small>Category: {{ $post->category->name }}</small>
        <p>{!! str_limit($post->content, 160) !!} <a href="{{ route('post.read', [$post->slug]) }}">[Read more]</a></p>
        <hr>
    @empty
        <div style="text-align: center;">
            <h3><i>No post's here..</i></h3>
            <br>
            <a href="/">< Back to Home</a>
        </div>

    @endforelse
@endsection