<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        $data = [
            "user" => User::all(),
        ];

        return view ('user/index', $data);
    }

    public function create()
    {
        return view('user/create');

    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);

        $user = [
            'name' => $validate['name'],
            'username' => $validate['username'],
            'password' => Hash::make($validate['password']),
            'email' => $validate['email'],
            'role' => $validate['role'],
        ];

        User::create($user);

        return redirect('/user/index');
    }

    public function edit($id)
    {
        $data = [
            "user" => User::where('id', $id)->get(),
        ];

        return view('user/edit', $data);
    }


    public function update(Request $request)
    {
        $userData = [
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ];

        User::where('id', $request->id)->update($userData);


        return redirect('/user/index');
    }

    public function destroy($id)
    {
        DB::table('users')->where('id',$id)->delete();

    return redirect('/user/index');
    }
}

