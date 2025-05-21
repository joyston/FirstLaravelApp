<?php

namespace App\Http\Controllers;

use App\Models\Merch;
use Illuminate\Http\RedirectResponse;
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

    /** saves to db */
    public function store(Request $request)
    {
        // dd($request);

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

        //$newTshirt = Merch::create($data);

        $newTshirt = new Merch;

        $newTshirt->name = $request->name;
        $newTshirt->type = $request->type;
        $newTshirt->price = $request->price;
        $newTshirt->save();

        return redirect(route('tshirts.index'));
    }
}
