<?php
#a
namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id';
    protected $fillable = ['jenis', 'type','jumlah','foto','filepdf'];

    // sa
}
