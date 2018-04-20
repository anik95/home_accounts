<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Income;
use App\User;

class IncomeController extends Controller
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
        $income=Income::where('user_id', '=', auth()->user()->id)->get();
        //return Income::all();
        $num=1;
        $sum=0;
        foreach($income as $incomes)
        {
            $sum=$sum+$incomes->amount;
        }

        return view('incomes.index', compact('income', 'sum', 'num'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('incomes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(auth()->user()->id);
        $income= new Income();
        $income->user_id= auth()->user()->id;
        $income->amount= $request->input('amount');
        $income->details= $request->input('details');
        $income->save();
        return redirect()->route('incomes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $income=Income::find($id);
        return view('incomes.show', compact('income'));
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
