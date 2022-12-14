<x-layout>
    <div class="relative container mx-auto p-6 pt-8">
        <div class="block">
            <p class="font-extralight text-xs">
                By <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post -> category -> name }}</a>
            </p>
            
            <h1 class="font-bold text-2xl pb-3">
                {{  $post->title  }}
            </h1>
            <p class="text-justify">
                {{  $post->body  }} 
            </p>
        </div>
        <div class="mt-5">
            <a href="/posts" class="text-sm underline">Back</a>
        </div>
    </div>
</x-layout>