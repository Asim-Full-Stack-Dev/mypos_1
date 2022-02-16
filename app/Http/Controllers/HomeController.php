<?php

namespace App\Http\Controllers;
use App\Models\Store;
use Illuminate\Support\Facades\File;

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
    // public function index()
    // {
    //     return view('home');
    // }

    public function add_store()
    {
        return view('home');
    }
    public function create()
    {
        return view('add_store');
    }
    public function store(Request $request)
    {
        $stores = new Store();
        $stores->name = $request->input('name');
        $stores->store_location = $request->input('store_location');
        $stores->postal_code = $request->input('postal_code');
        $stores->country = $request->input('country');
        $stores->service = $request->input('service');
        $stores->currency = $request->input('currency');
        $stores->website = $request->input('website');
        $stores->facebook = $request->input('facebook');
        $stores->insta = $request->input('insta');
        $stores->youtube = $request->input('youtube');
        $stores->google = $request->input('google');
        $stores->linkedin = $request->input('linkedin');
        $stores->save();

        return redirect()->with('status','Store Added Succesfully');
    }

     public function dashboard()
    {
        return view('dashboard');
    }







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
