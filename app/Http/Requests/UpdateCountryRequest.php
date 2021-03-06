<?php

namespace App\Http\Requests;

use App\Country;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCountryRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('country_edit');
    }

    public function rules()
    {
        return [
            'name'       => [
                'required',
            ],
            'short_code' => [
                'required',
            ],
        ];
    }
}
