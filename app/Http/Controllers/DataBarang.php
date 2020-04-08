<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use DataTables;
use DB;
class DataBarang extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Barang::latest()->get();
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Data_Barang.create-barang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis' => 'required|max:100',
            'id_kategori' => 'required',
            'type' => 'required|max:100',
            'jumlah' => 'required|max:100',
        ]);
        $barang = new Barang;
        $barang->jenis = $request->jenis;
        $barang->id_kategori = $request->id_kategori;
        $barang->type = $request->type;
        $barang->jumlah = $request->jumlah;
        $barang->save();
        
        return redirect()->route('barang.index')->with('msg', 'Data anda telah diinputkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataBarang = Barang::find($id);
        return view('Data_Barang.detail-barang', compact('dataBarang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $dataBarang= Barang::find($id);
        return view('Data_Barang.edit-barang',compact('dataBarang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validasi =  $request->validate([
            'jenis' => 'required|max:100',
            'type' => 'required|max:100',
            'jumlah' => 'required|max:100',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->jenis = $request->jenis;
        $barang->id_kategori = $request->id_kategori;
        $barang->type = $request->type;
        $barang->jumlah = $request->jumlah;
        $barang->save();
        
        return redirect()->route('barang.index')->with('msg', 'Data anda telah diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $Barang = Barang::findOrFail($id);
        $Barang->delete();
        return redirect()->route('barang.index')->with('msg', 'Data anda telah dihapus!');
    }
}
