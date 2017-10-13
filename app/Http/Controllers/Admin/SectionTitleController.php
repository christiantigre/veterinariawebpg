<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\SectionTitle;
use Illuminate\Http\Request;
use Session;

class SectionTitleController extends Controller
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
            $sectiontitle = SectionTitle::where('title', 'LIKE', "%$keyword%")
				->orWhere('subtitle', 'LIKE', "%$keyword%")
				->orWhere('color', 'LIKE', "%$keyword%")
				->orWhere('visible', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $sectiontitle = SectionTitle::paginate($perPage);
        }

        return view('admin.section-title.index', compact('sectiontitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.section-title.create');
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
            'section' => 'min:1|max:50',
            'title' => 'nullable|min:1|max:150',
            'subtitle' => 'nullable|min:1|max:350',
        ]);
        $requestData = $request->all();
        
        SectionTitle::create($requestData);

        Session::flash('flash_message', 'SectionTitle added!');

        return redirect('admin/section-title');
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
        $sectiontitle = SectionTitle::findOrFail($id);

        return view('admin.section-title.show', compact('sectiontitle'));
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
        $sectiontitle = SectionTitle::findOrFail($id);

        return view('admin.section-title.edit', compact('sectiontitle'));
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
        
        $sectiontitle = SectionTitle::findOrFail($id);
        $sectiontitle->update($requestData);

        Session::flash('flash_message', 'SectionTitle updated!');

        return redirect('admin/section-title');
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
        SectionTitle::destroy($id);

        Session::flash('flash_message', 'SectionTitle deleted!');

        return redirect('admin/section-title');
    }
}
