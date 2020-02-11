<?php

namespace App\Http\Controllers;

use App\question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // function validateCredentials()
        // {
        //     $name = Input::post('name');
        //     $mail = Input::post('mail');
        //     $question = Input::post('question');
        //     return "Name: " . $name . "Mail:" . $mail . "and question:" . $question;
        // }

        // dd($request->all());

        \App\question::insert([
            'name'   => $request->name,
            'mail'      => $request->mail,
            'question'     => $request->question,
        ]);

        // return (new \App\Mail\QuestionMail($request) );
        
        Mail::to('esma_yilmaz7@hotmail.com')->send(new \App\mail\QuestionsMail($request));

        return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function show(Questions $questions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function edit(Questions $questions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Questions $questions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questions $questions)
    {
        //
    }
}
