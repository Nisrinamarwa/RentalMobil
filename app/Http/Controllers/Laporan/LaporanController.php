<?php

namespace App\Http\Controllers\Laporan;

use PDF;
use App\Item;
use App\Transaction;
use App\Pengembalian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    public function cetak()
    {
        $data = Pengembalian::with('item','transaksi')->get();

        return view('laporan.index', compact('data'));
    }
}
