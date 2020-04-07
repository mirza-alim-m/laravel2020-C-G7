<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use DataTables;
use DB;


class DataKaryawan extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            // ambil data dari model (database)
            $data = Karyawan::latest()->get();
            // nilai kembalian berupa json untuk membuat database 
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = ' <form action="'.route('karyawan.destroy',$row->id) .'" method="POST">
                            <a href="'.route('karyawan.show',$row->id).'" class="badge badge-primary">Detail</a>
                            <a href="'.route('karyawan.edit',$row->id).'" class="badge badge-warning">Edit</a>
                            '.csrf_field().'
                            '.method_field("DELETE").'
                            <button type="submit" class="badge badge-danger" onclick="return confirm("Yakin ingin menghapus data?")">Hapus</button>
                            </form>';
     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        return view('Data_karyawan.data-karyawan');
    }

    public function create()
    {
         return view('Data_Karyawan.create-karyawan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'alamat' => 'required',
            'jabatan' => 'required|max:100',
            'no_hp' => 'required|max:12',
        ]);
        Karyawan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
            'no_hp' => $request->no_hp,
           
        ]);
        
        return redirect()->route('karyawan.index')->with('msg', 'Data anda telah diinputkan!');
    }

    public function show($id)
    {
        /*$dataKaryawan = Karyawan::find($id);
        return view('Data_Karyawan.detail-karyawan', compact('dataKaryawan'));*/
    }

    public function edit($id)
    {
        $dataKaryawan= Karyawan::find($id);
        return view('Data_Karyawan.edit-karyawan',compact('dataKaryawan'));
    }

    public function update(Request $request, $id)
    {
        $validasi =  $request->validate([
            'nama' => 'required|max:100',
            'alamat' => 'required',
            'jabatan' => 'required|max:100',
            'no_hp' => 'required|max:12',
        ]);

        Karyawan::whereId($id)->update($validasi);
        return redirect()->route('karyawan.index')->with('msg', 'Data anda telah diupdate!');
    }

    public function destroy($id)
    {
         $Karyawan = Karyawan::findOrFail($id);
        $Karyawan->delete();
        return redirect()->route('karyawan.index')->with('msg', 'Data anda telah dihapus!');
    }
}
