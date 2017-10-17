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
        if(!Input::file("img"))
        {
            $path="";
        }else{
            $file = Input::file('img');
            $nombre = $file->getClientOriginalName();
            $path = public_path('uploads/socios/'.$nombre);
            $image = Image::make($file->getRealPath());
            $image->resize(350, 400);
            //$image->resize();
            //$image->resize(1200, 900);
            $image->save($path);
        }
        
        //$requestData = $request->all();        
        //Socio::create($requestData);
         Socio::create([
            'img'=>'uploads/socios/'.$nombre,
            'description'=>$request->description,
            'name'=>$request->name,
            'lastname'=>$request->lastname,
            'fb'=>$request->fb,
            'tw'=>$request->tw,
            'in'=>$request->in,
            'gg'=>$request->gg,
            'lk'=>$request->lk,
            'especialitation'=>$request->especialitation,
            'workplace'=>$request->workplace,
            'workplacelink'=>$request->workplacelink,
            'is_active'=>$request->is_active,
            'abrevTitulo'=>$request->abrevTitulo
        ]);

        Session::flash('flash_message', 'Socio added!');

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
        $rutaHead = 'uploads/socios/';
        if(!Input::file("img"))
            {
                $nameHeader="";
            }else{
                $soc_delete = Socio::findOrFail($id);   
                $move = $soc_delete['img'];
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
                $image->resize(350, 400);
                //$image->resize(1800, 720);
                $image->save($path);
            }
            if (!empty($nameHeader)) {
             $imgHead = $rutaHead.$nameHeader;   
         }else{
            $imgHead='';
        }


        //$requestData = $request->all();
        
        //$socio = Socio::findOrFail($id);
        //$socio->update($requestData);
        if(empty($nameHeader)){
            $socio = Socio::findOrFail($id);
            $socio->description = $request->description;
            $socio->abrevTitulo = $request->abrevTitulo;
            $socio->name = $request->name;
            $socio->lastname = $request->lastname;
            $socio->fb = $request->fb;
            $socio->tw = $request->tw;
            $socio->in = $request->in;
            $socio->gg = $request->gg;
            $socio->lk = $request->lk;
            $socio->especialitation = $request->especialitation;
            $socio->blog = $request->blog;
            $socio->workplacelink = $request->workplacelink;
            $socio->workplace = $request->workplace;
            $socio->is_active = $request->is_active;
            $socio->save();
        }else{
            $socio = Socio::findOrFail($id);
            $socio->img = $imgHead;
            $socio->description = $request->description;
            $socio->abrevTitulo = $request->abrevTitulo;
            $socio->name = $request->name;
            $socio->lastname = $request->lastname;
            $socio->fb = $request->fb;
            $socio->tw = $request->tw;
            $socio->in = $request->in;
            $socio->gg = $request->gg;
            $socio->lk = $request->lk;
            $socio->especialitation = $request->especialitation;
            $socio->blog = $request->blog;
            $socio->workplacelink = $request->workplacelink;
            $socio->workplace = $request->workplace;
            $socio->is_active = $request->is_active;
            $socio->save();
        }

        Session::flash('flash_message', 'Socio updated!');

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
