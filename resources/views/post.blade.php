<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags, CSS links, etc. -->
</head>
<body>
    <x-layout>
        <article>
            <header>
                <h1>{{ $post->title }}</h1>
                <p>
                    By <a href="{{ url('/authors/' . $post->author->username) }}">
                        <img src="/storage/{{$post->thumbnail}}" alt="{{$post->title}}" class="rounded-xl">
                        {{ $post->author ? $post->author->name : 'Unknown' }}
                    </a> 
                    in <a href="{{ url('/categories/' . $post->category->slug) }}">
                        {{ $post->category->name }}
                    </a>
                </p>
            </header>
            <section>
                {!! $post->body !!}
            </section>
        </article>
        <nav>
            <a href='/'>Go back</a>
        </nav>
    </x-layout>
</body>
</html>
