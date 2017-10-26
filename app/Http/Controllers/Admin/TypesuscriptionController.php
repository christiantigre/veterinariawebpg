<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Typesuscription;
use Illuminate\Http\Request;
use Session;

class TypesuscriptionController extends Controller
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
            $typesuscription = Typesuscription::where('tipo', 'LIKE', "%$keyword%")
				->orWhere('estado', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $typesuscription = Typesuscription::paginate($perPage);
        }

        return view('admin.typesuscription.index', compact('typesuscription'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.typesuscription.create');
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
        
        Typesuscription::create($requestData);

        Session::flash('flash_message', 'Typesuscription added!');

        return redirect('admin/typesuscription');
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
        $typesuscription = Typesuscription::findOrFail($id);

        return view('admin.typesuscription.show', compact('typesuscription'));
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
        $typesuscription = Typesuscription::findOrFail($id);

        return view('admin.typesuscription.edit', compact('typesuscription'));
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
        
        $typesuscription = Typesuscription::findOrFail($id);
        $typesuscription->update($requestData);

        Session::flash('flash_message', 'Typesuscription updated!');

        return redirect('admin/typesuscription');
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
        Typesuscription::destroy($id);

        Session::flash('flash_message', 'Typesuscription deleted!');

        return redirect('admin/typesuscription');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }


}
