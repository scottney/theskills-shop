<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Start of XSS Sanitizer for all routes

Route::group(['middleware' => ['XssSanitizer']], function() {

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::group(['middleware' => ['guest']], function() {

//Route to the main site landing page
Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('index_main');

/************************** START OF MAIN SITE FUNCTIONS ***************************************/
//Public routes
//Start of site routes

//Route to page for customers booking of skills person
Route::get('/pages/customers/book/customers booking', [App\Http\Controllers\CustomersBookingController::class, 'create'])->name('customers_booking');

//Route to page for customers rating
Route::get('/pages/customers/rate/customers rating', [App\Http\Controllers\CustomersRatingController::class, 'create'])->name('customers_rating');

//Route to page for skills person rating
Route::get('/pages/skills_person/rate/skills person rating', [App\Http\Controllers\SkillsPersonRatingController::class, 'create'])->name('skills_person_rating');

//Route to page for skills person registration
Route::get('/pages/skills_person/register/skills person registration', [App\Http\Controllers\SkillsPersonRegistrationController::class, 'create'])->name('skills_person_registration');

/*Download mobile app*/
Route::get('get/file', function(){
    return Storage::download('android/app-release.apk');
});

//Route to blog as guest user
Route::get('/pages/blog/blog', [App\Http\Controllers\BlogController::class, 'show'])->name('blog');

//End of site routes

/************************** END OF MAIN SITE FUNCTIONS ***************************************/

});

Auth::routes([
    'verify' => true,
    'register' => false
]);

//Auth login middleware enforcer to protect routes from being accessed without logging in
Route::group(['middleware' => ['auth']], function() {

/************************** START OF BACK BUTTON PROTECTION AFTER LOGOUT ***************************************/
Route::group(['middleware' => ['prevent-back-history']], function() {

/************************** START OF ADMIN SITE FUNCTIONS ***************************************/
//Route directs to landing page after login
Route::get('/admin/dashboard', [HomeController::class, 'index_admin'])->name('dashboard');

//Routes to the customers booking records page
Route::get('/admin/pages/customers/bookings/customers booking records', [App\Http\Controllers\CustomersBookingController::class, 'show'])->name('customers_booking_records');

//Routes to the customers booking all details page
Route::get('/admin/pages/customers/bookings/customers booking records details/{id}', [App\Http\Controllers\CustomersBookingController::class, 'showData'])->name('customersData');

//Routes responsible for sending the customer service number to the customer
Route::get('/admin/pages/customers/bookings/customers booking records/send/customer/service/number/{id}', [App\Http\Controllers\CustomersBookingController::class, 'csnMail'])->name('mailCSN');

//Route responsible for searching the customers booking records
Route::get('/admin/pages/customers/bookings/customers booking records/search',[App\Http\Controllers\CustomersBookingController::class, 'search_customers'])->name('customers_booking_search');

//Routes to the customers service number edit page
Route::get('/admin/pages/customers/bookings/edit record/customers service number edit/{id}', [App\Http\Controllers\CustomersBookingController::class, 'edit'])->name('edit_customers_service_number');

//Routes to the customers rating records page
Route::get('/admin/pages/customers/ratings/customers rating records', [App\Http\Controllers\CustomersRatingController::class, 'show'])->name('customers_rating_records');

//Route responsible for searching the customers rating records
Route::get('/admin/pages/customers/ratings/customers rating records/search',[App\Http\Controllers\CustomersRatingController::class, 'search_customers'])->name('customers_rating_search');

//Routes to the skills person rating records page
Route::get('/admin/pages/skills person/ratings/skills person rating records', [App\Http\Controllers\SkillsPersonRatingController::class, 'show'])->name('skills_person_rating_records');

//Routes to the skills person rating records page
Route::get('/admin/pages/skills person/ratings/skills person rating records/search', [App\Http\Controllers\SkillsPersonRatingController::class, 'search_skills_person'])->name('skills_person_rating_search');

//Routes to the skills person registration records page
Route::get('/admin/pages/skills person/registrations/skills person registration records', [App\Http\Controllers\SkillsPersonRegistrationController::class, 'show'])->name('skills_person_registration_records');

//Routes to the skills person registration data page
Route::get('/admin/pages/skills person/registrations/skills person registration records details/{id}', [App\Http\Controllers\SkillsPersonRegistrationController::class, 'showData'])->name('skillsPersonData');

//Routes responsible for sending the skills person service number to the skillsperson
Route::get('/admin/pages/skills_person/registrations/spsn/email/send/skills/person/service/number/{id}', [App\Http\Controllers\SkillsPersonRegistrationController::class, 'spsnMail'])->name('mailSPSN');

//Routes responsible for searching the skills person registration records
Route::get('/admin/pages/skills person/registrations/skills person registration records/search', [App\Http\Controllers\SkillsPersonRegistrationController::class, 'search_skills_person'])->name('skills_person_registration_search');

//Routes to the skills person service number edit page
Route::get('/admin/pages/skills person/registrations/edit record/skills person service number edit/{id}', [App\Http\Controllers\SkillsPersonRegistrationController::class, 'edit'])->name('edit_skills_person_service_number');

//Route responsible of downloading the skills persons image
Route::get('/admin/pages/skills person/registrations/skills person registration records details/{id}/download/skills/person/image', [App\Http\Controllers\SkillsPersonRegistrationController::class, 'downloadImage'])->name('downloadSkillsPersonImage');

//Route responsible of downloading the skills person police report
Route::get('/admin/pages/skills person/registrations/skills person registration records details/{id}/download/skills/person/police/report', [App\Http\Controllers\SkillsPersonRegistrationController::class, 'downloadPoliceReport'])->name('downloadSkillsPersonPoliceReport');

//Route responsible of downloading the skills person letter of recommendation
Route::get('/admin/pages/skills person/registrations/skills person registration records details/{id}/download/skills/person/recommendation/letter', [App\Http\Controllers\SkillsPersonRegistrationController::class, 'downloadRecommendationLetter'])->name('downloadSkillsPersonRecommendationLetter');

//Route to redirect to the messages section
Route::get('/admin/pages/messages/messages', [App\Http\Controllers\MessagesController::class, 'show'])->name('messages');

//Route to redirect to the news letter section
Route::get('/admin/pages/news letter/news letter', [App\Http\Controllers\NewsLetterController::class, 'show'])->name('news_letter');

//Route responsible for sending the newsletter to subscribers
Route::post('/admin/pages/news letter/news/letter/index/news letter index', [App\Http\Controllers\NewsLetterController::class, 'newsletter_sendout'])->name('sendout');

//Route to redirect to the calendar section
Route::get('/admin/pages/calendar/calendar', [App\Http\Controllers\CustomersBookingController::class, 'show_calendar'])->name('calendar');

//Route that prints the calendar schedule to PDF
Route::get('/admin/pages/calendar/pdf view/schedules', [App\Http\Controllers\CustomersBookingController::class, 'createPDF'])->name('create_bookings_pdf');

//Route to blog as admin user
Route::get('/pages/blog/blog/admin', [App\Http\Controllers\BlogController::class, 'show'])->name('adminBlog');

//Route to handle all CRUD operations for the blog
Route::resource('blog',BlogController::class);

//Route to redirect to the create blog posts page
Route::get('/pages/blog/pages/create', [App\Http\Controllers\BlogController::class, 'create'])->name('create_blog_posts');

//Route to redirect to the edit blog posts page
Route::get('/pages/blog/pages/edit/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('edit_blog_posts');

//Route to redirect to the delete blog post page
Route::get('/pages/blog/pages/delete/{id}', [App\Http\Controllers\BlogController::class, 'delete'])->name('delete_blog_post');

/************************** END OF ADMIN SITE FUNCTIONS ***************************************/

/************************** END OF BACK BUTTON PROTECTION AFTER LOGOUT ***************************************/
});

});

//Route to handle all CRUD operations from the "skills person" form in the customers booking page
Route::resource('customers_booking', CustomersBookingController::class);

//Route to handle all CRUD operations from the "customers rating" form
Route::resource('customers_rating', CustomersRatingController::class);

//Route to handle all CRUD operations from the "skills person registration" form
Route::resource('skills_person_registration', SkillsPersonRegistrationController::class);

//Route to handle all CRUD operations from the "skills person rating" form
Route::resource('skills_person_rating', SkillsPersonRatingController::class);

//Route to handle all CRUD operations from the messages page "send message" form
Route::resource('messages', MessagesController::class);

//Route to handle all CRUD operations from the newsletter page "news_letter" form
Route::resource('news_letter', NewsLetterController::class);

});

//End of routes that require authentication

//End of XSS Sanitizer for all routes


