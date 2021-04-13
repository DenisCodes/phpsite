<x-guest-layout>
    @foreach ($posts as $post)
        <div class="border border-black mb-2">
            <h1 class="text-2xl">{{$post->title}}</h1>
            <p>{{$post->body}}</p>
            <a class="hover:underline" href="{{route('public_posts_show', $post->id)}}">View</a>
        </div>
    @endforeach
</x-guest-layout>
