@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
                <h1 class="mt-4">{{ $post->title }}</h1>
                <p class="lead">
                    by
                    <a href="{{ url('/profile/'.$post->user_id) }}">{{ $post->user->name }}</a>
                </p>
                <hr>
                <p>Posted on {{ $post->created_at }}</p>
                <hr>
                <p class="lead">{{ $post->description }}</p>
            </div>
        </div>
    </div>
</div>
 
@endsection