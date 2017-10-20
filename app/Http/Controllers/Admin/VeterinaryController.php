<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Veterinary;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Image;

class VeterinaryController extends Controller
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
            $veterinary = Veterinary::where('name', 'LIKE', "%$keyword%")
            ->orWhere('address', 'LIKE', "%$keyword%")
            ->orWhere('tlf1', 'LIKE', "%$keyword%")
            ->orWhere('tlf2', 'LIKE', "%$keyword%")
            ->orWhere('cel1', 'LIKE', "%$keyword%")
            ->orWhere('cel2', 'LIKE', "%$keyword%")
            ->orWhere('mail', 'LIKE', "%$keyword%")
            ->orWhere('linkweb', 'LIKE', "%$keyword%")
            ->orWhere('prop', 'LIKE', "%$keyword%")
            ->orWhere('gerent', 'LIKE', "%$keyword%")
            ->orWhere('area', 'LIKE', "%$keyword%")
            ->orWhere('description', 'LIKE', "%$keyword%")
            ->orWhere('logo', 'LIKE', "%$keyword%")
            ->orWhere('datestart', 'LIKE', "%$keyword%")
            ->orWhere('ruc', 'LIKE', "%$keyword%")
            ->orWhere('razonsocial', 'LIKE', "%$keyword%")
            ->paginate($perPage);
        } else {
            $veterinary = Veterinary::paginate($perPage);
        }

        return view('admin.veterinary.index', compact('veterinary'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.veterinary.create');
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
        if(!Input::file("logo"))
            {
                $nombre="";
            }else{
                $file = Input::file('logo');
                $nombre = $file->getClientOriginalName();
                $path = public_path('uploads/logos/'.$nombre);
                $image = Image::make($file->getRealPath());
                $image->save($path);
            }

            if (empty($nombre)) {
                
            }

        //$requestData = $request->all();
        
        //Veterinary::create($requestData);
            if(!empty($nombre)){
                Veterinary::create([
                    'name'=>$request->name,
                    'address'=>$request->address,
                    'tlf1'=>$request->tlf1,
                    'tlf2'=>$request->tlf2,
                    'cel1'=>$request->cel1,
                    'cel2'=>$request->cel2,
                    'mail'=>$request->mail,
                    'linkweb'=>$request->linkweb,
                    'prop'=>$request->prop,
                    'gerent'=>$request->gerent,
                    'area'=>$request->area,
                    'description'=>$request->description,
                    'logo'=>'uploads/logos/'.$nombre,
                    'namelogo'=>$nombre,
                    'datestart'=>$request->datestart,
                    'ruc'=>$request->ruc,
                    'razonsocial'=>$request->razonsocial,
                    'fb'=>$request->fb,
                    'tw'=>$request->tw,
                    'in'=>$request->in,
                    'yt'=>$request->yt,
                    'gg'=>$request->gg,
                    'latitud'=>$request->latitud,
                    'longitud'=>$request->longitud,
                    'mision'=>$request->mision,
                    'vision'=>$request->vision,
                    'fax'=>$request->fax
                ]);
            }else{
                Veterinary::create([
                    'name'=>$request->name,
                    'address'=>$request->address,
                    'tlf1'=>$request->tlf1,
                    'tlf2'=>$request->tlf2,
                    'cel1'=>$request->cel1,
                    'cel2'=>$request->cel2,
                    'mail'=>$request->mail,
                    'linkweb'=>$request->linkweb,
                    'prop'=>$request->prop,
                    'gerent'=>$request->gerent,
                    'area'=>$request->area,
                    'description'=>$request->description,
                    'datestart'=>$request->datestart,
                    'ruc'=>$request->ruc,
                    'razonsocial'=>$request->razonsocial,
                    'fb'=>$request->fb,
                    'tw'=>$request->tw,
                    'in'=>$request->in,
                    'yt'=>$request->yt,
                    'gg'=>$request->gg,
                    'latitud'=>$request->latitud,
                    'longitud'=>$request->longitud,
                    'mision'=>$request->mision,
                    'vision'=>$request->vision,
                    'fax'=>$request->fax
                ]);
            }
        Session::flash('flash_message', 'Veterinary added!');

        return redirect('admin/veterinary');
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
        $veterinary = Veterinary::findOrFail($id);

        return view('admin.veterinary.show', compact('veterinary'));
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
        $veterinary = Veterinary::findOrFail($id);

        return view('admin.veterinary.edit', compact('veterinary'));
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
            'name' => '|max:150',
            'address' => '|max:150',
            'tlf1' => 'numeric|max:999999999999999999',
            'tlf2' => 'numeric|max:999999999999999999',
            'cel1' => 'numeric|max:999999999999999999',
            'cel2' => 'numeric|max:999999999999999999',
            'mail' => '|max:45|email|',
            'logo' => 'mimes:jpeg,png',
            'linkweb' => 'max:150',
            'gerent' => 'max:150',
            'area' => 'max:150',
            'ruc' => 'max:20',
            'razonsocial' => 'max:150',
            'fb' => 'max:150',
            'tw' => 'max:150',
            'in' => 'max:150',
            'yt' => 'max:150',
            'gg' => 'max:150',
            'fax' => 'max:50',
        ]);


        if(!Input::file("logo"))
            {
                $nombre="";
            }else{
                $vete_delete = Veterinary::findOrFail($id);   
                $move = $vete_delete['logo'];
                $old = public_path().'/'.$move;
                $new = public_path().'/deleted/';
                       //verificamos si la imagen existe
                if(!empty($move)){
                    if(\File::exists($old)){
                        unlink($old);
                    }
                }


                $file = Input::file('logo');
                $nombre = $file->getClientOriginalName();
                $path = public_path('uploads/logos/'.$nombre);
                $image = Image::make($file->getRealPath());
                $image->save($path);
            }
            if(!empty($nombre)){
                $requestData = $request->all();
                $veterinary = Veterinary::findOrFail($id);
                $veterinary->name = $request->name;
                $veterinary->address = $request->address;
                $veterinary->tlf1 = $request->tlf1;
                $veterinary->tlf2 = $request->tlf2;
                $veterinary->cel1 = $request->cel1;
                $veterinary->cel2 = $request->cel2;
                $veterinary->mail = $request->mail;
                $veterinary->linkweb = $request->linkweb;
                $veterinary->prop = $request->prop;
                $veterinary->gerent = $request->gerent;
                $veterinary->area = $request->area;
                $veterinary->description = $request->description;
                $veterinary->logo = 'uploads/logos/'.$nombre;
                $veterinary->namelogo = $nombre;
                $veterinary->datestart = $request->datestart;
                $veterinary->ruc = $request->ruc;
                $veterinary->razonsocial = $request->razonsocial;
                $veterinary->fb = $request->fb;
                $veterinary->tw = $request->tw;
                $veterinary->in = $request->in;
                $veterinary->yt = $request->yt;
                $veterinary->gg = $request->gg;
                $veterinary->latitud = $request->latitud;
                $veterinary->longitud = $request->longitud;
                $veterinary->mision = $request->mision;
                $veterinary->vision = $request->vision;
                $veterinary->fax = $request->fax;
                $veterinary->save();
            }else{
                $requestData = $request->all();
                $veterinary = Veterinary::findOrFail($id);
                $veterinary->name = $request->name;
                $veterinary->address = $request->address;
                $veterinary->tlf1 = $request->tlf1;
                $veterinary->tlf2 = $request->tlf2;
                $veterinary->cel1 = $request->cel1;
                $veterinary->cel2 = $request->cel2;
                $veterinary->mail = $request->mail;
                $veterinary->linkweb = $request->linkweb;
                $veterinary->prop = $request->prop;
                $veterinary->gerent = $request->gerent;
                $veterinary->area = $request->area;
                $veterinary->description = $request->description;
                $veterinary->datestart = $request->datestart;
                $veterinary->ruc = $request->ruc;
                $veterinary->razonsocial = $request->razonsocial;
                $veterinary->fb = $request->fb;
                $veterinary->tw = $request->tw;
                $veterinary->in = $request->in;
                $veterinary->yt = $request->yt;
                $veterinary->gg = $request->gg;
                $veterinary->latitud = $request->latitud;
                $veterinary->longitud = $request->longitud;
                $veterinary->mision = $request->mision;
                $veterinary->vision = $request->vision;
                $veterinary->fax = $request->fax;
                $veterinary->save();
            }

        //$veterinary->update($requestData);

            Session::flash('flash_message', 'Veterinary updated!');

            return redirect('admin/veterinary');
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
        Veterinary::destroy($id);

        Session::flash('flash_message', 'Veterinary deleted!');

        return redirect('admin/veterinary');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
}


 /*public function postSave(){
    if(!\Input::file("file"))
    {
        return redirect('uploads')->with('error-message', 'File has required field');
    }
 
    $mime = \Input::file('file')->getMimeType();
    $extension = strtolower(\Input::file('file')->getClientOriginalExtension());
    $fileName = uniqid().'.'.$extension;
    $path = "files_uploaded";
 
    switch ($mime)
    {
        case "image/jpeg":
        case "image/png":
        case "image/gif":
        case "application/pdf":
            if (\Request::file('file')->isValid())
            {
                \Request::file('file')->move($path, $fileName);
                $upload = new Upload();
                $upload->filename = $fileName;
                if($upload->save())
                {
                    return redirect('uploads/socios')->with('success-message', 'File has been uploaded');
                }
                else
                {
                    \File::delete($path."/".$fileName);
                    return redirect('uploads/socios')->with('error-message', 'An error ocurred saving data into database');
                }
            }
        break;
        default:
            return redirect('uploads')->with('error-message', 'Extension file is not valid');
        }
    }



                



    */