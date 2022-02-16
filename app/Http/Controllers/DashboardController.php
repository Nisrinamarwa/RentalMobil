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
            'telat' => Transaction::where(''),
        ];
        return view('dashboard.index', $data);
    }
}