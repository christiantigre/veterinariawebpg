<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;
use App\Tag;
use App\Category;
use Illuminate\Http\Request;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $post = Post::where('title', 'LIKE', "%$keyword%")
				->orWhere('body', 'LIKE', "%$keyword%")
				->orWhere('slug', 'LIKE', "%$keyword%")
				->orWhere('category_id', 'LIKE', "%$keyword%")
				->orWhere('visible', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $post = Post::paginate($perPage);
        }

        return view('admin.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $tags = Tag::all();
        $category = Category::orderBy('id','DESC')->where('visible',1)->pluck('category','id');
        return view('admin.post.create',compact('tags','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {        
        $requestData = $request->all();
        
        $post = Post::create([
            'title'=>$request->title,
            'slug'=>$request->slug,
            'body'=>$request->body,
            'category_id'=>$request->category_id,
            'visible'=>$request->visible
        ]);

        $post->tags()->sync($request->tags, false);

        Session::flash('flash_message', 'Post added!');

        return redirect('admin/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $post = Post::findOrFail($id);
        $post->update($requestData);

        Session::flash('flash_message', 'Post updated!');

        return redirect('admin/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Post::destroy($id);

        Session::flash('flash_message', 'Post deleted!');

        return redirect('admin/post');
    }
}
