<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyAdmin;
use App\Mail\WelcomeMail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:80', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);


    }
    
    
    public function getTotalRegisteredUsers()
    {
        $totalRegisteredUsers = User::count();
        return response()->json(['totalRegisteredUsers' => $totalRegisteredUsers]);
    }


    protected function registered(\Illuminate\Http\Request $request, $user)
    {
        // Send welcome email to the user
        $userNotify = Mail::to($user->email)->send(new WelcomeMail($user));
    
        // Send notification email to the admin
        $adminNotify = Mail::to('support@workhobbit.com')->send(new NotifyAdmin($user));
    
        // Logout the user
        // $this->guard()->logout();
    
        // Redirect the user
        return redirect()->route('home');
    }
    
}
    

   


// protected function create(array $data)
// {
//     // Previous code to create user...

//     // Retrieve job application ID from form data
//     $jobApplicationId = $data['job_application_id'];

//     // Associate user with job application
//     if ($jobApplicationId) {
//         $jobApplication = JobApplication::find($jobApplicationId);
//         if ($jobApplication) {
//             $jobApplication->user_id = $user->id;
//             $jobApplication->save();
//         }
//     }

//     return $user;
// }

