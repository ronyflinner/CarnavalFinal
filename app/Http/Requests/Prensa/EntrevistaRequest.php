<?php

namespace App\Http\Requests\Prensa;

use Illuminate\Foundation\Http\FormRequest;

class EntrevistaRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'title_entre' => 'required|max:255',
			'f_date' => 'required|date',
			'message' => 'required|max:255',
		];
	}
}
