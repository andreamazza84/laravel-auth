@extends('layouts.dashboard')

@section('content')

    <form action="" method="post">
    @csrf
    {{-- Title --}}
    <div class="form-row">
        <div class="col-lg-12 mb-3">
            <label for="validation-title">Edit title</label>
            <input type="text" class="form-control" id="validation-title" placeholder="Title" value="{{ $post->title }}" name="title" required>
        </div>
    </div>
    {{-- Body --}}
    <div class="form-rwo">
        <div class="col-lg-12 mb-3">
            <label for="validation-body">Edit body</label>
            <textarea class="form-control" aria-label="With textarea" id="validation-body" name="body" required>{{ $post->body }}</textarea>
        </div>
    </div>
    {{-- Slug --}}
    <div class="form-row">
        <div class="col-lg-12 mb-3">
            <label for="validation-slug">Edit slug</label>
            <input type="text" class="form-control" id="validation-slug" placeholder="Slug" value="{{ $post->slug }}" name="slug" required>
        </div>
    </div>
        <button class="btn btn-primary" type="submit">Update post</button>
    </form>

@endsection