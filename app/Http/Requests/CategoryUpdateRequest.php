<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
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
            'name' => 'required',
            'furigana' => 'nullable|regex:/^[ァ-ヴー・]+$/u',
            'order' => 'required|integer|min:1',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '必ず入力してください。',
            'furigana.regex' => '使用できる文字は、全角カナもしくは"・"となります。',
            'order.required' => '必ず入力してください。',
            'order.integer' => '順番が正しい値ではありません。',
            'order.min' => '順番は1以上で設定されませんでした。',
        ];
    }
}
