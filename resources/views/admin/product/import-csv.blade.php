@extends("layouts.admin")

@section('title', 'Import Products - ')

@section("content")
    <h1 class="display-4">Import products from CSV</h1>
    <hr>
    @include("admin.partials._validations_messages")
    <div class="row">
        {!! Form::model($file, ['route' => ['admin.products.import_csv_store'], 'method' => 'post', 'files' => true]) !!}
            <div class="row">
                <div class="form-group col">
                    {!! Form::label('file_name', 'CSV File', ['class' => 'control-label', 'style' => 'display:block']) !!}
                    {!! Form::file('file_name', old('file_name'), ['class' => 'form-control form-control-file']) !!}

                    {!! Form::hidden('user_id', Auth::user()->id, ['id' => 'id']) !!}
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <div class="col">
                    <a href="{{ route('admin.products.index') }}" class="btn btn-outline-info float-left" >Cancel and Back</a>
                    {!! Form::submit("Save", ['class' => 'btn btn-success float-right']) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@endsection
