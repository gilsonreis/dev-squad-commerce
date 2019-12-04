@extends("layouts.admin")
@section('title', 'Create a new product - ')

@section("content")
    <h1 class="display-4">Create a new product</h1>
    <hr>
    @include("admin.partials._messages")
    <div class="row">
        <div class="col">
            {!! Form::model($product, ['route' => 'admin.products.store', 'method' => 'post', 'files' => true]) !!}
                @include("admin.product._form")
            {!! Form::close() !!}
        </div>
    </div>
@endsection
