<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use Illuminate\Http\Request;

class LokerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loker = Loker::all();
        return view('loker.index',compact('loker'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loker.form');
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
            'name' => 'required',
            'pendidikan' => 'required',
            'deskripsi' => 'required',
            'syarat' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $loker = New Loker;
        $loker -> name = $request -> name;
        $loker -> pendidikan = $request -> pendidikan;
        $loker -> deskripsi = $request -> deskripsi;
        $loker -> syarat = $request -> syarat;
        $loker -> start_date = $request -> start_date;
        $loker -> end_date = $request -> end_date;

        $loker -> save();

        return redirect()->route('loker.index')
            ->with([
                'message' => 'Loker Berhasil Disimpan',
                'success' => true,

            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function show(Loker $loker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function edit(Loker $loker)
    {
        return view ('loker.edit', compact('loker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loker $loker)
    {
        //untuk update loker
        $this->validate($request, [
            'name' => 'required',
            'pendidikan' => 'required',
            'deskripsi' => 'required',
            'syarat' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',

        ]);

        // $loker = Loker::find($loker);
        $loker -> name = $request -> name;
        $loker -> pendidikan = $request -> pendidikan;
        $loker -> deskripsi = $request -> deskripsi;
        $loker -> syarat = $request -> syarat;
        $loker -> start_date = $request -> start_date;
        $loker -> end_date = $request -> end_date;

        $loker -> update();

        return redirect()->route('loker.index')->with([
                'message' => 'Loker Berhasil Diperbaharui',
                'success' => true,

            ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loker $loker)
    {
         //eksekusi delete back to index
         $loker->delete();

         return redirect()->route('loker.index')->with([
             'message' => 'Loker Berhasil Dihapus',
             'success' => true,
         ]);
    }
}
