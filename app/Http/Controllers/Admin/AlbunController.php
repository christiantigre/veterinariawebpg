<?php

namespace App\Http\Controllers\Admin;

use App\Albun;
use App\Category;
use App\Http\Controllers\Controller;
use App\Image;
use Illuminate\Http\Request;
use Session;

class AlbunController extends Controller
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
            $albun = Albun::orderBy('category_id','DESC')
                ->where('namealbun', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('active', 'LIKE', "%$keyword%")
                ->orWhere('category_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $albun = Albun::orderBy('category_id','DESC')->paginate($perPage);
        }

        return view('admin.albun.index', compact('albun'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $category = Category::orderBy('id', 'DESC')->where('visible', 1)->pluck('category', 'id');
        return view('admin.albun.create', compact('category'));
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
            'namealbun'   => 'max:191',
            'category_id' => 'required',
        ]);

        $requestData = $request->all();

        try {

            Albun::create($requestData);

            Session::flash('success', 'Creado con exito!');

        } catch (Exception $e) {

            Session::flash('warning', 'Error al guardar!!! ' . $e);

        }

        return redirect('admin/albun');
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
        $albun = Albun::findOrFail($id);

        return view('admin.albun.show', compact('albun'));
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
        $category = Category::orderBy('id', 'DESC')->where('visible', 1)->pluck('category', 'id');

        $albun = Albun::findOrFail($id);

        $images = Image::where('albun_id', $albun->id)->get();

        return view('admin.albun.edit', compact('albun', 'category', 'images'));
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
            'namealbun'   => 'max:191',
            'category_id' => 'required',
        ]);

        $requestData = $request->all();

        $albun = Albun::findOrFail($id);

        try {

            $albun->update($requestData);

            Session::flash('success', 'Atualizado con exito!');

        } catch (\Exception $e) {

            Session::flash('warning', 'Error al actualizar!!! ');

        }

        return redirect('admin/albun');
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
            $registros = Image::where('albun_id', $id)->get(); 
            foreach($registros as $registro){
                $item_delete = Image::findOrFail($registro->id);  
                $move = $item_delete['nameimg'];
                $old = public_path('uploads/galery/').$move;
                if(!empty($move)){
                    if(\File::exists($old)){
                        unlink($old);
                    }
                }
                }
            Image::where('albun_id', $id)->delete();
            Albun::destroy($id);

            Session::flash('success', 'Eliminado con exito!');

        } catch (\Exception $e) {

            Session::flash('warning', 'Error al eliminar!!! ');

        }

        return redirect('admin/albun');
    }
    
    protected function guard()
    {
        return Auth::guard('admin');
    }
}
