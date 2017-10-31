<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Suscribir;
use Illuminate\Http\Request;
use Session;
use App\Course;
use App\Typesuscription;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyClient;
use Illuminate\Support\Facades\Input;

class SuscribirController extends Controller
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
            $suscribir = Suscribir::where('nombres', 'LIKE', "%$keyword%")
            ->orWhere('apellidos', 'LIKE', "%$keyword%")
            ->orWhere('correo', 'LIKE', "%$keyword%")
            ->orWhere('celular', 'LIKE', "%$keyword%")
            ->orWhere('telefono', 'LIKE', "%$keyword%")
            ->orWhere('tipesuscription_id', 'LIKE', "%$keyword%")
            ->orWhere('curso_id', 'LIKE', "%$keyword%")
            ->paginate($perPage);
        } else {
            $suscribir = Suscribir::paginate($perPage);
        }

        return view('admin.suscribir.index', compact('suscribir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $cursos = Course::orderBy('id','DESC')->where('visible',1)->pluck('title','id');
        $tiposuscripciones = Typesuscription::orderBy('id','ASC')->pluck('tipo','id');
        return view('admin.suscribir.create',compact('cursos','tiposuscripciones'));
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
        if ($request->hasFile('comprobante')) {
            $file = Input::file('comprobante');
            $uploadPath = public_path('uploads/comprobantes/');
            $extension = $file->getClientOriginalName();
            $file->move($uploadPath, $extension);
            $requestData['comprobante'] = 'uploads/comprobantes/'.$extension;
            $requestData['name_comprobante'] = $extension;
        }
        Suscribir::create($requestData);

        Session::flash('flash_message', 'Suscribir added!');

        return redirect('admin/suscribir');
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
        $suscribir = Suscribir::findOrFail($id);

        return view('admin.suscribir.show', compact('suscribir'));
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
        $suscribir = Suscribir::findOrFail($id);
        $cursos = Course::orderBy('id','DESC')->where('visible',1)->pluck('title','id');
        $tiposuscripciones = Typesuscription::orderBy('id','ASC')->pluck('tipo','id');
        return view('admin.suscribir.edit', compact('suscribir','cursos','tiposuscripciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function autosuscriber($id, Request $request){
        //dd($request);
        $requestData = $request->all();
        $suscribir = Suscribir::findOrFail($id);
        
            try {
                
            $requestData['tipesuscription_id']='2';
            $contadordemismocurso = Suscribir::where('curso_id',$requestData['curso_id'])->where('tipesuscription_id',2)->count();
        
            $incremento=$contadordemismocurso+1;
            Suscribir::where('id', $id)
            ->update(['orden_cupo' => $incremento]);
            $curso = Course::where('id',$requestData['curso_id'])->first();
            $capacidad = $curso['disponibles'];
            if(($capacidad)>0)
            {
                $decremento = $capacidad-1;
                Course::where('id',$requestData['curso_id'])
                ->update(['disponibles'=>$decremento]);

                $data = array(
                    'name'    => $request->nombres.' '.$request->apellidos,
                    'cursotitulo'   => $curso->title,
                    'mail'    => $suscribir['correo'],
                    'subject' => 'Suscripción al curso '.$curso->title.' activada',
                    'message' => ''
                );
                $to         = $suscribir['correo'];
                Mail::to($to)->send(new NotifyClient($data));
            }
            

            $suscribir->update($requestData);

            Session::flash('flash_message', 'Suscripción aceptada con exito');
                
            } catch (\Exception $e) {
                Session::flash('flash_message', '!!!Error al aceptar la suscripción');
            }

        return redirect('admin/suscribir');


    }


    public function update($id, Request $request)
    {

        $requestData = $request->all();
        
        $suscribir = Suscribir::findOrFail($id);
        if ($request->hasFile('comprobante')) {
            $file = Input::file('comprobante');
            $uploadPath = public_path('uploads/comprobantes/');
            $extension = $file->getClientOriginalName();
            $file->move($uploadPath, $extension);
            $requestData['comprobante'] = 'uploads/comprobantes/'.$extension;
            $requestData['name_comprobante'] = $extension;
        }
        if($requestData['tipesuscription_id']=='2')
        {
            $contadordemismocurso = Suscribir::where('curso_id',$requestData['curso_id'])->where('tipesuscription_id',2)->count();
            $incremento=$contadordemismocurso+1;
            Suscribir::where('id', $id)
            ->update(['orden_cupo' => $incremento]);
            $curso = Course::where('id',$requestData['curso_id'])->first();
            $capacidad = $curso['disponibles'];
            if(($capacidad)>0)
            {
                $decremento = $capacidad-1;
                Course::where('id',$requestData['curso_id'])
                ->update(['disponibles'=>$decremento]);

                $data = array(
                    'name'    => $request->nombres.' '.$request->apellidos,
                    'cursotitulo'   => $curso->title,
                    'mail'    => $suscribir['correo'],
                    'subject' => 'Suscripción al curso '.$curso->title.' activada',
                    'message' => ''
                );
                $to         = $suscribir['correo'];
                Mail::to($to)->send(new NotifyClient($data));
            }
        }
        $suscribir->update($requestData);

        Session::flash('flash_message', 'Suscribir updated!');

        return redirect('admin/suscribir');
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
        Suscribir::destroy($id);

        Session::flash('flash_message', 'Suscribir deleted!');

        return redirect('admin/suscribir');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    
}
