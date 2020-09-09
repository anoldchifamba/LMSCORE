<?php

namespace AT_academy\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use AT_academy\Models\Comment;

class UpdateCommentRequest extends FormRequest
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
        $rules = Comment::$rules;
        
        return $rules;
    }
}
