<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessagesController extends Controller
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
        $validatedData = $request->validate([
            'first_name' => ['required', 'string', 'min:1', 'max:19'],
            'surname' => ['required', 'string', 'min:1', 'max:19'],
            'middle_name' => ['required', 'string', 'min:1', 'max:19'],
            'phone_number' => ['required', 'numeric'],
            'location' => ['required', 'min:3', 'max:19'],
            'contact_email' => ['required', 'string', 'email', 'min:3', 'max:69'],
            'text_message' => ['required', 'min:10', 'max:640'],
            'created_at' => [''],
        ]);

        if ($validatedData) {

            $messages = Messages::create([
                'first_name' => $request->input('first_name'),
                'surname' => $request->input('surname'),
                'middle_name' => $request->input('middle_name'),
                'phone_number' => $request->input('phone_number'),
                'location' => $request->input('location'),
                'contact_email' => $request->input('contact_email'),
                'text_message' => $request->input('text_message'),
                'created_at' => $request->input('created_at'),
            ]);

            if ($messages) {
                return redirect()->back()->with('messages-message-success', 'Message Sent !!!');
            } else {
                return redirect()->back()->with('messages-message-error', 'A problem was encountered while sending your message. Please try again later');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function show(Messages $messages)
    {
        //Get all messages records
        $messages = Messages::all();
        return view('admin.pages.messages.messages',compact('messages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function edit(Messages $messages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Messages $messages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Messages $messages)
    {
        //
    }
}
