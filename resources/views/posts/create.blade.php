@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('post.store') }}" method="post" class="form">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <input type="text" name="title" placeholder="title" class="form-control">
                </div>
                <div class="col-md-12">
                    <textarea name="content" placeholder="content" class="form-control"></textarea>
                </div>
                <input type="submit" class="btn btn-default" value="Sauvegarder" />
            </div>
        </form>
    </div>
@endsection