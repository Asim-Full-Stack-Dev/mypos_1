<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
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

    public function dashboard()
    {
        return view('store.index');
    }

    // public function index()
    // {
    //     return view('home');
    // }


    // public function home1()
    // {
    //     return view('home1');
    // }

    // public function home2()
    // {
    //     return view('home2');
    // }

    // public function home3()
    // {
    //     return view('home3');
    // }

}
