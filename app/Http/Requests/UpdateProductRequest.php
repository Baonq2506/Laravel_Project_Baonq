<?php

namespace App\Http\Requests;

use App\Models\Brand;
use App\Models\ProdCategory;
use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
        $prodCategories = ProdCategory::all();
        foreach ($prodCategories as $category) {
            $arr[] = $category->id;
        }

        $brands = Brand::all();
        foreach ($brands as $brand) {
            $brandArr[] = $brand->id;
        }
        $product = new Product();
        $status= $product->getStatus();
        for ($i = 1; $i <= count($status); $i++) {
            $statusArr[] = $i;
        }

        return [
            'name' => 'required|max:50',
            'content' => 'required',
            'category_id' => 'required|in:' . implode(',', $arr),
            'brand_id' => 'required|in:' . implode(',', $brandArr),
            'origin' => 'required',
            'status' => 'required|in:' . implode(',', $statusArr),
            'sale' => 'required',
            'images.*' => 'mimes:jpg,png,jpeg|max:3072|min:50|file',
        ];
    }
    public function attributes()
    {
       return [
           'category_id'=>'Category',
           'brand_id'=>'Brand',
           'image_url'=>'Image'
       ];
    }
}