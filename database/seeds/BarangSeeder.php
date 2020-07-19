<?php

use App\Barang;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
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
    			'jenis' => $faker->randomElement(['Samsung','Xiaomi','Advan','Realme','Oppo']),
    			'type' => $faker->randomElement(['Pro','S','Lite']),
                'jumlah' => $faker->numberBetween(1,25),
                'foto' => $faker->text($maxNbChars = 10).'jpg',
                'filepdf' => $faker->text($maxNbChars = 10).'pdf'
    		]);
    	}
    }
}
