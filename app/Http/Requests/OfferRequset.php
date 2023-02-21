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
                'name.unique'=>'messages.already a username',
                'price.required'=>'messages.inter your price offer',
                'price.numeric'=>"messages.inter youe plese Numbers",
                'details'=>'messages.inter your details plese',
                'image'=>'messages.your image is required'
            ];
        }
    
}
