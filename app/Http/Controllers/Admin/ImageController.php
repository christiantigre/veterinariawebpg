<?php

namespace App\Http\Controllers\Admin;

use App\Albun;
use App\Category;
use App\Http\Controllers\Controller;
use App\Image;
use File;
use Illuminate\Http\Request;
use Session;

class ImageController extends Controller
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
            $image = Image::where('file_name', 'LIKE', "%$keyword%")
            ->orWhere('file_size', 'LIKE', "%$keyword%")
            ->orWhere('file_mime', 'LIKE', "%$keyword%")
            ->orWhere('file_path', 'LIKE', "%$keyword%")
            ->orWhere('category_id', 'LIKE', "%$keyword%")
            ->orWhere('albun_id', 'LIKE', "%$keyword%")
            ->paginate($perPage);
        } else {
            $image = Image::paginate($perPage);
        }

        return view('admin.image.index', compact('image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.image.create');
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
        try {
            $file       = $request->file('file');
            $uploadPath = public_path('uploads/galery/');
            
            $nombre     = $request->albun_id . '-' . $request->category_id . '-' . uniqid() .'.'. $file->getClientOriginalExtension();
            $file->move($uploadPath, $nombre);

            $albun = Albun::find($request->albun_id);
            $image = $albun->images()->create([
                'albun_id'    => $request->albun_id,
                'category_id' => $request->category_id,
                'file_name'   => $nombre,
                'file_size'   => $file->getClientSize(),
                'file_mime'   => $file->getClientMimeType(),
                'file_path'   => 'uploads/galery/' . $nombre,
                'img'   => 'uploads/galery/' . $nombre,
                'nameimg'   => $nombre,
            ]);

            return $image;

            Session::flash('success', 'Creado con exito!');

        } catch (Exception $e) {

            Session::flash('warning', 'Error al guardar!!! ' . $e);

        }
        /*$requestData = $request->all();

    Image::create($requestData);

    Session::flash('flash_message', 'Image added!');
    return redirect('admin/image');
     */
}

public function uploadImg($categoria, $albun)
{
    $category   = Category::findOrFail($categoria);
    $albunmodel = Albun::findOrFail($albun);
    $cat        = $category['category'];
    $alb        = $albunmodel['namealbun'];
    $images     = Image::where('albun_id', $albun)
    ->where('category_id', $categoria)
    ->get();
    return view('admin.image.upload', compact('cat', 'alb', 'categoria', 'albun', 'images', 'albunmodel'));
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
        $image = Image::findOrFail($id);

        return view('admin.image.show', compact('image'));
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
        $image = Image::findOrFail($id);
        return view('admin.image.edit', compact('image'));
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

        $image = Image::findOrFail($id);

        try {

            $image->update($requestData);

            Session::flash('success', 'Atualizado con exito!');

        } catch (\Exception $e) {

            Session::flash('warning', 'Error al actualizar!!! ');

        }


        $category = Category::orderBy('id', 'DESC')->where('visible', 1)->pluck('category', 'id');

        $albun = Albun::findOrFail($image->albun_id);

        $images = Image::where('albun_id', $albun->id)->get();

        return view('admin.albun.edit', compact('albun', 'category', 'images'));



        //return redirect('admin/albun');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function varios($var){
        $category = Category::orderBy('id', 'DESC')->where('visible', 1)->pluck('category', 'id');

        $images = Image::where('albun_id', $var)->get();
        return view('admin.albun.varios', compact('images'));
    }
    public function deletevarios(Request $request){
        try {
            $registros = $request->idcheck;
            foreach($registros as $registro){
            //$ids[]=$registro;
                $item_delete = Image::findOrFail($registro);  
                $move = $item_delete['nameimg'];
                $old = public_path('uploads/galery/').$move;
                if(!empty($move)){
                    if(\File::exists($old)){
                        unlink($old);
                    }
                }
                $image = Image::destroy($registro);
            }
            Session::flash('success', 'Eliminado con exito!');

        } catch (Exception $e) {

            Session::flash('warning', 'Error al eliminar!!! ' . $e);

        }
        return redirect('admin/albun');
    }
    public function destroy($id)
    {
        try {

            $item_delete = Image::findOrFail($id);  
            
            $move = $item_delete['nameimg'];
            $old = public_path('uploads/galery/').$move;
            if(!empty($move)){
                if(\File::exists($old)){
                    unlink($old);
                }
            }
            $image = Image::destroy($id);

            Session::flash('success', 'Eliminado con exito!');

            return redirect('admin/albun');

        } catch (Exception $e) {

            Session::flash('warning', 'Error al eliminar!!! ' . $e);

        }
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
}
