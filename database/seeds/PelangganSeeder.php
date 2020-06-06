<?php

use Illuminate\Database\Seeder;
use App\Pelanggan;
use Faker\Factory as Faker;

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
 
    	for($i = 1; $i <= 25; $i++){
    		Pelanggan::create([
    			'nama' => $faker->name,
    			'alamat' => $faker->address,
    			'no_hp' => $faker->e164PhoneNumber
    		]);
    	}
    }
}
