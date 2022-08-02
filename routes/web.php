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
        Route::get('/contact', 'IndexController@contact')->name('contact');
        Route::get('/{slug}', 'IndexController@page')->name('page');
        Route::get('/careers', 'IndexController@careers')->name('careers');
        Route::get('career_detail/{id?}/{slug?}', 'IndexController@career_detail')->name('career_detail');
        Route::get('/blogs', 'IndexController@blogs')->name('blogs');
        Route::get('apply-job/{id?}', 'IndexController@apply_job')->name('apply-job');
        Route::post('submit-apply-job', 'IndexController@submit_apply_job')->name('submit-apply-job');
        Route::get('blog/{id?}/{slug?}', 'IndexController@blog')->name('blog');
        Route::get('/testimonials', 'IndexController@testimonials')->name('testimonials');
        Route::post('/contact_query', 'IndexController@contact_query')->name('contact_query');
        Route::post('/subscribe', 'IndexController@subscribe')->name('subscribe');
        Route::post('/request_submit', 'IndexController@request_submit')->name('request_submit');
    }
);
