@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
    </div>
    <a href="{{ route('post.like', $post) }}">Like</a>
    <a href="{{ route('post.edit', $post) }}">Modifier</a>
@endsection