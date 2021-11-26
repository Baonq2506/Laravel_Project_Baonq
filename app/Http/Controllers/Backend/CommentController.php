<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function destroy($prod_id, $cmt_id)
    {
        $status = Comment::where('id', $cmt_id)->delete();
        toastr()->success('You destroy comments successfully!');
        return redirect()->route('backend.product.show', [
            'product_id' => $prod_id,
        ]);
    }

    public function destroyReply($prod_id, $cmt_id)
    {
        $status = Comment::where('id', $cmt_id)->delete();
        toastr()->success('You destroy comments successfully!');
        return redirect()->route('backend.product.show', [
            'product_id' => $prod_id,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $product = Product::find($data['product_id']);
        $comment = new Comment();
        $comment->user_id = auth()->user()->id;
        $comment->product_id = $data['product_id'];
        $comment->content = $data['content'];
        $comment->status = 1;
        $comment->save();
        if ($comment->save()) {
            toastr()->success('You comments successfully');
        } else {
            toastr()->error('You comments failed');
        }
        return redirect()->route('frontend.shop.detail', ['slug' => $product->slug, 'product_id' => $data['product_id']]);

    }
    public function likeComment($prodID, $cmtID, $userID)
    {
        $comment = Comment::where('product_id', $prodID)->where('id', $cmtID)->get();
        $likeCount = $comment[0]->like_count;
        $comment[0]->like($userID);
        $comment[0]->like_count = $likeCount++;
        $comment[0]->save();

        return redirect()->back();
    }

    public function unlikeComment($prodID, $cmtID, $userID)
    {
        $comment = Comment::where('product_id', $prodID)->where('id', $cmtID)->get();
        $comment[0]->unlike($userID);
        $comment[0]->save();
        return redirect()->back();
    }
}