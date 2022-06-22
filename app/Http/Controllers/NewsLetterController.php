<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail, PDF;
use App\Mail\SendNewsletterMail;

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
        $validatedData = $request->validate([
            'newsletter_subscription_emails' => ['required', 'string', 'email', 'unique:newsletter', 'min:3', 'max:69'],
            'created_at' => [''],
        ]);

        if ($validatedData) {
            $newsletter = NewsLetter::create([
                'newsletter_subscription_emails' => $request->input('newsletter_subscription_emails'),
                'created_at' => $request->input('created_at'),
            ]);

            if ($newsletter) {
                return redirect()->back()->with('newsletter-signUp-successfull', 'You have successfully signed up to our newsletter. :)');
            } else {
                return redirect()->back()->with('newsletter-signUp-failed', 'A problem occured when signing up to our newsletter service. Please try again later. :)');
            }
        }

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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function newsletter_sendout(Request $request)
    {
        $validatedData = $request->validate([
            'newsletter_file' => ['required', 'mimes:pdf,doc,docx']
        ]);

        if ($validatedData) {

            //Get filename with the extension
            $newsletterFile = $request->file('newsletter_file')->getClientOriginalName();
            //Get just filename
            $newsletterFilename = pathinfo($newsletterFile,PATHINFO_FILENAME);
            //Get just ext
            $newsletterFileExtension = $request->file('newsletter_file')->getClientOriginalExtension();
            //Filename to store
            $newsletterFileToStore = $newsletterFilename.'_'.time().'.'.$newsletterFileExtension;

            $newsletterPath = $request->file('newsletter_file')->storeAs('public/newsletters',$newsletterFileToStore);

            if ($newsletterPath) {
                $newsletterMail = 'sagatsaigon@gmail.com';

                $details = [
                    'title' => 'Mail from TheSkillsShop',
                    'body' => 'Please find attached your newsletter for the month',
                    
                    //Get filename with the extension
                    'newsletterFile' => $request->file('newsletter_file')->getClientOriginalName(),
                ];

                $mailData = Mail::to($newsletterMail)->send(new SendNewsletterMail($details));

                if($mailData) {
                    return redirect()->back()->with('newsletter-sent-successfully', 'Congratulations, your newsletter has been successfully delivered');
                } else {
                    return redirect()->back()->with('newsletter-sent-error', 'There was a problem delivering your newsletter');
                }
            } else {
                return redirect()->back()->with('newsletter-upload-error', 'There was a problem uploading the newsletter to ther server for delivery.');
            }
        }
    }
}
