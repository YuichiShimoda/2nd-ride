<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppraisalStoreRequest extends FormRequest
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
            'ticket_number' => 'required|regex:/^\d{4}$/|unique:appraisals,ticket_number',
            'status' => 'required',
            // 'first_contact_at' => 'required|date_format:Y-m-d H:i',
            'staff' => 'required',
            'area' => 'required',
            'family_name' => 'required',
            'tel1' => 'required|regex:/^\d{2,4}$/',
            'tel2' => 'required|regex:/^\d{2,4}$/',
            'tel3' => 'required|regex:/^\d{3,4}$/',
            'experienced' => 'required',
            'hope_request' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'ticket_number.required' => '受付番号が正しく発行されませんでした。',
            'ticket_number.regex' => '受付番号が正しく発行されませんでした。',
            'ticket_number.unique' => '受付番号が正しく発行されませんでした。',
            'status.required' => '必ず入力してください。',
            'staff.required' => '必ず入力してください。',
            'area.required' => '必ず入力してください。',
            'family_name.required' => '必ず入力してください。',
            'tel1.required' => '必ず入力してください。',
            'tel1.regex' => '正しい桁数を入力してください。',
            'tel2.required' => '必ず入力してください。',
            'tel2.regex' => '正しい桁数を入力してください。',
            'tel3.required' => '必ず入力してください。',
            'tel3.regex' => '正しい桁数を入力してください。',
            'experienced.required' => '必ず選択してください。',
            'hope_request.required' => '必ず入力してください。',
        ];
    }
}
