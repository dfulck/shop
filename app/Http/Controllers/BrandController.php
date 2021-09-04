<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandStoreRequest;
use App\Http\Requests\BrandUpdateRequest;
use App\Models\brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('Admin.brand.index', [
            'brands' => brand::all()
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('Admin.brand.creat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandStoreRequest $request)
    {
        brand::query()->create([
            'name' => $request->get('name'),
            'image' => $request->file('image')->storeAs('public/image', $request->file('image')->getClientOriginalName())
        ]);

        return redirect(route('brands.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\brand $brand
     * @return \Illuminate\Http\Response
     */
    public function show(brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\brand $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(brand $brand)
    {
        return view('Admin.brand.edit', [
            'brand' => $brand
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\brand $brand
     * @return \Illuminate\Http\Response
     */
    public function update(BrandUpdateRequest $request, brand $brand)
    {
        $image = $brand->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->storeAs('public/image', $request->file('image')->getClientOriginalName());
        }
        $brand->update([
            'name' => $request->get('name'),
            'image' => $image
        ]);

        return redirect(route('brands.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\brand $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(brand $brand)
    {
        $brand->delete();

        return redirect(route('brands.index'));
    }
}
