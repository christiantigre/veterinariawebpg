<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Card;
use Illuminate\Http\Request;
use Session;

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
        
        $requestData = $request->all();
        
        Card::create($requestData);

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
        
        $requestData = $request->all();
        
        $card = Card::findOrFail($id);
        $card->update($requestData);

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
