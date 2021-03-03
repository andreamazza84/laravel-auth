@extends('layouts.app')

@section('content')
    <h1>Blog</h1>

    @foreach ($posts as $post)
    <div class="card py-2 mb-2">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <h4 class="card-title"><a href="{{route('admin.posts.show', ['post' => $post->slug])}}">{{ $post->title }}</a></h4>
            <p class="card-text">{{ $post->body }}</p>
        </div>
    </div>    
    @endforeach
@endsection