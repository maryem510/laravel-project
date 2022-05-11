<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

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
//     return view('welcome');
// });
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});

// Route::get('/users',function(){
//     $users=["maryem","mai","mona"];
//     return view('users',['users'=>$users]);
// });
Route::get('/users', [UsersController::class, 'allUsers']);
Route::get('/users/insert', [UsersController::class, 'insert']);

//  <testing Views>
Route::get('/greeting', function () {
    //return view('greeting', ['name' => 'James']);
    //return View::make('greeting', ['name' => 'James']);
    // return view('greeting')
    //     ->with('name', 'Victoria')
    //     ->with('occupation', 'Astronaut');

    if (View::exists('greeting')) {
        echo true;
    }
});

//  <testing Routing>

//Routing Methods
// Route::match(['get', 'post'], '/users', function () {
//        $users=["maryem","mai","mona"];
//     return view('users',['users'=>$users]);
// });
// Route::any('/users', function () {
//     $users=["maryem","mai","mona"];
//     return view('users',['users'=>$users]);
// });

//Dependency Injection
Route::get('/users', function (Request $request) {
      $users=["maryem","mai","mona"];
    return view('users',['users'=>$users]);
});