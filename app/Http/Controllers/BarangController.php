<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Barang::latest()->paginate(5);
    
        return view('stok_barang.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stok_barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'katagori_barang' => 'required',
            'nama_barang' => 'required',
            'jml_stok' => 'required',
        ]);
    
        Barang::create($request->all());
     
        return redirect()->route('stok_barang.index')
                        ->with('success','Simpan Data Berhasil.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $stok_barang)
    {
        return view('stok_barang.edit',compact('stok_barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $stok_barang)
    {
        $request->validate([
            'katagori_barang' => 'required',
            'nama_barang' => 'required',
            'jml_stok' => 'required',
        ]);
    
        $stok_barang->update($request->all());
    
        return redirect()->route('stok_barang.index')
                        ->with('success','Update Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $stok_barang)
    {
        $stok_barang->delete();
    
        return redirect()->route('stok_barang.index')
                        ->with('success','Hapus Data Berhasil');
    }
}
