<?php

use Illuminate\Database\Seeder;
use App\Karyawan;
use Faker\Factory as Faker;

class KaryawanSeeder extends Seeder
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
    		Karyawan::create([
    			'nama' => $faker->name,
    			'alamat' => $faker->address,
    			'jabatan' => $faker->jobTitle,
    			'no_hp' => $faker->e164PhoneNumber
    		]);
    	}
    }
}
