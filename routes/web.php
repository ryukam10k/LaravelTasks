<?php

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
	$tasks = \DB::table("tasks")->get();
		return view('index', [
			"tasks" => $tasks
		]);
});

Route::post('/task', function() {
	// TODO DBにデータを投入
	$name = request()->get("task_name");
	\DB::table("tasks")->insert([
		"name" => $name
	]);
	return redirect("/");
});

Route::get('welcome', function() {
	return view('welcome');
});

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');

Route::get('single', 'SingleHelloController');