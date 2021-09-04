<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(product $product)
    {
        return view('Admin.product.Question.show', [
            'product'=>$product
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(product $product)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,product $product)
    {

        $question=question::query()->create([
            'question'=>$request->get('question')
        ]);

        $product->questions()->attach($question->id);
        session()->flash('success','Question Added Successfully');
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(product $product,question $question)
    {
        return view('Admin.product.Answer.show',[
            'question'=>$question,
            'product'=>$product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product,question $question)
    {
        dd('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,product $product,question $question)
    {
        dd('update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product,question $question)
    {
        dd('destroy');
    }
}
