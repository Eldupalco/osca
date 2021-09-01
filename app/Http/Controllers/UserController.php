<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view('admin.account.account-records',compact('user'));
    }

    public function create(){
        return view('admin.account.account-register');
    }



    public function register(Request $request){

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'birth_date' => $request['birth_date'],
            'birth_place' => $request['birth_place'],
            'address' => $request['address'],
            'sex' => $request['sex'],
            'civil_status' => $request['civil_status'],
            'user_type' => $request['user_type'],
            'password' => Hash::make($request['password']),

        ]);

        return redirect()->route('admin/user/index');
    }

    public function info(User $user){
        return view('admin.account.account-update',compact('user'));
    }

    public function update(Request $request,User $user){
        $user->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'birth_date' => $request['birth_date'],
            'birth_place' => $request['birth_place'],
            'address' => $request['address'],
            'sex' => $request['sex'],
            'civil_status' => $request['civil_status'],
            'user_type' => $request['user_type'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->route('admin/user/index');
    }

    public function destroy(User $user){
        $user->delete();
        return back();
    }
}
