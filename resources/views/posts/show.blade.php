@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-secondary">Go Back</a>
<h1>{{$post->title}}</h1>
<img class="card-img-top" src="/storage/cover_images/{{$post->cover_image}}">
<div>
    {!!$post->body!!}
</div>
<hr>
<small>Written on {{$post->created_at}}</small>
<hr>
@if(!Auth::guest())
    @if(Auth::user()->id ==$post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'Post', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close() !!}
    @endif
@endif
@endsection
