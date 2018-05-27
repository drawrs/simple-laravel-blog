@extends('layout.blog')
@section('title', $post->title)
@section('content')
    <h2>{{ $post->title }}</h2>
    <small>Published at: {{ $post->created_at->diffForHumans() }}</small><br>
    <small>Category: {{ $post->category->name }}</small>
    <p>{!! $post->content !!}</p>
@endsection