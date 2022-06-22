<?php

namespace App\Http\Controllers;

use App\Models\SkillsPersonRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session, Response, Mail;
use App\Mail\SendSPSNMail;

class SkillsPersonRegistrationController extends Controller
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
        return view('pages.skills_person.register.skills_person_registration');
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
            'id_number' => ['required', 'min:7', 'max:19'],
            'skills_person_service_number' => '',
            'phone_number' => ['required', 'numeric'],
            'alternative_phone_number' => ['numeric'],
            'skills_person_email' => ['required', 'string', 'email', 'min:3', 'max:69'],
            'address' => ['required', 'min:3', 'max:49'],
            'skillset' => 'required',
            'skillset_description' => ['required', 'min:10', 'max:640'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:4096'],
            'report' => ['required', 'mimes:pdf,doc,docx', 'max:10000'],
            'letters' => ['required', 'mimes:pdf,doc,docx', 'max:10000'],
            'created_at' => [''],
        ]);

        //Get filename with the extension
        $imageFileWithExt = $request->file('image')->getClientOriginalName();
        $reportFileWithExt = $request->file('report')->getClientOriginalName();
        $lettersFileWithExt = $request->file('letters')->getClientOriginalName();
            
        //Get just filename
        $filenameImage = pathinfo($imageFileWithExt,PATHINFO_FILENAME);
        $filenameReport = pathinfo($reportFileWithExt,PATHINFO_FILENAME);
        $filenameLetters = pathinfo($lettersFileWithExt,PATHINFO_FILENAME);
            
        //Get just ext
        $extensionImage = $request->file('image')->getClientOriginalExtension();
        $extensionReport = $request->file('report')->getClientOriginalExtension();
        $extensionLetters = $request->file('letters')->getClientOriginalExtension();
            
        //Filename to store
        $fileNameImageToStore = $filenameImage.'_'.time().'.'.$extensionImage;
        $fileNameReportToStore = $filenameReport.'_'.time().'.'.$extensionReport;
        $fileNameLettersToStore = $filenameLetters.'_'.time().'.'.$extensionLetters;
        
        $pathImage = $request->file('image')->storeAs('public/skills-persons/images',$fileNameImageToStore);
        $pathReport = $request->file('report')->storeAs('public/skills-persons/reports',$fileNameReportToStore);
        $pathLetters = $request->file('letters')->storeAs('public/skills-persons/letters',$fileNameLettersToStore);

        if ($validatedData) {

            $skillsPersonRegistration = SkillsPersonRegistration::create([
                'first_name' => $request->input('first_name'),
                'surname' => $request->input('surname'),
                'middle_name' => $request->input('middle_name'),
                'id_number' => $request->input('id_number'),
                'skills_person_service_number' => null,
                'phone_number' => $request->input('phone_number'),
                'alternative_phone_number' => $request->input('alternative_phone_number'),
                'skills_person_email' => $request->input('skills_person_email'),
                'address' => $request->input('address'),
                'skillset' => $request->input('skillset'),
                'skillset_description' => $request->input('skillset_description'),
                'image' => $pathImage,
                'report' => $pathReport,
                'letters' => $pathLetters,
                'created_at' => $request->input('created_at'),
            ]);

            if ($skillsPersonRegistration) {
                return redirect()->route('index_main')->with('skills-person-registration-successful', 'Registration was Successfull !!!');
            } else {
                return redirect()->back()->with('skills-person-registration-error', 'A problem was encountered while processing your registration. Please re-check your details and try again');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SkillsPersonRegistration  $skillsPersonRegistration
     * @return \Illuminate\Http\Response
     */
    public function show(SkillsPersonRegistration $skillsPersonRegistration)
    {
        $skillsPersonRegistration = SkillsPersonRegistration::select('*')
                                                            ->paginate(10);
        return view('admin.pages.skills_person.registrations.skills_person_registration_records',compact('skillsPersonRegistration'));
    }

     //Function responsible for searching the skills person registration entries
    public function search_skills_person(Request $request, SkillsPersonRegistration $skillsPersonRegistration) 
    {
        $query = $request->get('query');
        $skillsPersonRegistration = SkillsPersonRegistration::select('*')
                                            ->where('first_name', 'LIKE', "%$query%")
                                            ->orWhere('surname', 'LIKE', "%$query%")
                                            ->orWhere('middle_name', 'LIKE', "%$query%")
                                            ->orWhere('id_number', 'LIKE', "%$query%")
                                            ->orWhere('skills_person_service_number', 'LIKE', "%$query%")
                                            ->orWhere('phone_number', 'LIKE', "%$query%")
                                            ->orWhere('alternative_phone_number', 'LIKE', "%$query%")
                                            ->orWhere('skills_person_email', 'LIKE', "%$query%")
                                            ->orWhere('address', 'LIKE', "%$query%")
                                            ->orWhere('skillset', 'LIKE', "%$query%")
                                            ->paginate(10);

        //Incase a record is not found, perform the action below
        if($skillsPersonRegistration->isEmpty()) {
            Session::flash('users-error-message', 'User not found');
        }

         return view('admin.pages.skills_person.registrations.skills_person_registration_records',compact('skillsPersonRegistration'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SkillsPersonRegistration  $skillsPersonRegistration
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skillsPersonRegistration = SkillsPersonRegistration::find($id);

        return view('admin.pages.skills_person.registrations.edit_record.skills_person_service_number_edit', ['skillsPersonRegistration'=>$skillsPersonRegistration]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SkillsPersonRegistration  $skillsPersonRegistration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SkillsPersonRegistration $skillsPersonRegistration)
    {
        $serviceNumber = $skillsPersonRegistration->update([
            'skills_person_service_number' => $request->input('skills_person_service_number'),
        ]);

        if ($serviceNumber) {
            return redirect()->route('skills_person_registration_records')->with('skills-person-service-number-update-success', 'Skills Person Service Number Successfully Updated !!!');
        } else {
            return redirect()->back()->with('skills-person-service-number-error', 'A problem was encountered while processing your update request. Please re-check your details and try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SkillsPersonRegistration  $skillsPersonRegistration
     * @return \Illuminate\Http\Response
     */
    public function destroy(SkillsPersonRegistration $skillsPersonRegistration)
    {
        //
    }

    /**
     * Responsible for sending the skills person service number
     * 
     * 
     * 
     * */
    public function spsnMail($id) {
        $SPSNumber = SkillsPersonRegistration::find($id);

        $details = [
            'title' => 'Mail from TheSkillsShop',
            'body' => 'Dear Skills Person, your Skills Person Service Number for the '. $SPSNumber->skillset.' skillset is '. $SPSNumber->skills_person_service_number
        ];

        $mailData = Mail::to($SPSNumber->skills_person_email)->send(new SendSPSNMail($details));

        if($mailData) {
            return redirect()->back()->with('skills-person-service-number-successfull-email', 'The Skills Person Service Number was successfully sent to the skills person');
        } else {
            return redirect()->back()->with('skills-person-service-number-failed-email', 'There was a problem sending the skills person their Skills Person Service Number');
        }
    }

    /**
     * Downloads the image from the storage folder
     * 
     * 
     * 
     * */
    public function imageDownload($id) {
        $imageFile = SkillsPersonRegistration::find($id);
        $imageFilePath = $imageFile->image;
        $headers = ['Content-Type: image/jpeg, image/jpg, image/png'];
        $storagePath = storage_path('app/'.$imageFilePath);

        /*if(file_exists($storagePath)) {
            return Response::download($storagePath, $headers);
        } else {
            return redirect()->back()->with('image-download-failed', 'An error occurred when trying to download the specified image. Please try again later');
        }*/
        
    }

}
