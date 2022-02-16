<?php

namespace App\Http\Controllers;

use App\Item;
use App\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'items' => Item::count(),
            'transaksi' => Transaction::count(),
            'omset' => Transaction::sum('idr'),
            'late'  => Transaction::where('durasi','Terlambat')->count(),
        ];
        return view('dashboard.index', $data);
    }
}