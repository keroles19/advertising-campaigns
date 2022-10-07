<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCampaignRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=> REQUIRED_TEXT_VALIDATION,
            'total' => REQUIRED_NUMERIC_VALIDATION,
            'daily_budget' => REQUIRED_NUMERIC_VALIDATION,
            'from' => REQUIRED_FROM_DATE_VALIDATION,
            'to' => REQUIRED_DATE_VALIDATION,
            'document.*'=> REQUIRED_VALIDATION,
        ];
    }
}
