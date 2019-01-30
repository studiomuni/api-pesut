<?php

namespace App\Http\Controllers;
use App\ModelBarang;
use Illuminate\Http\Request;

class barangController extends Controller
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
        $data = ModelBarang::all();
        return response($data);
    }
    public function show($id){
        $data = ModelBarang::where('id',$id)->get();
        return response ($data);
    }
    public function update(Request $request, $id){
        $data = ModelBarang::where('id',$id)->first();
        $data->nama_barang = $request->input('nama_barang');
        $data->jenis_barang = $request->input('jenis_barang');
        $data->tipe_barang = $request->input('tipe_barang');
        $data->harga = $request->input('harga');
        $data->foto = $request->input('foto');
        $data->keterangan_barang = $request->input('keterangan_barang');
        $data->save();
    
        return response('Berhasil Merubah Data');
    }
    public function add (Request $request){
        $data = new ModelBarang();
        $data->nama_barang = $request->input('nama_barang');
        $data->jenis_barang = $request->input('jenis_barang');
        $data->tipe_barang = $request->input('tipe_barang');
        $data->harga = $request->input('harga');
        $data->foto = $request->input('foto');
        $data->keterangan_barang = $request->input('keterangan_barang');
        $data->save();
    
        return response('Berhasil Tambah Data');
    }

    public function delete($id){
        $data = ModelBarang::where('id',$id)->first();
        $data->delete();

        return response('Berhasil Menghapus Data');
    }


}