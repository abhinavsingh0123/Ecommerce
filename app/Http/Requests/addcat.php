<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addcat extends FormRequest
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
        return [
            "category"=>"required|alpha|min:2|max:50|unique:categories",
			"att"=>"required"
        ];
    }
	
	
	public function messages()
	{
		return [
			"category.required" => "You Must Enter Category Name",
			"category.min" => "Enter More Than 2 Characters",
			"category.unique"=>"Category Name Already Exist"
		];
	}
	
}
