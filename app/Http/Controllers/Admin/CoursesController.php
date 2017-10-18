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
use Illuminate\Support\Facades\Input;
use Image;

class CoursesController extends Controller
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
        $this->validate($request, [
            'img' => 'mimes:jpeg,png|max:1500',
            'title' => 'max:150',
            'subtitle' => 'max:150',
            'link' => 'max:150',
            'nameslider' => 'max:50',
            'files' => 'mimes:jpg,jpeg,gif,png,xls,xlsx,doc,docx,pdf',
        ]);
        $data = $request->session()->all();
        $mailAdmin = auth('admin')->user()->email;
        $admin = auth('admin')->user()->id;

        $files = $request->file('files');
        $img = $request->file('img');
        $public=public_path();

        if(!empty($img))
        {
            $file_img = Input::file('img');
            $nombre = $file_img->getClientOriginalName();
            $path = public_path('uploads/courses/'.$nombre);
            $image = Image::make($file_img->getRealPath());
            $image->save($path);
        }
        
        $requestData = $request->all();
        if(!empty($nombre)){
            //$curso = Course::create($requestData);
            $curso = Course::create([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'content' => $request->content,
                'description' => $request->description,
                'duration' => $request->duration,
                'hours' => $request->hours,
                'hourdesde' => $request->hourdesde,
                'hourhasta' => $request->hourhasta,
                'precio' => $request->precio,
                'fechainit' => $request->fechainit,
                'dais' => $request->dais,
                'img' => 'uploads/courses/'.$nombre,
                'nameimg' => $nombre,
                'video' => '',
                'link' => $request->link,
                'visible' => $request->visible,
                'visibleslider' => $request->visibleslider,
                'nameslider' => $request->nameslider,
                'clasification_id' => $request->clasification_id,
                'admin_id' => $admin
            ]);
        }else{
            $curso = Course::create([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'content' => $request->content,
                'description' => $request->description,
                'duration' => $request->duration,
                'hours' => $request->hours,
                'hourdesde' => $request->hourdesde,
                'hourhasta' => $request->hourhasta,
                'precio' => $request->precio,
                'fechainit' => $request->fechainit,
                'dais' => $request->dais,
                'video' => '',
                'link' => $request->link,
                'visible' => $request->visible,
                'visibleslider' => $request->visibleslider,
                'nameslider' => $request->nameslider,
                'clasification_id' => $request->clasification_id,
                'admin_id' => $admin
            ]);
        }
        $destinationPath = $public.'/uploads/archivoscurso/';
        if(!empty($files)){
            foreach($files as $file) {
                $filename = $file->getClientOriginalName();
                $upload_success = $file->move($destinationPath, $filename);
                CoursesFiles::create([
                    'filename'=>$filename,
                    'course_id'=>$curso->id,
                    'ruta'=>'/uploads/archivoscurso/'.$filename
                ]);
            }
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
        $files = CoursesFiles::where('course_id',$id)->get();
        return view('admin.courses.show', compact('course','files'));
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
        $this->validate($request, [
            'img' => 'mimes:jpeg,png|max:1500',
            'title' => 'max:150',
            'subtitle' => 'max:150',
            'link' => 'max:150',
            'nameslider' => 'max:50',
            'files' => 'mimes:jpg,jpeg,gif,png,xls,xlsx,doc,docx,pdf'
        ]);
        $files = $request->file('files');
        $data = $request->session()->all();
        $mailAdmin = auth('admin')->user()->email;
        $admin = auth('admin')->user()->id;

        $rutaHead = 'uploads/courses/';
        if(!Input::file("img"))
            {
                $nameHeader="";
            }else{
                $note_delete = Course::findOrFail($id);   
                $move = $note_delete['img'];
                $old = public_path().'/'.$move;
                       //verificamos si la imagen exist
                if(!empty($move)){
                    if(\File::exists($old)){
                        unlink($old);
                    }
                }

                $file = Input::file('img');
                $nameHeader = $file->getClientOriginalName();
                $path = public_path($rutaHead.$nameHeader);
                $image = Image::make($file->getRealPath());
                //$image->resize(1800, 720);
                $image->save($path);
            }

        $requestData = $request->all();       
        //$course = Course::findOrFail($id);
        //$course->update($requestData);
        if(!empty($nameHeader)){
            $course = Course::findOrFail($id);
            $course->title = $request->title;
            $course->subtitle = $request->subtitle;
            $course->content = $request->content;
            $course->description = $request->description;
            $course->duration = $request->duration;
            $course->hours = $request->hours;
            $course->hourdesde = $request->hourdesde;
            $course->hourhasta = $request->hourhasta;
            $course->precio = $request->precio;
            $course->fechainit = $request->fechainit;
            $course->dais = $request->dais;
            $course->img = $rutaHead.$nameHeader;
            $course->nameimg = $nameHeader;
            $course->video = '';
            $course->link = $request->link;
            $course->visible = $request->visible;
            $course->visibleslider = $request->visibleslider;
            $course->nameslider = $request->nameslider;
            $course->clasification_id = $request->clasification_id;
            $course->admin_id = $admin;
            $course->save();
        }else{
            $course = Course::findOrFail($id);
            $course->title = $request->title;
            $course->subtitle = $request->subtitle;
            $course->content = $request->content;
            $course->description = $request->description;
            $course->duration = $request->duration;
            $course->hours = $request->hours;
            $course->hourdesde = $request->hourdesde;
            $course->hourhasta = $request->hourhasta;
            $course->precio = $request->precio;
            $course->fechainit = $request->fechainit;
            $course->dais = $request->dais;
            $course->video = '';
            $course->link = $request->link;
            $course->visible = $request->visible;
            $course->visibleslider = $request->visibleslider;
            $course->nameslider = $request->nameslider;
            $course->clasification_id = $request->clasification_id;
            $course->admin_id = $admin;
            $course->save();
        }
        
        $public=public_path();
        $destinationPath = $public.'/uploads/archivoscurso/';
        if(!empty($files)){
            foreach($files as $file) {
                $filename = $file->getClientOriginalName();
                $upload_success = $file->move($destinationPath, $filename);
                CoursesFiles::create([
                    'filename'=>$filename,
                    'course_id'=>$course->id,
                    'ruta'=>'/uploads/archivoscurso/'.$filename
                ]);
            }
        }

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
        CoursesFiles::where('course_id', $id)->delete();
        Course::destroy($id);

        Session::flash('flash_message', 'Course deleted!');
        return redirect('admin/courses');
    }



    protected function guard()
    {
        return Auth::guard('admin');
    }




}