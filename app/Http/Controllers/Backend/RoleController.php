<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateRoleRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $permissions = new Permission();
        $perArr = $permissions->permissionsArr();
        return view('backend.roles.index', [
            'roles' => $roles,
            'perArr' => $perArr,
        ]);
    }

    public function indexPermissions()
    {
        $permission = new Permission();
        $permissions = Permission::where('parent_id', 0)->get();

        $allPermissions = Permission::pluck('name','id')->all();

        $perArr = $permission->permissionsArr();

        return view('backend.roles.indexPer', [
            'permissions' => $perArr,
            'parentPermissions'=>$permissions,
            'allPermissions'=>$allPermissions,
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
        $permission = new Permission();
        $permissions = $permission->permissionsArr();
        $permissions = Permission::where('parent_id', 0)->get();
        return view('backend.roles.create', [
            'roles' => $roles,
            'perArr' => $permissions,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRoleRequest $request)
    {
        $data = $request->all();
        $role = new Role();
        $role->name = $data['name'];
        $role->slug = Str::slug($data['name']);
        $role->created_at = now();
        $role->save();

        $role->permissions()->attach($data['permissions']);
        if ($role->save()) {
            toastr()->success('You creates a new  successfully!');
        } else {
            toastr()->error('You creates a new failed!');
        }
        return redirect()->route('backend.role.index');
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
        $role = Role::find($id);
        $permission = new Permission();
        $perArr = $permission->permissionsArr();

        return view('backend.roles.edit', [
            'role' => $role,
            'permissions' => $perArr,
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
        $data = $request->all();
        $role = Role::find($id);
        $role->name = $data['name'];
        $role->slug = Str::slug($data['name']);
        $role->updated_at = now();
        $role->save();
        $role->permissions()->sync($data['permissions']);
        if ($role->save()) {
            toastr()->success('You Update a role successfully!');
        } else {
            toastr()->error('You Update a role failed!');
        }
        return redirect()->route('backend.role.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Role::find($id)->permissions()->detach();
        Role::where('id', $id)->delete();

        return redirect('backend/role');
    }
}