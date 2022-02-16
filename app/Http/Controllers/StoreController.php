<?php

namespace App\Http\Controllers;
use App\Models\Store;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function add_store()
    {
        return view('add_store');
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

        return redirect()->back()->with('status','Store Added Succesfully');
    }

    public function store_list()
    {
        $stores = Store::all();
        return view('store_list', compact('stores'));
    }

    public function edit($id)
    {
        $stores = Store::find($id);
        return view('edit_store', compact('stores'));
    }

    public function update(Request $request, $id)
    {
        $stores = Store::find($id);
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
        
        $stores->update();
        return redirect()->back()->with('status','Stores Updated Succesfully');
    }

    public function destroy($id)
    {
        $stores = Store::find($id);
        $stores->delete();
        return redirect()->back()->with('status','Store Deleted Succesfully');
    }
}
