<?php

namespace App\Http\Controllers;
use App\Models\Store;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function services()
    {
        return view('home.services');
    }

    public function about()
    {
        return view('home.about');
    }

    public function contact()
    {
        return view('home.contact');
    }
}
