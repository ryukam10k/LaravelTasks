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

Route::get('hellovue', function() {
	return view('helloVue');
});

Route::get('single', 'SingleHelloController');

/* Hello */
Route::get('hello', 'HelloController@index')->middleware('auth');
Route::post('hello', 'HelloController@post');

Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');

Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');

Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');

Route::get('hello/show', 'HelloController@show');
Route::get('hello/show2', 'HelloController@show2');

Route::get('hello/rest', 'HelloController@rest');

Route::get('hello/auth', 'HelloController@getAuth');
Route::post('hello/auth', 'HelloController@postAuth');

/* Person */
Route::get('person', 'PersonController@index');

Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');

Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');

Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');

Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove');

/* Board */
Route::get('board', 'BoardController@index');

Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');

/* Rest */
Route::resource('rest', 'RestappController');

/* Session */
Route::get('hello/session', 'HelloController@ses_get');
Route::post('hello/session', 'HelloController@ses_put');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
