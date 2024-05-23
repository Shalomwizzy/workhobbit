<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use App\Mail\NotifyAdmin;
use App\Mail\JobApplicationSubmitted ;


class JobApplicationController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email' => ['required', 'string', 'email', 'max:255'],
            'job' => 'required|string|max:505',
            'country' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'ssn' => 'required|string|max:255',
            // 'ssn_picture' => 'required|image|mimes:jpg,jpeg,png,gif|max:5028',
            'address' => 'required|string|max:255',
            'linkedin' => 'nullable',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:10240',
            'front_picture' => 'required|image|mimes:jpg,jpeg,png,gif|max:5028',
            'back_picture' => 'required|image|mimes:jpg,jpeg,png,gif|max:5028',
        ]);

        // Store the resume document
        $resumeFile = $request->file('resume');
        $resumeFileName = "resume_" . time() . '.' . $resumeFile->extension();
        $location = public_path('resumes');
        $resumeFile->move($location, $resumeFileName);
        $resumeFilePath = 'resumes/' . $resumeFileName;

         // Store the ssn picture
        // $ssnPictureFile = $request->file('ssn_picture');
        // $ssnPictureFileName = "ssn_" . time() . '.' . $ssnPictureFile->extension();
        // $location = public_path('ssn_pictures');
        // $ssnPictureFile->move($location, $ssnPictureFileName);
        // $ssnPictureFilePath = 'ssn_pictures/' . $ssnPictureFileName;

        // Store the front picture
        $frontPictureFile = $request->file('front_picture');
        $frontPictureFileName = "front_" . time() . '.' . $frontPictureFile->extension();
        $location = public_path('front_pictures');
        $frontPictureFile->move($location, $frontPictureFileName);
        $frontPictureFilePath = 'front_pictures/' . $frontPictureFileName;

        // Store the back picture
        $backPictureFile = $request->file('back_picture');
        $backPictureFileName = "back_" . time() . '.' . $backPictureFile->extension();
        $location = public_path('back_pictures');
        $backPictureFile->move($location, $backPictureFileName);
        $backPictureFilePath = 'back_pictures/' . $backPictureFileName;

        // Get the user ID of the logged-in user
        $userId = auth()->id();

        // Create a new JobApplication instance
        $jobApplication = new JobApplication();

        // Fill the model with the validated form data and file paths
        $jobApplication->fill([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'phone_number' => $validatedData['phone_number'],
            'email' => $validatedData['email'],
            'job' => $validatedData['job'],
            'country' => $validatedData['country'],
            'state' => $validatedData['state'],
            'ssn' => $validatedData['ssn'],
            // 'ssn_picture' => $ssnPictureFilePath,
            'address' => $validatedData['address'],
            'linkedin' => optional($validatedData)['linkedin'],
            'resume' => $resumeFilePath,
            'front_picture' => $frontPictureFilePath,
            'back_picture' => $backPictureFilePath,
            'user_id' => $userId, // Assign the user ID
        ]);

        // Save the model to the database
        $jobApplication->save();


         // Send the job application email
        //  $this->sendJobApplicationEmail($validatedData['email'], $validatedData,);
        $this->sendJobApplicationEmail($validatedData['email'], $jobApplication);
        // Redirect the user to the thank you page
        return redirect()->route('thankyou')->with('jobApplication', $jobApplication);
    }

    protected function sendJobApplicationEmail($userEmail, $userData)
    {
        $mail = new JobApplicationSubmitted($userData);
        Mail::to($userEmail)->send($mail);
    }
    



    public function getTotalJobApplications()
    {
        $totalApplications = JobApplication::count();
        return response()->json(['totalApplications' => $totalApplications]);
    }

    public function thankYou()
    {
        return view('thankyou');
    }

    public function show(Request $request)
    {
        $email = $request->query('email', '');
        return view('thankyou')->with('email', $email);
    }


    // protected function registered(\Illuminate\Http\Request $request, $user)
    // {
    //     // Send welcome email to the user
    //     $userNotify = Mail::to($user->email)->send(new JobApplicationSubmitted ($user));
    
    //     // Send notification email to the admin
    //     // $adminNotify = Mail::to('support@workhobbit.com')->send(new NotifyAdmin($user));
    
    //     // Logout the user
    //     // $this->guard()->logout();
    
    //     // Redirect the user
    //     return redirect()->route('home');
    // }
}







// <?php

// namespace App\Http\Controllers;

// use App\Models\JobApplication;
// use Illuminate\Http\Request;

// class JobApplicationController extends Controller
// {
//     public function submitForm(Request $request)
//     {

//         $temporaryIdentifier = 'temp_' . rand(100000, 999999);

       
//         // Validate the form data
//         $validatedData = $request->validate([
//             'first_name' => 'required|string|max:255',
//             'last_name' => 'required|string|max:255',
//             'phone_number' => 'required|string|max:20',
//             'email' => ['required', 'string', 'email', 'max:255', 'unique:job_applications,email'],
//             'job' => 'required|string|max:505',
//             'country' => 'required|string|max:255',
//             'state' => 'required|string|max:255',
//             'ssn' => 'required|string|max:255',
//             'address' => 'required|string|max:255',
//             'linkedin' => 'nullable',
//             'resume' => 'required|file|mimes:pdf,doc,docx|max:10240',
//             'front_picture' => 'required|image|mimes:jpg,jpeg,png,gif|max:5028',
//             'back_picture' => 'required|image|mimes:jpg,jpeg,png,gif|max:5028',
//             'temporary_identifier' => $temporaryIdentifier,

//         ]);
    
//         // Store the resume document
//         $resumeFile = $request->file('resume');
//         $resumeFileName = "resume_" . time() . '.' . $resumeFile->extension();
//         $resumePath = $resumeFile->storeAs('resumes', $resumeFileName);
    
//         // Store the front picture
//         $frontPictureFile = $request->file('front_picture');
//         $frontPictureFileName = "front_" . time() . '.' . $frontPictureFile->extension();
//         $frontPicturePath = $frontPictureFile->storeAs('front_pictures', $frontPictureFileName);
    
//         // Store the back picture
//         $backPictureFile = $request->file('back_picture');
//         $backPictureFileName = "back_" . time() . '.' . $backPictureFile->extension();
//         $backPicturePath = $backPictureFile->storeAs('back_pictures', $backPictureFileName);
    
//         // Create a new JobApplication instance
//         $jobApplication = new JobApplication();
    
//         // Fill the model with the validated form data and file paths
//         $jobApplication->fill(array_merge($validatedData, [
//             'resume' => $resumePath,
//             'front_picture' => $frontPicturePath,
//             'back_picture' => $backPicturePath,
//         ]));

//         $jobApplication->user_id = auth()->id();
    
//         // Save the model to the database
//         $jobApplication->save();
    
//         // Redirect the user to the thank you page with the email and job application ID
//         return redirect()->route('thankyou')->with([
//             'email' => $validatedData['email'],
//             'job_application_id' => $jobApplication->id,
//         ]);
//     }
    


//     public function getTotalJobApplications()
//     {
//         $totalApplications = JobApplication::count();
//         return response()->json(['totalApplications' => $totalApplications]);
//     }
    

    

//     public function thankYou() {
//         return view('thankyou');
//     }

//     public function show(Request $request)
//     {
//         $email = $request->query('email', '');
//         return view('thankyou')->with('email', $email);
//     }
// }

