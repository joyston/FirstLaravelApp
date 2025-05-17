<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TshirtsController extends Controller
{
    public function index()
    {
        return view('tshirts.index');
    }

    public function create()
    {
        return view('tshirts.create');
    }
}
