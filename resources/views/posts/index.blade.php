@extends('layouts.app')

@section('content')

<script type="module">
    import { postsObject } from '{{ asset('public/js/exports.js') }}';
    var url = '{{ url('/posts/search') }}'; 
    const token = '@csrf';
    const method = 'GET';
    const data = {'query': ''};
    const baseUrl = "{{ url('/posts/') }}";
    postsObject.processPage(url, token, method, data, baseUrl); 
</script>

<!-- <div id="results_ajax"></div> -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" id="results_ajax">
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
        <div class='col-md-4'>
            <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
                <div class="input-group">
                <input type="text" class="form-control" id="SearchPost" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-primary" onclick="location.reload()" type="button">Clear!</button>
                </span>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection