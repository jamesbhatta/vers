<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'book_type'=>'required',
            'code'=>'required|unique:books',
            'from'=>'required',
            'to'=>'nullable',
            'province'=>'nullable',
            'district'=>'nullable',
            'municipality'=>'nullable',
            'ward_no'=>'nullable',
            'vdc'=>'nullable',
            'registaar'=>'required',
        ];
    }
}
