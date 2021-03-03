@extends('layouts.dashboard')

@section('title')
Admin
@endsection

@section('content')
    <h1>All posts</h1>
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
                        <a class="btn btn-primary" href="{{route('admin.posts.show', ['post' => $post->slug])}}"><i class="fas fa-eye fa-xs fa-fw"></i> View</a>
                        <a class="btn btn-warning" href="#"><i class="fas fa-pen fa-xs fa-fw"></i> Edit</a>
                        <a class="btn btn-danger" href="#"><i class="fa fa-trash fa-xs fa-fw" aria-hidden="true"></i> Delete</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection