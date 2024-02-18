<?php

namespace App\Http\Controllers;
use App\Models\Role;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index (){
        $role = Role::all();
        $data = compact('role');
        return view('showrole')->with($data);


    }
    public function addrolev(){
        $url=url('/addrole');
        $tittle="Create Role";
        $data=compact('url','tittle');
        return view('addrole')->with($data);
    }
    public function addRole(Request $request)
    {
        $role = new Role;
        $role->name = $request->input('role');
        $permissions = $request->input('permissions', []);
        $role->create_user = $permissions['user']['create'] ?? 0;
        $role->edit_user = $permissions['user']['edit'] ?? 0;
        $role->show_user = $permissions['user']['show'] ?? 0;
        $role->delete_user = $permissions['user']['delete'] ?? 0;
    
        $role->create_agent = $permissions['agent']['create'] ?? 0;
        $role->edit_agent = $permissions['agent']['edit'] ?? 0;
        $role->show_agent = $permissions['agent']['show'] ?? 0;
        $role->delete_agent = $permissions['agent']['delete'] ?? 0;
    
        $role->create_manager = $permissions['manager']['create'] ?? 0;
        $role->edit_manager = $permissions['manager']['edit'] ?? 0;
        $role->show_manager = $permissions['manager']['show'] ?? 0;
        $role->delete_manager = $permissions['manager']['delete'] ?? 0;
    
        $role->create_admin = $permissions['admin']['create'] ?? 0;
        $role->edit_admin = $permissions['admin']['edit'] ?? 0;
        $role->show_admin = $permissions['admin']['show'] ?? 0;
        $role->delete_admin = $permissions['admin']['delete'] ?? 0;
    
        $role->save();
        return redirect('/role');

    }
    public function sideBarRole(){
        $roles = Role::all();

        return view('/common/sidebar', compact('roles'));
        }
    }
