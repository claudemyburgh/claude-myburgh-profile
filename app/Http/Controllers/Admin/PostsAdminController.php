<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostsRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsAdminController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }


    public function index()
    {
        abort(404);
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(Post $posts)
    {
        $posts = $posts->with('user')->paginate();

        return view('dashboard.posts.create', compact('posts'));
    }


    /**
     * @param Request $request
     * @return string
     */
    public function store(PostsRequest $request)
    {
        $post = $request->user()->posts()->create($request->validated());
        return redirect()->route('dashboard.posts.edit', $post)->withStatus('post-created-success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }


    /**
     * @param Post $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', compact('post'));
    }


    /**
     * @param PostsRequest $request
     * @param Post $post
     * @return mixed
     */
    public function update(PostsRequest $request, Post $post)
    {
        $post->update($request->only('title', 'description', 'content'));
        return redirect()->route('dashboard.posts.edit', $post)->withStatus('post-updated-success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
