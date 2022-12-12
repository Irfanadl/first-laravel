<x-layout>
    <div class="relative container mx-auto p-6">
        <div class="text-center mb-8">
            <h1 class="text-xl tracking-wide uppercase overline">Articles</h1>
        </div>
        <div class="grid md:grid-cols-3 auto-rows-max gap-8">
        @foreach ($posts as $posts)
            <a href="/posts/{{ $posts->slug }}" class="shadow-md">
                <div class="block p-3">
                    <div class="flex justify-between">
                        <h1 class="font-semibold">
                            {{ $posts->title }}
                        </h1>
                        <p class="font-extralight text-xs">
                            {{ $posts->category->name }}
                        </p>
                    </div>
                    
                    <p class="font-light text-sm">
                        {{ $posts->excerpt }}
                    </p>
                </div>
            </a>
        @endforeach
        </div>
    </div>
</x-layout>