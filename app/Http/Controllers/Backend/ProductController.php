<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Brand;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Order;
use App\Models\ProdCategory;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('backend.products.index', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodCategories = ProdCategory::all();
        $brands = Brand::all();
        $product = new Product();
        $statusArr = $product->getStatus();

        return view('backend.products.create', [
            'prodCategories' => $prodCategories,
            'brands' => $brands,
            'status' => $statusArr,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->all();
        $product = new Product();
        $product->name = $data['name'];
        $product->content = $data['content'];
        $product->category_id = $data['category_id'];
        $product->brand_id = $data['brand_id'];
        $product->status = $data['status'];
        $product->sale_price = Str::replace(',', '', $data['sale']);
        $product->origin_price =Str::replace(',', '', $data['origin']);
        $product->view_count = 0;
        $product->review_count = 0;
        $product->sale_count = 0;
        $product->user_created_id = auth()->user()->id;
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $file) {
                $fileName = $file->getClientOriginalName();
                $disk = 'products';
                $path = $request->file('images')[$key]->storeAs('prods', $fileName, $disk);

                $imagesArr['path'][] = $path;

            }

            $product->info = json_encode($imagesArr);

        }
        $product->save();
        $insertedId = $product->id;
        for ($i = 0; $i < count($imagesArr); $i++) {
            $images = new Image();
            $images->name = $imagesArr['path'][$i];
            $images->path = $imagesArr['path'][$i];
            $images->product_id = $insertedId;
            $images->save();
        }
        if ($product->save()) {
            toastr()->success('You create a new product successfully!');
        } else {
            toastr()->error('You create a new product failed!');
        }
        return redirect()->route('backend.product.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $imageArr = Image::where('product_id', $id)->paginate(4);
        $imagesCount = Image::where('product_id', $id)->get();

        //Review
        $reviews = Review::where('product_id', $id)->whereNull('parent_id')->get();
        $replys = Review::where('product_id', $id)->get();
        //Comment
        $comments = Comment::where('product_id', $id)->whereNull('parent_id')->get();
        $replyComments = Comment::where('product_id', $id)->get();
        return view('backend.products.show', [
            'product' => $product,
            'images' => $imageArr,
            'reviews' => $reviews,
            'replys' => $replys,
            'comments' => $comments,
            'replyComments' => $replyComments,
            'imagesCount' => $imagesCount,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $prodCategories = ProdCategory::all();
        $brands = Brand::all();
        $statusArr = $product->getStatus();
        return view('backend.products.edit', [
            'product' => $product,
            'prodCategories' => $prodCategories,
            'brands' => $brands,
            'status' => $statusArr,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $data = $request->all();

        $product = Product::find($id);
        $product->name = $data['name'];
        $product->content = $data['content'];
        $product->category_id = $data['category_id'];
        $product->brand_id = $data['brand_id'];
        $product->status = $data['status'];
        $product->sale_price = $data['sale'];
        $product->origin_price = $data['origin'];
        $product->user_created_id = auth()->user()->id;
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $file) {
                $fileName = $file->getClientOriginalName();
                $disk = 'products';
                $path = $request->file('images')[$key]->storeAs('prods', $fileName, $disk);
                $imagesArr[] = $path;
            }
            $product->info = json_encode($imagesArr);
        }
        $product->save();
        $insertedId = $product->id;
        if (!empty($imagesArr)) {
            for ($i = 0; $i < count($imagesArr); $i++) {
                $images = new Image();
                $images->name = $imagesArr[$i];
                $images->path = $imagesArr[$i];
                $images->product_id = $insertedId;
                $images->created_at = now();
                $images->save();
            }
        }

        if ($product->save()) {
            toastr()->success('You update a  product successfully!');
        } else {
            toastr()->error('You update a  product failed!');
        }
        return redirect()->route('backend.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $images = Image::where('product_id', $id)->get();
        foreach ($images as $image) {
            $image->delete();
        }
        Product::destroy($id);
        if (Product::destroy($id) == 0) {
            toastr()->success('You destroy a product successfully!');
        } else {
            toastr()->error('You destroy a product failed!');
        }
        return redirect()->route('backend.product.index');
    }

    public function order()
    {
        $orders = Order::all();

        return view('backend.products.order', [
            'orders' => $orders,
        ]);
    }

    public function showOrder($id)
    {
        $order = Order::find($id);
        $order_prod = DB::table('order_product')->where('order_id', $id)->get();
        $products = $order->products;
        $images = array();
        foreach ($products as $product) {
            $images[] = Image::where('product_id', $product->id)->get();
        }

        return view('backend.products.showOrder', [
            'order_prods' => $order_prod,
            'products' => $products,
            'images' => $images,
            'orders' => $order,
        ]);
    }

    public function replyReview(Request $request, $id)
    {
        $data = $request->all();
        $review = new Review();
        $review->user_id = auth()->user()->id;
        $review->product_id = $data['product_id'];
        $review->parent_id = $id;
        $review->content = $data['replyReviews'];
        $review->save();
        return back();
    }

    public function replyComment(Request $request, $id)
    {
        $data = $request->all();
        $comment = new Comment();
        $comment->user_id = auth()->user()->id;
        $comment->product_id = $data['product_id'];
        $comment->parent_id = $id;
        $comment->status =1;
        $comment->content = $data['replyComments'];
        $comment->save();
        return back();
    }
}