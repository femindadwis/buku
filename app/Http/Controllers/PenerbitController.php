<?php

namespace App\Http\Controllers;

use App\DataTables\PenerbitDataTable;
use App\Models\User;
use App\Models\Penerbit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class PenerbitController extends Controller
{
    public function index(PenerbitDataTable $dataTable)
    {
        return $dataTable->render('penerbit.index', [
            'title' => 'List Penerbit',
            'datatable' => true
        ]);
    }

    public function create()
    {
        return view('penerbit.create');

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

        return redirect('penerbit');
    }

    public function edit($id)
    {
        $data = [
            "penerbit" => Penerbit::where('id', $id)->get(),
        ];

        return view('penerbit.edit', $data);
    }


    public function update(Request $request)
    {
        $penerbit = Penerbit::findOrFail($request->id);
        $request->validate([
            'name' => ['required'],
        ]);
        try {
            $penerbit->name = $request->name;

            $penerbit->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal mengupdate penerbit: ' . $e->getMessage());
        }

        return redirect('penerbit');
    }

    public function destroy($id)
    {
        $penerbit = Penerbit::findOrFail($id);
        try {
            $penerbit->delete();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    return redirect('penerbit');
    }
}

