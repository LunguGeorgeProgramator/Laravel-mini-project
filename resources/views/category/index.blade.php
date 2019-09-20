@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11 col-md-offset-2">
                <div class="panel panel-default">
                
                    <script type="module">
                        
                    </script>
                    <!-- <div class="panel-heading">Categories. </div> -->
                    <div class="clearfix">

                        <h2 class="float-left"> Categories. </h2> 
                        <a href="{{ url('/category/create') }}" class="btn btn-primary float-right" title="add new category" aria-pressed="true">Add</a>
                    </div>
                    <div id="chart1" class="mt-4 mb-4"></div>
                        {!! $chart !!}
                    <div class="list-group mb-2 border-bottom">
                    @foreach ($categories as $category)
                        <div class="card textColor background removeAll removeBorderBottom  my-container">
                            <img src="{{ asset("storage/app/public/links/categories/$category->image") }}">    
                            <div class="card-header">       
                                <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">{{ $category->name }}</h5>
                                        <small >Prodcts count: {{ $category->count_products }}, last updated: {{ $category->updated_at }}</small>
                                    </div>
                            </div>
                            <div class="card-body">
                                <div class="clearfix">
                                <p class="mb-1 text-wrap" onload="categoryObject.setHeight(this, 'removePaddingRight{{ $category->cat_id }}')">{{ $category->description }}</p>
                                <div class="mb-1 col-md-4 float-right removePaddingRight" >
                                    <a title="View category products" href="{{ url('/category/'.$category->cat_id.'/products') }}" class="btn btn-primary">View</a>
                                    <a title="update category" href="{{ url('/category/'.$category->cat_id.'/edit') }}" class="btn btn-primary">Edit</a>
                                    <a title="remove category" href="{{ url('/category/'.$category->cat_id.'/remove') }}" class="btn btn-primary">Del</a>
                                </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    {{ $categories->links() }}
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
