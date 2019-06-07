@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('post.update', $post) }}" method="post" class="form">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <input type="text" name="title" placeholder="title" class="form-control" value="{{ $post->title }}">
                </div>
                <div class="col-md-12">
                    <textarea name="content" placeholder="content" class="form-control">{{ $post->content }}</textarea>
                </div>
                <input type="submit" class="btn btn-default" value="Sauvegarder" />
            </div>
        </form>
    </div>
@endsection