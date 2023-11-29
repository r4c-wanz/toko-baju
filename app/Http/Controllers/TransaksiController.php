<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produk;
use App\Models\Transaksi;
use Carbon\Carbon;

class TransaksiController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::orderBy('created_at', 'desc')->get();
        $produks = Produk::orderBy('created_at', 'desc')->get();
        return view('transaksi.create', compact('users','produks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Transaksi::create($request->all());
        return redirect()->route('admin.dashboard')->with('success', 'Data transaksi berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $users = User::orderBy('created_at', 'desc')->get();
        $produks = Produk::orderBy('created_at', 'desc')->get();
        return view('transaksi.edit', compact('transaksi','users','produks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update($request->all());
        return redirect()->route('admin.dashboard')->with('success', 'Data transaksi berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Data transaksi berhasil didelete');
    }
}
