<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilegoodRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules()
    {
        return [
            'import_file' => 'required|max:50000|mimes:xlsx,xls',

        ];
    }
}
