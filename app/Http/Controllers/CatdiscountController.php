<?php

namespace App\Http\Controllers;

use App\Models\Catdiscount;
use App\Models\category;
use App\Models\discount;
use Illuminate\Http\Request;

class CatdiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.catdiscount.index', [
            'catdiscounts' => Catdiscount::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.catdiscount.create', [
            'categories' => category::all()
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $catdiscount = Catdiscount::query()->create([
            'category_id' => $request->get('category_id'),
            'discount' => $request->get('discount')
        ]);
        $category = $catdiscount->show_category;
        $products = $category->HasCategoryChildirenProduct();
        foreach ($products as $product) {
            discount::query()->create([
                'product_id' => $product->id,
                'discount' => $request->get('discount')
            ]);
        }
        return redirect(route('catdiscounts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Catdiscount $catdiscount
     * @return \Illuminate\Http\Response
     */
    public function show(Catdiscount $catdiscount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Catdiscount $catdiscount
     * @return \Illuminate\Http\Response
     */
    public function edit(Catdiscount $catdiscount)
    {
        return view('Admin.catdiscount.edit', [
            'catdiscount' => $catdiscount,
            'categories' => category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Catdiscount $catdiscount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catdiscount $catdiscount)
    {
        $catdiscount->update([
            'discount' => $request->get('discount'),
            'category_id' => $request->get('category_id')
        ]);

        return redirect(route('catdiscounts.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Catdiscount $catdiscount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catdiscount $catdiscount)
    {


        $category = $catdiscount->show_category;
        $products = $category->HasCategoryChildirenProduct();
        foreach ($products as $product) {
            discount::query()->where('product_id',$product->id)->delete();
        }
        $catdiscount->delete();
        return redirect()->back();

    }
}
