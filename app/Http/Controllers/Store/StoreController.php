<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StoreController extends Controller
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


    public function add_store()
    {
        //add condition if store already exist

        return view('store.add_store');
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

//        return redirect()->with('status','Store Added Succesfully');
        return redirect()->back()->with('status','Stores Added Succesfully');

//        return redirect()->route('dashboard');
    }
    public function store_list()
    {
        $stores = Store::all();
        return view('store.store_list', compact('stores'));
    }
    public function edit($id)
    {
        $stores = Store::find($id);
        return view('store.edit_store', compact('stores'));
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

    #region api Actions

    public function getStore()
    {
        return response()->json(Store::all(), 200);
    }

    public function addstore(Request $request)
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
        $result = $stores->save();
        if($result){
            return["result"=>"Store Added Successfully"];
        } else  {
            return["result"=>"Store are not Added"];
        }
        return response()->json($stores);

    }

    #endregion

}
