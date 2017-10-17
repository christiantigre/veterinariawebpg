<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Veterinary;
use App\Gender;
use App\Country;
use App\Province;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Image;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        if(Auth::user()){
            $user = Auth::user();
        }else{
            return redirect('/home');
        }
        $veterinary   = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $pag          = '';
        return view('web.partials.pagina.user.perfil',compact('veterinary','pag','user'));
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

        if(Auth::user()){
            $user = Auth::user();
        }else{
            return redirect('/home');
        }
        $genero = Gender::orderBy('id', 'DESC')->pluck('genero', 'id');
        $paises = Country::orderBy('id', 'DESC')->pluck('country', 'id');
        $provincias = Province::orderBy('id', 'DESC')->pluck('province', 'id');
        $veterinary   = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $pag  = '';
        $user = User::findOrFail($id);
        return view('web.partials.pagina.user.configperfil',compact('veterinary','pag','user','genero','paises','provincias'));
        //dd($user);
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
            'name' => '|min:1|max:20',
            'nombres' => 'required|min:1|max:50',
            'apellidos' => 'required|min:1|max:50',
            'telefono' => 'numeric|min:1|max:999999999999999',
            'celular' => 'numeric|min:1|max:999999999999999',
            'domicilio' => 'max:150',
        ]);

        $requestData = $request->all();
        
        $files = Input::file('img');
        $user = User::findOrFail($id);
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

        return redirect('/perfil');
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

   
}
