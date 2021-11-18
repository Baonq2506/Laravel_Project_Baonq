<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Models\UserInfo;
use App\Models\UserLink;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $usersPersonnel = User::whereHas('roles', function (Builder $query) {
            $query->where('id', '!=', 4);
        })->get();

        return view('backend.personnel.index', [
            'personnel' => $usersPersonnel,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $permissions = Permission::where('parent_id', 0)->get();

        return view('backend.personnel.create', [
            'roles' => $roles,
            'perArr' =>  $permissions,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeRequest $request)
    {
        $data = $request->all();

        $user = new User();
        if ($request->hasFile('avatar')) {
            $disk = 'avatars';
            $path = $request->file('avatar')->store('Employee', $disk);
            $user->disk = $disk;
            $user->avatar = $path;
        }
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->status = '1';
        $user->save();
        $user->roles()->attach($data['role']);
        $user->userInfo()->create($data);
        $user->userLink()->create($data);
        if ($user->save()) {
            toastr()->success('You created a new user successfully!');
        } else {
            toastr()->error('You created a new user failed!');
        }
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
        $personnel = User::find($id);
        $perposts = $personnel->post()->simplePaginate(2);
        return view('backend.personnel.profile', [
            'personnel' => $personnel,
            'perposts' => $perposts,
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
        $person = User::find($id);
        $roles = Role::all();
        $permissions = new Permission();
        $perArr = $permissions->permissionsArr();
        return view('backend.personnel.edit', [
            'person' => $person,
            'roles' => $roles,
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
    public function update(UpdateEmployeeRequest $request, $id)
    {
        $data = $request->all();

        $user = User::find($id);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->updated_at = now();
        if ($request->hasFile('avatar')) {
            $disk = 'avatars';
            $path = $request->file('avatar')->store('Employee', $disk);
            $user->disk = $disk;
            $user->avatar = $path;
        }
        UserInfo::where('user_id', $id)->update([
            'address' => $data['address'],
            'city' => $data['city'],
            'country' => $data['country'],
            'date' => $data['date'],
            'phone' => $data['phone'],
            'gender' => $data['gender'],
            'description' => $data['description'],
            'updated_at' => now(),
        ]);
        $user->save();

        $roles = Role::all();
        foreach($roles as $role){
            if(Str::slug($data['role'])==$role->slug){
                $data['role'] = $role->id;
                break;
            }
        }
        $user->roles()->sync($data['role']);
        if ($user->save()) {
            toastr()->success('You Update a new Employee successfully!');
        } else {
            toastr()->error('You Update a new Employee failed!');
        }
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
        UserInfo::where('user_id', $id)->delete();
        UserLink::where('user_id', $id)->delete();
        User::destroy($id);
        if (User::destroy($id)==0) {
            toastr()->success('You Delete a  user successfully!');
        } else {
            toastr()->error('You Delete a user failed!');
        }

        return redirect('backend/personnel');
    }

    public function signWithUser($id)
    {
        Auth::loginUsingId($id, $remember = true);
        return redirect('backend/home');
    }
}
