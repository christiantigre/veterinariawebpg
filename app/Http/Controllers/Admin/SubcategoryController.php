<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Subcategory;
use App\Category;
use Illuminate\Http\Request;
use Session;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function __construct()
    {
        $this->middleware('admin', ['except' => 'logout']);
    }
    
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $subcategory = Subcategory::where('title', 'LIKE', "%$keyword%")
				->orWhere('content', 'LIKE', "%$keyword%")
				->orWhere('subcategory', 'LIKE', "%$keyword%")
				->orWhere('visible', 'LIKE', "%$keyword%")
				->orWhere('category_id', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $subcategory = Subcategory::paginate($perPage);
        }

        return view('admin.subcategory.index', compact('subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $category = Category::orderBy('id','DESC')->where('visible',1)->pluck('category','id');
        return view('admin.subcategory.create',compact('category'));
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
            'subcategory' => 'required|max:30',
			'content' => 'max:255'
		]);

        $requestData = $request->all();
        
        Subcategory::create($requestData);

        Session::flash('flash_message', 'Subcategory added!');

        return redirect('admin/subcategory');
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
        $subcategory = Subcategory::findOrFail($id);

        return view('admin.subcategory.show', compact('subcategory'));
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
        $subcategory = Subcategory::findOrFail($id);
        $category = Category::orderBy('id','DESC')->pluck('category','id');

        return view('admin.subcategory.edit', compact('subcategory','category'));
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
			'subcategory' => 'required|max:30',
            'content' => 'max:255'
		]);
        $requestData = $request->all();
        
        $subcategory = Subcategory::findOrFail($id);
        $subcategory->update($requestData);

        Session::flash('flash_message', 'Subcategory updated!');

        return redirect('admin/subcategory');
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
        Subcategory::destroy($id);

        Session::flash('flash_message', 'Subcategory deleted!');

        return redirect('admin/subcategory');
    }
}
