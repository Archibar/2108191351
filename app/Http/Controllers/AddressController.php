<?php

namespace App\Http\Controllers;

use App\Address;
use Igaster\LaravelCities\Geo;
use App\Http\Requests\AddAddressRequest as Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = Geo::where('level', '=', 'ADM2')->get();
        $addresses = Address::all();

        return view('addresses', compact('cities', 'addresses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Address::create($request->validated());

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Address::destroy($id);

        return response()->json(['result' => $result]);
    }
}
