<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;   

class PagesController extends Controller
{

    public function index()
    {
        return view('pages.index');
    }

     

    public function expense()
    {
        $name="expense";
        return view('pages.expense')->with('name', $name);
    }
}
