<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Auth $auth)
    {
        
        $posts = Post::paginate(5);
        // // $users = User::paginate(5);
        // $users = User::all();
        // // foreach($posts as $post){
        // //     dd($posts->user->name);
        // // }
        // $results = [];
        // foreach($users as $user){
        //     array_push($results, isset($user->post->toArray()[0]["title"]) ? $user->post->toArray()[0]["title"] : 'No record');
        // }
        // dd($results);
        // dd($users->post);
        // dd(User::find(4)->post()->paginate(5));

        return view('posts.index', [
            'posts' => $posts,
            'logged' => $auth::check()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Auth $auth)
    {
        if($auth::check() == false){
            return redirect('/posts');
        }
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post_data = $request->validate([
            'title' => ['required', 'max:191'],
            'description' => 'required|max:191'
        ]);
        $post_data['user_id'] = Auth::user()->id;
        Post::create($post_data);
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // dd(Post::findOrFail($post->id));;
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, Auth $auth)
    {
        if($auth::check() == false){
            return redirect('/posts');
        }
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post_data = $request->validate([
            'title' => ['required', 'max:191'],
            'description' => 'required|max:191'
        ]);
        $post_data['user_id'] = Auth::user()->id;
        $post->update($post_data);
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }
}
