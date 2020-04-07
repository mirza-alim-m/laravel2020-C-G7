<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Pelanggan;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');  

        // perulangan untuk insert data ke database sebanyak 100 kali dengan data fake
    	for($i = 1; $i <= 100; $i++){
    		Pelanggan::create([
	            'nama' => $faker->name,
	            'alamat' => $faker->address,
	            'no_hp' => $faker->numerify('08##########')
        	]);
    	}  

    }
}
