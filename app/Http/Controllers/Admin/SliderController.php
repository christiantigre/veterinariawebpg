<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Slider;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Image;

class SliderController extends Controller
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
            $slider = Slider::where('img', 'LIKE', "%$keyword%")
				->orWhere('title', 'LIKE', "%$keyword%")
				->orWhere('content', 'LIKE', "%$keyword%")
				->orWhere('linkinfo', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $slider = Slider::paginate($perPage);
        }

        return view('admin.slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.slider.create');
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
            $path = public_path('uploads/slider/'.$nombre);
            $image = Image::make($file->getRealPath());
            $image->save($path);
        }
        
        $requestData = $request->all();
        
        //Slider::create($requestData);
        Slider::create([
            'img'=>'uploads/slider/'.$nombre,
            'title'=>$request->title,
            'content'=>$request->content,
            'linkinfo'=>$request->linkinfo
        ]);
   
        Session::flash('flash_message', 'Slider added!');

        return redirect('admin/slider');
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
        $slider = Slider::findOrFail($id);

        return view('admin.slider.show', compact('slider'));
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
        $slider = Slider::findOrFail($id);

        return view('admin.slider.edit', compact('slider'));
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
        if(!Input::file("img"))
        {
            $nombre="";
        }else{
            $file = Input::file('img');
            $nombre = $file->getClientOriginalName();
            $path = public_path('uploads/slider/'.$nombre);
            $image = Image::make($file->getRealPath());
            $image->save($path);
        }
        
        $requestData = $request->all();
        
        if(empty($nombre)){
            $slider = Slider::findOrFail($id);
        $slider->title = $request->title;
        $slider->content = $request->content;
        $slider->linkinfo= $request->linkinfo;
        $slider->subtittle= $request->subtittle;
        $slider->body= $request->body;
        $slider->detall= $request->detall;
        $slider->save();
        }else{
            $slider = Slider::findOrFail($id);
        $slider->img = 'uploads/slider/'.$nombre;
        $slider->title = $request->title;
        $slider->content = $request->content;
        $slider->linkinfo= $request->linkinfo;
        $slider->subtittle= $request->subtittle;
        $slider->body= $request->body;
        $slider->detall= $request->detall;
        $slider->save();
        }
        //$slider->update($requestData);

        Session::flash('flash_message', 'Slider updated!');

        return redirect('admin/slider');
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
        Slider::destroy($id);

        Session::flash('flash_message', 'Slider deleted!');

        return redirect('admin/slider');
    }
}
