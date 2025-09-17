<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enquirys = Enquiry::paginate(10);
        return view("admin.enquiry.index", compact("enquirys"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();

        $rules = [
            // Basic Info
            'full_name' => 'required|string|max:255',
            'dob' => 'required',

            // Academic Qualification
            'qualification' => 'required|string|max:255',
            'see_school_name' => 'nullable|string|max:255',
            'see_gpa' => 'nullable|string|max:255',
            'see_passed_year' => 'nullable|string|max:255',
            'plus_two_college_name' => 'nullable|string|max:255',
            'plus_two_gpa' => 'nullable|string|max:255',
            'plus_two_passed_year' => 'nullable|string|max:255',
            'bachelor_college_name' => 'nullable|string|max:255',
            'bachelor_gpa' => 'nullable|string|max:255',
            'bachelor_passed_year' => 'nullable|string|max:255',
            'master_college_name' => 'nullable|string|max:255',
            'master_gpa' => 'nullable|string|max:255',
            'master_passed_year' => 'nullable|string|max:255',

            // Additional Info
            'marital_status' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'mobile' => 'required',
            'email' => 'required|email|max:255',
            'phone2' => 'nullable|string|max:255',

            // Guardian Info
            'parents_name' => 'required|string|max:255',
            'g_address' => 'required|string|max:255',
            'g_mobile' => 'required|string|max:255',
            'g_email' => 'nullable|email|max:255',

            // Other Details
            'preferred_country' => 'required|string|max:255',
            'language_test' => 'required|string|max:255',
            'test_type' => 'nullable|string|max:255',
            'test_score' => 'nullable|string|max:255',
            'previous_education' => 'required|string|max:255',
            'previous_institution_name' => 'nullable|string|max:255',
            'source' => 'required|array',
            'message' => 'nullable|string',
        ];

        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return redirect()->route("enquiry")->with('fail', 'Please correct the errors in the form.');
        } else {
            // Convert the 'dob' field from dd-mm-yyyy to yyyy-mm-dd format
            $input['dob'] = Carbon::createFromFormat('d-m-Y', $input['dob'])->format('Y-m-d');

            // Convert the source array to a JSON string
            $input['source'] = json_encode($input['source']);

            // Insert the data into the database
            Enquiry::create($input);

            return redirect()->back()->with('success', 'Registration successful!');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Enquiry $enquiry)
    {
        //

        if ($enquiry['source'] != null || $enquiry['source'] != "{}" || $enquiry['source'] != "") {
            $enquiry['source'] = json_decode($enquiry['source']);
        } else {
            $enquiry['source'] = null;
        }


        return view("admin.enquiry.show", compact('enquiry'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enquiry $enquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Enquiry $enquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enquiry $enquiry)
    {
        //
    }
}
