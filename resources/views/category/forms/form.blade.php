@php
    if(!isset($category)):
        $category = collect();
    endif
@endphp
{{ Form::bsHidden('cat_id', isset($category->cat_id) ? $category->cat_id : '', []) }}
{{ Form::bsText('name', 'Name', old('name') ?? (isset($category->name) ? $category->name : ''), ['required' => true, 'class' => 'form-control', 'placeholder' => 'Name']) }}
{{ Form::bsTextarea('description', 'Description', old('description') ?? (isset($category->description) ? $category->description : ''), ['class' => 'form-control', 'placeholder' => 'description']) }}
{{ Form::bsImage('image', 'Photo', old('image') ?? (isset($category->image) ? $category->image : ''), ['class' => 'form-control', 'placeholder' => 'image']) }}
{{ Form::bsButton('btnSave', 'Save', ['type' => 'submit', 'class' => "btn btn-primary"]) }}