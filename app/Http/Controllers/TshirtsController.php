<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\TShirts;

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

    /** saves to db */
    public function store(Request $request)
    {
        //dd($request);

        $data = $request->validate([
            'tshirtname' => 'required',
            'tshirttype' => 'required',
            'tshirtprice' => 'required|decimal:2',
        ]);

        $newTshirt = TShirts::create($data);

        return redirect(route('Tshirts.index'));
    }
}
