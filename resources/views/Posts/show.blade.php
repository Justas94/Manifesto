@extends('layouts.app')

@section('content')
  
  <h1>{{$post->title}}</h1>
  <p>{{$post->body}}</p>
  <hr>
  <small>Written on {{$post->created_at}}</small>
  <hr>
  <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
  <a href="/posts" class="btn-blue"> Go Back</a>
  {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
  {{Form::hidden('_method', 'DELETE')}}
  {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
  {!!Form::close()!!}
@endsection