<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Karyawan;

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
    	for($i = 1; $i <= 100; $i++){
    		Karyawan::create([
            'nama' => $faker->name,
            'alamat' => $faker->text($maxNbChars = 100) ,
            'jabatan' => $faker->text($maxNbChars = 30),
            'no_hp' => $faker->e164PhoneNumber
        ]);
 
    	}  
    }
}
