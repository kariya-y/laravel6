<?php

namespace App\Http\Controllers;

use App\Board;
use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller {
	public function index(Request $request){
		$items = Board::with('person')->get();
		return view('person.index', ['items' => $items]);
	}

	public function find(Request $request){
		return view( 'person.find',['input' => '']);
	}

	public function serch(Request $request){
//		$min = $request->input * 1;
//		$max = $min + 10;
//		$item = Person::ageGreaterThan($min)->ageLessThan($max)->first();
		$item = Person::scopeNameEqual('name', $request->input)->first();
		$param = ['input' => $request->input, 'item' => $item];
		return view('person.find',$param);
	}
}
