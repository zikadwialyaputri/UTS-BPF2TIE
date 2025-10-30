<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataBuku['dataBuku'] = Buku::all();
        return view('buku.index', $dataBuku);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $validated = $request->validate([
            'judul'        => 'required',
            'penulis'      => 'required',
            'penerbit'     => 'required|date',
            'tahun_terbit' => 'required|numeric',
            'jumlah'       => 'required|numeric|min:1',
        ]);

        Buku::create($validated);
        return redirect()
            ->route('buku.index')
            ->with('success', 'Penambahan Data Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataBuku['dataBuku'] = Buku::findOrFail($id);
        return view('buku.edit', $dataBuku);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'judul'        => 'required',
            'penulis'      => 'required',
            'penerbit'     => 'required|date',
            'tahun_terbit' => 'required|numeric',
            'jumlah'       => 'required|numeric|min:1',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update($validated);

        return redirect()
            ->route('buku.index')
            ->with('success', 'Perubahan Data Buku Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = Buku::findOrFail($id);

        $buku->delete();
        return redirect()->route('buku.index')->with('success', 'Data Buku berhasil dihapus');
    }
}
