@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Post title.</label>
                            <input type="title" class="form-control" name="title" id="FormControlInput" value="" placeholder="Post title" />
                            @error('title')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="FormControlTextarea">Post description.</label>
                            <textarea class="form-control" name="description" id="FormControlTextarea" rows="3" placeholder="Post description."></textarea>
                            @error('description')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection