<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPostController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view("dashboard.posts.index", [
      "posts" => Post::where("user_id", auth()->user()->id)->get()
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view("dashboard.posts.create", [
      "categories" => Category::all()
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {    
    $rules = [
      "title" => "required|max:255",
      "slug" => "required|max:255|unique:posts",
      "category_id" => "required",
      "body" => "required"
    ];

    $validatedData = $request->validate($rules);
    $validatedData["user_id"] = auth()->user()->id;

    Post::create($validatedData);

    return redirect("/dashboard/posts")->with("success", "New post has been added!");
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function show(Post $post)
  {
    if ($post->user_id != auth()->user()->id) {
      abort(403);
    }

    return view("dashboard.posts.show", [
      "post" => $post
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function edit(Post $post)
  {
    if ($post->user_id != auth()->user()->id) {
      abort(403);
    }

    return view("dashboard.posts.edit", [
      "post" => $post,
      "categories" => Category::all()
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Post $post)
  {
    if ($post->user_id != auth()->user()->id) {
      abort(403);
    }
    
    $rules = [
      "title" => "required|max:255",
      "slug" => "required|max:255|unique:posts,slug,$post->id",
      "category_id" => "required",
      "body" => "required"
    ];

    $validatedData = $request->validate($rules);
    $validatedData["user_id"] = auth()->user()->id;

    $post->update($validatedData);
    // Post::where("id", $post->id)->update($validatedData);

    return redirect("/dashboard/posts")->with("success", "Post has been update!");
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function destroy(Post $post)
  {
    if ($post->user_id != auth()->user()->id) {
      abort(403);
    }

    $post->delete();
    // Post::destroy($post->id);

    return redirect("/dashboard/posts")->with("success", "Post has been deleted!");
  }

  public function checkSlug(Request $request)
  {
    $slug = SlugService::createSlug(Post::class, "slug", $request->title);

    return response()->json(["slug" => $slug]);
  }
}
