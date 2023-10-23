<?php

namespace App\Http\Controllers;

use App\DataTables\BukuDataTables;
use App\Models\Buku;
use App\Models\Penerbit;
use illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BukuDataTables $dataTable){

        return $dataTable->render('buku/index', [
            'title' => 'List Buku',
            'datatable' => true
        ]);
    }

    public function create()
    {
        $data = [
            'penerbit' =>  Penerbit::all(),
            'buku' =>  Buku::all()
        ];

        return view('buku/create', $data);

    }

    public function store(Request $request)
    {

        $request->validate([
            'buku' => ['required'],
            'penerbit_id' => ['required'],
            'foto' => ['nullable','file','mimes:jpg,jpeg,png,bmp,webp','between:0,2048'],
        ]);
    try{
        $buku = new Buku();
        $buku->buku = $request->buku;
        $buku->penerbit_id = $request->penerbit_id;

        if ($request->hasFile('foto')) {
            $filename = Str::random(32) . '.' . $request->file('foto')->getClientOriginalExtension();
            $foto_path = $request->file('foto')->storeAs('public/sampul', $filename);
            $buku->foto = $foto_path;
        }

        $buku->save();
        } catch (\Exception $th) {
            return redirect()->back()->with('error', 'ada error:'. $th->getMessage());
        }

        return redirect('/buku/index');
    }

    public function edit($id)
    {
        $data = [
            "buku" => Buku::where('id', $id)->first(),
            "penerbit" => Penerbit::all(),
        ];

        return view('buku/edit', $data);
    }


    public function update(Request $request, $id)
    {

        $buku = Buku::findOrFail($id);
        $request->validate([
            'buku' => ['required'],
            'penerbit_id' => ['required'],
            'foto' => ['nullable','file','mimes:jpg,jpeg,png,bmp,webp','between:0,2048'],
        ]);

        try{
            $buku->buku = $request->buku;
            $buku->penerbit_id = $request->penerbit_id;
            if ($request->hasFile('foto')) {

                if($buku->foto != '') {
                    try {
                        Storage::delete($buku->foto);
                    } catch (\Throwable $e) {
                        return redirect()->back()->with('error', 'Ada yang salah'. $e->getMessage());
                    }
                }

                $filename = Str::random(32) . '.' . $request->file('foto')->getClientOriginalExtension();
                $foto_path = $request->file('foto')->storeAs('public/sampul', $filename);
                $buku->foto = $foto_path;

            }
            $buku->save();
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Ada yang salah'. $e->getMessage());
        }

        return redirect()->back()->with('succes', 'Berhasil menambahkan data');
    }

    public function destroy($id)
    {
        DB::table('buku')->where('id',$id)->delete();

    return redirect('/buku/index');
    }
}

