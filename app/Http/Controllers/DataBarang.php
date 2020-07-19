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
        $barang = Barang::latest()->get();
        if ($request->ajax()) {
            // ambil data dari model (database)
            $data = Barang::latest()->get();
            // nilai kembalian berupa json untuk membuat database 
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){$c = csrf_field();
                        return
                           '<form action="'.route('barang.destroy',$data->id) .'" method="POST">
                           '.$c.'
                            <a href="'.route('barang.show',$data->id).'" class="badge badge-primary">Detail</a>
                            <a href="'.route('barang.edit',$data->id).'" class="badge badge-warning">Edit</a>
                            
                            '.method_field("DELETE").'
                            <button type="submit" class="badge badge-danger" onclick="return confirm("Yakin ingin menghapus data?")">Hapus</button>
                            </form>';
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        return view('Data_Barang.data-barang', compact('barang'));
    }

    public function create()
    {
         return view('Data_Barang.create-barang');
    }

    public function store(Request $request)
    {
        $barang = Barang::create([

            'jenis' => $request->input('jenis'),

            'type' => $request->input('type'),

            'jumlah' => $request->input('jumlah'),

            'foto' => 'required|mimes:pdf|max:5048',

            'filepdf' => 'required|mimes:pdf|max:2048'

        ]);

        $file = $request->file('foto')->store('foto');

        $filename = $request->file('filepdf')->store('pdf');

        if ($request->foto->move(storage_path('app/public/foto'), $file)) {

            $barang->foto = "storage/foto/".$file;

        }

        if ($request->filepdf->move(storage_path('app/public/pdf'), $filename)) {

            $barang->filepdf = "storage/pdf/".$filename;

        }

        $barang->save();
        return redirect()->route('barang.index')->with('msg', 'Data anda telah diinputkan!');
    }

    public function show($id)
    {
        $barang = barang::find($id);
        return view('Data_barang.detail-barang', compact('barang'));
    }

    public function edit($id)
    {
        $barang = barang::where('id',$id)->get();

        // $barang = Barang::find($id);
        return view('Data_Barang.edit-barang',compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis' => 'required|max:100',
            'type' => 'required|max:100',
            'jumlah' => 'required|max:12',
            'foto' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'filepdf' => 'file|mimes:pdf',
        ]);

        $file = $request->file('foto');
        $filename = $request->file('filepdf');

        $barang = Barang::find($id);
        $barang->jenis  = $request->jenis;
        $barang->type   = $request->type;
        $barang->jumlah   = $request->jumlah;
        
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



        // // return response()->json($pasienPict);



        // if (!$request->foto) {

            

        //     $request->validate([

        //         'jenis' => 'required',

        //         'type' => 'required',

        //         'jumlah' => 'required',

        //         'filepdf' => 'required|image|mimes:filepdf|max:2048', 

                    

        //     ]);

        //     $fileNamePdf = time().'.'.request()->filepdf->getClientOriginalExtension();

        // } else if (!$request->filepdf) {

        //     $request->validate([

        //         'jenis' => 'required',

        //         'type' => 'required',

        //         'jumlah' => 'required',

        //         'foto' => 'required|foto|mimes:jpeg,png,jpg,gif|max:2048',

        //     ]);

        //     $fileNameImage = time().'.'.request()->foto->getClientOriginalExtension();

        // }else {

        //     $request->validate([

        //         'jenis' => 'required',

        //         'type' => 'required',

        //         'jumlah' => 'required',

        //         'foto' => 'required|foto|mimes:jpeg,png,jpg,gif|max:2048',

        //         'filepdf' => 'required|mimes:pdf|max:5048',

        //     ]);



        //     $fileNameImage = time().'.'.request()->foto->getClientOriginalExtension();

        //     $fileNamePdf = time().'.'.request()->filepdf->getClientOriginalExtension();

        // }

        

        // // if ($request->has('active')) {

        // //     $active = 1;

        // // } else {

        // //     $active = 0;

        // // }

        



        // $barang = Barang::findOrFail($id);

        // $barang->jenis = $request->jenis;

        // $barang->type = $request->type;

        // $barang->jumlah = $request->jumlah;



        // $barang->foto = $request->foto;

        // if($request->hasFile('foto')){

        //     if (is_file($barang->foto)){

        //         try{

        //             unlink($barangPict);

        //         } catch(\Exception $e){



        //         }

        //     }

        //     $request->foto->move(storage_path('app/public/foto'), $fileNameImage);

        //     $barang->foto = "storage/foto/".$fileNameImage;

        // } else {

        //     $barang->foto = $barangPict;

        // }



        // $barang->filepdf = $request->filepdf;

        // if($request->hasFile('filepdf')){

        //     if (is_file($barang->filepdf)){

        //         try{

        //             unlink($barangDoc);

        //         } catch(\Exception $e){



        //         }

        //     }

        //     $request->filepdf->move(storage_path('app/public/pdf'), $fileNamePdf);

        //     $barang->filepdf = "storage/pdf/".$fileNamePdf;

        // } else {

        //     $barang->filepdf = $barangDoc;

        // }

        // $barang->update();



        // return redirect(route('barang.index'));

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
