<?php

namespace App\Http\Controllers\Laporan;

use PDF;
use App\Item;
use App\Transaction;
use App\Pengembalian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function rekap()
    {
        $data = [
            'items'    => Item::count(),
            'transaksi'=> Transaction::count(),
            'omset'    => Transaction::sum('idr'),
            'late'     => Transaction::where('durasi','Terlambat')->count(),
        ];

        $pdf = PDF::loadview('cetak.dashboard',$data)->setParper('a5','landscape');

        return $pdf->stream('laporan.data.dashboard.pdf');
    }
}
