<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;



class RoleController extends Controller
{
    public function role(){
        $permissions=Permission::all();
        $roles=Role::all();

      return view('admin.role.role',[
        'roles'=>$roles,
        'permissions'=>$permissions,
      ]);
    }
    public function permission_store(Request $request){
        Permission::create(['name' => $request->permission_name]);
        return back();
    }
    public function add_role(Request $request){
        $role = Role::create(['name'=>$request->role_name]);
        $role->givePermissionTo($request->permission);

        return back();
    }
}
