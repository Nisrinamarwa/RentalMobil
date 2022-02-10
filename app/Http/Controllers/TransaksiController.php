<?php

namespace App\Http\Controllers;

use App\Item;
use App\Transaction;
use App\User;
use App\Pengembalian;
use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class TransaksiController extends Controller
{
    public function index()
    {
        $transactions = \App\Transaction::with('item')->get();
        
        return view('transaksi.index', compact('transactions'));
    }

    public function create($id)
    {
        $transactions = Item::findOrFail($id);

        return view('transaksi.create', compact('transactions'));
    }

    public function store(Request $request, $id)
    {
        $transaction = Transaction::create([
            'kodebarang_id' => $request->kodebarang_id,
            'namabarang_id' => $request->namabarang_id,
            'nama_peminjam' => $request->nama_peminjam,
            'jumlah' => $request->jumlah,
            'idr'   => $request->idr,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

         if ($transaction->save()) {
             $harga = Item::findOrFail($transaction->kodebarang_id);

             $jumlah = $transaction->jumlah * $harga->idr;

             $transaction->update ([
                'idr' => $jumlah
             ]);
         }

         if($transaction->save()) {
             $get = Item::findOrFail($transaction->kodebarang_id);

             $hitung = $get->jumlah_barang - $transaction->jumlah;

             $get->update([
                'jumlah_barang' => $hitung
             ]);
        }

        Nexmo::message()->send([
            'to'    => '+62' . $transaction->phone,
            'from'  => 'RENTALMOBIL',
            'text'  => 'Assalmualaikum wr. wb kami dari 
                        RentalMobil ingin memberitahukan 
                        bahwa pinjaman anda sudah dikembalikan berikut rinciannya',
            'Nama Peminjam' . $transaction->name,
            'Tanggal Pinjam' . $transaction->tgl_pinjam,
            'Tanggal Kembali' . $transaction->tgl_pinjam,
            'Jumlah barang' . $transaction->jumlah,
            'Harga' . $transaction->harga,
            'Terimakasih',
            'PENGURUS RENTALMOBIL',
        ]);
        return redirect()->back();
    }
}