<?php

namespace App\Http\Controllers\crud;

use App\Models\Offer;
use Illuminate\Http\Request;
use App\Http\Requests\OfferRequset;
use App\Http\Controllers\Controller;


class CrudController extends Controller
{
    public function create()
    {
        return view('offers.create');
    }
    public function insert(OfferRequset $request)
    {


        $path = $request->image->store('images', 'public');

        $offer = Offer::create([

            'name' => $request->name,
            'price' => $request->price,
            'details' => $request->details,
            'image' => $path

        ]);
       
        if ($offer) {

            return response()->json([
                'status' => true,
                'messege' => 'insted data',
            ]);
        } else {
            return response()->json([
                'status' => false,
                'messege' => 'no insted data !..',
            ]);
            // toastr()->success('Data has been saved successfully!');

        // return redirect()->back();
        }
    }
    public function alloffer()
    {
        $offre=Offer::select('id','name','price','details','image')->get();   
        return view("offers.getalloffer",compact('offre'));
    }
    public function delete(Request $request ,$id)
    {
        return 'asd';
        // $offer=Offer::find($id);
        // dd($request);
        return $request ;
    }
 
}
