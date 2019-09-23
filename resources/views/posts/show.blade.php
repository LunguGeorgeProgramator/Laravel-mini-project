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
                @if($logged == true)
                    <div class="mb-1 col-md-4 float-right removePaddingRight" >
                        <a title="update product" href="{{ url('/posts/'.$post->id.'/edit') }}" class="">Edit</a>
                    </div> 
                @endif
            </div>
        </div>
    </div>
</div>
 
@endsection