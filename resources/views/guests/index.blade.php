@extends('layouts.app')

@section('content')
<div class="jumbotron">
  <h1 class="display-4">My blog page</h1>
  <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga maiores reiciendis nisi nostrum reprehenderit tempore, praesentium ad corporis enim quibusdam modi esse illum iure beatae totam quam inventore id a?</p>
  <hr class="my-4">
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores officiis praesentium nesciunt dignissimos inventore culpa?</p>
  <a class="btn btn-primary btn-lg" href="{{ route('about')}}" role="button">About</a>
</div>
@endsection