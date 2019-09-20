@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11 col-md-offset-2">
                <div class="panel panel-default">
                    <div id="chart1" class="mt-4 mb-4"></div>
                            {!! $chart !!}
                    <div class="card mb-4 textColor background my-container">
                        <img src="{{ asset("storage/app/public/links/categories/$category->image") }}">
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
                    <div class="row removeAll border-left border-bottom mb-4">
                    @foreach ($products as $product)
                        <div class="col-md-4 nopadding removeAll border-right border-top">
                            <h5 class="card-header">{{ $product->name }}</h5>
                            @if($product->image)  
                                <img src="{{ asset("storage/app/public/links/products/$product->image") }}" alt="..." class="img-thumbnail removeAll">
                            @endif
                            <div class="card-body removePaddingBottom">
                                <div class="d-flex w-100 justify-content-between">
                                    <p >Last updated: {{ $product->updated_at }}</p>
                                </div>
                            </div>
                            <div class="card-body removePaddingBottom" >
                                <p class="mb-1 text-wrap" style="height: 90px;" onload="categoryObject.setHeight(this, 'removePaddingRight{{ $product->prod_id }}')">{{ $product->description }}</p>
                            </div>
                            <div class="card-body">
                                <div class="mb-1 removePaddingCenter" >
                                    <a title="view product" href="{{ url('/products/'.$product->prod_id) }}" class="btn btn-primary">View</a>
                                    <a title="update product" href="{{ url('/category/'.$category->cat_id.'/products/'.$product->prod_id.'/edit') }}" class="btn btn-primary">Edit</a>
                                    <a title="remove product" href="{{ url('/category/products/'.$product->prod_id.'/remove') }}" class="btn btn-primary">Del</a>
                                </div>
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
 
@endsection

<script type="module">
    import { categoryObject } from '{{ asset('public/js/exports.js') }}';
    // console.log(categoryObject); // call js content for this page
    @if ($errors->any())
        categoryObject.popErrorMessage('{{ implode('', $errors->all()) }}');
    @endif
</script>