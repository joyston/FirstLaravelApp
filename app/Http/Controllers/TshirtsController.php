<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TshirtsController extends Controller
{
    public function index()
    {
        return view('tshirts.index');
    }

    public function create() //shows the Create page
    {
        return view('tshirts.create');
    }

    public function store(Request $request) //saves to db
    {
        dd($request);
    }
}
