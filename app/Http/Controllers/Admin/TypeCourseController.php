<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\TypeCourse;
use Illuminate\Http\Request;
use Session;

class TypeCourseController extends Controller
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
            $typecourse = TypeCourse::where('type', 'LIKE', "%$keyword%")
				->orWhere('slug', 'LIKE', "%$keyword%")
				->orWhere('is_active', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $typecourse = TypeCourse::paginate($perPage);
        }

        return view('admin.type-course.index', compact('typecourse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.type-course.create');
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
        
        TypeCourse::create($requestData);

        Session::flash('flash_message', 'TypeCourse added!');

        return redirect('admin/type-course');
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
        $typecourse = TypeCourse::findOrFail($id);

        return view('admin.type-course.show', compact('typecourse'));
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
        $typecourse = TypeCourse::findOrFail($id);

        return view('admin.type-course.edit', compact('typecourse'));
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
        
        $typecourse = TypeCourse::findOrFail($id);
        $typecourse->update($requestData);

        Session::flash('flash_message', 'TypeCourse updated!');

        return redirect('admin/type-course');
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
        TypeCourse::destroy($id);

        Session::flash('flash_message', 'TypeCourse deleted!');

        return redirect('admin/type-course');
    }
}
