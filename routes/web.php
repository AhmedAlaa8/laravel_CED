<?php

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


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

Route::get('/', function () {

    return view('index');
})->name('/');

Route::get('user/index', function () {
    $users = User::get();
    return view('user.index', compact('users'));
})->name('user.index');

Route::get('user/create', function () {
    return view('user.create');
})->name("user.create");

Route::post('user/store', function (Request $requst) {

    $name = $requst->name;
    $salary = $requst->salary;
    $brithday = $requst->birthday;

    User::create([
        "name" => $name,
        "salary" => $salary,
        "brithday" => $brithday
    ]);

    Alert::success('Success Title', 'Success Message');

    return redirect()->back();
})->name('user.store');




Route::get('user/edit/{id}', function ($id) {

    $user = User::find($id);
    return view('user.edit', compact('user'));
})->name('user.edit');




Route::put('user/updite', function (Request $request) {

    $user = User::find($request->id);

    $user->update([
        "name" => $request->name,
        "salary" => $request->salary,
        "brithday" => $request->brithday
    ]);
    Alert::success('Success Title', 'Success Message');

    return redirect(route('user.index'));
})->name('user.updite');

Route::delete('user/delete', function (Request $request) {

    $user = User::find($request->id);

    $user->delete();
    Alert::toast('Toast Message', 'success');


    return redirect()->back();
})->name('user.delete');


////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////


Route::get('book/index', function () {
    $books = Book::get();
    return view('book.index', compact('books'));
})->name("book.index");



Route::get('book/create', function () {
    return view('book.create');
})->name("book.create");



Route::post('book/store', function (Request $request) {

    Book::create([
        "name" => $request->name,
        "title" => $request->title,
        "description" => $request->description
    ]);

    Alert::success('Success Title', 'Success Message');
    return redirect()->back();
})->name("book.store");


Route::get('book/edit/{id}', function ($id) {

    $book = Book::find($id);

    return view('book.edit', compact('book'));
})->name('book.edit');


Route::put('book/update', function (Request $request) {

    $book = Book::find($request->id);

    $book->update([
        'name' => $request->name,
        'title' => $request->title,
        'description' => $request->description
    ]);

    Alert::success('Success Title', 'Success Message');
    return redirect(route('book.index'));
})->name('book.update');

Route::delete('book/delete', function (Request $request) {

    $book = Book::find($request->id);

    $book->delete();

    Alert::toast('Toast Message', 'success');


    return redirect()->back();
})->name('book.delete');
