<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventModel;

class EventController extends Controller
{
    public function HalamInputTiket(){
        return view('input_event');
    }

    public function simpanEvent(Request $request){
        $data= new EventModel();
        $data -> nama=$request->nama;
        $data->tanggal=$request->tanggal;
        $data->lokasi=$request->lokasi;
        $data->deskripsi=$request->deskripsi;
        $data->harga=$request->harga;
        $data->save();
        return redirect()->route('HalamInputTiket')->with('success', 'Berhasil disimpan!');
    }

    public function viewTiket(){
        $data['data_tiket']=EventModel::all();
        return view('tiket',$data);
    }

    public function hapus_tiket($id){
        $data = EventModel::findOrFail($id);
        $data->delete();
        return redirect()->route('viewTiket');
}
    public function editEvent($id){
        $tiket = EventModel::findOrFail($id);
        return view('edit_tiket', compact('tiket'));
    }

    public function updateEvent(Request $request, $id){
        $tiket = EventModel::findOrFail($id);
        $tiket -> nama=$request->nama;
        $tiket->tanggal=$request->tanggal;
        $tiket->lokasi=$request->lokasi;
        $tiket->deskripsi=$request->deskripsi;
        $tiket->harga=$request->harga;
        $tiket->save();

        return redirect()->route('viewTiket')->with('success', 'Event berhasil diperbarui');
    }
}
