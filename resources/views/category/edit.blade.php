@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h2>Edit Category. </h2>
                <!-- similara cu ultima versiune dar mai lung scrisa -->
                <!-- {{ Form::model($category, ['route' => ['category.update', $category->cat_id]]) }} -->
                <!-- merge si asa fara cat id in link -->
                <!-- {{ Form::model($category, ['route' => ['category.update']]) }} --> 
                <!-- seteaza id cad_id in action link ex: http://georgeldev.ro/test_project/category/update?2 -->
                <!-- {{ Form::open(['url' => route('category.update', $category)]) }} -->
                {{ Form::model($category, ['route' => ['category.update'], 'files' => true,'enctype' => 'multipart/form-data']) }}
                    @include('category.forms.form')
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
