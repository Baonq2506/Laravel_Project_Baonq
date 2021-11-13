<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function destroy($prod_id,$cmt_id){
        $status=Comment::where('id',$cmt_id)->delete();
        toastr()->success('You destroy comments successfully!');
        return redirect()->route('backend.product.show',[
            'product_id'=>$prod_id
        ]);
    }

    public function destroyReply($prod_id,$cmt_id){
        $status=Comment::where('id',$cmt_id)->delete();
        toastr()->success('You destroy comments successfully!');
        return redirect()->route('backend.product.show',[
            'product_id'=>$prod_id
        ]);
    }
}