<?php

namespace App\Http\Controllers;

use App\KategoriBuku;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\BaseTag;

class KategoriBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $kat = KategoriBuku::latest()->get();
        return view('backend.kategori_buku.index' ,compact('kat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.kategori_buku.index');
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
            'nama' => 'required|min:1|max:255'
        ],
    [
        'nama.required' => 'Nama Kategori harus diisi!',
        'nama.min'      => 'Kategori minimal 1 huruf'
    ]);

    KategoriBuku::create([
        'nama' => $request->nama
    ]);

    return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kat = KategoriBuku::find($id);
        return view('backend.kategori_buku.edit', compact('kat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kat = KategoriBuku::find($id);

        $kat_data = [
            'nama'  => $request->nama
        ];

        KategoriBuku::whereId($id)->update($kat_data);

        return redirect()->route('kategori-buku.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    KategoriBuku::find($id)->delete();
    return redirect()->back();
    }
}