<?php

namespace App\Http\Controllers;

use Closure;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller {
	public function index(Request $request){
		return view('hello.index', ['data'=>$request->data]);
	}

	public function post(Request $request){
		$data =[
				'msg' => $request->msg,
		];
		$result = view('index', $data);
		return $result;
	}

}
