<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(UserDataTable $dataTable)
    {
        return $dataTable->render('user.index', [
            'title' => 'List User',
            'datatable' => true
        ]);
    }

    public function create()
    {
        return view('user.create');

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

        return redirect('user');
    }

    public function edit($id)
    {
        $data = [
            "user" => User::where('id', $id)->get(),
        ];

        return view('user.edit', $data);
    }


    public function update(Request $request)
    {
        $user = User::findOrFail($request->id);
        $request->validate([
            'name' => ['required'],
            'email' => ['nullable', 'unique:users,email,' . $request->id],
            'username' => ['nullable', 'unique:users,username,' . $request->id],
            'password' => ['nullable'],
            'role' => ['required'],
        ]);

        try {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->role = $request->role;
            if ($request->password) {
                $user->password = Hash::make($request->password);
            }

            $user->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal mengupdate user: ' . $e->getMessage());
        }

        return redirect('user');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        try {
            $user->delete();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

    return redirect('user');
    }
}

