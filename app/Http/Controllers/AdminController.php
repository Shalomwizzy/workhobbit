<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Notifications\SendEmailToAllUsers;
use App\Notifications\SendEmailToUser;
use App\Notifications\SendEmailToSubscribers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function show(){
        return view('admin.dashboard');
    }


    public function allUsers()
    {
        $users = User::with('jobApplication')
                    ->orderBy('created_at', 'desc') // Change 'desc' to 'desc'
                    ->paginate(10);
        return view('admin.manage-users.all-users', compact('users'));
    }
    
    
    
    public function jobApplication()
    {
        $applications = JobApplication::orderBy('created_at', 'desc')
                                      ->paginate(10);
        return view('admin.manage-users.job-applications', compact('applications'));
    }
    
    public function applicationDetails($applicationId)
    {
        // Fetch the job application details from the database
        $jobApplication = JobApplication::findOrFail($applicationId);
    
        // Pass the job application details to the view
        return view('admin.manage-users.job_application_details', compact('jobApplication'));
    }


    


    public function showUserDetails(Request $request)
    {
        $userId = $request->query('userId'); // Assuming user ID is passed in the query string
        
        // Check if a job application exists for the given user ID
        $jobApplication = JobApplication::where('user_id', $userId)->first();
    
        // If no job application exists, you can handle this case accordingly
        if (!$jobApplication) {
            // For example, you could return a response indicating that no application was found
            return response()->view('admin.manage-users.no-application-found');
        }
    
        // Get the file paths of the front and back pictures
        $frontPicturePath = public_path($jobApplication->front_picture);
        $backPicturePath = public_path($jobApplication->back_picture);
    
        // Get the file path of the resume
        $resumePath = public_path($jobApplication->resume);
    
        // Return the view with the job application data and file paths
        return view('admin.manage-users.user-details', compact('jobApplication', 'frontPicturePath', 'backPicturePath', 'resumePath'));
    }
    



   



    public function createUser(){
        return view('admin/manage-users.create-users');
    }

    public function storeUser(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:admin,guest',
            'status' => 'nullable|in:active,suspended', // Adjusted role options
            
        ]);
    
        // Create a new user
        $user = new User();
        $user->email = $validatedData['email'];
        $user->username = $validatedData['username'];
        $user->password = bcrypt($validatedData['password']);
        $user->role = $validatedData['role'];
        $user->status = 'active'; 
        $user->save();
    
        return redirect()->route('all-users')->with('success', 'User created successfully!');
    }

   

// SUSPEN AND ACTIVATE USER FUNCTION
    public function suspendUser(User $user)
    {
        $user->update(['status' => 'suspended']);

        return redirect()->back()->with('success', 'User suspended successfully!');
    }

    public function activateUser(User $user)
    {
        $user->update(['status' => 'active']);

        return redirect()->back()->with('success', 'User activated successfully!');
    }




    // SEARCH USER FUNCTION
    public function searchUsers(Request $request)
    {
        $search = $request->input('search');
        
        // Query users with search term
        $users = User::where('email', 'LIKE', "%{$search}%")
                    ->paginate(20);
    
        if ($users->isEmpty()) {
            return back()->with('error', 'No users found.');
        }
    
        return view('admin/manage-users.all-users', compact('users'));
    }


    public function showSendEmailForm($userId)
    {
        // Find the user by ID
        $user = User::find($userId);
    
        // Check if the user exists
        if (!$user) {
            return back()->with('error', 'User not found.');
        }
    
        // Pass the user data to the view
        return view('admin.manage-users.send-emails', compact('user'));
    }


    

    // SEND MAIL TO USERS FUNCTION
    public function sendEmail(Request $request, $userId)
    {
        // Find the user by ID
        $user = User::find($userId);
    
        // Check if the user exists
        if (!$user) {
            return back()->with('error', 'User not found.');
        }
    
        // Validate the incoming request
        $validatedData = $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
    
        // Send the notification
        $user->notify(new SendEmailToUser($validatedData['subject'], $validatedData['message']));
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Email sent successfully to ' . $user->email)->with('user', $user);
    }
    





    public function sendResetLink(User $user)
    {
        // Send the password reset link to the user's email
        Password::sendResetLink(['email' => $user->email]);
    
        // Optionally, you can handle the response or provide feedback to the admin
    
        // Redirect back with a success message
        return back()->with('success', 'Password reset link sent successfully to ' . $user->email);
    }

    public function destroy(User $user)
{
    // Delete the user
    $user->delete();

    // Redirect back with a success message
    return back()->with('success', 'User deleted successfully.');
}




public function showSuspendedUsers()
{
    $suspendedUsers = User::where('status', 'suspended')
                          ->orderBy('created_at', 'desc')
                          ->paginate(10);
    return view('admin.manage-users.suspended-users', compact('suspendedUsers'));
}

public function showActiveUsers()
{
    $activeUsers = User::where('status', 'active')
                       ->orderBy('created_at', 'desc')
                       ->paginate(10);
    return view('admin.manage-users.active-users', compact('activeUsers'));
}

public function showAdministrators()
{
    $administrators = User::where('role', 'admin')
                          ->orderBy('created_at', 'desc')
                          ->paginate(10);
    return view('admin.manage-users.administrators', compact('administrators'));
}




public function showEmailToAllUsers()
{
    return view('admin/manage-users.send_email_to_all_users');
}

// public function sendEmailToAllUsers(Request $request)
// {
//     $subject = $request->input('subject');
//     $message = $request->input('message');

//     $users = User::all();
//     foreach ($users as $user) {
//         $user->notify(new SendEmailToAllUsers($subject, $message));
//     }

//     return redirect()->back()->with('success', 'Email sent to all Users successfully.');
// }

public function sendEmailToAllUsers(Request $request)
{
    // Retrieve the subject and message from the request
    $subject = $request->input('subject');
    $message = $request->input('message');

    // Retrieve all authenticated users
    $authenticatedUsers = User::all();

    // Send email notification to each authenticated user
    foreach ($authenticatedUsers as $user) {
        $user->notify(new SendEmailToAllUsers($subject, $message));
    }

    // Redirect back with success message
    return redirect()->back()->with('success', 'Email sent to all authenticated users successfully.');
}




public function showSendEmailToSubscribersForm()
{
    return view('admin/manage-users.send-email-to-subscribers');
}



public function sendEmailToSubscribers(Request $request)
{
    // Retrieve the subject and message from the request
    $subject = $request->input('subject');
    $message = $request->input('message');

    // Retrieve all subscribers
    $subscribers = Subscriber::all();

    // Send email notification to each subscriber
    foreach ($subscribers as $subscriber) {
        $subscriber->notify(new SendEmailToSubscribers($subject, $message));
    }

    // Redirect back with success message
    return redirect()->back()->with('success', 'Email sent to all subscribers successfully.');
}







    
    

    
    
    
    
    
  
    




}

