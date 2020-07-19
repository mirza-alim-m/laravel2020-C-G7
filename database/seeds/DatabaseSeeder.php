<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
		$this->call(KaryawanSeeder::class);
    $this->call(PelangganSeeder::class);
    $this->call(BarangSeeder::class);
    }
}
