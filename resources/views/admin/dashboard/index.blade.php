@extends('layouts.admin')

@section("content")
    <div class="jumbotron">
        <h1 class="display-4">Welcome, {{ Auth::user()->name }}</h1>
        <p class="lead">This is the SquadCommerce control panel.</p>
        <hr class="my-4">
        <p>Use the menu above to manage your products ... </p>
        <a class="btn btn-primary btn-lg" href="{{ route('admin.products.index') }}" role="button">... or click here</a>
    </div>
@endsection
