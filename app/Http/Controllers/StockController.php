<?php

namespace App\Http\Controllers;
use App\Models\Stock;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function add_stock()
    {
        return view('add_stock');
    }


    public function create()
    {
        return view('add_stock');
    }



    
    public function store(Request $request)
    {
        $stocks = new Stock();
        $stocks->total_item = $request->input('total_item');
        $stocks->total_price = $request->input('total_price');
        $stocks->deposit = $request->input('deposit');
        $stocks->balance = $request->input('balance');
        $stocks->vendor = $request->input('vendor');
        
        $stocks->save();

        return redirect()->back()->with('status','Stocks Added Succesfully');
    }


    public function stock_list()
    {
        $stocks = Stock::all();
        return view('stock_list', compact('stocks'));
    }

    public function edit($id)
    {
        $stocks = Stock::find($id);
        return view('edit_stock', compact('stocks'));
    }

    public function update(Request $request, $id)
    {
        $stocks = Stock::find($id);
        $stocks->total_item = $request->input('total_item');
        $stocks->total_price = $request->input('total_price');
        $stocks->deposit = $request->input('deposit');
        $stocks->balance = $request->input('balance');
        $stocks->vendor = $request->input('vendor');
        
        $stocks->update();
        return redirect()->back()->with('status','Stocks Updated Succesfully');
    }
       
    public function destroy($id)
    {
        $stocks = Stock::find($id);
        $stocks->delete();
        return redirect()->back()->with('status','Stocks Deleted Succesfully');
    }
    
}
