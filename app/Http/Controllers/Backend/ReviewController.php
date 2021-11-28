<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $review= new Review();
        $review->user_id=auth()->user()->id;
        $review->product_id=$data['product_id'];
        $review->content = $data['content'];
        $review->star= $data['star'];
        $review->save();
        if($review->save()){
            toastr()->success('You reviews successfully');
        }
        else{
            toastr()->error('You review failed');
        }
        return redirect()->route('frontend.shop.detail',['product_id'=>$data['product_id'],'slug'=>'abc']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function heartReview($prodID, $rvID, $userID)
    {

        $review = Review::where('product_id', $prodID)->where('id', $rvID)->get();

        $likeCount = $review[0]->favories;
        $review[0]->like($userID);
        $review[0]->favories = $likeCount+ 1;
        $review[0]->save();

        return redirect()->back();
    }

    public function unheartReview($prodID, $rvID, $userID)
    {
        $review = Review::where('product_id', $prodID)->where('id', $rvID)->get();
        $likeCount = $review[0]->favories;
        $review[0]->unlike($userID);
        $review[0]->favories = $likeCount-1;
        $review[0]->save();

        return redirect()->back();
    }
}
