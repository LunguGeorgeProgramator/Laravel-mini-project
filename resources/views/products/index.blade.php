@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="card mb-4">
                        <div class="card-header">
                            Category: {{ $category->name }}.
                        </div>
                        <div class="card-body">
                            <div class="clearfix">
                                <p class="float-left text-wrap col-md-12 "> {{ $category->description }}. </p> 
                                <a href="{{ url('category/'.$category->cat_id.'/products/create') }}" class="btn btn-primary float-right" title="add new product" aria-pressed="true">Add product</a>
                            </div>
                        </div>
                    </div>
                    <div class="list-group mb-2">
                    @foreach ($products as $product)
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="card textColor background" style="background-image: url({{ asset("storage/app/public/links/products/$product->image") }});}">aa</div>
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ $product->name }}</h5>
                                <small >Last updated: {{ $product->updated_at }}</small>
                            </div>
                            <p class="mb-1 text-wrap col-md-8 float-left" onload="categoryObject.setHeight(this, 'removePaddingRight{{ $product->prod_id }}')">{{ $product->description }}</p>
                            <div class="mb-1 col-md-4 float-right removePaddingRight" >
                                <button title="view product" onclick="redirectRequest('{{ url('/products/'.$product->prod_id.'/edit') }}')" class="btn btn-primary">View</button>
                                <button title="update product" onclick="redirectRequest('{{ url('/category/'.$category->cat_id.'/products/'.$product->prod_id.'/edit') }}')" class="btn btn-primary">Edit</button>
                                <button title="remove product" onclick="redirectRequest('{{ url('/category/products/'.$product->prod_id.'/remove') }}')" class="btn btn-primary">Del</button>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

<script type="module">
    import { categoryObject } from '{{ asset('js/exports.js') }}';
    // console.log(categoryObject); // call js content for this page
    @if ($errors->any())
        categoryObject.popErrorMessage('{{ implode('', $errors->all()) }}');
    @endif
</script>

@endsection
