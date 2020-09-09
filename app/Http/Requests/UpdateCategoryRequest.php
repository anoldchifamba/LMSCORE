<?php

namespace AT_academy\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use AT_academy\Models\Category;

class UpdateCategoryRequest extends FormRequest
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
        $rules = Category::$rules;
        
        return $rules;
    }
}
