<x-layout>
    <div class="relative container mx-auto p-6 pt-8">
        <div class="block">
            <a href="/categories/{{ $post -> category -> slug }}">
                <p class="font-extralight text-xs">
                    {{ $post -> category -> name }}
                </p>
            </a>
            <h1 class="font-bold text-2xl pb-3">
                {{  $post -> title  }}
            </h1>
            <p class="text-justify">
                {{  $post -> body  }} 
            </p>
        </div>
        <div class="mt-5">
            <a href="/posts" class="text-sm underline">Back</a>
        </div>
    </div>
</x-layout>