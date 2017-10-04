<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Card;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Image;

class CardController extends Controller
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
            $card = Card::where('title', 'LIKE', "%$keyword%")
				->orWhere('paragraph', 'LIKE', "%$keyword%")
				->orWhere('subtitle', 'LIKE', "%$keyword%")
				->orWhere('subtitle2', 'LIKE', "%$keyword%")
				->orWhere('subtitle3', 'LIKE', "%$keyword%")
				->orWhere('linkcard', 'LIKE', "%$keyword%")
				->orWhere('img', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $card = Card::paginate($perPage);
        }

        return view('admin.card.index', compact('card'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.card.create');
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
            $nameContent="";
        }else{
            $file = Input::file('img');
            $nameContent = $file->getClientOriginalName();
            $path = public_path('uploads/card/content/'.$nameContent);
            $image = Image::make($file->getRealPath());
            $image->resize(100, 100);
            $image->save($path);
        }
        if(!Input::file("imgHeader"))
        {
            $nameHeader="";
        }else{
            $file = Input::file('imgHeader');
            $nameHeader = $file->getClientOriginalName();
            $path = public_path('uploads/card/head/'.$nameHeader);
            $image = Image::make($file->getRealPath());
            $image->resize(100, 100);
            $image->save($path);
        }

        $requestData = $request->all();

        
                if (!empty($nameContent)) {
                 $imgCont = 'uploads/card/content/'.$nameContent;   
                }else{
                    $imgCont = '';
                }
                if (!empty($nameHeader)) {
                 $imgHead = 'uploads/card/head/'.$nameHeader;   
                }else{
                    $imgHead='';
                }

            Card::create([
                'title'=>$request->title,
                'subtitle'=>$request->subtitle,
                'subtitle2'=>$request->subtitle2,
                'subtitle3'=>$request->subtitle3,
                'intro'=>$request->intro,
                'paragraph'=>$request->paragraph,
                'detall'=>$request->detall,
                'linkcard'=>$request->linkcard,
                'img'=>$imgCont,
                'imgHeader'=>$imgHead,
                'visible'=>$request->visible
            ]);
        

        
//        Card::create($requestData);

        Session::flash('flash_message', 'Card added!');

        return redirect('admin/card');
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
        $card = Card::findOrFail($id);

        return view('admin.card.show', compact('card'));
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
        $card = Card::findOrFail($id);

        return view('admin.card.edit', compact('card'));
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
        $rutaCont = 'uploads/card/content/';
        $rutaHead = 'uploads/card/head/';
        if(!Input::file("img"))
        {
            $nameContent="";
        }else{
            $file = Input::file('img');
            $nameContent = $file->getClientOriginalName();
            $path = public_path($rutaCont.$nameContent);
            $image = Image::make($file->getRealPath());
            $imgCont = $rutaCont.$nameContent;
            $image->resize(100, 100);
            $image->save($path);
        }
        if(!Input::file("imgHeader"))
        {
            $nameHeader="";
        }else{
            $file = Input::file('imgHeader');
            $nameHeader = $file->getClientOriginalName();
            $path = public_path($rutaHead.$nameHeader);
            $image = Image::make($file->getRealPath());
            $imgHead = $rutaHead.$nameHeader;
            $image->resize(100, 100);
            $image->save($path);
        }
        
        $requestData = $request->all();

        if((empty($nameContent))and(!empty($nameHeader))){
            $card = Card::findOrFail($id);
            $card->title=$request->title;
            $card->subtitle=$request->subtitle;
            $card->subtitle2=$request->subtitle2;
            $card->subtitle3=$request->subtitle3;
            $card->intro=$request->intro;
            $card->paragraph=$request->paragraph;
            $card->detall=$request->detall;
            $card->linkcard=$request->linkcard;
            $card->imgHeader=$rutaHead.$nameHeader;
            $card->visible=$request->visible;
            $card->save();
        }elseif ((empty($nameHeader)and(!empty($nameContent)))) {         
            $card = Card::findOrFail($id);
            $card->title=$request->title;
            $card->subtitle=$request->subtitle;
            $card->subtitle2=$request->subtitle2;
            $card->subtitle3=$request->subtitle3;
            $card->intro=$request->intro;
            $card->paragraph=$request->paragraph;
            $card->detall=$request->detall;
            $card->linkcard=$request->linkcard;
            $card->img=$rutaCont.$nameContent;
            $card->visible=$request->visible;
            $card->save();
        }elseif ((empty($nameHeader)and(empty($nameContent)))){            
            $card = Card::findOrFail($id);
            $card->title=$request->title;
            $card->subtitle=$request->subtitle;
            $card->subtitle2=$request->subtitle2;
            $card->subtitle3=$request->subtitle3;
            $card->intro=$request->intro;
            $card->paragraph=$request->paragraph;
            $card->detall=$request->detall;
            $card->linkcard=$request->linkcard;
            $card->visible=$request->visible;
            $card->save();
        }else{
            $card = Card::findOrFail($id);
            $card->title=$request->title;
            $card->subtitle=$request->subtitle;
            $card->subtitle2=$request->subtitle2;
            $card->subtitle3=$request->subtitle3;
            $card->intro=$request->intro;
            $card->paragraph=$request->paragraph;
            $card->detall=$request->detall;
            $card->img=$rutaCont.$nameContent;
            $card->imgHeader=$rutaHead.$nameHeader;
            $card->linkcard=$request->linkcard;
            $card->visible=$request->visible;
            $card->save();
        }
        
        

        Session::flash('flash_message', 'Card updated!');

        return redirect('admin/card');
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
        Card::destroy($id);

        Session::flash('flash_message', 'Card deleted!');

        return redirect('admin/card');
    }
}
