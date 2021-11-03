<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTagRequest;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags=Tag::simplePaginate(5);
        return view('backend.posts.indexTag',[
            'tags' => $tags,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.posts.createTags');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTagRequest $request)
    {
        $data = $request->all();
        $tag=new Tag();
        $tag->name = $data['name'];
        $tag->created_at=now();
        $tag->save();
        if ($tag->save()) {
            toastr()->success('You create a tag  successfully!');
        } else {
            toastr()->error('You create a tag failed!');
        }
        return redirect()->route('backend.tag.index');
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
        $posts=Post::all();
        foreach ($posts as $post){
            $post->tag()->detach($id);
        }
        $kt=Tag::where('id', $id)->delete();
        if ($kt == 1) {
            toastr()->success('You delete a  tag successfully!');
        } else {
            toastr()->error('You delete a tag failed!');
        }
        return redirect()->route('backend.tag.index');
    }
}
