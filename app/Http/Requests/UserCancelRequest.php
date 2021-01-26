<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;
use App\Table\User;

class UserCancelRequest extends FormRequest
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
        $test = [
            'email' => ['required'],
            'password' =>['required','between:8,32'],
        ]; 
        return $test; 
    }
    public function messages()
    {
        return [
            'email.required' => 'emailは必ず入力してください',
            'password.required' => 'パスワードは必ず入力してください',
            'password.between' => 'パスワードは8文字以上、32文字以内です',
        ];
    }
}
