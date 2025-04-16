<?php

namespace App\Http\Controllers;


use App\Models\Page;
use App\Models\Setting;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $page = Page::where('url', 'home')->first();
        if ($page) {
            return view('front.page', compact('page'));
        } else {
            return view('front.404');
        }
    }

    public function admin()
    {
        return view('admin');
    }
}
