<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BajuDBController extends Controller
{
    // Menampilkan data baju
    public function index()
    {
        $baju = DB::table('baju')->paginate(10);

        return view('indexBaju', ['baju' => $baju]);
    }

    // Menampilkan form tambah
    public function tambah()
    {
        return view('tambahBaju');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        DB::table('baju')->insert([
            'merkbaju' => $request->merkbaju,
            'stockbaju' => $request->stockbaju,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/baju');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $baju = DB::table('baju')
            ->where('kodebaju', $id)
            ->get();

        return view('editBaju', ['baju' => $baju]);
    }

    // Update data
    public function update(Request $request)
    {
        DB::table('baju')
            ->where('kodebaju', $request->kodebaju)
            ->update([
                'merkbaju' => $request->merkbaju,
                'stockbaju' => $request->stockbaju,
                'tersedia' => $request->tersedia
            ]);

        return redirect('/baju');
    }

    // Hapus data
    public function hapus($id)
    {
        DB::table('baju')
            ->where('kodebaju', $id)
            ->delete();

        return redirect('/baju');
    }

    // Cari data
    public function cari(Request $request)
    {
        $cari = $request->cari;

        $baju = DB::table('baju')
            ->where('merkbaju', 'like', '%' . $cari . '%')
            ->paginate(10);

        return view('indexBaju', ['baju' => $baju]);
    }
}
