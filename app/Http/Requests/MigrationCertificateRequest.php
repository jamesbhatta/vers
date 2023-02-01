<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MigrationCertificateRequest extends FormRequest
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
            'after_province' => ['required'],
            'after_municipality' => ['required'],
            'after_district' => ['required'],
            'after_vdc' => ['nullable'],
            'after_houseno' => ['nullable'],
            'after_village' => ['required'],
            'after_ward' => ['required'],

            'province' => ['required'],
            'municipality' => ['required'],
            'district' => ['required'],
            'vdc' => ['nullable'],
            'administrator' => ['required'],
            'reg_number' => ['required'],
            'entry_date' => ['required'],

            'before_province' => ['required'],
            'before_municipality' => ['required'],
            'before_district' => ['required'],
            'before_vdc' => ['nullable'],
            'before_village' => ['required'],
            'before_houseno' => ['nullable'],
            'before_ward' => ['required'],
            'migration_reason' => ['required'],
            'migration_date' => ['required'],
            'relative_name' => ['required'],
            'relationship' => ['required'],
            'relative_address' => ['required'],
            'date' => ['required'],
            'file' => ['nullable', 'mimes:pdf,jpeg,png,jpg', 'max:5120'],
        ];
    }
}
