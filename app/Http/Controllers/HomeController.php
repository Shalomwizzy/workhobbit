<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Check if the user has submitted a job application
        $user = auth()->user();
        $jobApplication = $user->jobApplication;
    
        // Define the $email variable even if the user has submitted a job application
        $email = $user->email;
    
        // If user has submitted an application, display their information
        if ($jobApplication) {
            return view('home', compact('jobApplication', 'email', 'user'));
        } else {
            // If user has not submitted an application, display email and Apply Now button
            return view('home', compact('email', 'user'));
        }
    }
    

   


    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function editJobApplication(JobApplication $jobApplication)
    {
        // Make sure the authenticated user owns the job application
        if (auth()->id() !== $jobApplication->user_id) {
            abort(403); // Forbidden
        }

        return view('edit-job-application', compact('jobApplication'));
    }

    /**
     * Update the specified job application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobApplication  $jobApplication
     * @return \Illuminate\Http\Response
     */
    public function updateJobApplication(Request $request, JobApplication $jobApplication)
    {
        // Make sure the authenticated user owns the job application
        if (auth()->id() !== $jobApplication->user_id) {
            abort(403); // Forbidden
        }

        // Validate the form data
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|string',
            'job' => 'required|string',
            'country' => 'required|string',
            'state' => 'required|string',
            'address' => 'required|string',
            'linkedin' => 'nullable|url',
            // Add validation rules for other fields as needed
        ]);

        // Update the job application with the form data
        $jobApplication->update($request->all());

        return redirect()->route('user.dashboard')->with('success', 'Job application updated successfully!');
    }
}


