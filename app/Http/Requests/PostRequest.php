<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function authorize()
    {
        //ユーザー認証が必要な時はtrue
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'title'  => 'required',
            'content' => 'required'
        ];
    }
}
