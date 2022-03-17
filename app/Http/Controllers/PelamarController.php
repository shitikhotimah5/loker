<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelamar = Pelamar::all();
        return view('pelamar.index', compact('pelamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelamar.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'name' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'pendidikan' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'file' => 'required',
        ]);

        $pelamar = New Pelamar;
        $pelamar -> user_id = $request -> user_id;
        $pelamar -> name = $request -> name;
        $pelamar -> tempat_lahir = $request -> tempat_lahir;
        $pelamar -> tgl_lahir = $request -> tgl_lahir;
        $pelamar -> alamat = $request -> alamat;
        $pelamar -> pendidikan = $request -> pendidikan;
        $pelamar -> email = $request -> email;
        $pelamar -> no_hp = $request -> no_hp;
        $pelamar -> file = $request -> file;

        $pelamar -> save();

        return redirect()->route('pelamar.index')
            ->with([

                'message' => 'Pelamar Berhasil Di Simpan',
                'success' => true,
            ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function show(Pelamar $pelamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelamar $pelamar)
    {
        return view('pelamar.edit', compact('pelamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelamar $pelamar)
    {
        //untuk update loker
        $this->validate($request, [
            'name' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'pendidikan' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'file' => 'required',

        ]);

        // $loker = Loker::find($loker);
        $pelamar -> name = $request -> name;
        $pelamar -> tempat_lahir = $request -> tempat_lahir;
        $pelamar -> tgl_lahir = $request -> tgl_lahir;
        $pelamar -> alamat = $request -> alamat;
        $pelamar -> pendidikan = $request -> pendidikan;
        $pelamar -> email = $request -> email;
        $pelamar -> no_hp = $request -> no_hp;
        $pelamar -> file = $request -> file;

        $pelamar -> update();

        return redirect()->route('pelamar.index')->with([
                'message' => 'Pelamar Berhasil Diperbaharui',
                'success' => true,

            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelamar $pelamar)
    {
        //eksekusi delete back to index
        $pelamar->delete();

        return redirect()->route('pelamar.index')->with([
            'message' => 'Pelamar Berhasil Dihapus',
            'success' => true,
        ]);
    }
}
