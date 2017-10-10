<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Modalidad;
use Illuminate\Http\Request;
use Session;

class ModalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $modalidad = Modalidad::where('modalidad', 'LIKE', "%$keyword%")
				->orWhere('is_active', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $modalidad = Modalidad::paginate($perPage);
        }

        return view('admin.modalidad.index', compact('modalidad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.modalidad.create');
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
        
        Modalidad::create($requestData);

        Session::flash('flash_message', 'Modalidad added!');

        return redirect('admin/modalidad');
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
        $modalidad = Modalidad::findOrFail($id);

        return view('admin.modalidad.show', compact('modalidad'));
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
        $modalidad = Modalidad::findOrFail($id);

        return view('admin.modalidad.edit', compact('modalidad'));
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
        
        $modalidad = Modalidad::findOrFail($id);
        $modalidad->update($requestData);

        Session::flash('flash_message', 'Modalidad updated!');

        return redirect('admin/modalidad');
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
        Modalidad::destroy($id);

        Session::flash('flash_message', 'Modalidad deleted!');

        return redirect('admin/modalidad');
    }
}
