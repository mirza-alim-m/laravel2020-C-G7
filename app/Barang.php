<?php
#a
namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id';
    protected $fillable = ['jenis', 'type','jumlah','foto','filepdf'];

    // satu barang hanya memiliki satu kategori 
    // public function barangkategori()
    // {
    //     return $this->belongsTo('App\BarangKategori', 'id_kategori');
    // }
}
