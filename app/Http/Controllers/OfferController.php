<?php

namespace App\Http\Controllers;

use App\Models\offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.offer.index',[
           'offers'=>offer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.offer.creat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        offer::query()->create([
            'code'=>$request->get('code'),
            'starts_at'=>$request->get('starts_at'),
            'expires_at'=>$request->get('expires_at'),
        ]);

        return redirect(route('offers.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(offer $offer)
    {
        return view('Admin.offer.edit',[
            'offer'=>$offer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, offer $offer)
    {
        $codeIsNotUnique = offer::query()
            ->where('code', $request->get('code'))
            ->where('id', '!=', $offer->id)
            ->exists();

        if ($codeIsNotUnique){
            return redirect()->back()
                ->withErrors(['code' => 'code must be unique.']);
        }

        $offer->update([
            'code' => $request->get('code'),
            'starts_at' => $request->get('starts_at'),
            'expires_at' => $request->get('expires_at'),
        ]);

        return redirect(route('offers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(offer $offer)
    {
        $offer->delete();
    }
}
