<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ClasificationCourse;
use App\TypeCourse;
use Illuminate\Http\Request;
use Session;

class ClasificationCoursesController extends Controller
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
            $clasificationcourses = ClasificationCourse::where('clasification', 'LIKE', "%$keyword%")
				->orWhere('body', 'LIKE', "%$keyword%")
				->orWhere('slug', 'LIKE', "%$keyword%")
				->orWhere('typecourse_id', 'LIKE', "%$keyword%")
				->orWhere('visible', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $clasificationcourses = ClasificationCourse::paginate($perPage);
        }

        return view('admin.clasification-courses.index', compact('clasificationcourses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $tipe = TypeCourse::orderBy('id','ASC')->where('is_active',1)->pluck('type','id');
        return view('admin.clasification-courses.create',compact('tipe'));
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
        
        ClasificationCourse::create($requestData);

        Session::flash('flash_message', 'ClasificationCourse added!');

        return redirect('admin/clasification-courses');
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
        $clasificationcourse = ClasificationCourse::findOrFail($id);

        return view('admin.clasification-courses.show', compact('clasificationcourse'));
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
        $tipe = TypeCourse::orderBy('id','ASC')->where('is_active',1)->pluck('type','id');
        $clasificationcourse = ClasificationCourse::findOrFail($id);

        return view('admin.clasification-courses.edit', compact('clasificationcourse','tipe'));
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
        
        $clasificationcourse = ClasificationCourse::findOrFail($id);
        $clasificationcourse->update($requestData);

        Session::flash('flash_message', 'ClasificationCourse updated!');

        return redirect('admin/clasification-courses');
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
        ClasificationCourse::destroy($id);

        Session::flash('flash_message', 'ClasificationCourse deleted!');

        return redirect('admin/clasification-courses');
    }
    protected function guard()
    {
        return Auth::guard('admin');
    }
}
