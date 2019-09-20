@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
                <div class="panel panel-default">
                    <h1 class="my-4">Posts Page,
                        <small>see all interesting posts.</small>
                        @if($logged == true)
                            <a title="create product" href="{{ url('/posts/create') }}" class="btn btn-primary float-right">Create</a>
                        @endif
                    </h1>
                    <div class="list-group mb-2">
                    @foreach ($posts as $post)
                        <div class="card mb-4">
                            <div class="card-body">
                                <h2 class="card-title">{{ $post->title }}</h2>
                                <p class="card-text" >{{ $post->description }}</p>
                                <a href="{{ url('/posts/'.$post->id) }}" class="btn btn-primary">Read More →</a>
                                @if($logged == true)
                                    <div class="mb-1 col-md-4 float-right removePaddingRight" >
                                        <a title="update product" href="{{ url('/posts/'.$post->id.'/edit') }}" class="btn btn-primary">Edit</a>
                                    </div> 
                                @endif
                            </div>
                            <div class="card-footer text-muted">
                                Posted on {{ $post->created_at }} by
                                <a href="{{ url('/profile/'.$post->user_id) }}">{{ $post->user->name }}</a>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection