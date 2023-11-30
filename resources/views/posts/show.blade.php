<x-layout>
<section class="px-6 py-8">
    <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
        <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
            <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl">
                <p class="mt-4 block text-gray-400 text-xs">
                    Published
                    <time>{{ $post->created_at->diffForHumans() }}</time>
                </p>
                <div class="flex items-center lg:justify-center text-sm mt-4">
                    <img src="/images/lazy-avatar.svg" alt="Lazy avatar">
                    <div class="ml-3 text-left">
                        <h5 class="font-bold">
                            <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a>
                        </h5>
                    </div>
                </div>
            </div>
        </article>
    </main>
</section>
</x-layout>
