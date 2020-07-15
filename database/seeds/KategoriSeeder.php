<?php

use App\BarangKategori;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 25; $i++){
    		BarangKategori::create([
                'nama_kategori' => $faker->randomElement(['Smarphone','Tab']),
                'foto' => $faker->text($maxNbChars = 10).'jpg',
                'filepdf' => $faker->text($maxNbChars = 10).'pdf'
    		]);
    	}
    }
}
