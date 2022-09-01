<?php

use App\Http\Controllers\Front\IndexController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return redirect()->route('admin.auth.login');
// });

Route::name('front.')->group(
    function () {
        // Route::get('/',[IndexController::class,'index'])->name('index');

        Route::get('/', 'IndexController@index')->name('index');
        Route::get('/{slug}', 'IndexController@page')->name('page');
        Route::post('/subscribe', 'IndexController@subscribe')->name('subscribe');
        Route::post('/submit_ticket', 'IndexController@submit_ticket')->name('submit_ticket');
        Route::post('/submit_query', 'IndexController@submit_query')->name('submit_query');
        Route::post('/subscribe', 'IndexController@subscribe')->name('subscribe');
        Route::get('blog-detail/{id?}/{slug?}', 'IndexController@blog')->name('blog');
        
        Route::post('submit-apply-job', 'IndexController@submit_apply_job')->name('submit-apply-job');
        Route::get('job-detail/{id?}', 'IndexController@job_detail')->name('job-detail');
        // Route::get('/careers', 'IndexController@careers')->name('careers');
        // Route::get('career_detail/{id?}/{slug?}', 'IndexController@career_detail')->name('career_detail');
        // Route::get('/blogs', 'IndexController@blogs')->name('blogs');
        // Route::get('/testimonials', 'IndexController@testimonials')->name('testimonials');
        // Route::post  ('/contact_query', 'IndexController@contact_query')->name('contact_query');
    }
);