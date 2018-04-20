<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Income;
use App\Exxpense;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function __construct()
{
    $this->middleware('auth');
} 
    
    public function index()
    {
        $incomes=Income::all();
        $expenses=Exxpense::all();
        //return $expense;
        $sum=0;
        $sum1=0;
        $num=1;
        foreach($expenses as $expense)
        {
            $sum=$sum+$expense->amount;
        }

        foreach($incomes as $income)
        {
            $sum1=$sum1+$income->amount;
        }
        $remaining=$sum1-$sum;
        return view('expenses.index', compact('expenses', 'sum', 'remaining', 'num'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expenses=new Exxpense();
        
        $expenses->user_id=auth()->user()->id;
        $expenses->amount=$request->input('amount');
        $expenses->details=$request->input('details');
        $expenses->save();

        return redirect('expenses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $expenses=Exxpense::find($id);
        return view('expenses.show', compact('expenses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
