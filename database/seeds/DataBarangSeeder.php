<?php

use Illuminate\Database\Seeder;
use App\Barang;
use Faker\Factory as Faker;

class DataBarangSeeder extends Seeder
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
    		Barang::create([
    			'jenis' => $faker->name,
    			'type' => $faker->address,
    			'jumlah' => $faker->e164PhoneNumber,
                'foto' => $faker->text($maxNbChars = 10).'jpg',
                'filepdf' => $faker->text($maxNbChars = 10).'pdf'
    		]);
    	}
    }
}
