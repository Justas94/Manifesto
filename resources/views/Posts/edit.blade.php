@extends('layouts.app')

@section('content')
  <h1 class="article-title">Create Article</h1>
  <hr>
  <div class="form-blog">
    {{Form::label('title', 'Title', ['style' => 'font-size: 24px; opacity: 0.9;'])}}
    {{Form::text('title', '', ['class' => 'form-content', 'placeholder' => 'Title'])}}
  <div class="form-blog">
    {{Form::label('body', 'Body', ['style' => 'font-size: 24px; opacity: 0.9;' ])}}
    {{Form::textarea('body', '', ['class' => 'form-content', 'placeholder' => 'Describe your post and project details'])}}
  </div>

  <div class="form-blog">
    {{Form::file('cover_image', ['class' => 'upload-button', 'style' => 'content: Justas' ] )}}
  </div>
  <div class="form-blog">
    {{Form::submit('SUBMIT', ['class' => 'submit-form'])}}
  </div>
{!! Form::close() !!}
@endsection

