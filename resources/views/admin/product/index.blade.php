@extends('layouts.admin')

@section('content')
    <h1 class="display-4">Products</h1>
    <hr>
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary float-right">New Product</a>
    <table class="table table-hover table-striped">
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
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <a title="View Product" href="{{ route('admin.products.show', 1)  }}" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i></a>
                <a title="Edit Product" href="{{ route('admin.products.edit', 1)  }}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                <a title="Delete Product" href="{{ route('admin.products.destroy', 1)  }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
