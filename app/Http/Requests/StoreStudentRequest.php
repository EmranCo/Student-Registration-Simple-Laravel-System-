<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'age' => 'required',
            'region' => 'required',
            'mobile' => 'required',
            'job' => 'required',
            'id_card' => 'required',
            'video' => 'nullable',
            'picture' => 'nullable',
            'poster' => 'nullable',
            'article' => 'nullable',
        ];
    }
}
