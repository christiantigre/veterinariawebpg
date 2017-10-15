<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Notice;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Image;

class NoticesController extends Controller
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
            $notices = Notice::where('title', 'LIKE', "%$keyword%")
				->orWhere('content', 'LIKE', "%$keyword%")
				->orWhere('link', 'LIKE', "%$keyword%")
				->orWhere('img', 'LIKE', "%$keyword%")
				->orWhere('day', 'LIKE', "%$keyword%")
				->orWhere('month', 'LIKE', "%$keyword%")
				->orWhere('compfb', 'LIKE', "%$keyword%")
				->orWhere('comptw', 'LIKE', "%$keyword%")
				->orWhere('compgg', 'LIKE', "%$keyword%")
				->orWhere('visible', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $notices = Notice::paginate($perPage);
        }

        return view('admin.notices.index', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.notices.create');
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
            $path = public_path('uploads/notices/'.$nombre);
            $image = Image::make($file->getRealPath());
            $image->save($path);
        }
        
        $requestData = $request->all();
        
        Notice::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'intro'=>$request->intro,
            'link'=>$request->link,
            'img'=>'uploads/notices/'.$nombre,
            'day'=>$request->day,
            'precio'=>$request->precio,
            'month'=>$request->month,
            'fechainit'=>$request->fechainit,
            'compfb'=>$request->compfb,
            'comptw'=>$request->comptw,
            'compgg'=>$request->compgg,
            'visible'=>$request->visible
        ]);

        Session::flash('flash_message', 'Notice added!');

        return redirect('admin/notices');
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
        $notice = Notice::findOrFail($id);

        return view('admin.notices.show', compact('notice'));
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
        $notice = Notice::findOrFail($id);

        return view('admin.notices.edit', compact('notice'));
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
        
        $notice = Notice::findOrFail($id);
        $notice->update($requestData);

        Session::flash('flash_message', 'Notice updated!');

        return redirect('admin/notices');
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
        Notice::destroy($id);

        Session::flash('flash_message', 'Notice deleted!');

        return redirect('admin/notices');
    }
}
