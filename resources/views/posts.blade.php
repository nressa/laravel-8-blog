@extends('layouts.main_app')
@section('banner')
<h1 class="text-center">My Post-it</h1>
@endsection
@section('content')
    <div class="body">
        @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'bg-active' : '' }}">
            <h2>
                <a href="/posts/{{ $post->id }}">
                    {!! $post->title !!}
                </a>
            </h2>
            {{ $post->excerpt }}
        </article>
        @endforeach
    </div>
@endsection