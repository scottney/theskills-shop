<?php

namespace App\Http\Controllers;

use App\Models\CustomersBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session, PDF, Mail;
use App\Mail\SendCSNMail;

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
        $validatedData = $request->validate([
            'first_name' => ['required', 'string', 'min:1', 'max:19'],
            'surname' => ['required', 'string', 'min:1', 'max:19'],
            'middle_name' => ['required', 'string', 'min:1', 'max:19'],
            'id_number' => ['required', 'min:7', 'max:19'],
            'customers_service_number' => [''],
            'phone_number' => ['required', 'numeric'],
            'alternative_phone_number' => ['numeric'],
            'customer_email' => ['required', 'string', 'email', 'min:3', 'max:69'],
            'address' => ['required', 'min:5', 'max:49'],
            'services' => ['required'],
            'service_required' => ['required', 'min:10', 'max:640'],
            'service_date' => ['required', 'date'],
            'service_time' => ['required'],
            'created_at' => '',
        ]);

        if ($validatedData) {

            $customersBooking = CustomersBooking::create([
                'first_name' => $request->input('first_name'),
                'surname' => $request->input('surname'),
                'middle_name' => $request->input('middle_name'),
                'id_number' => $request->input('id_number'),
                'customers_service_number' => null,
                'phone_number' => $request->input('phone_number'),
                'alternative_phone_number' => $request->input('alternative_phone_number'),
                'customer_email' => $request->input('customer_email'),
                'address' => $request->input('address'),
                'services' => $request->input('services'),
                'service_required' => $request->input('service_required'),
                'service_date' => $request->input('service_date'),
                'service_time' => $request->input('service_time'),
                'created_at' => $request->input('created_at'),
            ]);

            if ($customersBooking) {
                return redirect()->route('index_main')->with('customers-booking-success', 'Booking was Successfull. Thank You !!!');
            } else {
                return redirect()->back()->with('customers-booking-error', 'A problem was encountered while processing your booking. Please re-check your details and try again.');
            }
        }
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
                                            ->paginate(10);
        return view('admin.pages.customers.bookings.customers_booking_records',compact('customersBooking'));
    }

    //Function responsible for redirecting to the page for showing all of a customers data
    public function showData($id) {
        //Get all customers booking data
        $customersBooking = CustomersBooking::findorfail($id);

        return view('admin.pages.customers.bookings.customers_booking_records_details',compact('customersBooking'));
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
                                            ->orWhere('customer_email', 'LIKE', "%$query%")
                                            ->orWhere('address', 'LIKE', "%$query%")
                                            ->orWhere('services', 'LIKE', "%$query%")
                                            ->orWhere('service_date', 'LIKE', "%$query%")
                                            ->orWhere('service_time', 'LIKE', "%$query%")
                                            ->paginate(10);

        //Incase a record is not found, perform the action below
        if($customersBooking->isEmpty()) {
            return redirect()->route('customers_booking_records')->with('users-error-message', 'User not found');
        }

        return view('admin.pages.customers.bookings.customers_booking_records',compact('customersBooking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomersBooking  $customersBooking
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customersBooking = CustomersBooking::findorfail($id);
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
        $customerData = $customersBooking->update([
            'customers_service_number' => $request->input('customers_service_number'),
        ]);

        if ($customerData) {
            return redirect()->route('customers_booking_records')->with('customers-service-number-update-success', 'Customer Service Number Successfully Updated !!!');
        } else {
            return redirect()->back()->with('customers-service-number-error', 'Something went wrong while trying to update the customer service number. Please re-check your details and try again');
        }
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

    public function show_calendar() 
    {
        //Get only the required data from the database
        $customersBooking = CustomersBooking::select('first_name', 'surname', 'middle_name', 'id_number', 'customers_service_number', 'phone_number', 'alternative_phone_number', 'address', 'services', 'service_date', 'service_time')->where('service_date', '=', date("Y-m-d"))->get();

        //Get the calendar
        return view('admin.pages.calendar.calendar', ['customersBooking'=>$customersBooking]);
    }

    //Responsible for creating PDF files format
    public function createPDF() 
    {
        //Retrieve specific data from the database
         $customersBooking = CustomersBooking::select('first_name', 'surname', 'middle_name', 'id_number', 'customers_service_number', 'phone_number', 'alternative_phone_number', 'address', 'services', 'service_date', 'service_time')->where('service_date', '=', date("Y-m-d"))->get();

         $pdf = PDF::loadView('admin.pages.calendar.pdf_view.schedules', ['customersBooking'=>$customersBooking]);

         /*
         Opens the PDF file in the browser
         
         return $pdf->stream();
         */

         //Download the PDF file
         return $pdf->download('schedules.pdf');
    }

    private $active_year, $active_month, $active_day;
    private $bookings = [];

    public function __construct($date = null) {
        $this->active_year = $date != null ? date('Y', strtotime($date)) : date('Y');
        $this->active_month = $date != null ? date('m', strtotime($date)) : date('m');
        $this->active_day = $date != null ? date('d', strtotime($date)) : date('d');
    }

    public function add_bookings($txt, $date, $days = 1, $color = '') 
    {
        $color = $color ? ' ' . $color : $color;
        $this->bookings[] = [$txt, $date, $days, $color];
    }

    public function __toString() {
        $num_days = date('t', strtotime($this->active_day . '-' . $this->active_month . '-' . $this->active_year));
        $num_days_last_month = date('j', strtotime('last day of previous month', strtotime($this->active_day . '-' . $this->active_month . '-' . $this->active_year)));
        $days = [0 => 'Sun', 1 => 'Mon', 2 => 'Tue', 3 => 'Wed', 4 => 'Thu', 5 => 'Fri', 6 => 'Sat'];
        $first_day_of_week = array_search(date('D', strtotime($this->active_year . '-' . $this->active_month . '-1')), $days);
        $html = '<div class="calendar">';
        $html .= '<div class="header">';
        $html .= '<div class="month-year">';
        $html .= date('F Y', strtotime($this->active_year . '-' . $this->active_month . '-' . $this->active_day));
        $html .= '</div>';
        $html .= '</div>';
        $html .= '<div class="days">';
        foreach ($days as $day) {
            $html .= '
                <div class="day_name">
                    ' . $day . '
                </div>
            ';
        }
        for ($i = $first_day_of_week; $i > 0; $i--) {
            $html .= '
                <div class="day_num ignore">
                    ' . ($num_days_last_month-$i+1) . '
                </div>
            ';
        }
        for ($i = 1; $i <= $num_days; $i++) {
            $selected = '';
            $customersBooking = '';
            if ($i == $this->active_day) {
                $selected = ' selected';
            }
            $html .= '<div class="day_num' . $selected . '">';
            $html .= '<span>' . $i . '</span>';
            foreach ($this->bookings as $booking) {
                for ($d = 0; $d <= ($booking[2]-1); $d++) {
                    if (date('y-m-d', strtotime($this->active_year . '-' . $this->active_month . '-' . $i . ' -' . $d . ' day')) == date('y-m-d', strtotime($booking[1]))) {
                        $html .= '<div class="booking' . $booking[3] . '">';
                        $html .= $booking[0];
                        $html .= '</div>';
                    }
                }
            }
            $html .= '</div>';
        }
        for ($i = 1; $i <= (42-$num_days-max($first_day_of_week, 0)); $i++) {
            $html .= '
                <div class="day_num ignore">
                    ' . $i . '
                </div>
            ';
        }
        $html .= '</div>';
        $html .= '</div>';
        return $html;
    }

    //Function responsible for searching the calendar schedules
    public function search_calendar(Request $request, CustomersBooking $customersBooking) 
    {
        $query = $request->get('query');
        $customersBooking = CustomersBooking::select('*')
                                            ->where('service_date', 'LIKE', "%$query%")
                                            ->paginate(10);

        //Incase a record is not found, perform the action below
        if($customersBooking->isEmpty()) {
            return redirect()->route('schedules_search')->with('schedules-error-message', 'No Bookings Found for this date');
        }

        return view('admin.pages.calendar.calendar', ['customersBooking'=>$customersBooking]);
    }

     /**
     * Responsible for sending the customer service number
     * 
     * 
     * 
     * */
    public function csnMail($id) {
        $CSNumber = CustomersBooking::find($id);

        $details = [
            'title' => 'Mail from TheSkillsShop',
            'body' => 'Dear Customer, your Customer Service Number for the '. $CSNumber->services.' service is '. $CSNumber->customers_service_number
        ];

        $mailData = Mail::to($CSNumber->customer_email)->send(new SendCSNMail($details));

        if($mailData) {
            return redirect()->back()->with('customer-service-number-successfull-email', 'The Customer Service Number was successfully sent to the customer');
        } else {
            return redirect()->back()->with('customer-service-number-failed-email', 'There was a problem sending the customer their Customer Service Number');
        }
    }

    

}
