<x-layout>
    @include('sections._posts-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />
        @else
            <h1 class="text-center text-3xl font-semibold">No posts yet 😔</h1>
            <p class="text-center">Please check back later!</p>
        @endif
    </main>
</x-layout>