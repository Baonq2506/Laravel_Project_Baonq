<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Notifications\NotificationPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::orderBy('id', 'desc')->get();

        $categories = Category::all();
        return view('backend.posts.index', [
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        $tags = Tag::all();
        return view('backend.posts.create', [
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $data = $request->all();

        $post = new Post();

        if ($request->hasFile('image_url')) {
            $disk = 'public';
            $path = $request->file('image_url')->store('Blogs', $disk);
            $post->disk = $disk;
            $post->image_url = $path;
        }
        $post->title = $data['title'];
        $post->slug=Str::slug($data['title']);
        $post->content = $data['content'];
        $post->category_id = $data['category_id'];
        $post->user_created_id = rand(1, 10);
        $post->user_updated_id = rand(1, 10);
        $post->status = $data['status'];
        $post->created_at = date("Y-m-d H:i:s");
        $post->updated_at = date("Y-m-d H:i:s");
        $post->save();
        $post->tag()->attach($data['tags']);
        if ($post->save()) {
            toastr()->success('You create a new post successfully!');
        } else {
            toastr()->error('You create a new post failed!');
        }
        return redirect()->route('backend.post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        if (empty($post)) {
            $post = Post::onlyTrashed()->where('id', $id)->get();
            $post = $post[0];
        }
        return view('backend.posts.detail', [
            'post' => $post,
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
        $post = Post::find($id);

        if (empty($post)) {
            $post = Post::onlyTrashed()->where('id', $id)->get();
            $post = $post[0];
        }
        $tags = Tag::all();
        return view('backend.posts.edit', [
            'post' => $post,
            'tags' => $tags,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, $id)
    {
        $data = $request->all();

        if (empty($post)) {
            $post = Post::onlyTrashed()->where('id', $id)->get();
            $post = $post[0];
        }
        if ($request->hasFile('image_url')) {
            $disk = 'public';
            $path = $request->file('image_url')->store('Blogs', $disk);
            $post->disk = $disk;
            $post->image_url = $path;
        }
        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->user_updated_id = $data['id_updated'];
        $post->status = $data['status'];
        $post->updated_at = date("Y-m-d H:i:s");
        $post->save();
        if($data['status'] == 3){
            $users = User::whereHas('roles', function ($query) {
                $query->where('id', 1);
            })->get();
            $postId = $post->id;
            $content= " You have new post need confirm";
            foreach ($users as $user) {
                $user->notify(new NotificationPost(auth()->user(), $postId,$content));
            }
        }
        $tags = $post->boolTagsInput($data['tags']);
        $post->tag()->sync($tags);
        if ($post->save()) {
            toastr()->success('You update a post successfully!');
        } else {
            toastr()->error('You update a post failed!');
        }
        return redirect()->route('backend.post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

        Post::destroy($id);
        if(Post::destroy($id)==0){
            toastr()->success('You destroy a post successfully!');
        } else {
            toastr()->error('You destroy a post failed!');
        }
        return redirect()->route('backend.post.index');
    }

    public function historyDelete()
    {
        $posts = Post::onlyTrashed()->get();
        return view('backend.posts.softDelete', [
            'posts' => $posts,
        ]);
    }

    public function restore($id)
    {
        $boolPost=Post::withTrashed()->where('id', $id)->restore();

        if( $boolPost==1){
            toastr()->success('You restore post successfully!');
        } else {
            toastr()->error('You restore post failed!');
        }
        return redirect('backend/post');
    }

    public function forceDelete($id)
    {

       Post::withTrashed()->where('id', $id)->restore();
       $status=Post::where('id', $id)->delete();

        if( $status==true ){
            toastr()->success('You delete post successfully!');
        } else {
            toastr()->error('You delete new post failed!');
        }
        return redirect()->route('backend.post.historyDelete');
    }

    public function approvedAction($post_id, $id)
    {
        $post = Post::find($post_id);
        $post->status = $id;
        $post->save();
        if( $post->save()==true){
            toastr()->success( ' Status change successfully!');
        } else {
            toastr()->error('Status change failed!');
        }
        return redirect()->route('backend.post.index');
    }

}