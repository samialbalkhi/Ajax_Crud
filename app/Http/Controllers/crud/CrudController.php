<?php

namespace App\Http\Controllers\crud;

use App\Models\Offer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CrudController extends Controller
{
    public function create()
    {
            return view('offers.create');
    }
    public function insert(Request $request)
    {
     

        $path=$request->image->store('images','public');

        Offer::create([

            'name'=>$request->name,
            'price'=>$request->price,
            'details'=>$request->details,
            'image'=>$path

        ]); 
        return response()->json(['message'=>'created offer success']);
    }
}
