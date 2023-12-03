<x-topbar></x-topbar>
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

  
 
  <section style="margin: 40px; padding: 40px;">

         
    
    <section style="margin: 40px; padding: 40px;">
  <h2 style="color: #333; font-size: 24px; margin-bottom: 20px;">Comments</h2>
  
  <!-- Comment Submission Form (Moved outside the loop) -->
  <form id="comment-form" action="/posts/{{$post->slug}}/reviews" method="POST" style="margin-bottom: 30px;" >
  @csrf
    <textarea name="content" placeholder="Write your comment here..." style="width: 100%; padding: 15px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 8px; height: 100px; box-sizing: border-box;"></textarea>
    <input type="submit" value="Post Comment" style="padding: 10px 15px; background-color: #0077cc; color: white; border: none; border-radius: 8px; cursor: pointer;">
  </form>

  <!-- Display Comments -->
  <div id="comments-container">
  @foreach ($post->reviews as $review)
    <div style="padding: 20px; margin-bottom: 10px; background: #f9f9f9; border-radius: 8px;">
        <strong>{{ $review->user->username }}</strong>
        <span style="color: #aaa;">{{ $review->created_at }}</span>
        <p style="color: #555;">
            {{ $review->content }}
        </p>
    </div>
@endforeach

  </div>
</section>

<a href='/' style="display: inline-block; margin-top: 30px; padding: 15px 20px; background-color: #0077cc; color: white; text-decoration: none; border-radius: 8px; font-size: 18px;">Go back</a>
