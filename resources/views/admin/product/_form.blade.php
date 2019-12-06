<div class="row">
    <div class="form-group col">
        {!! Form::label('title', 'Title', ['class' => 'control-label']) !!}
        {!! Form::text('title', old('title'), ['class' => 'form-control', 'maxlength' => 64]) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col">
        {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
        {!! Form::textarea('description', old('description'), ['class' => 'form-control', 'rows' => '10']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col">
        {!! Form::label('category_id', 'Category', ['class' => 'control-label']) !!}
        {!! Form::select("category_id", $categories, old('category_id'), ['placeholder' => 'Pick a category ...', 'class' => 'form-control']) !!}
    </div>
    <div class="form-group col">
        {!! Form::label('price', 'Price', ['class' => 'control-label']) !!}
        {!! Form::text('price', old('price'), ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col">
        {!! Form::label('photo', 'Image', ['class' => 'control-label', 'style' => 'display:block']) !!}
        {!! Form::file('photo', old('photo'), ['class' => 'form-control form-control-file']) !!}
    </div>
</div>
<div class="form-group row">
    @if(isset($product->photo))
        <div class="col">
            <img class="img-responsive img-thumbnail" src="{{url("uploads/products/thumb/" . $product->photo)}}" alt="">
            <label class="control-label">Current Image</label>
        </div>
    @endif
</div>
<hr>
<div class="form-group row">
    <div class="col">
        <a href="{{ route('admin.products.index') }}" class="btn btn-outline-info float-left" >Cancel and Back</a>
        {!! Form::submit("Save", ['class' => 'btn btn-success float-right']) !!}
    </div>
</div>
