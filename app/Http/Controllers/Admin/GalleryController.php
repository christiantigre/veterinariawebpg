<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Gallery;
use App\Category;
use Illuminate\Http\Request;
use Session;

class GalleryController extends Controller
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
            $gallery = Gallery::where('title', 'LIKE', "%$keyword%")
				->orWhere('content', 'LIKE', "%$keyword%")
				->orWhere('img', 'LIKE', "%$keyword%")
				->orWhere('link', 'LIKE', "%$keyword%")
				->orWhere('visible', 'LIKE', "%$keyword%")
				->orWhere('category_id', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $gallery = Gallery::paginate($perPage);
        }

        return view('admin.gallery.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

        $category = Category::orderBy('id','DESC')->pluck('category','id');
        return view('admin.gallery.create',compact('category'));
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
        $this->validate($request, [
			'title' => 'required|max:30'
		]);
        $requestData = $request->all();
        
        Gallery::create($requestData);

        Session::flash('flash_message', 'Gallery added!');

        return redirect('admin/gallery');
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
        $gallery = Gallery::findOrFail($id);

        return view('admin.gallery.show', compact('gallery'));
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
        $gallery = Gallery::findOrFail($id);
        $category = Category::orderBy('id','DESC')->pluck('category','id');

        return view('admin.gallery.edit', compact('gallery','category'));
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
        $this->validate($request, [
			'title' => 'required|max:30'
		]);
        $requestData = $request->all();
        
        $gallery = Gallery::findOrFail($id);
        $gallery->update($requestData);

        Session::flash('flash_message', 'Gallery updated!');

        return redirect('admin/gallery');
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
        Gallery::destroy($id);

        Session::flash('flash_message', 'Gallery deleted!');

        return redirect('admin/gallery');
    }
}
