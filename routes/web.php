<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::view('/contact', 'contact');

Route::view('/about', 'about');

Route::get('/', function () {
    $ideas = session()->get('ideas', []);
//    dd($ideas);
   return view('ideas', [
       'ideas' => $ideas
   ]);
});

Route::get('/add-idea', function () {
    return view("add-idea");
});

Route::post('/add-idea', function(Request $request) {
    $idea = $request->idea;

    session()->push('ideas', $idea);

    return redirect('/');
});

