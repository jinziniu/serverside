<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;

class PostReviewsController extends Controller
{

   public function store(Post $post){
      
      request()->validate([
         'content' => 'required|min:3'
      ]);

      $post->reviews()->create([    
         'user_id' => request()->user()->id,
         'content' => request('content'),
        
      ]);
      return back();

   }
}
 