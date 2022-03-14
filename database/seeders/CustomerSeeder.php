<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'fullname' => 'Marco Castillo',
            'identification' => '1105078735',
            'address' => 'Avenida Naciones Unidas',
        ]);
    }
}
