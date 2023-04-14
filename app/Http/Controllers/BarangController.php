<?php

namespace App\Http\Controllers;

use Database\Seeders\BarangSeeder;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    public function data(){
        $barang = DB::table('barang')->get();
        //return $barang;

        return view('barang', ['barang' => $barang]);
    }

    public function add(){
        return view('add');
    }

    public function addProcess(Request $request){
        DB::table('barang')->insert([
            'kode_barang' => $request ->code ,
            'nama_barang' => $request ->name,
            'kategori_barang' => $request ->category,
            'harga' => $request ->price,
            'qty' => $request  ->qty
        ]);
         return redirect('manageItem')->with('status', 'Item added successfully!');
       
    }
    public function edit($id){
        $barang = DB::table('barang')->where('id', $id)->first();
        return view('edit', compact('barang'));
    }
    
    public function editProcess(Request $request, $id){
        DB::table('barang')->where('id', $id)
        ->update([
            'kode_barang' => $request ->code ,
            'nama_barang' => $request ->name,
            'kategori_barang' => $request ->category,
            'harga' => $request ->price,
            'qty' => $request  ->qty
        ]);
         return redirect('manageItem')->with('status', 'Item edited successfully!');
       
    }

    public function delete($id){
        DB::table('barang')->where('id', $id)->delete();
        return redirect('manageItem')->with('status', 'Item edeleted!');
    }

    public function search(Request $request){
        $keyword=$request->keyword;
        dd($keyword);
        return view('barang');
        
    }
}
 