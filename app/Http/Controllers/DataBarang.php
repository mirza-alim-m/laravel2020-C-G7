<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use DataTables;
use Storage;
use DB;


class DataBarang extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            // ambil data dari model (database)
            $data = Barang::latest()->get();
            // nilai kembalian berupa json untuk membuat database 
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = ' <form action="'.route('barang.destroy',$row->id) .'" method="POST">
                            <a href="'.route('barang.show',$row->id).'" class="badge badge-primary">Detail</a>
                            <a href="'.route('barang.edit',$row->id).'" class="badge badge-warning">Edit</a>
                            '.csrf_field().'
                            '.method_field("DELETE").'
                            <button type="submit" class="badge badge-danger" onclick="return confirm("Yakin ingin menghapus data?")">Hapus</button>
                            </form>';
     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        return view('Data_Barang.data-barang');
    }

    public function create()
    {
         return view('Data_Barang.create-barang');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis' => 'required|max:100',
            'type' => 'required',
            'jumlah' => 'required|max:100',
            'foto' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'filepdf' => 'file|mimes:pdf',
        ]);

        $file = $request->file('foto');
        $filename = $request->file('filepdf');

        $barang = new Barang;
        $barang->jenis  = $request->jenis;
        $barang->type   = $request->type;
        $barang->jumlah  = $request->jumlah;
       
        if($foto = $request->file('foto')){
            $pathFoto = Storage::putFile('public/foto', $foto);
            $barang->foto = basename($pathFoto);
        }

        if($pdf = $request->file('filepdf')){
            $pathPdf = Storage::putFile('public/pdf', $pdf);
            $barang->filepdf = basename($pathPdf);
        }

        $barang->save();
        return redirect()->route('barang.index')->with('msg', 'Data anda telah diinputkan!');
    }

    public function show($id)
    {
        $dataBarang = Barang::find($id);
        return view('Data_Barang.detail-barang', compact('dataBarang'));
    }

    public function edit($id)
    {
        $dataBarang= Barang::find($id);
        return view('Data_Barang.edit-barang',compact('dataBarang'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis' => 'required|max:100',
            'type' => 'required',
            'jumlah' => 'required|max:100',
            'foto' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'filepdf' => 'file|mimes:pdf',
        ]);

        $file = $request->file('foto');
        $filename = $request->file('filepdf');

        $barang = Barang::find($id);
        $barang->jenis  = $request->jenis;
        $barang->type   = $request->type;
        $barang->jumlah  = $request->jumlah;
        if($foto = $request->file('foto')){
            $pathFoto = Storage::putFile('public/foto', $foto);
            $barang->foto = basename($pathFoto);
        }

        if($pdf = $request->file('filepdf')){
            $pathPdf = Storage::putFile('public/pdf', $pdf);
            $barang->filepdf = basename($pathPdf);
        }

        $barang->save();
        return redirect()->route('barang.index')->with('msg', 'Data anda telah diupdate!');
    }

    public function destroy($id)
    {
         $Barang = Barang::findOrFail($id);

        if(Storage::exists('public/pdf/'.$Barang->pdf) == 1){
            Storage::delete('public/pdf/'.$Barang->pdf);
        }

        if(Storage::exists('public/foto/'.$Barang->foto) == 1){
            Storage::delete('public/foto/'.$Barang->foto);
        }
        $Barang->delete();
        return redirect()->route('barang.index')->with('msg', 'Data anda telah dihapus!');
    }
}
