@extends('layouts.dashboard')

@section('title')
Admin
@endsection

@section('content')
    <h1>All posts</h1>
    <a class="btn btn-primary my-2" href="{{ route('admin.posts.create') }}"><i class="fas fa-plus-circle fa-xs"></i> Create a new post</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
                <th>Slug</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td scope="row">{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>
                        <a class="btn btn-primary mb-2" href="{{ route('admin.posts.show', ['post' => $post->slug]) }}"><i class="fas fa-eye fa-xs fa-fw"></i> View</a>
                        <a class="btn btn-warning mb-2" href="{{ route('admin.posts.edit', ['post' => $post->slug]) }}"><i class="fas fa-pen fa-xs fa-fw"></i> Edit</a>
                        <form action="{{ route('admin.posts.destroy', ['post' => $post->slug])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger mb-2" type="submit"><i class="fa fa-trash fa-xs fa-fw" aria-hidden="true"></i> Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection