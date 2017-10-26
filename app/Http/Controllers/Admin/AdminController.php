<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Notice;
use App\Note;
use App\Service;
use App\Course;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Input;
use App\Suscribir;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('admin', ['except' => 'logout']);
    }

    public function inicio(Request $request)
    {
        $keyword = $request->get('curso_id');
        if (!empty($keyword)) {
            $inscripciones   = Suscribir::where('curso_id',$keyword)->orderBy('id', 'desc')->get();
            $curso = Course::findOrFail($keyword);
        } else {
            $inscripciones   = Suscribir::orderBy('id', 'desc')->get();
        }

        $cursos = Course::orderBy('id','DESC')->where('visible',1)->pluck('title','id');
        return view('admin.home', compact('inscripciones','cursos'));

    }

    public function exportarexcel(Request $request)
    {
            //$inscripciones   = Suscribir::select('nombres','apellidos','correo','celular','telefono','valor_depositado','fecha_suscripcion','orden_cupo','tipesuscription_id')->where('curso_id',$request->curso_id)->orderBy('id', 'desc')->get();
        $inscripciones = DB::table('suscribirs')
                    ->join('courses', 'suscribirs.curso_id', '=', 'courses.id')
                    ->join('typesuscriptions', 'suscribirs.tipesuscription_id', '=', 'typesuscriptions.id')
                    ->select('suscribirs.*','courses.title','typesuscriptions.*')
                     ->where('suscribirs.curso_id', '=', $request->curso_id)
                     ->get();
        //dd($inscripciones);

        Excel::create("Exportado", function ($excel) use ($inscripciones) {
            $excel->setTitle("Title");
            $excel->sheet("Sheet 1", function ($sheet) use ($inscripciones) {
            $sheet->loadView('admin.exports.exportexcel')->with('inscripciones', $inscripciones);
        });
        })->download('xls');
        return back();
    }

    public function index()
    {
        $mailAdmin = auth('admin')->user()->email;
        $admin = auth('admin')->user()->id;
        $administrador = Admin::findOrFail($admin);

        $notices      = Notice::orderBy('id', 'desc')->where('admins_id', $administrador->id)->get();
        $notes        = Note::orderBy('id', 'desc')->where('admins_id', $administrador->id)->get();
        $services     = Service::orderBy('id', 'desc')->where('admins_id', $administrador->id)->get();
        $cursos       = Course::orderBy('id', 'asc')->where('admin_id', $administrador->id)->get();
        $productos    = Product::orderBy('id', 'asc')->where('admins_id', $administrador->id)->get();
        
        return view('admin.profile.profile', compact('administrador','notices','notes','services','cursos','productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $administrador = Admin::findOrFail($id);
        $notices      = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
        $notes        = Note::orderBy('id', 'desc')->where('visible', 1)->get();
        $services     = Service::orderBy('id', 'desc')->where('is_active', 1)->get();
        $cursos       = Course::orderBy('id', 'asc')->where('visible', 1)->where('visibleslider', 1)->get();
        $productos    = Product::orderBy('id', 'asc')->where('visible', 1)->get();
        

        return view('admin.profile.edit', compact('administrador','services'));
    }

    public function edit_cred($id)
    {
        $administrador = Admin::findOrFail($id);

        return view('admin.profile.edit_cred', compact('administrador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombres' => 'nullable|min:1|max:50',
            'apellidos' => 'nullable|min:1|max:50',
            'telefono' => 'numeric|min:1|max:999999999999999',
            'celular' => 'numeric|min:1|max:999999999999999',
            'domicilio' => 'max:150',
            'pais' => 'max:30',
            'ciudad' => 'max:30',
            'abrev' => 'max:20',
            'img' => 'mimes:jpeg,png|max:1500',
        ]);

        $requestData = $request->all();
        
        $files = Input::file('img');
        $user = Admin::findOrFail($id);
        if (!empty($files)) {
            $uploadPath = public_path('uploads/users/');
            $extension = $files->getClientOriginalName();
                //$fileName = rand(11111, 99999) . '.' . $extension;

            $files->move($uploadPath, $extension);
            $requestData['img'] = 'uploads/users/'.$extension;
            $requestData['nameimg'] = $extension;
        }
        $user->update($requestData);

        Session::flash('flash_message', 'Información Actualizada correctamente!');

        $admin = auth('admin')->user()->id;
        $administrador = Admin::findOrFail($admin);
        return redirect('admin/settings');
    }

    public function update_cred(Request $request, $id){
        $this->validate($request, [
            'name' => '|min:1|max:20',
            'email' => 'min:6|max:45|required|email', 
            'password' => 'min:6|required', 
            'password_confirmation' => 'min:6|same:password'
        ]);
        $requestData = $request->all();
        $user = Admin::findOrFail($id);
        $user['password'] = bcrypt($request['password']);
        $user->update([
            'password'=>$user['password'],
            'email'=>$requestData['email'],
            'name'=>$requestData['name'],
        ]);
        return redirect('admin/settings');
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

    protected function guard()
    {
        return Auth::guard('admin');
    }
}
