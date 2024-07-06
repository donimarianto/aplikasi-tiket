<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiModel;
use App\Models\PelangganModel;
use App\Models\EventModel;

class TransaksiController extends Controller
{
    public function viewTransaksi(){
        $data= PelangganModel::all();
        $data_transaksi= EventModel::all();
        return view('input_transaksi')
        ->with('data',$data)
        ->with('data_transaksi',$data_transaksi);
    }

    public function saveTransaksi(request $request){
        $data=new TransaksiModel();
        $data->nama_pengguna=$request->nama_pengguna;
        $data->nama_event=$request->nama_event;
        $data->jumlah=$request->jumlah;
        $data->harga=$request->total;
        $data->tanggal=$request->tanggal;
        $data->save();
        return redirect()->route('tampilkanData')->with('success', 'Berhasil disimpan!');
    }

    public function tampilkanData(){
        $data['transaksi']= TransaksiModel::all();
        return view('transaksi',$data);
    }
}
