@extends('layouts.app')

@section('content')
<h1>Posts</h1>
@if(count($posts) > 0)
    @foreach($posts as $post)
        <div class="card">
        <div class="text-center"><img class="card-img-top" src="/storage/cover_images/{{$post->cover_image}}" style="width: 12rem"></div>
            <div class="card-body">
                <h3 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <p class="card-text">{!! $post->body !!}</p>
            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
        </div>
        <hr>
    @endforeach
    {{$posts->links()}}
@else
    <p>No posts found</p>
@endif
@endsection
