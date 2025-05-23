<?php

namespace App\Http\Controllers;

use App\Models\Merch;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TshirtsController extends Controller
{
    public function index()
    {
        $tshirts = Merch::all();
        return view('tshirts.index', ['tshirts' => $tshirts]);
    }

    public function create() //shows the Create page
    {
        return view('tshirts.create');
    }

    /** saves to db */
    public function store(Request $request)
    {
        // dd($request);  //dump data for testing

        /*  $data = $request->validate([
            'tshirtname' => 'required',
            'tshirttype' => 'required',
            'tshirtprice' => 'required|decimal:2',
        ]); */

        $data = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'price' => 'required|decimal:2',
        ]);

        // $newTshirt = Merch::create($data);

        $newTshirt = new Merch;

        $newTshirt->name = $request->name;
        $newTshirt->type = $request->type;
        $newTshirt->price = $request->price;
        $newTshirt->save();

        return redirect(route('tshirts.index'));
    }

    public function edit(Merch $tshirt)
    {
        return view('tshirts.edit', ['tshirt' => $tshirt]);
    }

    public function update(Merch $tshirt, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'price' => 'required|decimal:2',
        ]);

        $tshirt->update($data);

        return redirect(route('tshirts.index'))->with('success', 'Product updated successfully!');
    }

    public function remove(Merch $tshirt)
    {
        $tshirt->delete();
        return redirect(route('tshirts.index'))->with('success', 'Product Deleted Successfully!');
    }
}
