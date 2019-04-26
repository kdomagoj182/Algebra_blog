<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * Get the validation rules that apply to the request.  za svaki input - title, tekst i slično
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required|max:191',
			'image'=>'image|max:5000'
			
			//'title.required' => 'A title is required',     custom poruke o grešci
			//'body.required'  => 'A message is required',
        ];
    }
}
