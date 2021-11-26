<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Image;
use App\Models\ProdCategory;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::paginate(16);
        $prodCategories = ProdCategory::all();

        return view('frontend.shops.index', [
            'products' => $products,
            'prodCate' => $prodCategories,
        ]);
    }

    public function getCategory(Request $request)
    {
        $data = $request->all();
        $prodCate = ProdCategory::all();
        $cate_id = $request->get('categorySearch');
        $cateProd = Product::where('category_id', $cate_id)->paginate(4);
        return view('frontend.shops.index', [
            'products' => $cateProd,
            'prodCate' => $prodCate,
        ]);
    }

    public function getCategoryId($id)
    {
        $cateProd = Product::where('category_id', $id)->paginate(4);
        return view('frontend.shops.index', [
            'products' => $cateProd,
        ]);
    }

    public function detailProduct($slug,$id)
    {

        $product = Product::find($id);

        $images = Image::where('product_id', $id)->get();
        $related_products = Product::where('category_id', $product->category_id)->take(4)->get();
        $exclusive_products = Product::where('status', '4')->get();
        //Review
        $reviews = Review::where('product_id', $id)->whereNull('parent_id')->get();
        $replyReviews = Review::where('product_id', $id)->get();
        //Comment
        $comments = Comment::where('product_id', $id)->whereNull('parent_id')->get();
        $replyComments = Comment::where('product_id', $id)->get();

        return view('frontend.shops.show', [
            'product' => $product,
            'images' => $images,
            'relatedProducts' => $related_products,
            'exclusiveProducts' => $exclusive_products,
            'reviews' => $reviews,
            'replyReviews' => $replyReviews,
            'comments' => $comments,
            'replyComments' => $replyComments,
        ]);
    }


}