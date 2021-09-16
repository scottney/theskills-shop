<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\SweetAlertServiceProvider;

class NewsLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         /*
        $validatedData = $request->validate([
            'email' => 'required',
            'created_at' => '',
        ]);

        DB::table('news_letter')->insert($validatedData);
        return redirect()->route('index_main')->with('success', 'Message Sent !!!');
        */
        $validatedData = Validator::make($request->all(), [
            'email' => 'required',
        ]);

        if($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData->messages()->all());
        } else {
            NewsLetter::create([
            'email' => $request->input('email'),
        ]);
        }

        return redirect()->back()->with('info', 'Sign Up Successfull !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function show(NewsLetter $newsLetter)
    {
        //Get all news letter subscription records
        $newsLetter = NewsLetter::all();
        return view('admin.pages.news_letter.news_letter',compact('newsLetter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsLetter $newsLetter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsLetter $newsLetter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsLetter $newsLetter)
    {
        //
    }
}
