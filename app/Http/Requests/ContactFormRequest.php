<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactFormRequest extends Request {

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
		return [
            $rules = array(
                'name' => 'required',
                'lastname' => 'required',
                'dni' => 'required',
                'birthdate' => 'required',
                'email' => 'required',
                'password' => 'required',
            )
		];
	}

}
