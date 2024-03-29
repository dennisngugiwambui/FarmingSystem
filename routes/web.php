<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;
use App\Http\Middleware\JwtAuthMiddleware;


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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('index');

Route::post('login', [App\Http\Controllers\Api\AuthController::class, 'login'])->name('login');
Route::get('/auth/login', [App\Http\Controllers\MainController::class, 'login'])->name('login.auth');

Route::post('register', [App\Http\Controllers\Api\AuthController::class, 'register'])->name('register');
Route::get('/auth/register', [App\Http\Controllers\MainController::class, 'register'])->name('register.auth');

Route::post('logout', [App\Http\Controllers\Api\AuthController::class, 'logout'])->name('logout');



Route::get('/home', [AuthController::class, 'Home'])->name('home')->middleware(JwtAuthMiddleware::class);

Route::get('/weather', [App\Http\Controllers\MainController::class, 'weather'])->name('weather');

Route::get('/about', [App\Http\Controllers\MainController::class, 'about'])->name('about');
Route::get('/profile', [App\Http\Controllers\Api\AuthController::class, 'Profile'])->name('profile');

Route::get('/register_farmers', [AuthController::class, 'regoster_farmers'])->name('register_farmers');
Route::post('/farmersRegister', [App\Http\Controllers\FarmerController::class, 'FarmersRegister'])->name('register.farmer');


Route::get('/production_record', [App\Http\Controllers\Api\AuthController::class, 'ProductionRecord'])->name('ProductionRecord');
Route::get('/farm_details', [AuthController::class, 'farmerDetail'])->name('farmerDetail');

Route::any('/deleteFarmer/{id}', [App\Http\Controllers\FarmerController::class, 'farmersDelete'])->name('farmersDelete');


Route::post('/farmersProduction/{id}', [App\Http\Controllers\FarmerController::class, 'farmersProduction'])->name('farmersProduction');

Route::get('/generate-receipt-pdf/{id}', [App\Http\Controllers\FarmerController::class,'generateReceiptPdf'])->name('generateReceiptPdf');

Route::get('/graphs/{id}', [AuthController::class, 'visualization'])->name('visualization');

Route::get('/visualization', [App\Http\Controllers\MainController::class, 'visualization']);

Route::get('/contact', [App\Http\Controllers\MainController::class, 'contact'])->name('contact');

Route::get('/news_and_updates', [App\Http\Controllers\MainController::class, 'news'])->name('news');

Route::get('/news_entries', [AuthController::class, 'newsEntries'])->name('newsEntries');

Route::post('/newsGet', [App\Http\Controllers\FarmerController::class, 'newsGet'])->name('newsGet');

Route::post('/contact_submit',[App\Http\Controllers\MainController::class, 'submitContactForm'])->name('contact-submit');
