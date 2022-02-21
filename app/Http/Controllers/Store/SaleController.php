<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SaleController extends Controller
{
    //currently, comment it due to api issue
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }


    public function add_sale()
    {
        return view('store.add_sale');
    }

    public function sale_list()
    {
        return view('store.sale_list');
    }
}
