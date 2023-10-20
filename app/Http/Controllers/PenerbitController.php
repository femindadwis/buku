<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class PenerbitController extends Controller
{
    public function index()
    {
        $data = [
            "penerbit" => Penerbit::all(),
        ];

        return view ('penerbit/index', $data);
    }

    public function create()
    {
        return view('penerbit/create');

    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
        ]);

        $penerbit = [
            'name' => $validate['name'],
        ];

        Penerbit::create($penerbit);

        return redirect('/penerbit/index');
    }

    public function edit($id)
    {
        $data = [
            "penerbit" => penerbit::where('id', $id)->get(),
        ];

        return view('penerbit/edit', $data);
    }


    public function update(Request $request)
    {
        $penerbitData = [
            'name' => $request->name,
        ];

        Penerbit::where('id', $request->id)->update($penerbitData);


        return redirect('/penerbit/index');
    }

    public function destroy($id)
    {
        DB::table('penerbit')->where('id',$id)->delete();

    return redirect('/user/index');
    }
}

