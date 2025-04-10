<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Monolog\Handler\RollbarHandler;

class ProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $username = Auth::user()->name;
        $id = Auth::user()->id;
        $role = Role::where('id', $id)->first();


        // Pass data to view
        return view('content.profile', ['username' => $username, 'role' => $role]);
    }
}