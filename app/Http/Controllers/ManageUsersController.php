<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ManageUsersController extends Controller
{


    // public function allUsers()
    // {
    //     $users = User::with('jobApplication')
    //                 ->orderBy('created_at', 'desc') // Change 'desc' to 'desc'
    //                 ->paginate(10);
    //     return view('admin.manage-users.all-users', compact('users'));
    // }


    // public function allUsers() {
    //     $users = User::all();

    //     $user = Auth::user();
       
    //     $users = User::with('jobApplication')->get();


    //     return view('admin/manage-users.all-users', compact('users'));
    // }
    

  
}

  

