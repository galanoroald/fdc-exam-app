<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Contact;

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

Route::get('/', function () {
    return view('welcome', [
        'heading' => 'Contacts',
        'contacts' => Contact::all()
    ]);
});

Route::get('/{id}', function ($id) {
    return view('welcome', [
        'heading' => 'Contacts searched with ' . $id,
        'contacts' => Contact::find($id)
    ]);
})->where('id', '[0-9]+');

Route::get('/hello', function (Request $request){
    return $request->name;
});
