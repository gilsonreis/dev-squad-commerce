@extends("layouts.admin")
@section('title', 'Edit Product - ' . $product->title . ' - ')

@section("content")
    <h1 class="display-4">Edit Product - <small>{{ $product->title }}</small></h1>
    <hr>
    @include("admin.partials._validations_messages")
    <div class="row">
        <div class="col">
            {!! Form::model($product, ['route' => ['admin.products.update', $product], 'method' => 'put', 'files' => true]) !!}
                @include("admin.product._form")
            {!! Form::close() !!}
        </div>
    </div>
@endsection
