<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showEdiList()
    {
        $users=User::all();
        return view('backend/editUserlist',['users' =>$users]);
    }

    public function showEdit(Request $request){
        $user= User::find($request->id);
        return view('backend/editUser',['user'=>$user]);
    }

    public function edit(Request $request){
        $user= User::find($request->id);

        $user->name=$request->name;
        $user->role=$request->role;
        $user->email=$request->email;

        $user->save();
        return $this->showEdiList();
    }

    public function destroy(Request $request){

        $user= User::find($request->id);
        $user->delete();
        return $this->showEdiList();
    }
}
