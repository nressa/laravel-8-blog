@extends('layouts.main_app')
@section('title') {{  $post->title }} @endsection
@section('content')
    <div class="body">
        <h1>Posts</h1>
        <article>
            <h2>{{ $post->title }}</h2>
            <p><a href="/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            {!! $post->body !!}
        </article>

        <a href="/"> < Go Back</a>
    </div>
@endsection