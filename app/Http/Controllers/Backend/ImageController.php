<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function destroy($id){
        Image::where('id', $id)->delete();
        return redirect()->route('backend.product.index');
    }
}