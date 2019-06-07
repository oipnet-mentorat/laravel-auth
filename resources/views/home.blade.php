@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul>
                    @foreach($posts as $post)
                        @can('show', $post)
                            <li>
                                <a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a>
                            </li>
                        @endcan
                    @endforeach
                    </ul>
                        <a href="{{ route('post.create') }}" class="btn btn-default">Creer un post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
