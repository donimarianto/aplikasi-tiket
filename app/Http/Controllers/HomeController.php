<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PelangganModel;
use App\Models\EventModel;
use App\Models\TransaksiModel;

class HomeController extends Controller
{
    public function Home(){
            $hitung1= PelangganModel::count();
            $hitung2= EventModel::count();
            $hitung3= TransaksiModel::count();
            return view('dashboard',compact('hitung1','hitung2','hitung3'));
    }

    public function input(){
        return view('input_pelanggan');
    }

    public function daftar(request $request){
        $data = new PelangganModel();
        $data -> nama = $request->nama;
        $data->alamat=$request->alamat;
        $data->no_tlp=$request->no_tlp;
        $data->jk=$request->jk;
        $data->tgl_daftar=$request->tgl_daftar;
        $data->save();
        return redirect()->route('input')->with('success', 'Berhasil disimpan!');
    }

    public function viewPendaftar(){
        $data['anggota']= PelangganModel::all();
        return view('pelanggan',$data);
    }

    public function hapus_pengguna($id){
        $data = PelangganModel::findOrFail($id);
        $data->delete();
        return redirect()->route('viewPendaftar');
}
    public function edit($id){
        $pelanggan = PelangganModel::findOrFail($id);
        return view('edit_pelanggan', compact('pelanggan'));
    }

    public function update(Request $request, $id){
        $pelanggan = PelangganModel::findOrFail($id);
        $pelanggan -> nama = $request->nama;
        $pelanggan->alamat=$request->alamat;
        $pelanggan->no_tlp=$request->no_tlp;
        $pelanggan->jk=$request->jk;
        $pelanggan->tgl_daftar=$request->tgl_daftar;
        $pelanggan->save();
        return redirect()->route('viewPendaftar')->with('success', 'tiket berhasil diperbarui');
    }

}
