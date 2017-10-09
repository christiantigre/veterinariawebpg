<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Note;
use App\Tag;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Image;

class NotesController extends Controller
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
            $notes = Note::where('title', 'LIKE', "%$keyword%")
            ->orWhere('description', 'LIKE', "%$keyword%")
            ->orWhere('link', 'LIKE', "%$keyword%")
            ->orWhere('name', 'LIKE', "%$keyword%")
            ->paginate($perPage);
        } else {
            $notes = Note::paginate($perPage);
        }

        return view('admin.notes.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $tags = Tag::orderBy('id','DESC')->where('visible',1)->pluck('tag','id');
        return view('admin.notes.create',compact('tags'));
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
        $data = $request->session()->all();
        $mailAdmin = auth('admin')->user()->email;
        $IdAdmin = auth('admin')->user()->id;
        if(!Input::file("imgHeader"))
            {
                $nameHeader="";
            }else{
                $file = Input::file('imgHeader');
                $nameHeader = $file->getClientOriginalName();
                $path = public_path('uploads/notes/head/'.$nameHeader);
                $image = Image::make($file->getRealPath());
                $image->resize(100, 100);
                $image->save($path);
            }
            if (!empty($nameHeader)) {
             $imgHead = 'uploads/notes/head/'.$nameHeader;   
         }else{
            $imgHead='';
        }

        $requestData = $request->all();

        //Note::create($requestData);
        Note::create([
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'intro'=>$request->intro,
            'description'=>$request->description,
            'link'=>$request->link,
            'name'=>$request->name,
            'imgHeader'=>$imgHead,
            'nameimg'=>$nameHeader,
            'visible'=>$request->visible,
            'webvisible'=>$request->webvisible,
            'tag_id'=>$request->tag_id,
            'admins_id'=>$IdAdmin
        ]);

        Session::flash('flash_message', 'Note added!');

        return redirect('admin/notes');
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
        $note = Note::findOrFail($id);

        return view('admin.notes.show', compact('note'));
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
        $tags = Tag::orderBy('id','DESC')->where('visible',1)->pluck('tag','id');
        $note = Note::findOrFail($id);

        return view('admin.notes.edit', compact('note','tags'));
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
        $rutaHead = 'uploads/notes/head/';
        $data = $request->session()->all();
        $mailAdmin = auth('admin')->user()->email;
        $IdAdmin = auth('admin')->user()->id;
        if(!Input::file("imgHeader"))
            {
                $nameHeader="";
            }else{
                $note_delete = Note::findOrFail($id);   
                $move = $note_delete['imgHeader'];
                $old = public_path().'/'.$move;
                       //verificamos si la imagen exist
                if(!empty($move)){
                    if(\File::exists($old)){
                        unlink($old);
                    }
                }


                $file = Input::file('imgHeader');
                $nameHeader = $file->getClientOriginalName();
                $path = public_path($rutaHead.$nameHeader);
                $image = Image::make($file->getRealPath());
                $image->resize(1800, 720);
                $image->save($path);
            }
            if (!empty($nameHeader)) {
             $imgHead = $rutaHead.$nameHeader;   
         }else{
            $imgHead='';
        }

        $requestData = $request->all();
        
        //
        //$note->update($requestData);
        if(empty($nameHeader)){
            $note = Note::findOrFail($id);
            $note->title = $request->title;
            $note->subtitle = $request->subtitle;
            $note->intro = $request->intro;
            $note->description = $request->description;
            $note->link = $request->link;
            $note->visible = $request->visible;
            $note->webvisible = $request->webvisible;
            $note->tag_id = $request->tag_id;
            $note->admins_id = $IdAdmin;
            $note->save();
        }else{
            $note = Note::findOrFail($id);
            $note->title = $request->title;
            $note->subtitle = $request->subtitle;
            $note->intro = $request->intro;
            $note->description = $request->description;
            $note->link = $request->link;
            $note->imgHeader = $imgHead;
            $note->nameimg = $nameHeader;
            $note->visible = $request->visible;
            $note->webvisible = $request->webvisible;
            $note->tag_id = $request->tag_id;
            $note->admins_id = $IdAdmin;
            $note->save();
        }

        Session::flash('flash_message', 'Note updated!');

        return redirect('admin/notes');
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
        Note::destroy($id);

        Session::flash('flash_message', 'Note deleted!');

        return redirect('admin/notes');
    }
}
