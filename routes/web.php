<?php

use App\Http\Middleware\HelloMiddleware;

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

Route::get('/', function() {
	return view('welcome');
});

/*
Route::get('/', function () {
	$tasks = \DB::table("tasks")->get();
		return view('index', [
			"tasks" => $tasks
		]);
});
*/

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

Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');

Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');

Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');

Route::get('hello/show', 'HelloController@show');
Route::get('hello/show2', 'HelloController@show2');

Route::get('single', 'SingleHelloController');