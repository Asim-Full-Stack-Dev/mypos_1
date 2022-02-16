<?php

namespace App\Http\Controllers;
use App\Models\Purchase;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
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
}



