<x-layout>
  <article style="margin: 40px; padding: 40px; border: 2px solid #ccc; border-radius: 15px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);">
    <h1 style="color: #333; font-size: 30px; margin-bottom: 20px;">{!! $post->title !!}</h1>
    
    <div style="margin-bottom: 20px; display: flex; align-items: center;">
      <a href="{{ url('/authors/' . $post->author->username) }}" style="text-decoration: none; color: #0077cc; display: flex; align-items: center;">
        <img src="/storage/{{$post->thumbnail}}" alt="" style="width: 150px; height: auto; border-radius: 50%; margin-right: 15px;">
        <span style="font-size: 20px; font-weight: bold;">
          {{ $post->author ? $post->author->name : 'Unknown' }}
        </span>
      </a> 
      in
      <a href="{{ url('/categories/' . $post->category->slug) }}" style="text-decoration: none; color: #0077cc; margin-left: 10px; font-size: 18px;">
        {{ $post->category->name }}
      </a>
    </div>
    
    <div style="line-height: 1.8; color: #555; font-size: 18px;">
      {!! $post->body !!}
    </div>
  </article>

  <a href='/' style="display: inline-block; margin-top: 30px; padding: 15px 20px; background-color: #0077cc; color: white; text-decoration: none; border-radius: 8px; font-size: 18px;">Go back</a>
</x-layout>
