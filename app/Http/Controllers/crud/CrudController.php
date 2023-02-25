<?php

namespace App\Http\Controllers\crud;

use App\Models\Offer;
use Illuminate\Http\Request;
use App\Http\Requests\OfferRequset;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;


class CrudController extends Controller
{
    public function create()
    {
        return view('offers.create');
    }
    public function insert(OfferRequset $request)
    {

        return $request->all();

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
        $offre = Offer::select('id', 'name', 'price', 'details', 'image')->get();
        return view("offers.getalloffer", compact('offre'));
    }
    public function delete(Request $request)
    {


         Offer::findOrFail($request->id)->delete();
        return response()->json([
            'status' => true,
            'messege' => 'delete data',
            'id' => $request->id
        ]);
    }
    public function edit(Request $request)
    {
        $offer = Offer::find($request->id);
        if ($offer) {

            $offer = Offer::select('id', 'name', 'price', 'details', 'image')->find($request->id);
            return view('offers.edit', compact('offer'));
        } else {
            return response()->json([
                'status' => false,
                'messege' => 'no update data',
            ]);
        }
    }
    public function update(Request $request)
    {
        $offer = Offer::find($request->offer_id);
        if ($request->image) {
            if (Storage::exists('public/' . $offer->image))
                Storage::delete('public/' . $offer->image);
        }
        $path = $request->image->store('images', 'public');

        $offer->update([
            'name' => $request->name,
            'price' => $request->price,
            'details' => $request->details,
            'image' => $path
        ]);
        return response()->json([
            'status' => true,
            'messege' => 'updated in the data',
        ]);
    }
}
