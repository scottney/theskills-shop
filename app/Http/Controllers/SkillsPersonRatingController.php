<?php

namespace App\Http\Controllers;

use App\Models\SkillsPersonRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;

class SkillsPersonRatingController extends Controller
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
        return view('pages.skills_person.rate.skills_person_rating');
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
            'skills_person_service_number' => ['required'],
            'rate' => ['integer', 'numeric', 'required'],
            'created_at' => [''],
        ]);

        if ($validatedData) {
            $skillsPersonRating = SkillsPersonRating::create([
                'skills_person_service_number' => $request->input('skills_person_service_number'),
                'rate' => $request->input('rate'),
                'created_at' => $request->input('created_at'),
            ]);

            if ($skillsPersonRating) {
                return redirect()->route('index_main')->with('skills-person-rating-success', 'Skills Person Rating was Successfull !!!');
            } else {
                return redirect()->back()->with('skillsperson-rating-error', 'A problem was encountered while processing your rating. Please re-check your details and try again');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SkillsPersonRating  $skillsPersonRating
     * @return \Illuminate\Http\Response
     */
    public function show(SkillsPersonRating $skillsPersonRating)
    {
        //Get all skills person rating records
        $skillsPersonRating = SkillsPersonRating::select('*')
                                                ->paginate(10);
        return view('admin.pages.skills_person.ratings.skills_person_rating_records',compact('skillsPersonRating'));
    }

    //Function responsible for searching the skills person rating entries
    public function search_skills_person(Request $request, SkillsPersonRating $skillsPersonRating) 
    {
        $query = $request->get('query');
        $skillsPersonRating = SkillsPersonRating::select('*')
                                            ->where('skills_person_service_number', 'LIKE', "%$query%")
                                            ->orWhere('rate', 'LIKE', "%$query%")
                                            ->paginate(10);

        //Incase a record is not found, perform the action below
        if($skillsPersonRating->isEmpty()) {
            Session::flash('records-error-message', 'Record not found !!!');
        }

        return view('admin.pages.skills_person.ratings.skills_person_rating_records',compact('skillsPersonRating'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SkillsPersonRating  $skillsPersonRating
     * @return \Illuminate\Http\Response
     */
    public function edit(SkillsPersonRating $skillsPersonRating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SkillsPersonRating  $skillsPersonRating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SkillsPersonRating $skillsPersonRating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SkillsPersonRating  $skillsPersonRating
     * @return \Illuminate\Http\Response
     */
    public function destroy(SkillsPersonRating $skillsPersonRating)
    {
        //
    }
}
