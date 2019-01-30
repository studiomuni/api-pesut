<?php

namespace App\Http\Controllers;
use App\ModelUser;
use Illuminate\Http\Request;

class userController extends Controller
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
        $data = ModelUser::all();
        return response($data);
    }
    public function show($id){
        $data = ModelUser::where('id',$id)->get();
        return response ($data);
    }
    public function update(Request $request, $id){
        $data = ModelUser::where('id',$id)->first();
        $data->nama_user = $request->input('nama_user');
        $data->role = $request->input('role');
        $data->alamat = $request->input('alamat');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->ip_address = $request->input('ip_address');
        $data->save();
    
        return response('Berhasil Merubah Data');
    }
    public function add (Request $request){
        $data = new ModelUser();
        $data->nama_user = $request->input('nama_user');
        $data->role = $request->input('role');
        $data->alamat = $request->input('alamat');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->ip_address = $request->input('ip_address');
        $data->save();
    
        return response('Berhasil Tambah Data');
    }

    public function delete($id){
        $data = ModelUser::where('id',$id)->first();
        $data->delete();

        return response('Berhasil Menghapus Data');
    }


}