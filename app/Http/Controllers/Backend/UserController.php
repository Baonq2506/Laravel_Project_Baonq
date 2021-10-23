<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\NotificationUser;
use Illuminate\Database\Eloquent\Builder;
use App\Models\UserInfo;
use App\Models\UserLink;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users=User::whereHas('roles',function(Builder $query){
            $query->where('id',4);
        })->get();
        return view('backend.users.index',[
            'users'=>$users,
        ]);
    }

    public function userSoftDelete(){

        $users = User::onlyTrashed()->get();

        return view('backend.users.softDelete',[
            'users'=>$users,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
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
        $user= new User();
        $user->name=$data['name'];
        $user->email=$data['email'];
        $user->status='2';
        $user->save();
        $user->roles()->attach(4);
        $user->userInfo()->create($data);
        $user->userLink()->create($data);

        return redirect('backend/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::find($id);
        return view('backend.users.profileUser',[
            'user'=>$user
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
        $user=User::find($id);
        return view('backend.users.edit',[
            'user'=>$user,
        ]);
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
        $data=$request->all();

        $user=User::find($id);


        $user->name=$data['name'];
        $user->email=$data['email'];
        if(!$data['password']){
            $user->password=$data['password'];
        }
        $user->updated_at=now();


        UserInfo::where('user_id',$id)->update([
            'address'=>$data['address'],
            'city'=>$data['city'],
            'country'=>$data['country'],
            'date'=>$data['date'],
            'phone'=>$data['phone'],
            'gender'=>$data['gender'],
            'updated_at'=>now(),
        ]);
        UserLink::where('user_id',$id)->update([
            'fb_url'=>$data['fb_url'],
            'gg_url'=>$data['gg_url'],
        ]);

        $user->save();
        $user->roles()->sync(4);


        return redirect('backend/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->roles()->detach($id);
        UserInfo::where('user_id',$id)->destroy();
        UserLink::where('user_id',$id)->destroy();
        User::destroy($id);


        return redirect('backend/user');
    }

    public function restore($id){
       User::withTrashed()->where('id', $id)->restore();
        return redirect('backend/user');
    }

    public function signWithUser($id){
        Auth::loginUsingId($id, $remember = true);
        return redirect('backend/home');
    }
}