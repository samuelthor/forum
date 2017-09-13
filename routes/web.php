<?php

Auth::routes();

Route::get('/threads', function() {
	return view('threads.index');
});

Route::get('/threads/create', function() {
	return view('threads.create');
});

// Route::get('/', function(){
// 	$name = 'Samuel';
// 	return view('messages.hello', compact('name'));
// });

Route::get('/greeting/{id}', function($id){
	$greetings = ['Polski','Russki','Icelandic','Svergie','English'];

	return view('messages.greeting', ['greeting' =>$greetings[$id]]);
})->where(['id' => '[0-4]']);

Route::get('/', 'GreetingController@show');
