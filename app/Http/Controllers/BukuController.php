<?php

namespace App\Http\Controllers;

use App\Buku;
use App\KategoriBuku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kat    = KategoriBuku::all();
        $buku   = Buku::latest()->get();
        return view('backend.buku.index',compact('buku' , 'kat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kat = KategoriBuku::all();
        $buku = Buku::all();
        return view('backend.buku.index',compact('kat','buku'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul'         => 'required',
            'isbn'          => 'required',
            'pengarang'     => 'required',
            'penerbit'      => 'required',
            'tahun_terbit'  => 'required',
            'kategori_id'   => 'required'
        ]);

        Buku::create([
            'judul'         => $request->judul,
            'isbn'          => $request->isbn,
            'pengarang'     => $request->pengarang,
            'penerbit'      => $request->penerbit,
            'tahun_terbit'  => $request->tahun_terbit,
            'kategori_id'   => $request->kategori_id
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
        $kat    = KategoriBuku::all();
        $buku   = Buku::where('id',$id)->first();
        return view('backend.buku.edit', compact('kat' ,'buku'));
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
        $buku = Buku::find($id);

        $data_buku = [
            'judul'         => $request->judul,
            'isbn'          => $request->isbn,
            'pengarang'     => $request->pengarang,
            'penerbit'      => $request->penerbit,
            'tahun_terbit'  => $request->tahun_terbit,
            'kategori_id'   => $request->kategori_id
        ];

        Buku::whereId($id)->update($data_buku);

        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $kat = Buku::destroy($id);

        return redirect()->back();

    }
}
