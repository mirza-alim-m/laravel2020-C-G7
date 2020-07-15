<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use DataTables;
use Storage;
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
        
        return view('Data_Karyawan.data-karyawan');
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
            'foto' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'filepdf' => 'file|mimes:pdf',
        ]);
        // Karyawan::create([
        //     'nama' => $request->nama,
        //     'alamat' => $request->alamat,
        //     'jabatan' => $request->jabatan,
        //     'no_hp' => $request->no_hp,
           
        // ]);

        $file = $request->file('foto');
        $filename = $request->file('filepdf');

        $karyawan = new Karyawan;
        $karyawan->nama  = $request->nama;
        $karyawan->alamat   = $request->alamat;
        $karyawan->jabatan  = $request->jabatan;
        $karyawan->no_hp   = $request->no_hp;
        // $karyawan->foto = $file->getClientOriginalName();
        // $karyawan->filepdf = $filename->getClientOriginalName();

        // $tujuan_upload = 'foto_karyawan';
        // $file->move($tujuan_upload,$file->getClientOriginalName());

        // $tujuan_uploadpdf = 'pdf_karyawan';
        // $filename->move($tujuan_uploadpdf,$filename->getClientOriginalName());

        if($foto = $request->file('foto')){
            $pathFoto = Storage::putFile('public/foto', $foto);
            $karyawan->foto = basename($pathFoto);
        }

        if($pdf = $request->file('filepdf')){
            $pathPdf = Storage::putFile('public/pdf', $pdf);
            $karyawan->filepdf = basename($pathPdf);
        }

        $karyawan->save();
        return redirect()->route('karyawan.index')->with('msg', 'Data anda telah diinputkan!');
    }

    public function show($id)
    {
        $dataKaryawan = Karyawan::find($id);
        return view('Data_Karyawan.detail-karyawan', compact('dataKaryawan'));
    }

    public function edit($id)
    {
        $dataKaryawan= Karyawan::find($id);
        return view('Data_Karyawan.edit-karyawan',compact('dataKaryawan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'alamat' => 'required',
            'jabatan' => 'required|max:100',
            'no_hp' => 'required|max:12',
            'foto' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'filepdf' => 'file|mimes:pdf',
        ]);

        $file = $request->file('foto');
        $filename = $request->file('filepdf');

        // Karyawan::whereId($id)->update($validasi);

        $karyawan = Karyawan::find($id);
        $karyawan->nama  = $request->nama;
        $karyawan->alamat   = $request->alamat;
        $karyawan->jabatan  = $request->jabatan;
        $karyawan->no_hp   = $request->no_hp;
        // $karyawan->foto = $file->getClientOriginalName();
        // $karyawan->filepdf = $filename->getClientOriginalName();

        // $tujuan_upload = 'foto_karyawan';
        // $file->move($tujuan_upload,$file->getClientOriginalName());

        // $tujuan_uploadpdf = 'pdf_karyawan';
        // $filename->move($tujuan_uploadpdf,$filename->getClientOriginalName());

        if($foto = $request->file('foto')){
            $pathFoto = Storage::putFile('public/foto', $foto);
            $karyawan->foto = basename($pathFoto);
        }

        if($pdf = $request->file('filepdf')){
            $pathPdf = Storage::putFile('public/pdf', $pdf);
            $karyawan->filepdf = basename($pathPdf);
        }

        $karyawan->save();
        return redirect()->route('karyawan.index')->with('msg', 'Data anda telah diupdate!');
    }

    public function destroy($id)
    {
         $Karyawan = Karyawan::findOrFail($id);

        if(Storage::exists('public/pdf/'.$Karyawan->pdf) == 1){
            Storage::delete('public/pdf/'.$Karyawan->pdf);
        }

        if(Storage::exists('public/foto/'.$Karyawan->foto) == 1){
            Storage::delete('public/foto/'.$Karyawan->foto);
        }
        $Karyawan->delete();
        return redirect()->route('karyawan.index')->with('msg', 'Data anda telah dihapus!');
    }
}
