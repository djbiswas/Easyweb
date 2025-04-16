<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::orderBy('id', 'DESC')->get();
        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePageRequest $request)
    {
        $page = new Page();
        $page->name = $request->name;
        $page->url = $request->url;
        $page->info = $request->info;
        $page->save();

        flash('page Adding Success.')->success();
        return redirect()->route('pages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        //
    }

    public function page($slug)
    {
        $page = Page::where('url', $slug)->first();
        if ($page) {
            return view('front.page', compact('page'));
        } else {
            return view('front.404');
        }
    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        // return $request->all();

        $page->name = $request->name;
        $page->url = $request->url;
        $page->info = $request->info;
        $page->save();

        flash('page Updating Success.')->success();
        return redirect()->route('pages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
}
