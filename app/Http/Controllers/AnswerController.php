<?php

namespace App\Http\Controllers;

use App\Models\answer;
use App\Models\product;
use App\Models\question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(question $question)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(question $question)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, question $question)
    {
        $user = auth()->user();

        $question->users()->attach($user, ['answer' => $request->answer]);

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\answer $answer
     * @return \Illuminate\Http\Response
     */
    public function show(answer $answer, question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\answer $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(answer $answer, question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\answer $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, answer $answer, question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\answer $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(answer $answer, question $question)
    {
        //
    }
}
