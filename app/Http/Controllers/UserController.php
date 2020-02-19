<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function getAll(){
        $users = User::all();
        return $users;
    }
    function getById($id){
        $user = User::find($id);
        return $user;
    }
    function deleteById($id){
        $delete = User::destroy($id);

        return [$delete, 'user bien éffacé'];
    }
    function createUser(Request $request){

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return $user;
    }
}
