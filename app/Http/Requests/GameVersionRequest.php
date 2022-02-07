<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameVersionRequest extends FormRequest
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
            'version_name' => 'required',
            'version_id' => 'required',
            'url_installer' => 'required',
            'url_pak' => 'require_reinstall'
        ];
    }
}
