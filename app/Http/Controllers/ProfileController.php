<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class ProfileController extends Controller
{
    public function index(){
        $profile = User::where('role_id',2)->get();
        return view('profile',['profile'=>$profile]);
    }
    public function show($id){
        $profile = User::with('roles')->findOrFail($id);
        return view('profile',['profile'=>$profile]);
       
    }
}
