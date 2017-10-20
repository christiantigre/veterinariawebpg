<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tutor;
use Illuminate\Http\Request;
use Session;

class TutorController extends Controller
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
            $tutor = Tutor::where('img', 'LIKE', "%$keyword%")
				->orWhere('description', 'LIKE', "%$keyword%")
				->orWhere('name', 'LIKE', "%$keyword%")
				->orWhere('lastname', 'LIKE', "%$keyword%")
				->orWhere('fb', 'LIKE', "%$keyword%")
				->orWhere('tw', 'LIKE', "%$keyword%")
				->orWhere('in', 'LIKE', "%$keyword%")
				->orWhere('gg', 'LIKE', "%$keyword%")
				->orWhere('lk', 'LIKE', "%$keyword%")
				->orWhere('especialitation', 'LIKE', "%$keyword%")
				->orWhere('datenac', 'LIKE', "%$keyword%")
				->orWhere('workplace', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $tutor = Tutor::paginate($perPage);
        }

        return view('admin.tutor.index', compact('tutor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.tutor.create');
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
        
        $requestData = $request->all();
        
        Tutor::create($requestData);

        Session::flash('flash_message', 'Tutor added!');

        return redirect('admin/tutor');
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
        $tutor = Tutor::findOrFail($id);

        return view('admin.tutor.show', compact('tutor'));
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
        $tutor = Tutor::findOrFail($id);

        return view('admin.tutor.edit', compact('tutor'));
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
        
        $tutor = Tutor::findOrFail($id);
        $tutor->update($requestData);

        Session::flash('flash_message', 'Tutor updated!');

        return redirect('admin/tutor');
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
        Tutor::destroy($id);

        Session::flash('flash_message', 'Tutor deleted!');

        return redirect('admin/tutor');
    }
    protected function guard()
    {
        return Auth::guard('admin');
    }
}
