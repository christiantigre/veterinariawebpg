<?php
namespace App\Http\Controllers\Admin;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Course;
use App\TypeCourse;
use App\ClasificationCourse;
use App\CoursesFiles;
use Illuminate\Http\Request;
use Session;
class CoursesController extends Controller
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
            $courses = Course::where('title', 'LIKE', "%$keyword%")
				->orWhere('content', 'LIKE', "%$keyword%")
				->orWhere('img', 'LIKE', "%$keyword%")
				->orWhere('link', 'LIKE', "%$keyword%")
				->orWhere('visible', 'LIKE', "%$keyword%")
				->orWhere('tipecourse_id', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $courses = Course::paginate($perPage);
        }
        return view('admin.courses.index', compact('courses'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

        $clases = ClasificationCourse::orderBy('id','ASC')->where('visible',1)->pluck('clasification','id');
        $tipes = TypeCourse::orderBy('id','ASC')->where('is_active',1)->pluck('type','id');
        return view('admin.courses.create',compact('tipes','clases'));
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
        $public=public_path();
        
        $requestData = $request->all();
        
        $curso = Course::create($requestData);
        $files = $request->file('files');
        $destinationPath = $public.'/uploads/archivoscurso/';
        foreach($files as $file) {
            $filename = $file->getClientOriginalName();
            $upload_success = $file->move($destinationPath, $filename);
            CoursesFiles::create([
                'filename'=>$filename,
                'course_id'=>$curso->id,
                'ruta'=>$destinationPath.$filename
            ]);
        }
        Session::flash('flash_message', 'Course added!');
        return redirect('admin/courses');
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
        $course = Course::findOrFail($id);
        return view('admin.courses.show', compact('course'));
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
        $clases = ClasificationCourse::orderBy('id','ASC')->where('visible',1)->pluck('clasification','id');
        $tipes = TypeCourse::orderBy('id','ASC')->where('is_active',1)->pluck('type','id');
        $course = Course::findOrFail($id);
        return view('admin.courses.edit', compact('course','clases'));
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
        
        $course = Course::findOrFail($id);
        $course->update($requestData);
        Session::flash('flash_message', 'Course updated!');
        return redirect('admin/courses');
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
        Course::destroy($id);
        Session::flash('flash_message', 'Course deleted!');
        return redirect('admin/courses');
    }
}