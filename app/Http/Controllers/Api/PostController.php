<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\apiResponseTrait;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;



class PostController extends Controller
{
    use apiResponseTrait;
    public function index()
    {
        $posts =  PostResource::collection(Post::get());
        return $this->apiResponse($posts,'success',200);
    }
    public function show($id)
    {
        $post = Post::find($id);
        if(!$post){
            return $this->apiResponse(null,'Not Found',404);
        }
        return $this->apiResponse(new PostResource($post),'success',200);
     }
    public function store(Request $request)
    {
        $post = Post::find($id);
        if(!$post){
            return $this->apiResponse(null,'Not Found',404);
        }
        return $this->apiResponse(new PostResource($post),'success',200);
     }

}
