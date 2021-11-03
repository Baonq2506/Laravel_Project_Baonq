<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Ban;
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
        })->orderBy('id','DESC')->paginate(5);
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
    public function store(StoreUserRequest $request)
    {
        $data = $request->all();
        $user= new User();
        if ($request->hasFile('avatar')) {
            $disk = 'avatars';
            $path = $request->file('avatar')->store('users', $disk);
            $user->disk = $disk;
            $user->avatar = $path;
        }
        $user->name=$data['name'];
        $user->email=$data['email'];
        $user->status='2';
        $user->save();
        $user->roles()->attach(4);
        $user->userInfo()->create($data);
        $user->userLink()->create($data);
        if ($user->save()) {
            toastr()->success('You created a new  user successfully!');
        } else {
            toastr()->error('You created a new user failed!');
        }
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
    public function update(UpdateUserRequest $request, $id)
    {
        $data=$request->all();

        $user=User::find($id);
        if ($request->hasFile('avatar')) {
            $disk = 'avatars';
            $path = $request->file('avatar')->store('users', $disk);
            $user->disk = $disk;
            $user->avatar = $path;
        }
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
        if ($user->save()) {
            toastr()->success('You update a  user successfully!');
        } else {
            toastr()->error('You update a user failed!');
        }
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
        User::destroy($id);
        if (User::destroy($id)==0) {
            toastr()->success('You Delete a  user successfully!');
        } else {
            toastr()->error('You Delete a user failed!');
        }
        return redirect('backend/user');
    }

    public function restore($id){
       User::withTrashed()->where('id', $id)->restore();
        return redirect('backend/user');
    }

    public function forceDelete($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('backend.user.softDelete');
    }

    public function signWithUser($id){
        Auth::loginUsingId($id, $remember = true);
        return redirect('backend/home');
    }

    public function userBanned(Request $request,$id){
        $data = $request->all();
        dd($id);
        $user=User::find($id);
        $user->ban([
            'expired_at' => $data['time_expires'],
            'comment' => $data['comments'],
        ]);
        toastr()->success('Ban successfull !');

        return redirect()->route('backend.user.index');
    }

    public function indexBan(){

        $users = User::onlyBanned()->paginate(5);
        $userBans= Ban::all();
        return view('backend.users.banned',[
            'users' =>$users,
            'userBans' =>$userBans,
        ]);
    }

    public function userUnban($id){

        $users = User::withBanned()->get();

        foreach ($users as $user){

            if($user->id == $id)
            {
                $user->unban();
                toastr()->success('Unban successfull !');
            }
        }

        return redirect()->route('backend.user.index');
    }
}