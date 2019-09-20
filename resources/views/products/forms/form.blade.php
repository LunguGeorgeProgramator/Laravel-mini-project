@php
    if(!isset($category) && !isset($product)):
        $category = collect();
        $product = collect();
    endif
@endphp
{{-- *Note this is a comment (._.): o verisune si mai scurta de short if - $category->cat_id ?? ''- in loc de -- isset($product->prod_id) ? $product->prod_id : '' -- note merge doar in php 7 nu este garamtat pt php mai vechi ca 5 --}}
{{ Form::bsHidden('category_id', $category->cat_id ?? '', []) }} 
{{ Form::bsHidden('prod_id', isset($product->prod_id) ? $product->prod_id : '', []) }}
{{ Form::bsText('name', 'Name', old('name') ?? (isset($product->name) ? $product->name : ''), ['required' => true, 'class' => 'form-control', 'placeholder' => 'Name']) }}
{{ Form::bsTextarea('description', 'Description', old('description') ?? (isset($product->description) ? $product->description : ''), ['class' => 'form-control', 'placeholder' => 'Description']) }}
{{ Form::bsImage('image', 'Photo', old('image') ?? (isset($product->image) ? $product->image : ''), ['class' => 'form-control', 'placeholder' => 'image']) }}
{{ Form::bsButton('btnSave', 'Save', ['type' => 'submit', 'class' => "btn btn-primary"]) }}