<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\category;
use App\Models\PropertyGroup;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.category.categories',[
            'categories'=>category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.category.creat',[
            'categories'=>category::all(),
            'properties'=>PropertyGroup::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {
       $category= category::query()->create([
            'title'=>$request->get('title'),
            'category_id'=>$request->get('category_id'),
        ]);

       $category->propertyGroups()->attach($request->get('properties'));

        return redirect(route('categories.create'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        return view('Admin.category.edit',[
            'cat'=>$category,
            'categories'=>category::all(),
            'properties'=>PropertyGroup::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, category $category)
    {
       $category->update([
            'title'=>$request->get('title'),
            'category_id'=>$request->get('category_id'),
        ]);

        $category->propertyGroups()->sync($request->get('properties'));

        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {

        $cat=category::query()->where('category_id',$category->id)->exists();
        if ($cat){
        return back()->withErrors('این فیلد سرگروه تعدادی از دسته بندی ها است برای حذف ابتدا دسته بندی ها را خالی از این فیلد اصلی بکنید و مجددا برای حذف اقدام کنید')   ;
        }
        $category->propertyGroups()->detach();
        $category->delete();
        return redirect(route('categories.index'));
    }
}
