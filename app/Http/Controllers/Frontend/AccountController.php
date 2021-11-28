<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAccountRequest;
use App\Models\User;
use App\Models\UserInfo;
use App\Models\UserLink;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index($id){

        $user = User::find($id);
        return view('frontend.account.index',[
            'user' => $user,
        ]);
    }
    public function update(UpdateAccountRequest $request,$id){
        $data = $request->all();


        $user = User::find($id);
        if ($request->hasFile('avatar')) {
            $disk = 'avatars';
            $path = $request->file('avatar')->store('users', $disk);
            $user->disk = $disk;
            $user->avatar = $path;
        }

        $user->name = $data['name'];
        $user->email = $data['email'];
        if (!empty($data['password'])) {
            $user->password = $data['password'];
        }
        UserInfo::where('user_id', $id)->update([
            'address' => $data['address'],
            'city' => $data['city'],

            'date' => $data['date'],
            'phone' => $data['phone'],
            'gender' => $data['gender'],
        ]);
        $user->save();
        if ($user->save()) {
            toastr()->success('You update successfully!');
        } else {
            toastr()->error('You update failed!');
        }
        $user->roles()->sync(4);

        return redirect()->back();
    }

}