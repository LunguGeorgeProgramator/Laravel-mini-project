@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11 col-md-offset-2">
            <div class="panel panel-default">
                {{-- Form::open(['route' => ['search'], 'method' => 'GET']) --}}
                {{-- <!-- 'url' => route('post.show', ['id' => $id]),'method' => 'PUT' --> --}}
                {{-- request()->input('query') --}}
                    {{-- @method('GET') --}}
                    {{-- @include('layouts.serchForm') --}}
                {{-- Form::close() --}}
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link {{ ($active == 'categories'? 'active' : '') }}" href="{{ route('search', 'query='.request()->input('query').'&type=categories') }}">Categories results</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ ($active == 'products'? 'active' : '') }}" href="{{ route('search', 'query='.request()->input('query').'&type=products') }}">Products results</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-11 col-md-offset-2">
            <div class="panel panel-default">
                <div class="list-group mb-2">
                @foreach ($results as $result)
                    <div class="textColor list-group-item list-group-item-action flex-column align-items-start background" style="background-image: url({{ asset("storage/app/public/links/$active/$result->image") }});}">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{ $result->name }}</h5>
                            <small >last updated: {{ $result->updated_at }}</small>
                        </div>
                        <div class="mb-1 col-md-4 float-right removePaddingRight" >
                            <a title="view product" href='{{ route($result->route_link, $result->id) }}' class="btn btn-primary">View</a>
                        </div>
                    </div>
                @endforeach
                </div>
                {{ $results->links() }}
            </div>
        </div>
    </div>
</div>
@endsection