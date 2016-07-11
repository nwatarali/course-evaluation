<?php

use Illuminate\Support\Facades\Input;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::auth();
Route::post('redirect_register', function () {
	if($name = Input::get('name')) {
		$name = explode(" ", $name);
		if (count($name) <= 2) {
			$full_name['first_name'] = isset($name[0]) ? $name[0] : null;
			$full_name['last_name'] = isset($name[1]) ? $name[1] : null;
		} elseif (count($name) <= 4) {
			$full_name['first_name'] = $name[0];
			$full_name['middle_name'] = $name[1];
			$full_name['last_name'] = $name[2];
			$full_name['suffix'] = isset($name[3]) ? $name[3] : null;
		} else {
			$full_name['prefix'] = $name[0];
			$full_name['first_name'] = $name[1];
			$full_name['middle_name'] = $name[2];
			$full_name['last_name'] = $name[3];
			$full_name['suffix'] = $name[4];
		}
	}

	Request::merge($full_name);
	return Redirect::to('register')->withInput();
});
Route::get('/', function () {
	return view('welcome');
});

	Route::get('json/lecturers', 'LecturerController@json');
Route::group(['middleware' => 'auth'], function () {
	Route::get('/home', function () {
		return view('home');
	});
	Route::resource('evaluation', 'EvaluationController');
});

Route::resource('result', 'ResultController');


Route::resource('question1', 'Question1Controller');

Route::resource('question2', 'Question2Controller');

Route::resource('question3', 'Question3Controller');

Route::resource('question4', 'Question4Controller');

Route::resource('question5', 'Question5Controller');
