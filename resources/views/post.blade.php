<x-layout>
  <article>
    <h1>{!! $post->title !!}</h1>
    <p>
      By<a href="{{ url('/authors/' . $post->author->username) }}">
       <div>
           <img src="storage/app/thumbnails/AYy7LD18PmKYNyoEy3wr3mKOGJ05vF5xkGvNXjFA.png" alt="描述">

        </div>

      {{ $post->author ? $post->author->name : 'Unknown' }}</a> in
    
      <a href="{{ url('/categories/' . $post->category->slug) }}">
        {{ $post->category->name }}
      </a>
    </p>
    <div>
      {!! $post->body !!}
    </div>
  </article>
  <a href='/'>Go back</a>
</x-layout>