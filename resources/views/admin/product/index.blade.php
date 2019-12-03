@extends('layouts.admin')

@section('content')
    <h1 class="display-4">Products</h1>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.products.create') }}" class="btn btn-primary float-right">New Product</a>
        </div>
    </div>
    <div class="clearfix"></div>
    <table class="table table-hover table-striped mt-3">
        <thead>
        <tr>
            <th>Cod.</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->category->name }}</td>
                <td>{{ number_format($product->price, 2) }}</td>
                <td>
                    <a title="View Product" href="{{ route('admin.products.show', $product)  }}" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i></a>
                    <a title="Edit Product" href="{{ route('admin.products.edit', $product)  }}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                    <a title="Delete Product" href="{{ route('admin.products.destroy', $product)  }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
