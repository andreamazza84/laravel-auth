@extends('layouts.dashboard')

@section('title')
Admin | Categories 
@endsection

@section('content')
    <h1>Categories</h1>
    <ul class="list-group">
    @foreach ($categories as $cat)
        <li class="list-group-item">{{ $cat->body }}</li>    
    @endforeach
    </ul>    
@endsection
