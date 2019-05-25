<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GudangController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //Index barang
    public function index()
    {   
        $data_barang = \App\Barang::paginate(5);
        $data_jenis = \App\Jenis::all();
        return view('gudang.index',['data_barang' => $data_barang, 'data_jenis' => $data_jenis]);   
    }
    
    //Method Create Barang
    public function create(Request $request){
        \App\Barang::create($request->all());
        return redirect('/gudang')->with('sukses', 'Data Input');
    }
    
    //Method Edit Barang
    public function edit($id){
        $barang = \App\Barang::find($id);
        $data_jenis = \App\Jenis::all();
        return view('/gudang/edit',['barang' => $barang, 'data_jenis' => $data_jenis]);
    }
    
    //Method Update Barang
    public function update(Request $request,$id){
        $barang = \App\Barang::find($id);
        $barang->update($request->all());
        return redirect('/gudang')->with('sukses2','Data Terupdate');
    }
    
    //Method Delete Barang
    public function delete($id){
        $barang = \App\Barang::find($id);
        $barang->delete($barang);
        return redirect('/gudang')->with('sukses3', 'Data Terhapus');
    }
    
    //=========================================
    
    //Index Jenis
    public function indexjenis()
    {   
        $data_jenis = \App\Jenis::paginate(5);
        return view('jenis.index',['data_jenis' => $data_jenis]);   
    }
    
    //Method Create Jenis
    public function cjenis(Request $request){
        \App\Jenis::create($request->all());
        return redirect('/jenis')->with('sukses', 'Data Input');
    }
    
    //Method Delete Jenis
    public function djenis($id_jenis){
        $jenis = \App\Jenis::find($id_jenis);
        $jenis->delete($jenis);
        return redirect('/jenis')->with('sukses3', 'Data Terhapus');
    }
    
    //Method Edit Barang
    public function ejenis($id){
        $barang = \App\Jenis::find($id);
        return view('/jenis/edit',['barang' => $barang]);
    }
    
    //Method Update Barang
    public function ujenis(Request $request,$id){
        $barang = \App\Jenis::find($id);
        $barang->update($request->all());
        return redirect('/jenis')->with('sukses2','Data Terupdate');
    }
    
}
