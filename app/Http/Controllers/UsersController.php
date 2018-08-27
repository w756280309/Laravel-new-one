<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class UsersController extends Controller
{
    //
    public function create(){
        return view('users.create');
    }

    public function index(){
        return view('');
    }

    public function show(User $user){
        return view('users.show',compact('user'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|max:50',
            'email' => 'required|max:255|unique:users|email',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login();
        session()->flash('success','欢迎，恭喜您注册成功！');
        return redirect()->route('users.show',[$user]);
    }
}
