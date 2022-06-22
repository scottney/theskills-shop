<?php

namespace App\Http\Controllers;

use App\Models\CustomersRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;

class CustomersRatingController extends Controller
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
        return view('pages.customers.rate.customers_rating');
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
            'customers_service_number' => ['required'],
            'rate' => ['required'],
            'created_at' => [''],
        ]);

        if ($validatedData) {

            $customersRating = CustomersRating::create([
                'customers_service_number' => $request->input('customers_service_number'),
                'rate' => $request->input('rate'),
                'created_at' => $request->input('created_at'),
            ]);

            if ($customersRating) {
                 return redirect()->route('index_main')->with('customers-rating-success', 'Customer Rating was Successfull. Thank You !!!');
            } else {
                return redirect()->back()->with('customers-rating-error', 'A problem was encountered while processing your booking. Please re-check your details and try again.');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomersRating  $customersRating
     * @return \Illuminate\Http\Response
     */
    public function show(CustomersRating $customersRating)
    {
         $customersRating = CustomersRating::select('*')
                                            ->paginate(10);
         return view('admin.pages.customers.ratings.customers_rating_records',compact('customersRating'));
    }

    //Function responsible for searching the customers rating entries
    public function search_customers(Request $request, CustomersRating $customersRating) 
    {
        $query = $request->get('query');
        $customersRating = CustomersRating::select('*')
                                            ->where('customers_service_number', 'LIKE', "%$query%")
                                            ->orWhere('rate', 'LIKE', "%$query%")
                                            ->paginate(10);

        //Incase a record is not found, perform the action below
        if($customersRating->isEmpty()) {
            return redirect()->route('customers_rating_records')->with('records-error-message', 'Record not found');
        } else {
            return view('admin.pages.customers.ratings.customers_rating_records',compact('customersRating'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomersRating  $customersRating
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomersRating $customersRating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomersRating  $customersRating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomersRating $customersRating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomersRating  $customersRating
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomersRating $customersRating)
    {
        //
    }
}
