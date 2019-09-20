@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                
                    <script type="module">
                        
                    </script>
                    <!-- <div class="panel-heading">Categories. </div> -->
                    <div class="card mb-4">
                        <div class="card-header">
                            Product: {{ $product->name }}.
                        </div>
                        @if($product->image) 
                            <img src="{{ asset("storage/app/public/links/products/$product->image") }}" class="img-fluid" alt="Responsive image">
                        @endif
                        <div class="card-body">
                            <div class="clearfix">
                                <p class="float-left text-wrap col-md-12 "> {{ $product->description }}. </p> 
                            </div>
                        </div>
                    </div>
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
