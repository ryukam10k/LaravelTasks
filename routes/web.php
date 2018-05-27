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

Route::get('hello/{msg?}/{msg2?}', function ($msg='hoge1', $msg2='hoge2') {
$html = <<<EOF
<html>
<head>
<title>Hellp</title>
<style>
body {font-size:16pt; color:#999; }
h1 {font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
</style>
</head>
<body>
	<h1>Hello</h1>
	<p>{$msg}</p>
	<p>{$msg2}</p>
	<p>This is Sample Page</p>
</body>
</html>

EOF;
	return $html;
});