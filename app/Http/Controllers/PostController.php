<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Auth\Access\Response;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;


class PostController extends Controller
{
    public function index()
    {
        return view('posts',[
            'posts' => Post::latest()->with('category','author')->get()
        ]);
    }
    public function show(Post $post)
    {
        return view('post', [
            'post' => $post
        ]);
    }
    public function create()
    {
    
        return view('admin.posts.create');
    }

    public function store()
    {
     
           $attributes = request()->validate([
                'title' => 'required',
                'thumbnail' => 'required|image',
                'slug' => ['required',Rule::unique('posts','slug')],
                'excerpt' => 'required',
                'body' => 'required',
                'category_id' => ['required',Rule::exists('categories','id')]
            ]);
            $attributes['user_id'] = auth()->id();
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
            Post::create($attributes);
            return redirect('/');
    }

}