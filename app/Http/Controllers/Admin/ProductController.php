<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;
use App\Typeproduct;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
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
            $product = Product::where('name', 'LIKE', "%$keyword%")
				->orWhere('slug', 'LIKE', "%$keyword%")
				->orWhere('cod', 'LIKE', "%$keyword%")
				->orWhere('description', 'LIKE', "%$keyword%")
				->orWhere('precio_compra', 'LIKE', "%$keyword%")
				->orWhere('precio_venta', 'LIKE', "%$keyword%")
				->orWhere('porcent_descuento', 'LIKE', "%$keyword%")
				->orWhere('stock', 'LIKE', "%$keyword%")
				->orWhere('img', 'LIKE', "%$keyword%")
				->orWhere('visible', 'LIKE', "%$keyword%")
				->orWhere('visible_slider', 'LIKE', "%$keyword%")
				->orWhere('promocion', 'LIKE', "%$keyword%")
				->orWhere('nuevo', 'LIKE', "%$keyword%")
				->orWhere('tipeproduct_id', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $product = Product::paginate($perPage);
        }

        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $tipos = Typeproduct::orderBy('id','ASC')->where('is_active',1)->pluck('typeproduct','id');
        return view('admin.product.create',compact('tipos'));
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
            'name' => 'nullable|max:150',
            'slug' => 'nullable|max:150',
            'cod' => 'nullable|max:30',
            'precio_compra' => 'nullable|numeric|min:1',
            'precio_venta' => 'nullable|numeric|min:1',
            'porcent_descuento' => 'nullable|numeric|min:1',
            'stock' => 'nullable|integer|min:1',
            'img' => 'mimes:jpeg,png|max:1500',
        ]);
        
        $requestData = $request->all();
        $data = $request->session()->all();
        $mailAdmin = auth('admin')->user()->email;
        $IdAdmin = auth('admin')->user()->id;
        $requestData['admins_id']=$IdAdmin;

        if ($request->hasFile('img')) {
            $file = Input::file('img');
                $uploadPath = public_path('uploads/img/');

                $extension = $file->getClientOriginalName();
                //$fileName = rand(11111, 99999) . '.' . $extension;

                $file->move($uploadPath, $extension);
                $requestData['img'] = 'uploads/img/'.$extension;
        }

        Product::create($requestData);

        Session::flash('flash_message', 'Product added!');

        return redirect('admin/product');
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
        $product = Product::findOrFail($id);

        return view('admin.product.show', compact('product'));
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
        $product = Product::findOrFail($id);
        $tipos = Typeproduct::orderBy('id','ASC')->where('is_active',1)->pluck('typeproduct','id');

        return view('admin.product.edit', compact('product','tipos'));
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
            'name' => 'nullable|max:150',
            'slug' => 'nullable|max:150',
            'cod' => 'nullable|max:30',
            'precio_compra' => 'nullable|numeric|min:1',
            'precio_venta' => 'nullable|numeric|min:1',
            'porcent_descuento' => 'nullable|numeric|min:1',
            'stock' => 'nullable|integer|min:1',
            'img' => 'mimes:jpeg,png|max:1500',
        ]);
        $requestData = $request->all();

        $data = $request->session()->all();
        $mailAdmin = auth('admin')->user()->email;
        $IdAdmin = auth('admin')->user()->id;
        $requestData['admins_id']=$IdAdmin;
        
        $files = Input::file('img');

        if (!empty($files)) {
                $uploadPath = public_path('uploads/img/');
                $extension = $files->getClientOriginalName();
                //$fileName = rand(11111, 99999) . '.' . $extension;

                $files->move($uploadPath, $extension);
                $requestData['img'] = 'uploads/img/'.$extension;
        }

        $product = Product::findOrFail($id);
        $product->update($requestData);

        Session::flash('flash_message', 'Product updated!');

        return redirect('admin/product');
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
        Product::destroy($id);

        Session::flash('flash_message', 'Product deleted!');

        return redirect('admin/product');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
}
