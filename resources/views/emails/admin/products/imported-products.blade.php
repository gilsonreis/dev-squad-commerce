@extends("layouts.email")

@section('content')
    <h3>Hello, {{ $file->user->name }}</h3>
    <p>Your products was imported successfully from <strong>{{ $file->file_name }}</strong> CSV file!</p>
    <p><strong>Total: {{ $qty }} products.</strong></p>

@endsection
