<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemUpdateRequest extends FormRequest
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
            'appraisal_id' => 'required|exists:appraisals,id',
            // 'image' => 'required|image|mimes:jpeg,jpg,png,gif,webp',
            'price' => 'nullable|numeric|min:0',
            'is_visible' => 'boolean',
        ];
    }

    public function messages()
    {
        return [
            'appraisal_id.required' => '必ず入力してください。',
            'appraisal_id.exists' => '受付番号が発行されていません。',
            // 'image.required' => '必ず入力してください。',
            // 'image.image' => 'ファイルを選択してください。',
            // 'image.mimes' => '対応している画像形式は「 jpeg / jpg / png / gif / webp 」のいずれかです。',
            'price.numeric' => '数字を入力してください。',
            'price.min' => '0以上を入力してください。',
            'is_visible.boolean' => '選択してください。',
        ];
    }
}
