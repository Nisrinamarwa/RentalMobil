<?php

namespace App\Http\Controllers\Laporan;

use PDF;
use App\Item;
use App\Transaction;
use App\Pengembalian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DaftarBarangController extends Controller
{
    public function rekap()
    {
        $item = Item::all();

        $pdf = PDF::loadview('cetak.daftarbarang', compact('item'))->setPaper('a4','landscape');

        return $pdf->stream('laporan.semua.data.daftarbarang.pdf');
    }
}
