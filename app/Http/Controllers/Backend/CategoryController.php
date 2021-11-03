<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('backend.categories.index', [
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

        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $data = $request->all();
        $category = new Category();
        $category->name = $data['name'];
        $category->created_at = now();
        $category->updated_at = now();
        $category->save();
        if ($category->save()) {
            toastr()->success('You created a new category successfully!');
        } else {
            toastr()->error('You created a new category failed!');
        }
        // $content='A new create Category';
        // $user=User::find(3);
        // $user->notify(new NotificationUser($user,$content));
        return redirect('backend/category');

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
        $category = Category::find($id);
        return view('backend.categories.edit', [
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $id)
    {

        $data = $request->all();
        $categories = Category::find($id);
        $categories->name = $data['name'];
        $categories->updated_at = now();
        $categories->save();
        if ($categories->save()) {
            toastr()->success('You update a  category successfully!');
        } else {
            toastr()->error('You update a  category failed!');
        }
        return redirect('backend/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Category::destroy($id);
        if( Category::destroy($id) == 0){
            toastr()->success('You delete a  category successfully!');
        } else {
            toastr()->error('You delete a category failed!');
        }
        return redirect('backend/category');
    }
}
