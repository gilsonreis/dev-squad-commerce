@extends("layouts.admin")
@section('title', 'Show Product - ' . $product->title . ' - ')

@section("content")
    <h1 class="display-4">Show Product - <small>{{ $product->title }}</small></h1>
    <hr>

    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <tr>
                    <th colspan="2">Cod.</th>
                    <td colspan="2">{{ $product->id }}</td>
                </tr>
                <tr>
                    <th colspan="2">Title</th>
                    <td colspan="2">{{ $product->title }}</td>
                </tr>
                <tr>
                    <th colspan="2">Description</th>
                    <td colspan="2">{{ nl2br($product->description) }}</td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>{{ $product->category->name }}</td>
                    <th class="text-right">Price</th>
                    <td>{{ number_format($product->price, 2) }}</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td colspan="3">
                        <div class="col">
                            <img class="img-responsive img-thumbnail" width="300" src="{{url(isset($product->photo) ? "/uploads/products/" .$product->photo : "/images/no-image.png")}}" alt="">
                        </div>
                    </td>
                </tr>
            </table>
            <hr>
            <a href="{{ route("admin.products.index") }}" class="btn btn-outline-primary float-left mr-1">Back</a>
            <a href="{{ route("admin.products.edit", $product) }}" class="btn btn-success float-left mr-1">Edit</a>
            {!! Form::open(['route' => ['admin.products.destroy', $product], 'method' => 'delete', 'onsubmit' => "javascript: return confirm('Are you sure?');", 'class' => 'float-left']) !!}
                <button type="submit" class="btn btn-danger">Delete</button>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
