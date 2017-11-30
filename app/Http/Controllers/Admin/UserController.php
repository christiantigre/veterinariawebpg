<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Gender;
use App\Country;
use App\Province;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use App\Mail\notifyEmail;
use Crypt;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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

    public function list_users()
    {
        $users = User::orderBy('id','DESC')->where('id',32)->first();        
        $key = $users['password'];
        //$value = Crypt::decrypt($key);
 
        return $key;
    }

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $user = User::where('name', 'LIKE', "%$keyword%")
				->orWhere('nombres', 'LIKE', "%$keyword%")
				->orWhere('apellidos', 'LIKE', "%$keyword%")
				->orWhere('telefono', 'LIKE', "%$keyword%")
				->orWhere('celular', 'LIKE', "%$keyword%")
				->orWhere('fecha_nacimiento', 'LIKE', "%$keyword%")
				->orWhere('domicilio', 'LIKE', "%$keyword%")
				->orWhere('img', 'LIKE', "%$keyword%")
				->orWhere('history', 'LIKE', "%$keyword%")
				->orWhere('activo', 'LIKE', "%$keyword%")
				->orWhere('email', 'LIKE', "%$keyword%")
				->orWhere('password', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $user = User::paginate($perPage);
        }

        return view('admin.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $genero = Gender::orderBy('id', 'DESC')->pluck('genero', 'id');
        $paises = Country::orderBy('id', 'DESC')->pluck('country', 'id');
        $provincias = Province::orderBy('id', 'DESC')->pluck('province', 'id');
        $paisseleccionado = ['66']; 
        $provinciaseleccionada = ['1']; 
        $generoseleccionado = ['1']; 

        return view('admin.user.create',compact('genero','paises','provincias','paisseleccionado','provinciaseleccionada','generoseleccionado'));
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
            'name' => 'required|max:50',
            'nombres' => 'nullable|max:50',
            'apellidos' => 'nullable|max:50',            
            'telefono' => 'nullable|min:1|max:999999999999999',
            'celular' => 'nullable|min:1|max:999999999999999',
            'domicilio' => '|nullable|max:150',
            'email' => 'required|email|max:190',
            'img' => 'mimes:jpg,jpeg,gif,png',
        ]);
        
        $requestData = $request->all();
        
        $file = Input::file('img');
        if (!empty($file)) {
                $uploadPath = public_path('uploads/users/');
                //$extension = $file->getClientOriginalExtension();
                $nombre = $file->getClientOriginalName();
                //$fileName = rand(11111, 99999) . '.' . $extension;

                $file->move($uploadPath, $nombre);
                $requestData['img'] = 'uploads/users/'.$nombre;
                $requestData['nameimg'] = $nombre;
        }
        $requestData['password']=bcrypt($request['email']);


        
        try {
            $is_save = User::create($requestData);
            $data = array(
                    'name'    => $request->nombres.' '.$request->apellidos,
                    'email'    => $request['email'],
                    'subject' => 'Registro de cuenta en austrogen',
                    'message' => 'Cuenta registrada por el administrador del sitio web'
                );
                $to         = $request->email;
                Mail::to($to)->send(new notifyEmail($data));

                Session::flash('success', 'Cuenta registrada!');
        } catch (\Exception $e) {
                Session::flash('warning', 'Error al crear cuenta!');
        }

        

        return redirect('admin/user');
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
        $user = User::findOrFail($id);

        return view('admin.user.show', compact('user'));
    }

    public function buscarcliente(Request $request){
        if ($request->ajax()) {
            $cliente = User::orderBy('id','DESC')->where('email',$request->id)->first();
            return response()->json($cliente);
        }
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
        $user = User::findOrFail($id);
        $genero = Gender::orderBy('id', 'DESC')->pluck('genero', 'id');
        $paises = Country::orderBy('id', 'DESC')->pluck('country', 'id');
        $provincias = Province::orderBy('id', 'DESC')->pluck('province', 'id');
        $paisseleccionado = [$user->id_country]; 
        $provinciaseleccionada = [$user->id_province]; 
        $generoseleccionado = [$user->id_gender]; 

        return view('admin.user.edit',compact('user','genero','paises','provincias','paisseleccionado','provinciaseleccionada','generoseleccionado'));
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
            'name' => 'required|max:50',
            'nombres' => 'nullable|max:50',
            'apellidos' => 'nullable|max:50',            
            'telefono' => 'nullable|min:1|max:999999999999999',
            'celular' => 'nullable|min:1|max:999999999999999',
            'domicilio' => '|nullable|max:150',
            'email' => 'required|email|max:190',
            'img' => 'mimes:jpg,jpeg,gif,png,xls,xlsx,doc,docx,pdf',
        ]);
        
        $requestData = $request->all();        

        $file = Input::file('img');
        if (!empty($file)) {
                $uploadPath = public_path('uploads/users/');
                $nombre = $file->getClientOriginalName();
                $file->move($uploadPath, $nombre);
                $requestData['img'] = 'uploads/users/'.$nombre;
                $requestData['nameimg'] = $nombre;


                $item_delete = User::findOrFail($id);   
                $move = $item_delete['nameimg'];
                $old = public_path('uploads/users/').$move;
                       //verificamos si la imagen exist
                if(!empty($move)){
                    if(\File::exists($old)){
                        unlink($old);
                    }
                }


        }

        
        //$requestData['password']=bcrypt($request['email']);
        $user = User::findOrFail($id);
        $user->update($requestData);

        Session::flash('flash_message', 'User updated!');

        return redirect('admin/user');
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

        try {
            User::destroy($id);
            Session::flash('flash_message', 'Usuario eliminado!');
        } catch (\Exception $e) {
                Session::flash('warning', 'No se puede eliminar este usuario!');
        }
        

        return redirect('admin/user');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }


}
