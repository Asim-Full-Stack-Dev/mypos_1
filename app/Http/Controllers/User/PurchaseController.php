<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PurchaseController extends Controller
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


    public function index()
    {
        return view('add_purchase');
    }

    public function create()
    {
        return view('add_purchase');
    }

    public function store(Request $request)
    {
        $purchases = new Purchase();
        $purchases->p_name = $request->input('p_name');
        $purchases->p_size = $request->input('p_size');
        $purchases->p_color = $request->input('p_color');
        $purchases->p_price = $request->input('p_price');
        $purchases->p_quantity = $request->input('p_quantity');
        $purchases->p_code = $request->input('p_code');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/purchase/', $filename);
            $purchases->image = $filename;
        }
        $purchases->save();

        return redirect()->back()->with('status','Purchase Added Succesfully');
    }

    public function purchase_list()
    {
        $purchases = Purchase::all();
        return view('purchase_list', compact('purchases'));
    }

    public function edit($id)
    {
        $purchases = Purchase::find($id);
        return view('edit_purchase', compact('purchases'));
    }

    public function update(Request $request, $id)
    {
        $purchases = Purchase::find($id);
        $purchases->p_name = $request->input('p_name');
        $purchases->p_size = $request->input('p_size');
        $purchases->p_color = $request->input('p_color');
        $purchases->p_price = $request->input('p_price');
        $purchases->p_quantity = $request->input('p_quantity');
        $purchases->p_code = $request->input('p_code');

        if($request->hasfile('image'))
        {
            $destination = 'uploads/purchase/'.$purchases->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/purchase/', $filename);
            $purchases->image = $filename;
        }
        $purchases->update();

        return redirect()->back()->with('status','Purchase Updated   Succesfully');
    }

    public function destroy($id)
    {
        $purchases = Purchase::find($id);
        $destination = 'uploads/purchase/'.$purchases->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $purchases->delete();

        return redirect()->back()->with('status','Purchase Deleted Succesfully');
    }

    #region api actions

    public function getPurchase()
    {
        return response()->json(Purchase::all(), 200);
    }

    public function purchase(Request $request)
    {
        $purchases = new Purchase ();
        $purchases->p_name = $request->input('p_name');
        $purchases->p_size = $request->input('p_size');
        $purchases->p_color = $request->input('p_color');
        $purchases->p_price = $request->input('p_price');
        $purchases->p_quantity = $request->input('p_quantity');
        $purchases->p_code = $request->input('p_code');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/purchase/', $filename);
            $purchases->image = $filename;
        }
        $result = $purchases->save();
        if($result){
            return["result"=>"Purchase Added Successfully"];
        } else  {
            return["result"=>"Purchase  are not Added"];
        }
        return response()->json($purchases);

    }

    #endregion
}
