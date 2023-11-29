<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produk;
use App\Models\Transaksi;

class AdminDashboardController extends Controller
{
    /**
     * Provision a new web server.
     */
    public function __invoke()
    {
        $users = User::orderBy('created_at', 'desc')->get();
        $produks = Produk::orderBy('created_at', 'desc')->get();
        $transaksis = Transaksi::orderBy('created_at', 'desc')->get();
        return view('admin.dashboard', compact('users','produks','transaksis'));
    }
}
