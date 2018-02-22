<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Post;
class PostStoreRequest extends FormRequest
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
        $rules = [
            'name'        => 'required',
            'slug'        => 'required|unique:posts,slug',
            'user_id'     => 'required|integer',
            'category_id' => 'required|integer',
            'body'        => 'required',
            'tags'        => 'required|array',
            'status'      => 'required|in:PUBLISHED,DRAFT',
        ];
        /*
        if($this->get('file'))
        {
          $rules = array_merge($rules, ['file' => 'mimes:jpg,jpeg,png']);
        }*/
        return $rules;
    }
}
