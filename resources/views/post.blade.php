<x-layout>
    <div class="mt-28 mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <x-slot:title>{{ $title }}</x-slot:title>
        <h3 class="text-xl"></h3>
            <article class="py-8 max-w-screen-md">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900"> {{ $post['title'] }}</h2>
                    <div>
                        By
                        <a href="/authors/{{$post->author->username}}" class=" hover:underline text-base text-gray-500"> {{$post->author->name }}
                        </a>
                        In
                        <a href="/categories/{{ $post->category->slug }}" class=" hover:underline text-base text-gray-500"> {{ $post->category->name }} </a>
                        | {{$post->created_at->diffForhumans() }}
                    </div>
                <p class="my-4 font-light"> {{$post['body']}}</p>
                <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back To Post</a>
            </article>
    </div>
</x-layout>




