@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h2>Add Product in category {{ $category->name }}. </h2>
                {{ Form::open(['url' => action('ProductsController@store'), 'files' => true,'enctype' => 'multipart/form-data']) }}
                    @include('products.forms.form')
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
