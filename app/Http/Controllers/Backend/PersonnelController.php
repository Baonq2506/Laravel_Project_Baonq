<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\UserInfo;
use App\Models\UserLink;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $usersPersonnel=User::whereHas('roles',function(Builder $query){
            $query->where('id','!=',4);
        })->get();

        return view('backend.personnel.index',[
            'personnel'=>$usersPersonnel,
        ]);
    }

    // public function historyEm()
    // {
    //    return view('backend.personnel.perSoftDelete');
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::all();
        $permissions= new Permission();
        $perArr=$permissions->permissionsArr();
        return view('backend.personnel.create',[
            'roles' => $roles,
            'perArr' => $perArr,
        ]);
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
        dd($data);
        $user= new User();
        $user->name=$data['name'];
        $user->email=$data['email'];
        $user->status='1';
        $user->save();
        $user->roles()->attach($data['role']);
        $user->userInfo()->create($data);
        $user->userLink()->create($data);

        return redirect('backend/personnel');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personnel= User::find($id);
        $perposts=$personnel->post()->simplePaginate(2);
        return view('backend.personnel.profile',[
            'personnel'=>$personnel,
            'perposts'=>$perposts,
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
        $person=User::find($id);
        $roles=Role::all();
        $permissions=new Permission();
        $perArr=$permissions->permissionsArr();
        return view('backend.personnel.edit',[
            'person'=>$person,
            'roles'=>$roles,
            'perArr' => $perArr,
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
        $user->updated_at=now();


        UserInfo::where('user_id',$id)->update([
            'address'=>$data['address'],
            'city'=>$data['city'],
            'country'=>$data['country'],
            'date'=>$data['date'],
            'phone'=>$data['phone'],
            'gender'=>$data['gender'],
            'description'=>$data['description'],
            'updated_at'=>now(),
        ]);

        UserLink::where('user_id',$id)->update([
            'fb_url'=>$data['fb_url'],
            'gg_url'=>$data['gg_url'],
            'switter_url'=>$data['switter_url'],
            'linked_url'=>$data['linked_url'],
        ]);
        $user->save();
        $user->roles()->sync($data['role']);
        return redirect('backend/personnel');
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
        UserInfo::where('user_id',$id)->delete();
        UserLink::where('user_id',$id)->delete();
        User::destroy($id);


        return redirect('backend/personnel');
    }


    public function signWithUser($id){
        Auth::loginUsingId($id, $remember = true);
        return redirect('backend/home');
    }
}
