<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.index',compact('kategori'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.form');
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
            'name' => 'required'
        ]);

        $data = $request->only('name'); // Hanya name yang diinputkan
        $data['slug'] = Str::slug($request->name);

        Kategori::create($data);

        return redirect()->route('kategori.index')
            ->with([
                'message' => 'Kategori Berhasil Disimpan',
                'success' => true,

            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        //mengedit kategori
        return view ('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        //untuk update kategori
        $this->validate($request, [
            'name' => 'required'
        ]);

        $data = $request->only('name'); // Hanya name yang diinputkan
        $data['slug'] = Str::slug($request->name);

        $kategori->update($data);

        return redirect()->route('kategori.index')->with([
                'message' => 'Kategori Berhasil Diperbaharui',
                'success' => true,

            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
        //eksekusi delete back to index
        $kategori->delete();

        return redirect()->route('kategori.index')->with([
            'message' => 'kategori Berhasil Dihapus',
            'success' => true,
        ]);
    }
}
