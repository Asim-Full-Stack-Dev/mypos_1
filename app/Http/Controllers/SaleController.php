<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function add_sale()
    {
        return view('add_sale');
    }

    public function sale_list()
    {
        return view('sale_list');
    }
}
