<?php

namespace App\Http\Controllers;
use App\ModelTrBarangmasuk;
use Illuminate\Http\Request;

class trBarangmasukController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
        $data = ModelTrBarangmasuk::all();
        return response($data);
    }
    public function show($id){
        $data = ModelTrBarangmasuk::where('id',$id)->get();
        return response ($data);
    }
    public function update(Request $request, $id){
        $data = ModelTrBarangmasuk::where('id',$id)->first();
        $data->id_barang = $request->input('id_barang');
        $data->id_user = $request->input('id_user');
        $data->jumlah_barang = $request->input('jumlah_barang');
        $data->tanggal_transaksi = $request->input('tanggal_transaksi');
        $data->save();
    
        return response('Berhasil Merubah Data');
    }
    public function add (Request $request){
        $data = new ModelTrBarangmasuk();
        $data->id_barang = $request->input('id_barang');
        $data->id_user = $request->input('id_user');
        $data->jumlah_barang = $request->input('jumlah_barang');
        $data->tanggal_transaksi = $request->input('tanggal_transaksi');
        $data->save();
    
        return response('Berhasil Tambah Data');
    }

    public function delete($id){
        $data = ModelTrBarangmasuk::where('id',$id)->first();
        $data->delete();

        return response('Berhasil Menghapus Data');
    }


}