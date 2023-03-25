@extends('layouts.main_app')
@section('banner')
    <h1 class="text-center">My Post-it</h1>
@endsection
@section('content')
    <div class="body">
        @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'bg-active' : '' }}">
            <h2>
                <a href="/posts/{{ $post['slug'] }}">
                    {!! $post->title !!}
                </a>
            </h2>
            <p>
                By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> 
                in <a href="/categories/{{ $post->category['slug'] }}">{{ $post->category->name }}</a>
            </p>
            {{ $post->excerpt }}
        </article>
        @endforeach
    </div>
@endsection