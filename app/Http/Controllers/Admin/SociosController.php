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
        if(!Input::file("img"))
        {
            $path="";
        }else{
            $file = Input::file('img');
            $nombre = $file->getClientOriginalName();
            $path = public_path('uploads/socios/'.$nombre);
            $image = Image::make($file->getRealPath());
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
            'workplacelink'=>$request->workplacelink
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
        
        $requestData = $request->all();
        
        $socio = Socio::findOrFail($id);
        $socio->update($requestData);

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
