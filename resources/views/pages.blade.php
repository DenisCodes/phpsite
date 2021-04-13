<x-guest-layout>
    @foreach ($pages as $page)
        <div class="border border-black mb-2">
            <h1 class="text-2xl">{{$page->title}}</h1>
            <p>{{$page->body}}</p>
            <a class="hover:underline" href="{{route('public_pages_show', $page->id)}}">View</a>
        </div>
    @endforeach
</x-guest-layout>
