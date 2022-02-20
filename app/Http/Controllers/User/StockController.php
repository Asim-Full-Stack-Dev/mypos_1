<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StockController extends Controller
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

    #region api actions

    public function getStock()
    {
        return response()->json(Stock::all(), 200);
    }

    public function stock(Request $request)
    {
        $stocks = new Stock();
        $stocks->total_item = $request->input('total_item');
        $stocks->total_price = $request->input('total_price');
        $stocks->deposit = $request->input('deposit');
        $stocks->balance = $request->input('balance');
        $stocks->vendor = $request->input('vendor');

        $result = $stocks->save();
        if($result){
            return["result"=>"Stock Added Successfully"];
        } else  {
            return["result"=>"Stock are not Added"];
        }
        return response()->json($stocks);

    }
    #endregion

}
