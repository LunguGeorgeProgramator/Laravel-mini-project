@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h2>Add Category. </h2>
                {{ Form::open(['url' => action('CategoryController@store'), 'files' => true,'enctype' => 'multipart/form-data']) }}
                    @include('category.forms.form')
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
