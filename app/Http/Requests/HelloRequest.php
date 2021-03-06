<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		if($this -> path() == 'hello'){
			return true;
		} else {
			return false;
		}
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'name' => 'required',
			'mail' => 'email',
			'age' => 'numeric|between:0,150',
		];
	}

	public function messages(){
		return [
			'name.required' => '名前を入力してください',
			'mail.email' => 'emailの入力形式ではない',
			'age.numeric' => '数値を入力',
			'age.between' => '0〜150',
		];
	}
}
