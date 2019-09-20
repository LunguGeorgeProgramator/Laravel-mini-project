@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h2>Add Product in category {{ $category->name }}. </h2>
                {{ Form::model($product, ['route' => ['products.update'], 'files' => true,'enctype' => 'multipart/form-data']) }}
                    @method('PUT')
                    @include('products.forms.form')
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
