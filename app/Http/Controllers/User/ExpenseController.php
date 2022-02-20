<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ExpenseTracker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ExpenseController extends Controller
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

    public function add_expense()
    {
        return view('add_expense');
    }

    public function create()
    {
        return view('add_expense');
    }

    public function store(Request $request)
    {
        $expense_trackers = new ExpenseTracker();
        $expense_trackers->name = $request->input('name');
        $expense_trackers->amount = $request->input('amount');
        $expense_trackers->date = $request->input('date');
        $expense_trackers->note = $request->input('note');

        $expense_trackers->save();

        return redirect()->back()->with('status','Expense Tracker Added Succesfully');
    }

    public function expense_list()
    {
        $expense_trackers = ExpenseTracker::all();
        return view('expense_list', compact('expense_trackers'));
    }

    public function edit($id)
    {
        $expense_trackers = ExpenseTracker::find($id);
        return view('edit_expense', compact('expense_trackers'));
    }

    public function update(Request $request, $id)
    {
        $expense_trackers = ExpenseTracker::find($id);
        $expense_trackers->name = $request->input('name');
        $expense_trackers->amount = $request->input('amount');
        $expense_trackers->date = $request->input('date');
        $expense_trackers->note = $request->input('note');

        $expense_trackers->update();
        return redirect()->back()->with('status','Expense Tracker Updated Succesfully');
    }

    public function destroy($id)
    {
        $expense_trackers = ExpenseTracker::find($id);
        $expense_trackers->delete();
        return redirect()->back()->with('status','Expense Tracker Deleted Succesfully');
    }

    #region api actions

    public function getExpense()
    {
        return response()->json(ExpenseTracker::all(), 200);
    }

    public function expense(Request $request)
    {
        $expense_trackers = new ExpenseTracker ();
        $expense_trackers->name = $request->input('name');
        $expense_trackers->amount = $request->input('amount');
        $expense_trackers->date = $request->input('date');
        $expense_trackers->note = $request->input('note');

        $result = $expense_trackers->save();
        if($result){
            return["result"=>"Expense Tracker Added Successfully"];
        } else  {
            return["result"=>"Expense Tracker are not Added"];
        }
        return response()->json($expense_trackers);

    }
    #endregion

}
