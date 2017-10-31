<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Socio;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Image;

class SociosController extends Controller
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
            $socios = Socio::where('img', 'LIKE', "%$keyword%")
				->orWhere('description', 'LIKE', "%$keyword%")
				->orWhere('name', 'LIKE', "%$keyword%")
				->orWhere('lastname', 'LIKE', "%$keyword%")
				->orWhere('fb', 'LIKE', "%$keyword%")
				->orWhere('tw', 'LIKE', "%$keyword%")
				->orWhere('in', 'LIKE', "%$keyword%")
				->orWhere('gg', 'LIKE', "%$keyword%")
				->orWhere('lk', 'LIKE', "%$keyword%")
				->orWhere('especialitation', 'LIKE', "%$keyword%")
				->orWhere('blog', 'LIKE', "%$keyword%")
				->orWhere('workplace', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $socios = Socio::paginate($perPage);
        }

        return view('admin.socios.index', compact('socios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.socios.create');
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
            'img' => 'mimes:jpeg,png',
            'name' => '|max:150',
            'abrevTitulo' => '|max:15',
            'name' => 'max:50',
            'lastname' => '|max:50',
            'fb' => 'max:150',
            'tw' => 'max:150',
            'in' => 'max:150',
            'lk' => 'max:150',
            'gg' => 'max:150',
            'especialitation' => 'max:150',
            'blog' => 'max:150',
            'workplacelink' => 'max:150',
            'workplace' => 'max:150',
        ]);
        
        if ($request->hasFile('img')) {
            $file = Input::file('img');
                $uploadPath = public_path('uploads/socios/');
                $extension = $file->getClientOriginalName();
                $image  = Image::make($file->getRealPath());
                $image->resize(350, 400);
                $image->save($uploadPath.$extension);
                //$file->move($uploadPath, $extension);
                $requestData['img'] = 'uploads/socios/'.$extension;
                $requestData['nameimg'] = $extension;
        }
        
        
        try {            
            Socio::create($requestData);
            Session::flash('success', 'Socio registrado!');
        } catch (\Exception $e) {
            Session::flash('warning', '!!!Error al registrar socio');
            
        }

        return redirect('admin/socios');
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
        $socio = Socio::findOrFail($id);

        return view('admin.socios.show', compact('socio'));
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
        $socio = Socio::findOrFail($id);

        return view('admin.socios.edit', compact('socio'));
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
            'img' => 'mimes:jpeg,png',
            'name' => '|max:150',
            'abrevTitulo' => '|max:15',
            'name' => 'max:50',
            'lastname' => '|max:50',
            'fb' => 'max:150',
            'tw' => 'max:150',
            'in' => 'max:150',
            'lk' => 'max:150',
            'gg' => 'max:150',
            'especialitation' => 'max:150',
            'blog' => 'max:150',
            'workplacelink' => 'max:150',
            'workplace' => 'max:150',
        ]);
        
        $requestData = $request->all();
        $files = Input::file('img');

        if (!empty($files)) {
                $uploadPath = public_path('uploads/socios/');
                $extension = $files->getClientOriginalName();
                $image  = Image::make($files->getRealPath());
                $image->resize(350, 400);
                $image->save($uploadPath.$extension);
                $requestData['img'] = 'uploads/socios/'.$extension;
                $requestData['nameimg'] = $extension;

                $item_delete = Socio::findOrFail($id);   
                $move = $item_delete['nameimg'];
                $old = public_path('uploads/socios/').$move;
                if(!empty($move)){
                    if(\File::exists($old)){
                        unlink($old);
                    }
                }
        }

        $socio = Socio::findOrFail($id);
        try {            
            $socio->update($requestData);
            Session::flash('success', 'Actualizado correctamente');
        } catch (\Exception $e) {
            Session::flash('warning', '!!!Error al actualizar');
            
        }

        return redirect('admin/socios');
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
        Socio::destroy($id);

        Session::flash('flash_message', 'Socio deleted!');

        return redirect('admin/socios');
    }
}
