<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Service;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;

class ServiceController extends Controller
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
            $service = Service::where('service', 'LIKE', "%$keyword%")
				->orWhere('is_active', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $service = Service::paginate($perPage);
        }

        return view('admin.service.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.service.create');
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
        $this->validate($request, [
            'precio_venta' => 'nullable|numeric|min:1',
            'porcent_descuento' => 'nullable|numeric|min:1',   
            'service' => 'max:150',
            'slug' => 'max:150',
            'img' => 'mimes:jpeg,png|max:1500',
        ]);
        
        $requestData = $request->all();

        $data = $request->session()->all();
        $mailAdmin = auth('admin')->user()->email;
        $IdAdmin = auth('admin')->user()->id;
        $requestData['admins_id']=$IdAdmin;
        

        if ($request->hasFile('img')) {
            $file = Input::file('img');
                $uploadPath = public_path('uploads/service/');

                $extension = $file->getClientOriginalName();
                //$fileName = rand(11111, 99999) . '.' . $extension;

                $file->move($uploadPath, $extension);
                $requestData['img'] = 'uploads/service/'.$extension;
        }
        
        Service::create($requestData);

        Session::flash('flash_message', 'Service added!');

        return redirect('admin/service');
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
        $service = Service::findOrFail($id);

        return view('admin.service.show', compact('service'));
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
        $service = Service::findOrFail($id);

        return view('admin.service.edit', compact('service'));
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
            'precio_venta' => 'nullable|numeric|min:1',
            'porcent_descuento' => 'nullable|numeric|min:1',   
            'service' => 'max:150',
            'slug' => 'max:150',
            'img' => 'mimes:jpeg,png|max:1500',
        ]);
        $requestData = $request->all();

        $data = $request->session()->all();
        $mailAdmin = auth('admin')->user()->email;
        $IdAdmin = auth('admin')->user()->id;
        $requestData['admins_id']=$IdAdmin;
        
        $files = Input::file('img');

        if (!empty($files)) {
                $uploadPath = public_path('uploads/service/');
                $extension = $files->getClientOriginalName();
                //$fileName = rand(11111, 99999) . '.' . $extension;

                $files->move($uploadPath, $extension);
                $requestData['img'] = 'uploads/service/'.$extension;
        }
        $service = Service::findOrFail($id);
        $service->update($requestData);

        Session::flash('flash_message', 'Service updated!');

        return redirect('admin/service');
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
        Service::destroy($id);

        Session::flash('flash_message', 'Service deleted!');

        return redirect('admin/service');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
}
