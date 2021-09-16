<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\SweetAlertServiceProvider;

class ContactsController extends Controller
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
        return view('pages.contacts.contacts');
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
            'first_name' => 'required',
            'surname' => 'required',
            'middle_name' => 'required',
            'phone_number' => 'required',
            'location' => 'required',
            'email' => 'required',
            'text_message' => 'required',
            'created_at' => '',
        ]);

        DB::table('contacts')->insert($validatedData);
        return redirect()->route('index_main')->with('success', 'Message Sent !!!');
        */
        $validatedData = Validator::make($request->all(), [
            'first_name' => 'required',
            'surname' => 'required',
            'middle_name' => 'required',
            'phone_number' => 'required',
            'location' => 'required',
            'email' => 'required',
            'text_message' => 'required',
            'created_at' => '',
        ]);

        if($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData->messages()->all());
        } else {
            Contacts::create([
            'first_name' => $request->input('first_name'),
            'surname' => $request->input('surname'),
            'middle_name' => $request->input('middle_name'),
            'phone_number' => $request->input('phone_number'),
            'location' => $request->input('location'),
            'email' => $request->input('email'),
            'text_message' => $request->input('text_message'),
            'created_at' => $request->input('created_at'),
        ]);
        }

        return redirect()->route('index_main')->with('success', 'Message Sent !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function show(Contacts $contacts)
    {
        //Get all contact records
        $contacts = Contacts::all();
        return view('admin.pages.messages.messages',compact('contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacts $contacts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacts $contacts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacts $contacts)
    {
        //
    }
}
