<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequset extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [

                'name'=>'required|max:20|unique:offers,name',
                'price'=>'required|numeric',
                'details'=>'required',
                'image'=>'required|image'
        ];
    }
    
        public function messages()
        {
            return [
                'name.required'=>'your name is required',
                'name.unique'=>'already a username',
                'price.required'=>'inter your price offer',
                'price.numeric'=>"inter youe plese Numbers",
                'details'=>'inter your details plese',
                'image'=>'image is required'
            ];
        }
    
}
