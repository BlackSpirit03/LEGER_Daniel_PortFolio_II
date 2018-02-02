<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		//dd($this->logo);
		return [
			// fields to be verify
			'language'		=> 'required|max:2',
			'short_label'	=> 'required|max:190',
			'type'			=> 'required|integer|min:1|max:3',
			'level'			=> 'required|integer|min:1|max:5',
			'order'			=> 'required|integer|min:1|max:99',
			'logo'			=> 'file|image'
		];
	}
}
