@extends('layouts.dashboard')

@section('content')

    <form class="mb-5" action="{{ route('admin.posts.store') }}" method="post">
    @csrf
    @method('POST')
    {{-- Title --}}
    <div class="form-row">
        <div class="col-lg-12 mb-3">
            <label for="validation-title">Title</label>
            <input type="text" class="form-control" id="validation-title" placeholder="Title" value="" name="title" required>
        </div>
    </div>
    {{-- Body --}}
    <div class="form-row">
        <div class="col-lg-12 mb-3">
            <label for="validation-body">Body</label>
            <textarea class="form-control" aria-label="With textarea" id="validation-body" name="body" required></textarea>
        </div>
    </div>
    {{-- Slug --}}
    <div class="form-row">
        <div class="col-lg-12 mb-3">
            <label for="validation-slug">Slug</label>
            <input type="text" class="form-control" id="validation-slug" placeholder="Slug" value="" name="slug" required>
        </div>
    </div>
        <button class="btn btn-primary" type="submit">Enter new post</button>
    </form>
    <a class="btn btn-primary mb-2" href="{{ route('admin.posts.index') }}">Back to index</a>


@endsection