<?php

namespace App\Http\Requests;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
        $categories = Category::all();
        foreach ($categories as $category) {
            $arr[] = $category->id;
        }
        return [
            'title' => 'required|max:50',
            'content' => 'required',
            'category_id' => 'required|in:' . implode(',', $arr),
            'status' => 'required|in:1,2,3',
            'tags' => 'required',
            'image_url' => 'required|mimes:jpg,png,jpeg|max:3072|min:50|file',
        ];

    }
    public function attributes()
    {
       return [
           'category_id'=>'Category',
       ];
    }
}
