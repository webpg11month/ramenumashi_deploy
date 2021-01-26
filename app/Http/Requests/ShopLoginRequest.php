<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;
use App\Table\Shop;

class ShopLoginRequest extends FormRequest
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
        Log::info('test1234');
        $test = [
            'shop_id' => ['required'],
            'password' =>['required','between:8,32'],
        ]; 
        return $test; 
    }
    public function messages()
    {
        Log::info('test1');
        return [
            'shop_id.required' => 'お店IDは必ず入力してください',
            'password.required' => 'パスワードは必ず入力してください',
            'password.between' => 'パスワードは8文字以上、32文字以内です',
        ];
    }
}
