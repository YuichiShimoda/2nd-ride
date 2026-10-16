<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppraisalUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'status' => 'required',
            'first_contact_at' => 'required|date_format:Y-m-d H:i',
            'staff' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'status.required' => '必ず選択してください。',
            'first_contact_at.required' => '必ず入力してください。',
            'first_contact_at.date_format' => '「 YYYY-MM-DD HH:ii 」の形式で入力してください。',
            'staff.required' => '必ず選択してください。',
        ];
    }
}
