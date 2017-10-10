<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Typeproduct;
use Illuminate\Http\Request;
use Session;

class TypeproductController extends Controller
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
            $typeproduct = Typeproduct::where('typeproduct', 'LIKE', "%$keyword%")
				->orWhere('is_active', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $typeproduct = Typeproduct::paginate($perPage);
        }

        return view('admin.typeproduct.index', compact('typeproduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.typeproduct.create');
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
        
        Typeproduct::create($requestData);

        Session::flash('flash_message', 'Typeproduct added!');

        return redirect('admin/typeproduct');
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
        $typeproduct = Typeproduct::findOrFail($id);

        return view('admin.typeproduct.show', compact('typeproduct'));
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
        $typeproduct = Typeproduct::findOrFail($id);

        return view('admin.typeproduct.edit', compact('typeproduct'));
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
        
        $typeproduct = Typeproduct::findOrFail($id);
        $typeproduct->update($requestData);

        Session::flash('flash_message', 'Typeproduct updated!');

        return redirect('admin/typeproduct');
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
        Typeproduct::destroy($id);

        Session::flash('flash_message', 'Typeproduct deleted!');

        return redirect('admin/typeproduct');
    }
}
