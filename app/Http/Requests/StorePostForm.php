<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostForm extends FormRequest
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
            'post_date' => 'required|date',
            'title'     => 'required|text|max:255',
            // 'image'     => 'required|string',
            'keyword1'     => 'required|text',
            'keyword2'     => 'required|text',
            'content'      => 'required|text|max:10000'
            
        ];
    }
}