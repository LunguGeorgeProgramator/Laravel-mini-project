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
                <hr style="clear: both;">
                <h1 class="mt-4">Comments:</h1>
                @if($logged != null)
                    <form method="post" action="{{ route('comments.store') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="message" class="form-control" />
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                            @error('message')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-warning" value="Add Comment" />
                        </div>
                    </form>
                @else
                    <p>Please loggin to leave a comment or a reply.</p>
                @endif
                <hr style="clear: both;">
                @include('comments.reply', ['comments' => $comments, 'post_id' => $post->id, 'logged' => $logged])

            </div>
        </div>
        
    </div>
</div>
@endsection