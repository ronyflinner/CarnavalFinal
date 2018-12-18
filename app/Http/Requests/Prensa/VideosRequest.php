<?php

namespace App\Http\Requests\Prensa;

use Illuminate\Foundation\Http\FormRequest;

class VideosRequest extends FormRequest {
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
			'f_secundaria' => 'image',
			'f_principal' => 'image',
			'msg' => 'url',
			'f_date' => 'required|date',
		];
	}

	public function messages() {
		return [
			'f_secundaria' => 'Ingrese una imagen adicional',
			'f_principal' => 'Ingrese una imagen principal',
			'msg' => 'Ingrese un URL',
			'f_date' => 'Ingrese una fecha',
		];
	}
}
