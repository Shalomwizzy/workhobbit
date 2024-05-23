<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EmailsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\ManageUsersController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('user.dashboard');

// ApplicationController Routes
Route::middleware(['auth'])->group(function () {
    Route::post('/submitForm', [JobApplicationController::class, 'submitForm'])->name('submit.form');
    Route::get('/thankyou', [JobApplicationController::class, 'show'])->name('thankyou');
    Route::get('/total-job-applications', [JobApplicationController::class, 'getTotalJobApplications']);
    Route::get('/edit-job-application/{jobApplication}', [HomeController::class, 'editJobApplication'])->name('edit-job-application');
    Route::put('/update-job-application/{jobApplication}', [HomeController::class, 'updateJobApplication'])->name('update-job-application');
});

// Route::get('/thankyou', [JobApplicationController::class, 'show'])->name('thankyou');


// PagesController Route
Route::get('/', [PagesController::class, 'welcome'])->name('welcome');
Route::get('pages/aboutUs', [PagesController::class, 'aboutUs'])->name('about.us');
Route::get('pages/service', [PagesController::class, 'service'])->name('service');
Route::get('pages/faqs', [PagesController::class, 'faqs'])->name('faqs');
Route::get('pages/privacy', [PagesController::class, 'privacy'])->name('privacy');
Route::get('pages/contact', [PagesController::class, 'contact'])->name('contact.us');
Route::get('pages/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('pages/blogSingle', [PagesController::class, 'blogSingle'])->name('blog.single');
Route::get('pages/home', [PagesController::class, 'home'])->name('home');
Route::get('Pages/applyNow', [PagesController::class, 'applyNow'])->name('apply-now');



Route::post('/sendMail', [EmailsController::class, 'sendContactMail'])->name('send.mail');





// REGISTER CONTROLLER 
Route::get('/total-registered-users', [RegisterController::class, 'getTotalRegisteredUsers']);





Route::get('/total-job-applications', [JobApplicationController::class, 'getTotalJobApplications']);

// ADMIN ROUTES
Route::middleware(['auth', 'role.checker'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'show'])->name('admin/dashboard');

    // ADMIN ROUTES
// Route::get('/dashboard', [AdminController::class, 'show'])->name('admin/dashboard');
Route::get('/admin/users/create', [AdminController::class, 'createUser'])->name('admin.users.create');
Route::post('/admin/users/store', [AdminController::class, 'storeUser'])->name('admin.users.store');
Route::get('/admin/users', [AdminController::class, 'searchUsers'])->name('user.search');
Route::get('/admin/user-details', [AdminController::class, 'showUserDetails'])->name('admin.user-details');
Route::get('/admin/manage-users/send-email/{userId}', [AdminController::class, 'showSendEmailForm'])->name('send-email');
Route::post('/admin/manage-users/send-email/{userId}', [AdminController::class, 'sendEmail'])->name('email-user');
Route::post('/admin/users/{user}/send-reset-link', [AdminController::class, 'sendResetLink'])->name('admin.users.send-reset-link');
Route::delete('/admin/users/{user}', [AdminController::class, 'destroy'])->name('admin.users.destroy');
Route::get('/admin/administrators', [AdminController::class, 'showAdministrators'])->name('admin.administrators');
Route::get('/admin/users/suspended', [AdminController::class, 'showSuspendedUsers'])->name('admin.users.suspended');
Route::get('/admin/users/active', [AdminController::class, 'showActiveUsers'])->name('admin.users.active');
Route::get('/admin/applications', [AdminController::class, 'jobApplication'])->name('admin.applications');
Route::get('/job-applications/{applicationId}', [AdminController::class, 'applicationDetails'])->name('job-application-details');

Route::get('/send-email-to-all-users', [AdminController::class, 'showEmailToAllUsers'])->name('send.email.to.all.users');
Route::post('/send-email-to-all-users', [AdminController::class, 'sendEmailToAllUsers'])->name('mail.users');
Route::get('/admin/subscribers', [SubscriptionController::class, 'showSubscribers'])->name('admin.subscribers');
Route::get('/admin/send-email-to-subscribers', [AdminController::class, 'showSendEmailToSubscribersForm'])->name('admin.sendEmailToSubscribersForm');

Route::post('/admin/send-email-to-subscribers', [AdminController::class, 'sendEmailToSubscribers'])->name('admin.send-email-to-subscribers');
// Route::post('/sendMail', [EmailsController::class, 'sendContactMail'])->name('send.mail');








Route::get('/admin/manage-users/all-users', [AdminController::class, 'allUsers'])->name('admin.manage-users.all-users');


//SUSPENDE AND ACTIVE USERS 
Route::post('/admin/users/{user}/suspend', [AdminController::class, 'suspendUser'])->name('admin.users.suspend');
Route::post('/admin/users/{user}/activate', [AdminController::class, 'activateUser'])->name('admin.users.activate');

// ADMIN MANAGE USERS ROUTES
Route::get('/total-users', [AdminController::class, 'getTotalUsers']);
Route::get('/admin/manage-users/all-users', [AdminController::class, 'allUsers'])->name('all-users');
});





// SUBCRIBTION MAIL
Route::get('/total-subscribers', [SubscriptionController::class, 'getTotalSubscribers']);








// subcribers Routes

Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');

