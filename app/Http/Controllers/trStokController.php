<?php

namespace App\Http\Controllers;
use App\ModelStok;
use Illuminate\Http\Request;

class trStokController extends Controller
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
        $data = ModelStok::all();
        return response($data);
    }
    public function show($id){
        $data = ModelStok::where('id',$id)->get();
        return response ($data);
    }
    public function update(Request $request, $id){
        $data = ModelStok::where('id',$id)->first();
        $data->id_barang = $request->input('id_barang');
        $data->jumlah_stok = $request->input('jumlah_stok');
        $data->save();
    
        return response('Berhasil Merubah Data');
    }
    public function add (Request $request){
        $data = new ModelStok();
        $data->id_barang = $request->input('id_barang');
        $data->jumlah_stok = $request->input('jumlah_stok');
        $data->save();
    
        return response('Berhasil Tambah Data');
    }

    public function delete($id){
        $data = ModelStok::where('id',$id)->first();
        $data->delete();

        return response('Berhasil Menghapus Data');
    }


}