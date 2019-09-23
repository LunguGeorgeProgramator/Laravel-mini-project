@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <form method="POST" action="{{ route('posts.update', $post->id) }}">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Post title.</label>
                            <input type="title" class="form-control" name="title" id="FormControlInput" value="{{ $post->title }}" placeholder="Post title" />
                            @error('title')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="FormControlTextarea">Post description.</label>
                            <textarea class="form-control" name="description" id="FormControlTextarea" rows="3">{{ $post->description }}</textarea>
                            @error('description')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    <form method="POST" action="{{ route('posts.destroy', $post->id) }}" class="float-right ml-2">
                        {{-- method_field('DELETE') --}}
                        @method('DELETE')
                        {{-- csrf_field() --}}
                        @csrf
                        <button type="submit" class="btn btn-primary">Del</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection