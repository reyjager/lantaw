<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    public function update(Request $request)
    {
        foreach ($request->roles as $roleId => $roleName) {
            Role::where('id', $roleId)->update(['name' => $roleName]);
        }
        return back()->with('success', 'Roles updated successfully!');
    }

}
