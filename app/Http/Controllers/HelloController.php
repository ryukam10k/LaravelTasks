<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index() {
        $data = [
            ['name'=>'taro', 'mail'=>'taro@yamada'],
            ['name'=>'hanako', 'mail'=>'hanako@flower'],
            ['name'=>'sachiko', 'mail'=>'sachiko@happy']
        ];
        return view('hello.index', ['data'=>$data]);
    }

    public function post(Request $request) {
        return view('hello.index', ['msg'=>$request->msg]);
    }
}
