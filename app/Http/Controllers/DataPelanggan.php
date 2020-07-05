<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Pelanggan;
use DataTables;

class DataPelanggan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $dataPelanggan = Pelanggan::all();


        // if($request->query('alamat')){
        //     $dataPelanggan = Pelanggan::where('alamat', request()->alamat)->get();
        // }

        if ($request->ajax()) {
            $data = Pelanggan::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = ' <form action="'.route('pelanggan.destroy',$row->id) .'" method="POST">
                            <a href="'.route('pelanggan.show',$row->id).'" class="badge badge-primary">Detail</a>
                            <a href="'.route('pelanggan.edit',$row->id).'" class="badge badge-warning">Edit</a>
                            '.csrf_field().'
                            '.method_field("DELETE").'
                            <button type="submit" class="badge badge-danger" onclick="return confirm("Yakin ingin menghapus data?")">Hapus</button>
                            </form>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('Data_Pelanggan.data-pelanggan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('Data_Pelanggan.create-pelanggan');
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
            'nama' => 'required|max:100',
            'alamat' => 'required',
            'no_hp' => 'required|max:12',
            'foto' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'filepdf' => 'file|mimes:pdf',
        ]);

        $pelanggan = new Pelanggan;
        $pelanggan->nama  = $request->nama;
        $pelanggan->alamat   = $request->alamat;
        $pelanggan->no_hp   = $request->no_hp;
        
        if($foto = $request->file('foto')){
            $pathFoto = Storage::putFile('public/foto', $foto);
            $pelanggan->foto = basename($pathFoto);
        }

        if($pdf = $request->file('filepdf')){
            $pathPdf = Storage::putFile('public/pdf', $pdf);
            $pelanggan->filepdf = basename($pathPdf);
        }

        $pelanggan->save();
        
        return redirect()->route('pelanggan.index')->with('msg', 'Data anda telah diinputkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataPelanggan = Pelanggan::find($id);
        return view('Data_Pelanggan.detail-pelanggan', compact('dataPelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $dataPelanggan= Pelanggan::find($id);
        return view('Data_Pelanggan.edit-pelanggan',compact('dataPelanggan'));
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
            'nama' => 'required|max:100',
            'alamat' => 'required',
            'no_hp' => 'required|max:12',
             'foto' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'filepdf' => 'file|mimes:pdf'
        ]);

        $pelanggan = Pelanggan::find($id);
        $pelanggan->nama  = $request->nama;
        $pelanggan->alamat   = $request->alamat;
        $pelanggan->no_hp   = $request->no_hp;
        
        if($foto = $request->file('foto')){
            $pathFoto = Storage::putFile('public/foto', $foto);
            $pelanggan->foto = basename($pathFoto);
        }

        if($pdf = $request->file('filepdf')){
            $pathPdf = Storage::putFile('public/pdf', $pdf);
            $pelanggan->filepdf = basename($pathPdf);
        }

        $pelanggan->save();

        return redirect()->route('pelanggan.index')->with('msg', 'Data anda telah diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $Pelanggan = Pelanggan::findOrFail($id);
        $Pelanggan->delete();
        return redirect()->route('pelanggan.index')->with('msg', 'Data anda telah dihapus!');
    }
}
