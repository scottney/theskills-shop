<?php

namespace App\Http\Controllers;

use App\Models\CustomersBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\SweetAlertServiceProvider;

class CustomersBookingController extends Controller
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
        return view('pages.customers.book.customers_booking');
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
            'customers_service_number' => '',
            'phone_number' => 'required',
            'alternative_phone_number' => 'required',
            'email' => 'required',
            'address' => 'required',
            'services' => 'required',
            'service_required' => 'required',
            'service_date' => 'required',
            'service_time' => 'required',
            'created_at' => '',
        ]);

        DB::table('customers_booking')->insert($validatedData);
        //return view('pages.customers.book.thank-you');
        return redirect()->route('index-main')->with('success', 'Booking was Successfull. Thank You !!!');
        */
        $validatedData = Validator::make($request->all(), [
            'first_name' => 'required',
            'surname' => 'required',
            'middle_name' => 'required',
            'id_number' => 'required',
            'customers_service_number' => '',
            'phone_number' => 'required',
            'alternative_phone_number' => 'required',
            'email' => 'required',
            'address' => 'required',
            'services' => 'required',
            'service_required' => 'required',
            'service_date' => 'required',
            'service_time' => 'required',
            'created_at' => '',
        ]);

        if ($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData->messages()->all());
        } else {
            CustomersBooking::create([
            'first_name' => $request->input('first_name'),
            'surname' => $request->input('surname'),
            'middle_name' => $request->input('middle_name'),
            'id_number' => $request->input('id_number'),
            'customers_service_number' => null,
            'phone_number' => $request->input('phone_number'),
            'alternative_phone_number' => $request->input('alternative_phone_number'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'services' => $request->input('services'),
            'service_required' => $request->input('service_required'),
            'service_date' => $request->input('service_date'),
            'service_time' => $request->input('service_time'),
            'created_at' => $request->input('created_at'),
        ]);
        }
    
        return redirect()->route('index_main')->with('success', 'Booking was Successfull. Thank You !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomersBooking  $customersBooking
     * @return \Illuminate\Http\Response
     */
    public function show(CustomersBooking $customersBooking)
    {
        //Get all customers booking records
        $customersBooking = CustomersBooking::select('*')
                                            ->paginate(25);
        return view('admin.pages.customers.bookings.customers_booking_records',compact('customersBooking'));
    }

    //Function responsible for searching the customers booking entries
    public function search_customers(Request $request, CustomersBooking $customersBooking) 
    {
        $query = $request->get('query');
        $customersBooking = CustomersBooking::select('*')
                                            ->where('first_name', 'LIKE', "%$query%")
                                            ->orWhere('surname', 'LIKE', "%$query%")
                                            ->orWhere('middle_name', 'LIKE', "%$query%")
                                            ->orWhere('id_number', 'LIKE', "%$query%")
                                            ->orWhere('customers_service_number', 'LIKE', "%$query%")
                                            ->orWhere('phone_number', 'LIKE', "%$query%")
                                            ->orWhere('alternative_phone_number', 'LIKE', "%$query%")
                                            ->orWhere('email', 'LIKE', "%$query%")
                                            ->orWhere('address', 'LIKE', "%$query%")
                                            ->orWhere('services', 'LIKE', "%$query%")
                                            ->orWhere('service_date', 'LIKE', "%$query%")
                                            ->orWhere('service_time', 'LIKE', "%$query%")
                                            ->paginate(25);

         return view('admin.pages.customers.bookings.customers_booking_records',compact('customersBooking'));
    }

    public function show_calendar() 
    {
        //Get the calendar
        return view('admin.pages.calendar.calendar');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomersBooking  $customersBooking
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customersBooking = CustomersBooking::find($id);
        return view('admin.pages.customers.bookings.edit_record.customers_service_number_edit', ['customersBooking'=>$customersBooking]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomersBooking  $customersBooking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomersBooking $customersBooking)
    {
        $request->validate([
            'customers_service_number' => 'required'
        ]);

        $customersBooking->update($request->all());

        return redirect()->route('customers_booking_records')->with('info', 'Customer Service Number Successfully Updated !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomersBooking  $customersBooking
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomersBooking $customersBooking)
    {
        //
    }
}
