<?php

namespace App\Http\Controllers;

use App\Models\SkillsPersonRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\SweetAlertServiceProvider;

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
        /*
        $validatedData = $request->validate([
            'first_name' => 'required',
            'surname' => 'required',
            'middle_name' => 'required',
            'id_number' => 'required',
            'skills_person_service_number' => '',
            'phone_number' => 'required',
            'alternative_phone_number' => 'required',
            'email' => 'required',
            'address' => 'required',
            'skillset' => 'required',
            'skillset_description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'report' => 'required|mimes:pdf,doc,docx|max:10000',
            'letters' => 'required|mimes:pdf,doc,docx|max:10000',
            'created_at' => '',
        ]);

        if (request()->hasFile('image', 'report', 'letters')) {
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
        }

        DB::('skills_person_registration')->insert($validatedData);
        //return view('pages.skills-persons.register.thank-you');
        return redirect()->route('index-main')->with('success', 'Registration was Successfull !!!');
        */
        $validatedData = Validator::make($request->all(), [
            'first_name' => 'required',
            'surname' => 'required',
            'middle_name' => 'required',
            'id_number' => 'required',
            'skills_person_service_number' => '',
            'phone_number' => 'required',
            'alternative_phone_number' => 'required',
            'email' => 'required',
            'address' => 'required',
            'skillset' => 'required',
            'skillset_description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'report' => 'required|mimes:pdf,doc,docx|max:10000',
            'letters' => 'required|mimes:pdf,doc,docx|max:10000',
            'created_at' => '',
        ]);
        
        if (request()->hasFile('image', 'report', 'letters')) {
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
        }

        if ($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData->messages()->all());
        } else {
            SkillsPersonRegistration::create([
            'first_name' => $request->input('first_name'),
            'surname' => $request->input('surname'),
            'middle_name' => $request->input('middle_name'),
            'id_number' => $request->input('id_number'),
            'skills_person_service_number' => null,
            'phone_number' => $request->input('phone_number'),
            'alternative_phone_number' => $request->input('alternative_phone_number'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'skillset' => $request->input('skillset'),
            'skillset_description' => $request->input('skillset_description'),
            'image' => $request->input('image'),
            'report' => $request->input('report'),
            'letters' => $request->input('letters'),
            'created_at' => $request->input('created_at'),
        ]);
        }
        
        //return view('pages.skills-persons.register.thank-you');
        return redirect()->route('index_main')->with('success', 'Registration was Successfull !!!');
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
                                                            ->paginate(25);
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
                                            ->orWhere('email', 'LIKE', "%$query%")
                                            ->orWhere('address', 'LIKE', "%$query%")
                                            ->orWhere('skillset', 'LIKE', "%$query%")
                                            ->paginate(25);

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
         $request->validate([
            'skills_person_service_number' => 'required'
        ]);

        $skillsPersonRegistration->update($request->all());

        return redirect()->route('skills_person_registration_records')->with('info', 'Skills Person Service Number Successfully Updated !!!');
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
}
